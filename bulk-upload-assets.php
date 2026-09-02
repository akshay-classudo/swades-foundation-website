<?php
/**
 * Bulk Upload Assets to Media Library
 * 
 * This script scans the frontend assets/images folder and bulk uploads
 * all images to the Laravel CMS media library.
 * 
 * Usage:
 * 1. Run this script from terminal: php bulk-upload-assets.php
 * 2. It will:
 *    - Scan assets/images folder recursively
 *    - Copy images to storage directory
 *    - Create media database records
 *    - Organize by subfolder
 * 3. Then add alt text via CMS admin panel
 */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/configdb.php';

class BulkAssetUploader
{
    private $db;
    private $uploadedCount = 0;
    private $skippedCount = 0;
    private $errors = [];
    private $baseAssetsPath = __DIR__ . '/assets/images';
    private $storageDir;
    private $uploadedBy = 1; // Default admin user ID
    
    public function __construct()
    {
        try {
            $this->db = new PDO(
                sprintf(
                    'mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4',
                    CMS_DB_HOST,
                    CMS_DB_PORT,
                    CMS_DB_NAME
                ),
                CMS_DB_USER,
                CMS_DB_PASS,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );
            
            $this->storageDir = __DIR__ . '/../laragon/www/swades-admin/storage/app/public';
        } catch (Exception $e) {
            $this->addError("Database connection failed: " . $e->getMessage());
        }
    }
    
    /**
     * Start the bulk upload process
     */
    public function run()
    {
        echo "\n========================================\n";
        echo "   BULK ASSET UPLOAD TO MEDIA LIBRARY\n";
        echo "========================================\n\n";
        
        echo "Scanning assets/images folder...\n";
        echo "Base path: {$this->baseAssetsPath}\n\n";
        
        if (!is_dir($this->baseAssetsPath)) {
            $this->addError("Assets folder not found: {$this->baseAssetsPath}");
            $this->printResults();
            return;
        }
        
        $this->scanAndUpload($this->baseAssetsPath, '');
        
        $this->printResults();
    }
    
    /**
     * Recursively scan folder and upload images
     */
    private function scanAndUpload($path, $folder)
    {
        if (!is_dir($path)) {
            return;
        }
        
        $items = scandir($path);
        
        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }
            
            $fullPath = $path . '/' . $item;
            
            if (is_dir($fullPath)) {
                // Recursively process subdirectories
                $subFolder = $folder ? $folder . '/' . $item : $item;
                $this->scanAndUpload($fullPath, $subFolder);
            } else {
                // Process image files
                if ($this->isImage($item)) {
                    $this->uploadImage($fullPath, $folder, $item);
                }
            }
        }
    }
    
    /**
     * Check if file is an image
     */
    private function isImage($filename)
    {
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp'];
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        return in_array($ext, $imageExtensions);
    }
    
    /**
     * Upload single image to media library
     */
    private function uploadImage($fullPath, $folder, $filename)
    {
        try {
            // Check if already exists
            $stmt = $this->db->prepare("SELECT id FROM media WHERE file_name = ? LIMIT 1");
            $stmt->execute([$filename]);
            
            if ($stmt->fetch()) {
                echo "⊘ Skipping (exists): $filename\n";
                $this->skippedCount++;
                return;
            }
            
            // Get file info
            $fileSize = filesize($fullPath);
            $mimeType = $this->getMimeType($fullPath);
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            
            // Get image dimensions
            $dimensions = getimagesize($fullPath);
            $width = $dimensions ? $dimensions[0] : null;
            $height = $dimensions ? $dimensions[1] : null;
            
            // Create folder name (no spaces, lowercase)
            $folderName = $folder ? strtolower(str_replace(' ', '-', $folder)) : 'assets-images';
            
            // Create relative path for storage
            $storagePath = 'assets/images' . ($folder ? '/' . $folder : '');
            
            $stmt = $this->db->prepare("
                INSERT INTO media 
                (uploaded_by, name, file_name, path, disk, mime_type, extension, size, width, height, alt, folder, created_at, updated_at)
                VALUES
                (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())
            ");
            
            $stmt->execute([
                $this->uploadedBy,
                $mediaName,
                $filename,
                $storagePath . '/' . $filename,
                'public',
                $mimeType,
                $extension,
                $fileSize,
                $width,
                $height,
                null, // alt text - to be filled later
                $folderName,
            ]);
            
            echo "✓ Uploaded: $filename (folder: $folderName)\n";
            $this->uploadedCount++;
            
        } catch (Exception $e) {
            $this->addError("Error uploading $filename: " . $e->getMessage());
        }
    }
    
    /**
     * Get MIME type for file
     */
    private function getMimeType($filePath)
    {
        $ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
        $mimeTypes = [
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
            'webp' => 'image/webp',
        ];
        
        return $mimeTypes[$ext] ?? 'image/jpeg';
    }
    
    /**
     * Add error to list
     */
    private function addError($message)
    {
        $this->errors[] = $message;
        echo "✗ Error: $message\n";
    }
    
    /**
     * Print final results
     */
    private function printResults()
    {
        echo "\n========================================\n";
        echo "   BULK UPLOAD RESULTS\n";
        echo "========================================\n\n";
        
        echo "✓ Uploaded:  {$this->uploadedCount} images\n";
        echo "⊘ Skipped:   {$this->skippedCount} images\n";
        echo "✗ Errors:    " . count($this->errors) . "\n\n";
        
        if (!empty($this->errors)) {
            echo "Error Details:\n";
            foreach ($this->errors as $error) {
                echo "  - $error\n";
            }
            echo "\n";
        }
        
        echo "Next Steps:\n";
        echo "1. Go to CMS Admin: http://localhost:8000/admin\n";
        echo "2. Navigate to Media Library\n";
        echo "3. Review the uploaded images (organized by folder)\n";
        echo "4. Add alt text for each image\n";
        echo "5. Update frontend PHP files to use cms_image_tag()\n";
        echo "\n";
    }
}

// Run the uploader
if (php_sapi_name() === 'cli') {
    $uploader = new BulkAssetUploader();
    $uploader->run();
} else {
    die("This script must be run from command line.\n");
}
?>
