<?php
require_once __DIR__ . '/include/cms.php';

$settings = cms_seo_settings();
if (!$settings['sitemap_enabled']) {
    http_response_code(404);
    exit;
}

header('Content-Type: application/xml; charset=utf-8');
header('Cache-Control: public, max-age=43200');

$entries = cms_public_sitemap_entries();
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($entries as $entry): ?>
  <url>
    <loc><?= htmlspecialchars($entry['loc'], ENT_XML1 | ENT_QUOTES, 'UTF-8') ?></loc>
    <?php if (!empty($entry['lastmod'])): ?><lastmod><?= htmlspecialchars($entry['lastmod'], ENT_XML1 | ENT_QUOTES, 'UTF-8') ?></lastmod><?php endif; ?>
  </url>
<?php endforeach; ?>
</urlset>
