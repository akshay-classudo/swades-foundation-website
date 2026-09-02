# Image Alt Text Implementation Guide for Swades Foundation

## Overview

This guide explains how to implement and manage alt text for all images on the Swades Foundation website through the CMS.

## System Architecture

### Two-Part System:

1. **Laravel CMS Admin** (`c:\laragon\www\swades-admin`) - Where you manage content
2. **PHP Frontend** (`c:\xampp\htdocs\swades-foundation`) - Where content is displayed

The Media table in the database stores all images with their metadata, including alt text.

---

## Step 1: Managing Images in the CMS Admin Panel

### Access Media Library

1. Open your Laravel admin panel: `http://localhost:8000/admin`
2. Navigate to **Media** or **Media Library** section
3. Upload or select images

### Add Alt Text to Images

For each image, you'll see fields:

- **Alt Text** - Descriptive text for accessibility and SEO
  - Keep it concise (60-125 characters)
  - Describe what's in the image
  - Include keywords naturally
  - Don't start with "image of" or "photo of"

**Example Alt Texts:**

```
Logo: "Swades Foundation logo - rural community empowerment organization"
Hero Image: "Women farmers discussing sustainable agriculture techniques"
Program Icon: "Hand symbol representing community participation and engagement"
Team Photo: "Swades Foundation team members at community development project"
```

### Media Metadata Fields

```
name: "Logo 2024"
alt: "Swades Foundation logo - community empowerment"
folder: "logos"
active: true
```

---

## Step 2: Using Images in Frontend Code

### NEW Helper Functions Available

The following functions have been added to `include/cms.php`:

#### 1. Get Media by ID

```php
<?php
$media = cms_get_media_by_id(123);
if ($media) {
    echo cms_image_tag($media['url'], $media['alt'] ?? '');
}
?>
```

#### 2. Get Media by Name

```php
<?php
$media = cms_get_media_by_name('logo-2024');
if ($media) {
    echo cms_image_tag($media['url'], $media['alt'] ?? '');
}
?>
```

#### 3. Get Multiple Images by Folder

```php
<?php
$teamPhotos = cms_get_media_by_folder('team-members', 10);
foreach ($teamPhotos as $photo) {
    echo cms_image_tag($photo['url'], $photo['alt'] ?? '', ['class' => 'team-photo']);
}
?>
```

#### 4. Generate Image Tag with Alt Text

```php
<?php
// Simple usage
echo cms_image_tag('./assets/images/logo.png', 'Swades Foundation Logo');

// With additional attributes
echo cms_image_tag(
    './assets/images/logo.png',
    'Swades Foundation Logo',
    [
        'class' => 'navbar-logo',
        'width' => '200',
        'height' => 'auto',
        'loading' => 'lazy'
    ]
);
?>
```

---

## Step 3: Update Frontend Templates

### Example: Navbar Logo

**Before:**

```php
<img src="./assets/images/logo.svg" class="navbar-logo">
```

**After:**

```php
<?php
$logo = cms_get_media_by_name('navbar-logo');
if ($logo) {
    echo cms_image_tag($logo['url'], $logo['alt'], ['class' => 'navbar-logo']);
} else {
    echo '<img src="./assets/images/logo.svg" alt="Swades Foundation" class="navbar-logo">';
}
?>
```

### Example: Blog Featured Image

**Before:**

```php
<img src="<?php echo $post['featured_image']; ?>" class="blog-image">
```

**After:**

```php
<?php
$media = cms_get_media_by_name($post['featured_image']);
if ($media) {
    echo cms_image_tag($media['url'], $media['alt'] ?? $post['title']);
} else {
    echo '<img src="' . htmlspecialchars($post['featured_image']) . '" alt="' . htmlspecialchars($post['title'] ?? '') . '" class="blog-image">';
}
?>
```

### Example: Icon Grid (Work Cards)

**Before:**

```php
<?php foreach ($cmsWorkCards as $card): ?>
    <img src="<?php echo $card['image']; ?>" class="card-icon">
<?php endforeach; ?>
```

**After:**

```php
<?php foreach ($cmsWorkCards as $card): ?>
    <?php echo cms_image_tag($card['image'], $card['alt'] ?? '', ['class' => 'card-icon']); ?>
<?php endforeach; ?>
```

### Example: Hero Section with Multiple Images

```php
<?php
$heroImages = cms_get_media_by_folder('hero-section', 5);
foreach ($heroImages as $image) {
    echo cms_image_tag(
        $image['url'],
        $image['alt'] ?? 'Swades Foundation community program',
        [
            'class' => 'hero-image',
            'loading' => 'eager'
        ]
    );
}
?>
```

---

## Step 4: Best Practices for Alt Text

### ✅ DO:

- Be descriptive and concise
- Include context about what's happening in the image
- Use keywords naturally
- Consider visually impaired users
- Include important text that appears in the image
- Use 60-125 characters for optimal length

### ❌ DON'T:

- Start with "Image of" or "Picture of"
- Keyword stuff (e.g., "community health education rural development")
- Leave alt text empty
- Duplicate alt text across different images
- Use image file names (e.g., "DSC_00234.jpg")

### Examples:

| Image Type    | Good Alt Text                                                         | Bad Alt Text        |
| ------------- | --------------------------------------------------------------------- | ------------------- |
| Logo          | "Swades Foundation logo"                                              | "image.png"         |
| Headshot      | "Priya Sharma, Swades Foundation Program Manager"                     | "woman"             |
| Infographic   | "Water access statistics: 85% of villagers gain clean water access"   | "chart"             |
| Program Photo | "Children in Swades-supported school receiving educational materials" | "kids in classroom" |

---

## Step 5: Migrating Existing Images

### Database Migration (If Needed)

If you have images without alt text, run this query to identify them:

```sql
SELECT id, name, path, alt FROM media WHERE alt IS NULL OR alt = '';
```

Then update them through the CMS admin panel one by one, or use this SQL:

```sql
UPDATE media
SET alt = 'Swades Foundation - add specific alt text'
WHERE alt IS NULL OR alt = '';
```

---

## Step 6: SEO Benefits

### Alt Text Improves:

✅ **Search Rankings** - Images are indexed by search engines
✅ **Accessibility Score** - WCAG compliance
✅ **User Experience** - Better for screen readers
✅ **Image Search** - Better visibility in Google Images
✅ **Core Web Vitals** - Helps with page experience signals

### Example SEO-Optimized Alt Texts:

```
Logo:         "Swades Foundation - rural development NGO India"
Hero Image:   "Rural farmers using sustainable agriculture at Swades training"
Stat Badge:   "6 million lives impacted by Swades Foundation programs"
Team Photo:   "Swades Foundation team visiting rural community project site"
```

---

## Step 7: Frontend Implementation Checklist

- [ ] Update header/navbar logo images
- [ ] Update homepage hero images
- [ ] Update work card icons
- [ ] Update blog post featured images
- [ ] Update team member photos
- [ ] Update impact gallery images
- [ ] Update footer images
- [ ] Update banner images
- [ ] Update SVG icons (add title attributes)
- [ ] Test with screen reader
- [ ] Validate HTML (alt attributes present)

---

## Step 8: Troubleshooting

### Issue: Images not loading with alt text

**Solution:**

```php
<?php
$media = cms_get_media_by_name('image-name');
if ($media && isset($media['url'])) {
    echo cms_image_tag($media['url'], $media['alt'] ?? 'Fallback Alt Text');
} else {
    // Fallback to hardcoded image
    echo '<img src="./assets/images/fallback.png" alt="Fallback Alt Text">';
}
?>
```

### Issue: CMS database connection not working

**Check:**

- `include/cms.php` database credentials
- Database is running (MySQL)
- Media table exists in database

### Issue: Alt text appears to be HTML-encoded

**Note:** This is correct behavior. The `cms_image_tag()` function automatically escapes HTML entities for security.

---

## Step 9: Regular Maintenance

### Monthly Tasks:

1. Review analytics for images with high traffic
2. Update alt text for complex images
3. Check for new images without alt text
4. Validate all images still loading

### Quarterly Tasks:

1. Run accessibility audit (WAVE, Lighthouse)
2. Update alt text for seasonal content
3. Review SEO performance of image searches

---

## Quick Reference

### Function Signatures

```php
// Get single image by ID
cms_get_media_by_id(int $id): ?array

// Get single image by name
cms_get_media_by_name(string $name): ?array

// Get multiple images by folder
cms_get_media_by_folder(string $folder, int $limit = 0): array

// Generate HTML image tag with alt text
cms_image_tag(string $imagePath, string $altText = '', array $attributes = []): string
```

### Return Values

```php
// Single image returns:
[
    'id' => 1,
    'name' => 'logo-2024',
    'path' => 'assets/images/logo.png',
    'url' => 'http://cms.local/storage/assets/images/logo.png',
    'alt' => 'Swades Foundation Logo'
]

// Multiple images return array of above objects
```

---

## Support & Resources

- **CMS Admin:** http://localhost:8000/admin
- **Frontend:** http://localhost/
- **Database:** Check `media` table
- **Helper File:** `include/cms.php`

---

## Version History

- **v1.0** (Current) - Initial alt text implementation with new helper functions
