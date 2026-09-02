<?php
/**
 * Example: How to use alt text with images on the frontend
 * 
 * This file demonstrates best practices for implementing alt text
 * on the Swades Foundation website using the new CMS helper functions.
 */

// Include the CMS functions
require_once __DIR__ . '/include/cms.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Alt Text Implementation Examples</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .example { margin: 30px 0; padding: 20px; border: 1px solid #ddd; }
        h2 { color: #333; }
        code { background: #f4f4f4; padding: 2px 5px; }
        .good { border-left: 4px solid green; }
        .bad { border-left: 4px solid red; }
    </style>
</head>
<body>

<h1>Alt Text Implementation Examples</h1>

<!-- EXAMPLE 1: Logo -->
<div class="example good">
    <h2>✅ Example 1: Logo with Alt Text</h2>
    
    <h3>Method 1: Get from CMS Media</h3>
    <pre><code>
&lt;?php
// Fetch logo from media library
$logo = cms_get_media_by_name('navbar-logo');
if ($logo) {
    echo cms_image_tag($logo['url'], $logo['alt'], ['class' => 'navbar-logo']);
} else {
    // Fallback to static image
    echo '&lt;img src="./assets/images/logo.svg" alt="Swades Foundation" class="navbar-logo"&gt;';
}
?&gt;
    </code></pre>
    
    <h3>Method 2: Simple Static Image</h3>
    <pre><code>
&lt;?php
echo cms_image_tag('./assets/images/logo.svg', 'Swades Foundation');
?&gt;
    </code></pre>

    <h3>✅ Good Alt Text Examples:</h3>
    <ul>
        <li>"Swades Foundation"</li>
        <li>"Swades Foundation - Rural Development NGO"</li>
        <li>"Swades Foundation Logo"</li>
    </ul>
</div>

<!-- EXAMPLE 2: Hero Image -->
<div class="example good">
    <h2>✅ Example 2: Hero Section Image</h2>
    
    <h3>Code:</h3>
    <pre><code>
&lt;?php
// Get hero images from 'hero-section' folder
$heroImages = cms_get_media_by_folder('hero-section', 5);

if (!empty($heroImages)) {
    foreach ($heroImages as $image) {
        echo cms_image_tag(
            $image['url'],
            $image['alt'] ?? 'Swades Foundation community program',
            [
                'class' => 'hero-image',
                'loading' => 'eager',
                'width' => '1920',
                'height' => '600'
            ]
        );
    }
} else {
    echo '&lt;img src="./assets/images/hero.jpg" alt="Swades Foundation rural development program"&gt;';
}
?&gt;
    </code></pre>

    <h3>✅ Good Alt Text Examples:</h3>
    <ul>
        <li>"Rural women participating in Swades Foundation health program"</li>
        <li>"Children attending Swades-supported school in village"</li>
        <li>"Farmers using sustainable agriculture techniques taught by Swades"</li>
    </ul>
</div>

<!-- EXAMPLE 3: Blog Featured Image -->
<div class="example good">
    <h2>✅ Example 3: Blog Post Featured Image</h2>
    
    <h3>Code for Blog-detail.php:</h3>
    <pre><code>
&lt;?php
// In your blog detail page
$post = cms_get_post($slug);
if ($post && $post['featured_image']) {
    // Try to get from media library
    $media = cms_get_media_by_name(basename($post['featured_image']));
    
    if ($media) {
        echo cms_image_tag($media['url'], $media['alt'], ['class' => 'featured-image']);
    } else {
        // Fallback: Use post title as alt text
        echo cms_image_tag(
            $post['featured_image'],
            $post['title'] ?? 'Blog post featured image',
            ['class' => 'featured-image']
        );
    }
}
?&gt;
    </code></pre>

    <h3>✅ Good Alt Text Examples:</h3>
    <ul>
        <li>"Aarti Pawar, Swades health champion, at community health program"</li>
        <li>"Students studying in Swades-supported school classroom"</li>
        <li>"Water well installation project transforming village life"</li>
    </ul>
</div>

<!-- EXAMPLE 4: Work Cards / Program Icons -->
<div class="example good">
    <h2>✅ Example 4: Work Cards with Icons</h2>
    
    <h3>Original Code (Homepage):</h3>
    <pre><code>
&lt;?php
$cmsWorkCards = [
    ['image' => './assets/images/water.svg', 'title' => 'Water', ...],
    ['image' => './assets/images/health.svg', 'title' => 'Health', ...],
];

foreach ($cmsWorkCards as $card) {
    echo '&lt;img src="' . $card['image'] . '" alt=""&gt;'; // ❌ EMPTY ALT!
}
?&gt;
    </code></pre>

    <h3>Updated Code (With Alt Text):</h3>
    <pre><code>
&lt;?php
// Method 1: Using alt already in array
$cmsWorkCards = [
    [
        'image' => './assets/images/water.svg', 
        'title' => 'Water',
        'alt' => 'Water, Sanitation & Green Initiatives icon'
    ],
    [
        'image' => './assets/images/health.svg', 
        'title' => 'Health',
        'alt' => 'Health & Healthcare access icon'
    ],
];

foreach ($cmsWorkCards as $card) {
    echo cms_image_tag(
        $card['image'], 
        $card['alt'] ?? $card['title'],
        ['class' => 'work-card-icon']
    );
}

// Method 2: Get from media library
$workIcons = cms_get_media_by_folder('work-icons', 10);
foreach ($workIcons as $icon) {
    echo cms_image_tag($icon['url'], $icon['alt'], ['class' => 'work-card-icon']);
}
?&gt;
    </code></pre>

    <h3>✅ Good Alt Text for Icons:</h3>
    <ul>
        <li>"Water, Sanitation & Green Initiatives icon"</li>
        <li>"Health and primary healthcare access icon"</li>
        <li>"Education and learning support icon"</li>
        <li>"Economic development and livelihoods icon"</li>
        <li>"Community leadership and institution building icon"</li>
    </ul>
</div>

<!-- EXAMPLE 5: Team Member Photos -->
<div class="example good">
    <h2>✅ Example 5: Team Member Profiles</h2>
    
    <h3>Code:</h3>
    <pre><code>
&lt;?php
$teamMembers = cms_get_team_members();

foreach ($teamMembers as $member) {
    // Get photo from media library
    $photo = cms_get_media_by_name($member['photo'] ?? '');
    
    $altText = $member['name'] . ', ' . ($member['role'] ?? 'Swades Foundation');
    
    if ($photo) {
        echo cms_image_tag($photo['url'], $altText, ['class' => 'team-photo']);
    } else {
        echo cms_image_tag($member['photo'] ?? '', $altText, ['class' => 'team-photo']);
    }
}
?&gt;
    </code></pre>

    <h3>✅ Good Alt Text Examples:</h3>
    <ul>
        <li>"Priya Sharma, Swades Foundation Program Manager"</li>
        <li>"Raj Kumar, Director of Health Programs"</li>
        <li>"Sarah Johnson, International Relations Lead"</li>
    </ul>
</div>

<!-- EXAMPLE 6: Gallery / Carousel -->
<div class="example good">
    <h2>✅ Example 6: Image Gallery/Carousel</h2>
    
    <h3>Code:</h3>
    <pre><code>
&lt;?php
// Get all gallery images
$galleryImages = cms_get_media_by_folder('gallery', 50);

if (!empty($galleryImages)):
    foreach ($galleryImages as $index => $image):
        $altText = $image['alt'] ?? 'Gallery image ' . ($index + 1);
        echo cms_image_tag(
            $image['url'],
            $altText,
            [
                'class' => 'gallery-image',
                'loading' => 'lazy',
                'data-index' => $index
            ]
        );
    endforeach;
endif;
?&gt;
    </code></pre>

    <h3>✅ Good Alt Text for Gallery Images:</h3>
    <ul>
        <li>"Swades team at community health camp providing medical checkups"</li>
        <li>"Village women learning skill development at training center"</li>
        <li>"Beneficiaries celebrating completion of water well project"</li>
    </ul>
</div>

<!-- EXAMPLE 7: Awards & Recognition -->
<div class="example good">
    <h2>✅ Example 7: Awards Section</h2>
    
    <h3>Code:</h3>
    <pre><code>
&lt;?php
$awards = cms_get_awards(); // This function exists in your cms.php

foreach ($awards as $award) {
    // Get award image from media
    $awardMedia = cms_get_media_by_name($award['image'] ?? '');
    
    $altText = $award['title'] . ' - ' . $award['year'];
    
    if ($awardMedia) {
        echo cms_image_tag($awardMedia['url'], $altText, ['class' => 'award-image']);
    } else {
        echo cms_image_tag($award['image'], $altText, ['class' => 'award-image']);
    }
}
?&gt;
    </code></pre>

    <h3>✅ Good Alt Text Examples:</h3>
    <ul>
        <li>"Forbes India Changemakers Award 2024"</li>
        <li>"UN Global Compact CSR Excellence 2023"</li>
        <li>"Best NGO Award - Ministry of Social Welfare 2022"</li>
    </ul>
</div>

<!-- EXAMPLE 8: Featured Partners/Logos -->
<div class="example good">
    <h2>✅ Example 8: Partner Logos</h2>
    
    <h3>Code:</h3>
    <pre><code>
&lt;?php
$partners = cms_get_logos('partner', 20); // Get partner logos from believers table

foreach ($partners as $partner) {
    echo cms_image_tag(
        $partner['logo_path'],
        $partner['alt_text'] ?? 'Partner organization logo',
        ['class' => 'partner-logo']
    );
}
?&gt;
    </code></pre>

    <h3>✅ Good Alt Text Examples:</h3>
    <ul>
        <li>"UN Women partner organization logo"</li>
        <li>"World Bank partner organization logo"</li>
        <li>"Government of India partner organization logo"</li>
    </ul>
</div>

<!-- EXAMPLE 9: Blog Listing with Thumbnails -->
<div class="example good">
    <h2>✅ Example 9: Blog Listing Page</h2>
    
    <h3>Code:</h3>
    <pre><code>
&lt;?php
$posts = cms_get_posts(10);

foreach ($posts as $post):
    $featuredImage = cms_blog_image($post);
    $media = cms_get_media_by_name(basename($post['featured_image'] ?? ''));
    
    $altText = $media['alt'] ?? $post['title'];
?&gt;
    &lt;article class="blog-card"&gt;
        &lt;?php
        echo cms_image_tag(
            $featuredImage,
            $altText,
            ['class' => 'blog-thumbnail']
        );
        ?&gt;
        &lt;h2&gt;&lt;?php echo htmlspecialchars($post['title']); ?&gt;&lt;/h2&gt;
        &lt;p&gt;&lt;?php echo cms_excerpt($post['content'] ?? '', 28); ?&gt;&lt;/p&gt;
    &lt;/article&gt;
&lt;?php
endforeach;
?&gt;
    </code></pre>
</div>

<!-- EXAMPLE 10: Responsive Images with Srcset -->
<div class="example good">
    <h2>✅ Example 10: Responsive Images (Advanced)</h2>
    
    <h3>Code:</h3>
    <pre><code>
&lt;?php
$image = cms_get_media_by_name('hero-responsive');
if ($image) {
    // Basic responsive image
    echo '&lt;img src="' . htmlspecialchars($image['url']) . '" 
              alt="' . htmlspecialchars($image['alt'] ?? '') . '"
              class="responsive-image"
              sizes="(max-width: 768px) 100vw, 80vw"
              loading="lazy"&gt;';
}
?&gt;
    </code></pre>

    <h3>Note:</h3>
    <p>For advanced responsive images with different resolutions, consider:
    <ul>
        <li>Creating different image sizes in the CMS</li>
        <li>Using srcset attribute with multiple image URLs</li>
        <li>Implementing WebP format alongside PNG/JPG</li>
    </ul>
    </p>
</div>

<!-- COMMON MISTAKES -->
<div class="example bad">
    <h2>❌ Common Mistakes to Avoid</h2>
    
    <h3>1. Empty alt attribute:</h3>
    <pre><code>&lt;img src="image.jpg"&gt; or &lt;img src="image.jpg" alt=""&gt;</code></pre>
    <p>✅ Fix: Always provide meaningful alt text or use cms_image_tag()</p>
    
    <h3>2. Redundant alt text:</h3>
    <pre><code>&lt;img src="logo.png" alt="Image" class="logo"&gt;</code></pre>
    <p>✅ Fix: Be specific - "Swades Foundation Logo"</p>
    
    <h3>3. Starting with "Image of":</h3>
    <pre><code>&lt;img src="team.jpg" alt="Image of our team"&gt;</code></pre>
    <p>✅ Fix: "Swades Foundation team members at community project"</p>
    
    <h3>4. Using file names:</h3>
    <pre><code>&lt;img src="DSC_001234.jpg" alt="DSC_001234.jpg"&gt;</code></pre>
    <p>✅ Fix: Describe what's actually in the image</p>
    
    <h3>5. Keyword stuffing:</h3>
    <pre><code>&lt;img src="award.jpg" alt="award prize trophy recognition honor excellence"&gt;</code></pre>
    <p>✅ Fix: "Forbes India Changemakers Award 2024"</p>
</div>

<!-- TESTING -->
<div class="example">
    <h2>🧪 Testing Your Alt Text</h2>
    
    <h3>Quick Tests:</h3>
    <ol>
        <li><strong>Visual Test:</strong> Right-click image → Inspect → Check alt attribute</li>
        <li><strong>Screen Reader Test:</strong> Use NVDA (Windows) or VoiceOver (Mac)</li>
        <li><strong>Browser Dev Tools:</strong> Lighthouse → Accessibility score</li>
        <li><strong>Automated Tools:</strong> WAVE Browser Extension, Axe DevTools</li>
    </ol>
    
    <h3>Lighthouse Accessibility Check:</h3>
    <ol>
        <li>Open DevTools (F12)</li>
        <li>Go to Lighthouse tab</li>
        <li>Select "Accessibility"</li>
        <li>Run audit</li>
        <li>Look for "Images have alt text" rule</li>
    </ol>
</div>

</body>
</html>
