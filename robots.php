<?php
require_once __DIR__ . '/include/cms.php';

header('Content-Type: text/plain; charset=utf-8');
header('Cache-Control: public, max-age=43200');

echo cms_render_robots_txt();
