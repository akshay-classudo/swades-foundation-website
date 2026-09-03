<?php
require_once __DIR__ . '/include/cms.php';

$slug = trim((string) ($_GET['slug'] ?? ''));
$slug = preg_replace('/[^A-Za-z0-9_-]/', '', $slug);

// These slugs already have a dedicated, fully-designed static page at a clean URL.
// Redirect the generic /page/{slug} duplicate there instead of rendering a second,
// thinner copy of the same CMS content.
$cleanUrlRedirects = [
    'about-us' => 'about-us',
    'our-team' => 'our-team',
    'impact' => 'impact',
    'water-and-sanitation' => 'water-and-sanitation',
    'economic-development' => 'economic-development',
    'ecomonic-development' => 'economic-development',
    'dream-village' => 'dreamvillage',
    'work-climate-action' => 'work-climate-action',
    'donate' => 'Donate',
    'volunteer' => 'volunteer',
    'sse' => 'sse',
    'videos-media' => 'videos-media',
    'privacy-policy' => 'privacy-policy',
    'terms-conditions' => 'terms-conditions',
    'refund-policy' => 'refund-policy',
    'home' => '',
    'health' => 'health',
    'educations' => 'educations',
    'csr' => 'csr',
    'contact' => 'contact',
];

if (isset($cleanUrlRedirects[$slug])) {
    $publicBase = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
    $publicBase = $publicBase === '.' ? '' : $publicBase;
    header('Location: ' . $publicBase . '/' . $cleanUrlRedirects[$slug], true, 301);
    exit;
}

$page = $slug !== '' ? cms_get_page($slug) : null;

if (!$page) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    exit;
}

$title = cms_page_field($page, 'meta_title', $page['title'] ?? 'Swades Foundation');
$description = cms_page_field($page, 'meta_description', '');
$content = cms_page_content($page);
$publicBase = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
$publicBase = $publicBase === '.' ? '' : $publicBase;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <base href="<?= htmlspecialchars($publicBase . '/', ENT_QUOTES, 'UTF-8') ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
  <?php if ($description !== ''): ?>
    <meta name="description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
  <?php endif; ?>
  <link rel="icon" href="assets/images/favicon.png" type="image/png">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <style>
    .cms-page-content { max-width: 960px; margin: 0 auto; color: #222; font-size: 16px; line-height: 1.7; }
    .cms-page-content h2, .cms-page-content h3, .cms-page-content h4 { margin: 28px 0 12px; }
    .cms-page-content p { margin-bottom: 18px; }
    .cms-page-content img { max-width: 100%; height: auto; }
    .cms-page-content a { color: #f47600; text-decoration: underline; }
    .cms-page-content ul, .cms-page-content ol { margin-bottom: 18px; padding-left: 24px; }
  </style>
</head>
<body>
  <?php include __DIR__ . '/include/header.php'; ?>

  <main class="inner-page">
    <div class="container">
      <div class="heading-hd text-center">
        <h1><?= htmlspecialchars($page['title'] ?? '', ENT_QUOTES, 'UTF-8') ?></h1>
      </div>
      <article class="cms-page-content">
        <?= $content ?>
      </article>
    </div>
  </main>

  <?php include __DIR__ . '/include/footer.php'; ?>
</body>
</html>
