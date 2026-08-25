<div class="ourwork-section">
  <div class="container-fluid p-0">
    <div class="heading-hd">
      <h2><?= htmlspecialchars($cmsWorkHeading ?? 'Our Work', ENT_QUOTES, 'UTF-8') ?></h2>
      <p><?= htmlspecialchars($cmsWorkSubheading ?? 'Transforming Rural Lives Through Holistic Change', ENT_QUOTES, 'UTF-8') ?></p>
    </div><!-- heading-hd -->
    <div class="owl-carousel owl-theme slider2">
      <?php foreach (($cmsWorkCards ?? []) as $cmsWorkCard): ?>
        <?php
          $cmsWorkPage = !empty($cmsWorkCard['slug']) ? cms_get_page($cmsWorkCard['slug']) : null;
          $cmsWorkTitle = $cmsWorkPage['title'] ?? strip_tags($cmsWorkCard['title'] ?? '');
          $cmsWorkTitleHtml = $cmsWorkPage ? htmlspecialchars($cmsWorkTitle, ENT_QUOTES, 'UTF-8') : ($cmsWorkCard['title'] ?? '');
          $cmsWorkDescription = $cmsWorkPage['meta_description'] ?? $cmsWorkCard['description'] ?? '';
          $cmsWorkDescriptionHtml = $cmsWorkPage ? htmlspecialchars($cmsWorkDescription, ENT_QUOTES, 'UTF-8') : $cmsWorkDescription;
          $cmsWorkLink = $cmsWorkCard['button'] ?? ($cmsWorkCard['slug'] ?? '#');
        ?>
        <div class="ourwork-card">
          <div class="img-wrap">
            <img src="<?= htmlspecialchars($cmsWorkCard['image'] ?? '', ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($cmsWorkCard['alt'] ?? $cmsWorkTitle, ENT_QUOTES, 'UTF-8') ?>" />
          </div>
          <div class="ourwork-text">
            <span>
              <h5><?= $cmsWorkTitleHtml ?></h5>
              <p><?= $cmsWorkDescriptionHtml ?></p>
            </span>
            <a href="<?= htmlspecialchars($cmsWorkLink, ENT_QUOTES, 'UTF-8') ?>" class="btn">Read More</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div><!-- ourwork-section -->
