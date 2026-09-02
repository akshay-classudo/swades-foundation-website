# Alt Text Implementation - Database & Admin Panel Guide

## Overview

This guide covers:

1. Database structure and queries
2. CMS Admin Panel walkthrough
3. Bulk operations for alt text
4. Troubleshooting database issues

---

## Part 1: Database Structure

### Media Table Schema

```sql
-- Your media table structure
CREATE TABLE `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uploaded_by` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `disk` varchar(255) NOT NULL DEFAULT 'public',
  `mime_type` varchar(255) NOT NULL,
  `extension` varchar(20) NOT NULL,
  `size` bigint(20) unsigned NOT NULL,
  `width` int(10) unsigned,
  `height` int(10) unsigned,
  `alt` varchar(255),           -- ✅ THIS IS YOUR ALT TEXT FIELD
  `folder` varchar(255) NOT NULL DEFAULT 'media',
  `type` varchar(50),
  `title` varchar(255),
  `file_path` varchar(255),
  `embed_url` text,
  `sort_order` int(11) DEFAULT 0,
  `active` tinyint(1) DEFAULT 1,
  `meta_title` varchar(255),
  `meta_description` text,
  `meta_keywords` varchar(255),
  `og_title` varchar(255),
  `og_description` text,
  `og_image` varchar(255),
  `canonical_url` varchar(255),
  `index` tinyint(1),
  `follow` tinyint(1),
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `uploaded_by` (`uploaded_by`),
  KEY `folder` (`folder`),
  KEY `active` (`active`),
  CONSTRAINT `media_ibfk_1` FOREIGN KEY (`uploaded_by`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

### Key Fields for Alt Text Management

| Field        | Type         | Purpose                                           |
| ------------ | ------------ | ------------------------------------------------- |
| `id`         | bigint       | Unique image identifier                           |
| `name`       | varchar(255) | Unique name for retrieving image in code          |
| `path`       | varchar(255) | Storage path on disk                              |
| `alt`        | varchar(255) | **ALT TEXT** - Descriptive text for accessibility |
| `folder`     | varchar(255) | Organization folder (logos, gallery, etc.)        |
| `active`     | tinyint(1)   | Whether image is currently used                   |
| `sort_order` | int          | Display order in listings                         |

---

## Part 2: Useful SQL Queries

### 1. View All Images Without Alt Text

```sql
SELECT id, name, path, folder, active
FROM media
WHERE alt IS NULL OR alt = ''
ORDER BY folder, id DESC;
```

### 2. Find Images by Folder

```sql
SELECT id, name, path, alt, folder
FROM media
WHERE folder = 'logos'
ORDER BY sort_order ASC, id ASC;
```

### 3. Check Image Count by Folder

```sql
SELECT folder, COUNT(*) as count,
       SUM(IF(alt IS NULL OR alt = '', 1, 0)) as missing_alt
FROM media
GROUP BY folder
ORDER BY missing_alt DESC;
```

### 4. Find Active Images Without Alt Text

```sql
SELECT id, name, path, folder, active
FROM media
WHERE active = 1 AND (alt IS NULL OR alt = '')
ORDER BY folder;
```

### 5. Update Multiple Alt Texts (Template)

```sql
UPDATE media
SET alt = 'Swades Foundation Logo'
WHERE name = 'navbar-logo';

UPDATE media
SET alt = 'Water, Sanitation & Green Initiatives icon'
WHERE name = 'water-icon';

-- Add more as needed...
```

### 6. Bulk Add Generic Alt Text (Temporary)

```sql
UPDATE media
SET alt = CONCAT('Swades Foundation - ', name)
WHERE alt IS NULL OR alt = '';
```

### 7. Search Images by Alt Text

```sql
SELECT id, name, path, alt
FROM media
WHERE alt LIKE '%water%'
ORDER BY id DESC;
```

### 8. Get Media Statistics

```sql
SELECT
    COUNT(*) as total_images,
    COUNT(DISTINCT folder) as total_folders,
    SUM(IF(alt IS NOT NULL AND alt != '', 1, 0)) as with_alt_text,
    SUM(IF(alt IS NULL OR alt = '', 1, 0)) as without_alt_text,
    ROUND(SUM(IF(alt IS NOT NULL AND alt != '', 1, 0)) / COUNT(*) * 100, 2) as alt_text_percentage
FROM media;
```

### 9. Get Large Images (Optimize)

```sql
SELECT id, name, path, size, width, height
FROM media
WHERE size > 1000000  -- Larger than 1MB
ORDER BY size DESC;
```

### 10. Duplicate Check (Find Same Image Uploaded Multiple Times)

```sql
SELECT
    file_name,
    COUNT(*) as count,
    GROUP_CONCAT(id) as ids,
    GROUP_CONCAT(DISTINCT alt) as alt_texts
FROM media
GROUP BY file_name
HAVING count > 1
ORDER BY count DESC;
```

---

## Part 3: CMS Admin Panel Walkthrough

### Accessing the Media Library

#### Step 1: Login to Admin

```
URL: http://localhost:8000/admin
Username: [your admin username]
Password: [your admin password]
```

#### Step 2: Navigate to Media

```
Dashboard → Media Library
OR
Left Sidebar → Media → View All
```

#### Step 3: Upload New Image

1. Click "Upload New Media"
2. Select image file from computer
3. Fill in metadata:
   - **Name:** Give it a unique, descriptive name
   - **Folder:** Select or create folder
   - **Alt Text:** Write descriptive alt text
   - **Active:** Check if image is active
4. Click "Save" or "Publish"

#### Step 4: Edit Existing Image

1. Search or browse to find image
2. Click on image to edit
3. Update alt text field
4. Save changes

### Tips for CMS Management

#### Organizing Images

```
Recommended Folder Structure:
├── logos/
│   ├── navbar-logo
│   ├── footer-logo
│   └── favicon
├── hero-sections/
│   ├── homepage-hero
│   ├── about-hero
│   └── programs-hero
├── work-icons/
│   ├── health-icon
│   ├── education-icon
│   ├── economic-icon
│   └── water-icon
├── team-members/
│   ├── priya-sharma
│   ├── raj-kumar
│   └── sarah-johnson
├── blog-featured/
│   ├── health-champion-story
│   ├── scholarship-journey
│   └── water-transformation
├── gallery/
│   ├── community-programs
│   ├── training-centers
│   └── success-stories
├── awards/
│   ├── forbes-award-2024
│   ├── un-award-2023
│   └── csr-award-2022
└── partners/
    ├── un-women-logo
    ├── world-bank-logo
    └── indian-government-logo
```

#### Bulk Upload

1. Select multiple images
2. Drag and drop into media library
3. Bulk edit after upload:
   - Set folder for all
   - Add alt text pattern for all
   - Set active status

#### Search and Filter

- Search by name
- Filter by folder
- Filter by active status
- Sort by upload date, name, or custom order

---

## Part 4: Bulk Operations

### Scenario 1: Update Logo Alt Text

**CMS Method:**

1. Go to Media → Filter by folder "logos"
2. Click each logo
3. Update alt text
4. Save

**Database Method:**

```sql
UPDATE media SET alt = 'Swades Foundation Logo' WHERE name = 'navbar-logo';
UPDATE media SET alt = 'Swades Foundation Logo - Footer' WHERE name = 'footer-logo';
```

### Scenario 2: Find Missing Alt Text for Active Images

**Database Query:**

```sql
SELECT id, name, path, folder
FROM media
WHERE active = 1 AND (alt IS NULL OR alt = '')
ORDER BY folder, id
LIMIT 20;
```

**Then Update via CMS:**

1. Get list of IDs from query
2. Go to Media, search by name
3. Fill in alt text for each
4. Save

### Scenario 3: Create Alt Text for Entire Folder

**Step 1:** Get the images

```sql
SELECT id, name, path, folder
FROM media
WHERE folder = 'gallery'
ORDER BY sort_order, id;
```

**Step 2:** Create alt text for each (via CMS or with SQL)

```sql
UPDATE media SET alt = 'Community women at Swades health program' WHERE name = 'health-camp-001';
UPDATE media SET alt = 'Students learning at Swades education center' WHERE name = 'education-training-002';
```

### Scenario 4: Export Alt Text for Review

```sql
SELECT
    id,
    name,
    folder,
    alt,
    active,
    CONCAT('http://localhost:8000/admin/media/', id, '/edit') as edit_url
FROM media
WHERE folder IN ('logos', 'work-icons', 'team-members')
ORDER BY folder, id
INTO OUTFILE '/tmp/media_audit.csv'
FIELDS TERMINATED BY ',' ENCLOSED BY '"'
LINES TERMINATED BY '\n';
```

---

## Part 5: Troubleshooting

### Issue 1: Can't Find Images in Media Library

**Possible Causes:**

1. Image not uploaded to media library (still in assets folder)
2. Image marked as inactive
3. Database connection issue

**Solution:**

```sql
-- Check if image exists
SELECT * FROM media WHERE name LIKE '%logo%';

-- If not found, check if active
SELECT * FROM media WHERE active = 0;

-- Check database connectivity
SELECT COUNT(*) FROM media;
```

### Issue 2: Alt Text Not Showing on Frontend

**Check:**

1. Is image in media table?
2. Is alt field populated?
3. Are you using cms_image_tag() or direct HTML?

```php
<?php
// Debug
$media = cms_get_media_by_name('image-name');
var_dump($media); // Check if alt field is there

// If null, check database
// If empty, update CMS admin
?>
```

### Issue 3: Database Query Errors

**Error:** "Table doesn't exist"

```
Solution: Verify table name in database
SELECT * FROM information_schema.TABLES WHERE TABLE_NAME = 'media';
```

**Error:** "Column not found"

```
Solution: Verify 'alt' column exists
DESCRIBE media;
-- Should show 'alt' field
```

### Issue 4: Performance Issues

If queries are slow:

```sql
-- Add index on alt field
ALTER TABLE media ADD INDEX idx_alt (alt);

-- Add index on folder
ALTER TABLE media ADD INDEX idx_folder_active (folder, active);

-- Check existing indexes
SHOW INDEX FROM media;
```

---

## Part 6: Reporting & Analytics

### Generate Alt Text Completion Report

```sql
SELECT
    folder,
    COUNT(*) as total_images,
    SUM(IF(active = 1, 1, 0)) as active_images,
    SUM(IF(active = 1 AND (alt IS NULL OR alt = ''), 1, 0)) as active_without_alt,
    SUM(IF(alt IS NOT NULL AND alt != '', 1, 0)) as with_alt_text,
    ROUND(SUM(IF(active = 1 AND (alt IS NOT NULL AND alt != ''), 1, 0)) / SUM(IF(active = 1, 1, 0)) * 100, 2) as completion_percentage
FROM media
GROUP BY folder
ORDER BY completion_percentage ASC;
```

**Sample Output:**

```
folder          | total | active | without_alt | with_alt | %
----------------|-------|--------|-------------|----------|-----
heroes          | 5     | 5      | 2           | 3        | 60%
logos           | 8     | 8      | 0           | 8        | 100%
team-members    | 12    | 10     | 5           | 5        | 50%
gallery         | 45    | 40     | 15          | 25       | 62.5%
awards          | 10    | 10     | 3           | 7        | 70%
```

---

## Part 7: Maintenance Scripts

### Check All Images Weekly

```sql
-- Save this as a saved query in your database admin
SELECT
    id,
    name,
    folder,
    IF(alt IS NULL OR alt = '', '⚠️ MISSING', '✅ OK') as alt_status,
    active,
    updated_at
FROM media
WHERE active = 1
ORDER BY updated_at DESC
LIMIT 50;
```

### Backup Media Metadata

```bash
# Bash script to backup media data
mysqldump -u root -p database_name media > /backup/media_$(date +%Y%m%d).sql
```

### Find Images Not Used in Code

```sql
-- This finds images that exist but might not be referenced
SELECT
    id,
    name,
    folder,
    created_at,
    updated_at
FROM media
WHERE active = 0 OR updated_at < DATE_SUB(NOW(), INTERVAL 90 DAY)
ORDER BY updated_at DESC;
```

---

## Part 8: Performance Tips

### Optimize Image Loading

1. Use `loading="lazy"` attribute for below-fold images
2. Set width and height attributes (reduces layout shift)
3. Consider WebP format alongside JPG/PNG
4. Compress images before uploading

```php
<?php
// Optimized image tag
echo cms_image_tag(
    $image['url'],
    $image['alt'],
    [
        'class' => 'responsive-image',
        'width' => '800',
        'height' => '600',
        'loading' => 'lazy'
    ]
);
?>
```

### Database Optimization

```sql
-- Create indexes for faster queries
ALTER TABLE media ADD INDEX idx_folder (folder);
ALTER TABLE media ADD INDEX idx_active_folder (active, folder);
ALTER TABLE media ADD INDEX idx_name (name);

-- Analyze table
ANALYZE TABLE media;

-- Optimize table
OPTIMIZE TABLE media;
```

---

## Quick Reference: Most Common Tasks

| Task                  | Command                                                                     |
| --------------------- | --------------------------------------------------------------------------- |
| Find missing alt text | `SELECT * FROM media WHERE alt = '' OR alt IS NULL;`                        |
| Get images in folder  | `SELECT * FROM media WHERE folder = 'logos';`                               |
| Update alt text       | `UPDATE media SET alt = '...' WHERE id = 123;`                              |
| Count images          | `SELECT COUNT(*) FROM media;`                                               |
| Get by name           | `SELECT * FROM media WHERE name = 'logo-navbar';`                           |
| Active images only    | `SELECT * FROM media WHERE active = 1;`                                     |
| Recent uploads        | `SELECT * FROM media ORDER BY created_at DESC LIMIT 10;`                    |
| Check completion      | `SELECT folder, COUNT(*), SUM(IF(alt!='',1,0)) FROM media GROUP BY folder;` |

---

## Support Resources

- **Database Client:** phpMyAdmin or MySQL Workbench
- **CMS Admin:** http://localhost:8000/admin
- **Frontend:** http://localhost/
- **Helper Functions:** `/include/cms.php`

---

**Last Updated:** 2024  
**Database Version:** MySQL 5.7+  
**Laravel Version:** Based on migrations
