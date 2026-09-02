<div class="stories-section">
  <div class="heading-hd text-center">
    <h2><?= htmlspecialchars($cmsStoriesHeading ?? 'Stories of Empowerment', ENT_QUOTES, 'UTF-8') ?></h2>
  </div><!--heading-hd-->
  <div class="owl-carousel owl-theme slider1">
    <?php foreach (($cmsStories ?? []) as $index => $story): ?>
      <?php
        $fallbacks = $cmsStoryFallbacks ?? [];
        $fallback = $fallbacks[$index] ?? ($fallbacks ? $fallbacks[array_key_last($fallbacks)] : []);
        $storyTitle = $story['title'] ?? ($fallback['title'] ?? '');
        $storyExcerpt = $story['excerpt'] ?? ($fallback['excerpt'] ?? '');
        $storyCategory = $story['category'] ?? ($fallback['category'] ?? '');
        $storyImagePath = $story['featured_image'] ?? ($fallback['image'] ?? './assets/images/Blogs/Intersect.jpg');
        $storyImageFallback = !empty($story['featured_image']) ? cms_blog_image($story, $fallback['image'] ?? './assets/images/Blogs/Intersect.jpg') : ($fallback['image'] ?? './assets/images/Blogs/Intersect.jpg');
        $storyImage = cms_media_src((string) $storyImagePath, $storyImageFallback);
        $storyAlt = cms_media_alt((string) $storyImagePath, $storyTitle !== '' ? $storyTitle : 'Impact story image');
        $storyLink = !empty($story['slug']) ? 'Blog-detail.php?slug=' . rawurlencode($story['slug']) : ($fallback['link'] ?? '#');
        $categoryClass = $fallback['category_class'] ?? '';
      ?>
      <div class="empowered-werap">
        <div class="empowe-cnt">
          <span class="heading6 <?= htmlspecialchars($categoryClass, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($storyCategory, ENT_QUOTES, 'UTF-8') ?></span>
          <h6><?= htmlspecialchars($storyTitle, ENT_QUOTES, 'UTF-8') ?></h6>
          <p><?= htmlspecialchars(cms_excerpt($storyExcerpt, 22), ENT_QUOTES, 'UTF-8') ?></p>
          <a href="<?= htmlspecialchars($storyLink, ENT_QUOTES, 'UTF-8') ?>" class="readmore">Read Impact Story <img src="./assets/images/arrow-right.svg" alt="" aria-hidden="true"></a>
        </div>
        <div class="empowe-img">
          <img src="<?= htmlspecialchars($storyImage, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($storyAlt, ENT_QUOTES, 'UTF-8') ?>">
        </div>
      </div><!---empowered-werap-->
    <?php endforeach; ?>
  </div>
</div><!---stories-section-->
