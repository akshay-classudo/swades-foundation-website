# Bulk Upload Assets Workflow Guide

## 📋 Overview

This guide explains how to bulk upload all images from the frontend `assets/images` folder to the CMS media library in 3 simple steps:

1. **Bulk Upload** - Upload all images at once
2. **Add Alt Text** - Fill in alt text via CMS admin (can do later)
3. **Implement Frontend** - Update PHP files to use CMS images

---

## 🚀 Step 1: Bulk Upload Assets to Media Library

You have **2 options** - choose one:

### ✅ OPTION A: Using Laravel Artisan Command (RECOMMENDED)

**Best for:** Laravel environment

**Command:**

```bash
# Navigate to CMS admin folder
cd c:\laragon\www\swades-admin

# Run the bulk upload command
php artisan media:bulk-upload-assets

# Or with custom options:
php artisan media:bulk-upload-assets --user=1 --dry-run

# Dry run first (test without saving):
php artisan media:bulk-upload-assets --dry-run
```

**What it does:**

- ✓ Scans `assets/images` folder recursively
- ✓ Reads image metadata (size, dimensions)
- ✓ Creates media records in database
- ✓ Organizes by subfolder automatically
- ✓ Skips duplicates
- ✓ Shows progress in real-time

**Expected Output:**

```
====================================
   BULK UPLOAD ASSETS TO MEDIA
====================================

Scanning: c:\xampp\htdocs\swades-foundation\assets\images

Uploader: Admin (ID: 1)

✓ Uploaded: logo.svg (folder: assets-images)
✓ Uploaded: favicon.png (folder: assets-images)
✓ Uploaded: water.svg (folder: work-icons)
✓ Uploaded: health.svg (folder: work-icons)
... (more uploads)

====================================
   UPLOAD RESULTS
====================================

✓ Uploaded:  250+ images
⊘ Skipped:   0 images
✗ Errors:    0 images

Next Steps:
1. Go to CMS Admin: http://localhost:8000/admin
2. Navigate to Media Library
3. Review uploaded images
4. Add alt text for each image
```

---

### ✅ OPTION B: Using Standalone PHP Script

**Best for:** Quick testing or non-Laravel environments

**Command:**

```bash
# Navigate to frontend folder
cd c:\xampp\htdocs\swades-foundation

# Run the script
php bulk-upload-assets.php
```

**What it does:**

- ✓ Same as Artisan command but standalone
- ✓ No Laravel required
- ✓ Uses direct database connection

---

## 📊 Step 2: Verify Upload in CMS Admin

### Access Media Library:

1. Open CMS Admin: `http://localhost:8000/admin`
2. Go to **Media** → **View All**
3. Filter by folder to see organized images

### Expected Folder Structure:

```
Media Library
├── assets-images/ (root images)
├── awards/
├── Blogs/
├── careers/
├── CSR/
├── Development/
├── dreamvillage/
├── educations/
├── health/
├── home/
├── impact/
├── NSE/
├── ourteam/
├── partnerslogo/
├── Print/
├── sanitation/
├── stories/
├── sse/
├── volunteers/
└── watsan/
```

---

## ✏️ Step 3: Add Alt Text via CMS Admin

### Now you have time to fill in alt text!

**Process:**

1. Go to Media Library in CMS Admin
2. Filter by folder (e.g., "work-icons")
3. Click each image to edit
4. Fill in the **Alt Text** field
5. Save

**Example Alt Texts for Different Folders:**

#### logos/ folder:

```
- "Swades Foundation Logo"
- "Swades Foundation - Inner page logo"
- "Navbar logo"
```

#### work-icons/ folder:

```
- "Water, Sanitation & Green Initiatives icon"
- "Health and primary healthcare icon"
- "Education and learning support icon"
- "Economic development icon"
```

#### home/ folder:

```
- "Health champion Aarti Pawar at community program"
- "Scholar's journey education success story"
- "Economic development farming project"
```

#### team-members/ (ourteam/) folder:

```
- "Priya Sharma, Swades Foundation Program Manager"
- "Raj Kumar, Director of Health Programs"
```

**Time Estimate:** 30-60 minutes for 250+ images

---

## 💻 Step 4: Update Frontend PHP Files

### Now implement the images in your PHP code

**Pattern 1: Single Image (Logo, Hero, etc.)**

```php
<?php
// OLD CODE:
<img src="./assets/images/logo.svg" class="navbar-logo">

// NEW CODE:
<?php
$logo = cms_get_media_by_name('logo');
if ($logo) {
    echo cms_image_tag($logo['url'], $logo['alt'], ['class' => 'navbar-logo']);
} else {
    // Fallback if media not found
    echo '<img src="./assets/images/logo.svg" alt="Swades Foundation" class="navbar-logo">';
}
?>
```

**Pattern 2: Multiple Images (Icons, Cards, etc.)**

```php
<?php
// Get all images from a folder
$workIcons = cms_get_media_by_folder('work-icons', 10);

if (!empty($workIcons)) {
    foreach ($workIcons as $icon) {
        echo cms_image_tag(
            $icon['url'],
            $icon['alt'] ?? 'Icon',
            ['class' => 'work-icon']
        );
    }
}
?>
```

**Pattern 3: Gallery Images**

```php
<?php
$galleryImages = cms_get_media_by_folder('gallery', 50);
foreach ($galleryImages as $image) {
    echo cms_image_tag(
        $image['url'],
        $image['alt'] ?? 'Gallery image',
        [
            'class' => 'gallery-image',
            'loading' => 'lazy'
        ]
    );
}
?>
```

---

## 📱 Priority Order for Frontend Updates

### Phase 1: Critical Pages (2-3 hours)

- [ ] Homepage (index.php) - Logo, hero, work cards
- [ ] Header (include/header.php) - Logo, navigation
- [ ] Footer (include/footer.php) - Logo, footer images

### Phase 2: Content Pages (3-4 hours)

- [ ] about-us.php
- [ ] health.php
- [ ] educations.php
- [ ] economic-development.php
- [ ] water-and-sanitation.php
- [ ] impact.php

### Phase 3: Article Pages (2-3 hours)

- [ ] Blog-detail.php - Featured images
- [ ] blogs.php - Blog listings
- [ ] Individual blog files

### Phase 4: Other Pages (1-2 hours)

- [ ] awards-recognition.php
- [ ] careers.php
- [ ] contact.php
- [ ] csr.php
- [ ] donate.php

---

## 🔍 Troubleshooting

### Issue 1: "Command not found" (Artisan)

**Solution:**

1. Make sure you're in the correct folder: `c:\laragon\www\swades-admin`
2. Check that PHP is in your PATH
3. Try: `php artisan list` to verify Laravel

### Issue 2: Database connection error

**Solution:**

1. Verify MySQL is running
2. Check database credentials in `.env` file
3. Make sure `media` table exists: `DESCRIBE media;`

### Issue 3: Images not showing in CMS admin

**Solution:**

1. Wait a few seconds and refresh the page
2. Clear browser cache
3. Check file permissions on assets folder

### Issue 4: Some images didn't upload

**Check:**

1. File format supported? (jpg, png, gif, svg, webp)
2. File size? (Usually <100MB is fine)
3. File names with special characters?

---

## 📊 Database Verification Queries

### After upload, verify everything is there:

```sql
-- Count total uploaded images
SELECT COUNT(*) as total_images FROM media;

-- Count by folder
SELECT folder, COUNT(*) as count
FROM media
GROUP BY folder
ORDER BY count DESC;

-- Find images without alt text (to fill later)
SELECT id, name, file_name, folder
FROM media
WHERE alt IS NULL OR alt = ''
ORDER BY folder;
```

---

## ✅ Complete Workflow Checklist

### Part 1: Bulk Upload (15 minutes)

- [ ] Open terminal
- [ ] Navigate to CMS folder or frontend folder
- [ ] Run Artisan command or PHP script
- [ ] Wait for completion
- [ ] Verify in CMS admin

### Part 2: Add Alt Text (30-60 minutes)

- [ ] Go to CMS Admin Media Library
- [ ] Review uploaded images
- [ ] Add alt text for each image (by folder)
- [ ] Save changes

### Part 3: Frontend Implementation (8-15 hours)

- [ ] Update homepage (logo, hero, icons)
- [ ] Update header/footer
- [ ] Update about page
- [ ] Update program pages
- [ ] Update blog pages
- [ ] Test all images

### Part 4: Testing & Validation (1-2 hours)

- [ ] Visual test (all images display)
- [ ] Lighthouse accessibility audit
- [ ] Screen reader test
- [ ] Database verify (all records exist)

### Part 5: Documentation (1 hour)

- [ ] Document image naming convention
- [ ] Share style guide with team
- [ ] Setup approval process
- [ ] Train team

---

## 🎯 Key Points to Remember

### ✅ Do's:

- Upload all assets at once
- Fill alt text later from CMS admin
- Use the helper functions in frontend code
- Test with Lighthouse audit
- Keep consistent naming convention

### ❌ Don'ts:

- Don't manually upload images one by one
- Don't leave alt text empty forever
- Don't hardcode image paths in HTML
- Don't skip Lighthouse testing
- Don't forget fallback images

---

## 📈 Estimated Timeline

| Task              | Time            |
| ----------------- | --------------- |
| Bulk Upload       | 15 min          |
| Alt Text Addition | 30-60 min       |
| Frontend Updates  | 8-15 hours      |
| Testing           | 1-2 hours       |
| Documentation     | 1 hour          |
| **TOTAL**         | **11-20 hours** |

---

## 🚀 Next Actions

1. **Choose your method** (Artisan or PHP script)
2. **Run the upload command**
3. **Verify in CMS admin**
4. **Start adding alt text** (can do gradually)
5. **Update frontend files** (reference ALT-TEXT-EXAMPLES.php)
6. **Test with Lighthouse**

---

## 📚 Related Documentation

- [ALT-TEXT-IMPLEMENTATION-GUIDE.md](ALT-TEXT-IMPLEMENTATION-GUIDE.md) - Complete guide
- [ALT-TEXT-EXAMPLES.php](ALT-TEXT-EXAMPLES.php) - Code examples
- [ALT-TEXT-DATABASE-GUIDE.md](ALT-TEXT-DATABASE-GUIDE.md) - Database queries

---

## 💬 Support

**Questions?** Check:

1. [ALT-TEXT-DATABASE-GUIDE.md](ALT-TEXT-DATABASE-GUIDE.md) - SQL queries
2. [ALT-TEXT-EXAMPLES.php](ALT-TEXT-EXAMPLES.php) - Code patterns
3. Troubleshooting section above

---

**Ready to begin? Run the bulk upload command now! 🚀**
