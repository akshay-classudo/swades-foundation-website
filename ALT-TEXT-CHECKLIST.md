# Alt Text Implementation - Quick Start Checklist

## Phase 1: Setup & Preparation (30 minutes)

- [ ] Read the `ALT-TEXT-IMPLEMENTATION-GUIDE.md` file
- [ ] Review `ALT-TEXT-EXAMPLES.php` for code examples
- [ ] Check that your CMS database connection is working
- [ ] Verify Media table exists in database with `alt` field

### Database Check:

```sql
-- Run this to verify media table structure
DESCRIBE media;
-- Should show: id, name, file_name, path, alt, folder, etc.
```

---

## Phase 2: CMS Media Library Setup (1-2 hours)

### Step 1: Organize Images by Folder

- [ ] Create folder: "logos" - for all logo images
- [ ] Create folder: "hero-sections" - for hero/banner images
- [ ] Create folder: "work-icons" - for program icons
- [ ] Create folder: "team-members" - for team photos
- [ ] Create folder: "blog-featured" - for blog post thumbnails
- [ ] Create folder: "gallery" - for image galleries
- [ ] Create folder: "awards" - for award images
- [ ] Create folder: "partners" - for partner/believer logos

### Step 2: Upload & Tag Images in CMS

For each existing image on your site:

1. Go to CMS Admin → Media Library
2. Upload or select image
3. Fill in metadata:
   - **Name:** Unique descriptive name (e.g., "navbar-logo")
   - **Alt Text:** Descriptive alt text (60-125 chars)
   - **Folder:** Select appropriate folder
   - **Active:** Check if image is currently used

**Important Images to Update:**

- [ ] Navbar/Header logo
- [ ] Homepage hero images
- [ ] Work/Program card icons
- [ ] Featured images on blog posts
- [ ] Team member photos
- [ ] Award/recognition images
- [ ] Partner logos
- [ ] Featured images in galleries
- [ ] Favicon/browser icon
- [ ] Social media preview images

---

## Phase 3: Frontend Code Updates

### Priority 1: Critical Images (1-2 hours)

#### Header/Navigation

**File:** `include/header.php` or navbar section

```php
<?php
// OLD: <img src="./assets/images/logo.svg" class="navbar-logo">

// NEW:
$logo = cms_get_media_by_name('navbar-logo');
if ($logo) {
    echo cms_image_tag($logo['url'], $logo['alt'], ['class' => 'navbar-logo']);
} else {
    echo '<img src="./assets/images/logo.svg" alt="Swades Foundation" class="navbar-logo">';
}
?>
```

- [ ] Update logo in header
- [ ] Update logo in footer (if different)
- [ ] Update favicon reference

#### Homepage (index.php)

- [ ] Hero section images
- [ ] Work cards icons
- [ ] Impact section images
- [ ] Stories/featured posts images
- [ ] Dream village section images
- [ ] Community model cards images
- [ ] Donate section images

### Priority 2: Content Pages (2-3 hours)

**Files to update:**

- [ ] `about-us.php` - About page images
- [ ] `health.php` - Health program images
- [ ] `educations.php` - Education program images
- [ ] `economic-development.php` - Economic development images
- [ ] `water-and-sanitation.php` - Water program images
- [ ] `impact.php` - Impact gallery images
- [ ] `awards-recognition.php` - Awards images
- [ ] `careers.php` - Career section images
- [ ] `contact.php` - Contact section images

**Code pattern for each:**

```php
<?php
// Get images from media library
$sectionImages = cms_get_media_by_folder('section-name', 10);
foreach ($sectionImages as $image) {
    echo cms_image_tag($image['url'], $image['alt'], ['class' => 'section-image']);
}
?>
```

### Priority 3: Blog & Articles (2-3 hours)

**Files to update:**

- [ ] `Blog-detail.php` - Individual blog featured images
- [ ] `blogs.php` - Blog listing page thumbnails
- [ ] All individual blog PHP files

**Code pattern:**

```php
<?php
$post = cms_get_post($slug);
if ($post) {
    $media = cms_get_media_by_name(basename($post['featured_image'] ?? ''));
    if ($media) {
        echo cms_image_tag($media['url'], $media['alt'], ['class' => 'featured-image']);
    } else {
        echo cms_image_tag($post['featured_image'] ?? '', $post['title'] ?? '', ['class' => 'featured-image']);
    }
}
?>
```

### Priority 4: Other Pages (1-2 hours)

- [ ] `csr.php` - CSR section
- [ ] `digital-media.php` - Media gallery
- [ ] `donate.php` - Donation page
- [ ] `dashboard.php` - Dashboard images
- [ ] `create-account.php` - Account creation
- [ ] `dreamvillage.php` - Dream village page

---

## Phase 4: Testing & Validation

### Automated Testing

- [ ] Run Lighthouse accessibility audit
  1. Open DevTools (F12)
  2. Click "Lighthouse"
  3. Select "Accessibility"
  4. Run audit
  5. Verify all images have alt text

### Manual Testing

- [ ] Visual inspection: Right-click each image, check alt attribute
- [ ] Screen reader test (if possible):
  - Windows: Use NVDA (free)
  - Mac: Use built-in VoiceOver
  - Linux: Use Orca

### Browser Compatibility

- [ ] Test on Chrome/Chromium
- [ ] Test on Firefox
- [ ] Test on Safari
- [ ] Test on mobile browsers

### Accessibility Tools

- [ ] Install WAVE Browser Extension
- [ ] Run WAVE on each page
- [ ] Check for errors related to images
- [ ] Aim for score: 100%

---

## Phase 5: Documentation & Maintenance

### Documentation

- [ ] Document image naming convention
- [ ] Create style guide for alt text
- [ ] Document which images are stored where
- [ ] Share documentation with team

### Team Training

- [ ] Train team on alt text guidelines
- [ ] Share best practices document
- [ ] Assign responsibility for new images
- [ ] Set up approval process

### Monthly Maintenance

- [ ] Review new images for alt text
- [ ] Update alt text for seasonal content
- [ ] Check for broken image links
- [ ] Run accessibility audit

---

## File Locations Summary

### Files Modified:

- `include/cms.php` - Added new helper functions ✅

### Files Created:

- `ALT-TEXT-IMPLEMENTATION-GUIDE.md` - Complete guide
- `ALT-TEXT-EXAMPLES.php` - Code examples
- `ALT-TEXT-CHECKLIST.md` - This file

### Files to Update (PHP Pages):

```
Frontend Pages:
  ├── index.php ⭐⭐⭐
  ├── include/header.php ⭐⭐⭐
  ├── include/footer.php ⭐
  ├── about-us.php ⭐⭐
  ├── health.php ⭐⭐
  ├── educations.php ⭐⭐
  ├── economic-development.php ⭐⭐
  ├── water-and-sanitation.php ⭐⭐
  ├── impact.php ⭐⭐
  ├── awards-recognition.php ⭐
  ├── Blog-detail.php ⭐⭐
  ├── blogs.php ⭐⭐
  ├── careers.php ⭐
  ├── contact.php ⭐
  ├── csr.php ⭐
  ├── digital-media.php ⭐
  ├── donate.php ⭐
  └── dreamvillage.php ⭐

Legend: ⭐⭐⭐ = Critical, ⭐⭐ = High Priority, ⭐ = Medium Priority
```

---

## New Helper Functions Available

```php
// Get single media by ID
$media = cms_get_media_by_id(123);

// Get single media by name
$media = cms_get_media_by_name('logo-navbar');

// Get multiple media by folder
$images = cms_get_media_by_folder('gallery', 10);

// Generate image tag with alt text
echo cms_image_tag('image.jpg', 'Alt text here', ['class' => 'my-class']);
```

---

## Alt Text Guidelines Quick Reference

### Length

- **Ideal:** 60-125 characters
- **Maximum:** No hard limit, but keep under 150 characters

### Format

- **Good:** "Farmers using sustainable agriculture at Swades training center"
- **Bad:** "Image of farmers", "DSC_12345.jpg", "image.jpg"

### Keywords

- ✅ Include relevant keywords naturally
- ✅ Be descriptive
- ❌ Don't keyword stuff
- ❌ Don't repeat across images

### What to Include

- ✅ What's in the image
- ✅ Who is in the image (people's names)
- ✅ Where the action is happening
- ✅ Important text that appears in image

### What to Avoid

- ❌ File names (DSC_001234.jpg)
- ❌ Starting with "image of" or "picture of"
- ❌ Redundant descriptions (when nearby text already describes)
- ❌ Decorative images (use alt="" for pure decoration)

---

## Estimated Timeline

| Phase | Task                            | Time           |
| ----- | ------------------------------- | -------------- |
| 1     | Setup & Preparation             | 30 min         |
| 2     | CMS Media Organization & Upload | 1-2 hours      |
| 3     | Frontend Code Updates           | 5-8 hours      |
| 4     | Testing & Validation            | 1-2 hours      |
| 5     | Documentation & Training        | 1 hour         |
|       | **TOTAL**                       | **9-14 hours** |

---

## Troubleshooting

### Images not loading?

```php
// Debug: Check if media exists
$media = cms_get_media_by_name('image-name');
if (!$media) {
    error_log('Media not found: image-name');
}
echo '<!-- Media URL: ' . ($media['url'] ?? 'null') . ' -->';
```

### Alt text showing as HTML entities?

- This is normal and correct (for security)
- Browser renders it correctly: `&quot;` → `"`

### Database connection failing?

- Check credentials in `include/cms.php`
- Verify MySQL is running
- Check database name: `btowvpqp_classudo-cms`

### Functions not working?

- Verify you've updated `include/cms.php`
- Check error log: `error_log()` outputs to PHP error log
- Ensure functions file is included: `require_once __DIR__ . '/include/cms.php';`

---

## Resources

- 📖 [Alt Text Guidelines](ALT-TEXT-IMPLEMENTATION-GUIDE.md)
- 💻 [Code Examples](ALT-TEXT-EXAMPLES.php)
- 🧪 [Lighthouse](https://developers.google.com/web/tools/lighthouse) - Accessibility audits
- 🔧 [WAVE Browser Extension](https://wave.webaim.org/extension/) - Accessibility testing
- 📚 [WebAIM Alt Text](https://webaim.org/articles/alttext/) - Industry best practices
- ♿ [WCAG Guidelines](https://www.w3.org/WAI/WCAG21/quickref/) - Accessibility standards

---

## Notes & Additional Info

### Media Table Fields

```sql
- id: Unique identifier
- uploaded_by: User who uploaded
- name: Display name
- file_name: Original filename
- path: Storage path
- disk: Storage disk (usually 'public')
- mime_type: File type
- extension: File extension
- size: File size in bytes
- width: Image width in pixels
- height: Image height in pixels
- alt: ✨ ALT TEXT - This is what you need to fill!
- folder: Organization folder
- active: Whether image is active
- sort_order: Display order
- timestamps: created_at, updated_at
```

### SEO Benefits of Alt Text

- ✅ Improved image search visibility
- ✅ Better accessibility scores
- ✅ Enhanced core web vitals
- ✅ Better SERP rankings
- ✅ Improved user experience

---

**Version:** 1.0  
**Last Updated:** 2024  
**Status:** Ready for Implementation
