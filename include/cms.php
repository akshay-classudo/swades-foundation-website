<?php

// PHP does not load a standalone frontend .env file automatically on shared hosting.
function cms_load_env_file(): void
{
    static $loaded = false;
    if ($loaded) {
        return;
    }

    $loaded = true;
    $envPath = dirname(__DIR__) . '/.env';
    if (!is_readable($envPath)) {
        return;
    }

    foreach (file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [] as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
            continue;
        }

        [$key, $value] = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);
        if ($key === '' || getenv($key) !== false) {
            continue;
        }

        if (strlen($value) >= 2 && (($value[0] === '"' && $value[-1] === '"') || ($value[0] === "'" && $value[-1] === "'"))) {
            $value = substr($value, 1, -1);
        }

        putenv($key . '=' . $value);
    }
}

cms_load_env_file();

if (!defined('CMS_DB_HOST')) {
    define('CMS_DB_HOST', getenv('CMS_DB_HOST') ?: '127.0.0.1');
}

if (!defined('CMS_DB_PORT')) {
    define('CMS_DB_PORT', getenv('CMS_DB_PORT') ?: '3306');
}

if (!defined('CMS_DB_NAME')) {
    define('CMS_DB_NAME', getenv('CMS_DB_NAME') ?: 'btowvpqp_classudo-cms');
}

if (!defined('CMS_DB_USER')) {
    define('CMS_DB_USER', getenv('CMS_DB_USER') ?: 'root');
}

if (!defined('CMS_DB_PASS')) {
    define('CMS_DB_PASS', getenv('CMS_DB_PASS') ?: '');
}

if (!defined('CMS_PUBLIC_URL')) {
    define('CMS_PUBLIC_URL', rtrim(getenv('CMS_PUBLIC_URL') ?: 'http://127.0.0.1:8000', '/'));
}

function cms_db(): ?PDO
{
    static $pdo = null;
    static $failed = false;

    if ($failed) {
        return null;
    }

    if ($pdo === null) {
        try {
            $dsn = sprintf(
                'mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4',
                CMS_DB_HOST,
                CMS_DB_PORT,
                CMS_DB_NAME
            );

            $pdo = new PDO($dsn, CMS_DB_USER, CMS_DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_TIMEOUT => 3,
            ]);
        } catch (Throwable $e) {
            $failed = true;
            error_log('CMS DB Connection Error: ' . $e->getMessage());
            return null;
        }
    }

    return $pdo;
}

function cms_asset_url(?string $path): ?string
{
    if (!$path) {
        return null;
    }

    $path = trim($path);

    if ($path === '') {
        return null;
    }

    if (preg_match('#^https?://#i', $path)) {
        return $path;
    }

    if (strpos($path, '/') === 0) {
        return $path;
    }

    $normalized = ltrim($path, './');

    if ($normalized === '') {
        return null;
    }

    if (strpos($normalized, 'assets/') === 0) {
        // CMS-managed website assets are served from Laravel public storage.
        return CMS_PUBLIC_URL . '/media-file/' . $normalized;
    }

    if (strpos($normalized, 'storage/') === 0) {
        return CMS_PUBLIC_URL . '/media-file/' . $normalized;
    }

    return CMS_PUBLIC_URL . '/media-file/' . $normalized;
}

function cms_format_date($value, string $format = 'd/m/Y'): string
{
    if (!$value) {
        return '';
    }

    try {
        $date = $value instanceof DateTimeInterface ? $value : new DateTime((string) $value);
        return $date->format($format);
    } catch (Throwable $e) {
        return (string) $value;
    }
}

function cms_excerpt(?string $content, int $words = 28): string
{
    if (!$content) {
        return '';
    }

    $text = trim(preg_replace('/\s+/', ' ', html_entity_decode(strip_tags($content), ENT_QUOTES, 'UTF-8')));

    if ($text === '') {
        return '';
    }

    $parts = preg_split('/\s+/', $text);
    if (!$parts || count($parts) <= $words) {
        return $text;
    }

    return implode(' ', array_slice($parts, 0, $words)) . '...';
}

function cms_get_posts(int $limit = 0, string $category = ''): array
{
    $db = cms_db();
    if (!$db) {
        return [];
    }

    try {
        $sql = "SELECT id, title, slug, excerpt, content, featured_image, category, tags, published_at
                FROM posts
                WHERE status = 'published'";
        $params = [];

        if ($category !== '') {
            $sql .= ' AND category = ?';
            $params[] = $category;
        }

        $sql .= ' ORDER BY published_at DESC, id DESC';

        if ($limit > 0) {
            $sql .= ' LIMIT ' . (int) $limit;
        }

        $stmt = $db->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetchAll() ?: [];
    } catch (Throwable $e) {
        error_log('CMS Error (cms_get_posts): ' . $e->getMessage());
        return [];
    }
}

function cms_get_post(string $slug): ?array
{
    $db = cms_db();
    if (!$db) {
        return null;
    }

    try {
        $stmt = $db->prepare(
            "SELECT id, title, slug, excerpt, content, featured_image, category, tags, published_at, meta_title, meta_description, meta_keywords, og_title, og_description, og_image, canonical_url, `index`, `follow`
             FROM posts
             WHERE status = 'published' AND slug = ?
             LIMIT 1"
        );
        $stmt->execute([$slug]);

        $post = $stmt->fetch();
        return $post ?: null;
    } catch (Throwable $e) {
        error_log('CMS Error (cms_get_post): ' . $e->getMessage());
        return null;
    }
}

function cms_blog_image(array $post, string $fallback = './assets/images/Blogs/Intersect.jpg'): string
{
    $image = cms_asset_url($post['featured_image'] ?? null);
    return $image ?: $fallback;
}

function cms_get_team_members(): array
{
    $db = cms_db();
    if (!$db) {
        return [];
    }

    try {
        $stmt = $db->query(
            "SELECT id, name, slug, role, department, bio, photo, email, phone, linkedin_url, twitter_url, github_url
             FROM team_members
             WHERE is_visible = 1
             ORDER BY sort_order ASC, name ASC"
        );

        return $stmt->fetchAll() ?: [];
    } catch (Throwable $e) {
        error_log('CMS Error (cms_get_team_members): ' . $e->getMessage());
        return [];
    }
}

function cms_get_media_coverage(string $type = '', int $limit = 0): array
{
    $db = cms_db();
    if (!$db) {
        return [];
    }

    try {
        $sql = "SELECT type, title, description, source, source_logo, thumbnail, external_url, embed_url, published_date
                FROM news_media
                WHERE active = 1";
        $params = [];

        if (in_array($type, ['video', 'digital', 'print'], true)) {
            $sql .= ' AND type = ?';
            $params[] = $type;
        }

        $sql .= ' ORDER BY sort_order ASC, published_date DESC, id DESC';

        if ($limit > 0) {
            $sql .= ' LIMIT ' . (int) $limit;
        }

        $stmt = $db->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetchAll() ?: [];
    } catch (Throwable $e) {
        error_log('CMS Error (cms_get_media_coverage): ' . $e->getMessage());
        return [];
    }
}

function cms_media_image(array $item, string $fallback = './assets/images/Blogs/Intersect.jpg'): string
{
    $image = cms_asset_url($item['thumbnail'] ?? null);
    return $image ?: $fallback;
}

function cms_get_logos(string $type, int $limit = 0): array
{
    if (!in_array($type, ['partner', 'believer'], true)) {
        return [];
    }

    $db = cms_db();
    if (!$db) {
        return [];
    }

    try {
        $sql = "SELECT logo_path, alt_text
                FROM believers
                WHERE type = ? AND active = 1
                ORDER BY sort_order ASC, id ASC";

        if ($limit > 0) {
            $sql .= ' LIMIT ' . (int) $limit;
        }

        $stmt = $db->prepare($sql);
        $stmt->execute([$type]);

        return $stmt->fetchAll() ?: [];
    } catch (Throwable $e) {
        error_log('CMS Error (cms_get_logos): ' . $e->getMessage());
        return [];
    }
}

function cms_logo_slides(string $type, int $perSlide): array
{
    return array_chunk(cms_get_logos($type), max(1, $perSlide));
}

function cms_api_request(string $method, string $path, ?array $payload = null): ?array
{
    $url = CMS_PUBLIC_URL . '/api/v1/' . ltrim($path, '/');
    $headers = ['Accept: application/json', 'Content-Type: application/json'];
    $body = $payload !== null ? json_encode($payload) : null;

    if (function_exists('curl_init')) {
        $curl = curl_init($url);
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => strtoupper($method),
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_CONNECTTIMEOUT => 3,
            CURLOPT_TIMEOUT => 8,
        ]);
        if ($body !== null) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
        }

        $response = curl_exec($curl);
        $status = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($response !== false && $status >= 200 && $status < 300) {
            $decoded = json_decode($response, true);
            return is_array($decoded) ? $decoded : null;
        }
    }

    return null;
}

function cms_get_site_settings(): array
{
    static $settings = null;
    if ($settings !== null) {
        return $settings;
    }

    $response = cms_api_request('GET', 'site');
    $settings = is_array($response['data'] ?? null) ? $response['data'] : [];
    return $settings;
}

function cms_get_impact_stats(): array
{
    $db = cms_db();
    if (!$db) {
        return [];
    }

    try {
        $stmt = $db->query('SELECT stat_key, label, value, icon, description FROM impact_stats ORDER BY id ASC');
        $stats = [];
        foreach ($stmt->fetchAll() ?: [] as $stat) {
            $stats[$stat['stat_key']] = $stat;
        }
        return $stats;
    } catch (Throwable $e) {
        error_log('CMS Error (cms_get_impact_stats): ' . $e->getMessage());
        return [];
    }
}

function cms_stat_value(array $stats, string $key, string $fallback = ''): string
{
    return (string) ($stats[$key]['value'] ?? $fallback);
}

function cms_get_awards(): array
{
    $db = cms_db();
    if (!$db) {
        return [];
    }

    try {
        $stmt = $db->query('SELECT year, title, image FROM awards WHERE active = 1 ORDER BY sort_order ASC, id DESC');
        $awards = [];
        foreach ($stmt->fetchAll() ?: [] as $award) {
            $award['image'] = cms_asset_url($award['image'] ?? null);
            $awards[] = $award;
        }
        return $awards;
    } catch (Throwable $e) {
        error_log('CMS Error (cms_get_awards): ' . $e->getMessage());
        return [];
    }
}

function cms_get_documents(?string $category = null): array
{
    $db = cms_db();
    if (!$db) {
        return [];
    }

    try {
        $sql = 'SELECT category, label, year, file_path FROM documents WHERE active = 1';
        $params = [];
        if ($category !== null && $category !== '') {
            $sql .= ' AND category = :category';
            $params['category'] = $category;
        }
        $sql .= ' ORDER BY sort_order ASC, year DESC, id DESC';
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        $documents = [];
        foreach ($stmt->fetchAll() ?: [] as $document) {
            $document['file_url'] = cms_asset_url($document['file_path'] ?? null);
            $documents[] = $document;
        }
        return $documents;
    } catch (Throwable $e) {
        error_log('CMS Error (cms_get_documents): ' . $e->getMessage());
        return [];
    }
}

function cms_submit_contact(array $payload): ?array
{
    return cms_api_request('POST', 'contact', $payload);
}

function cms_get_jobs(): array
{
    $response = cms_api_request('GET', 'jobs');
    return is_array($response['data']['items'] ?? null) ? $response['data']['items'] : [];
}

function cms_current_url(): string
{
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $uri = $_SERVER['REQUEST_URI'] ?? '';

    return $scheme . '://' . $host . $uri;
}

function cms_public_base_url(): string
{
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? parse_url(CMS_PUBLIC_URL, PHP_URL_HOST) ?? 'localhost';

    return $scheme . '://' . $host;
}

function cms_navigation_sections(): array
{
    return [
        [
            'label' => 'Who we are',
            'children' => [
                ['label' => 'Our Story', 'url' => 'about-us'],
                ['label' => 'Our Team', 'url' => 'our-team'],
                ['label' => 'Awards and Recognition', 'url' => 'awards-recognition'],
            ],
        ],
        ['label' => 'Our Impact', 'url' => 'impact'],
        [
            'label' => 'Our Work',
            'children' => [
                ['label' => 'Water, Sanitation & Green Initiatives', 'url' => 'water-and-sanitation'],
                ['label' => 'Health', 'url' => 'health'],
                ['label' => 'Education', 'url' => 'educations'],
                ['label' => 'Economic Development', 'url' => 'economic-development'],
            ],
        ],
        ['label' => 'Swades Dream Village', 'url' => 'dreamvillage'],
        ['label' => 'Video & Media Gallery', 'url' => 'videos-media'],
        [
            'label' => 'Get Involved',
            'children' => [
                ['label' => 'CSR', 'url' => 'csr'],
                ['label' => 'Volunteer', 'url' => 'volunteer'],
                ['label' => 'Careers', 'url' => 'careers'],
                ['label' => 'Donate', 'url' => 'Donate'],
            ],
        ],
        ['label' => 'NSE | SSE', 'url' => 'sse'],
    ];
}

function cms_get_page(string $slug): ?array
{
    $db = cms_db();
    if (!$db) {
        return null;
    }

    try {
        $stmt = $db->prepare(
            "SELECT id, title, slug, content, meta_title, meta_description, meta_keywords, og_title, og_description, og_image, canonical_url, `index`, `follow`
             FROM pages
             WHERE status = 'published' AND slug = ?
             LIMIT 1"
        );
        $stmt->execute([$slug]);

        $page = $stmt->fetch();
        return $page ?: null;
    } catch (Throwable $e) {
        error_log('CMS Error (cms_get_page): ' . $e->getMessage());
        return null;
    }
}

/**
 * Prevent an existing CMS-backed URL from rendering when its CMS record is unpublished.
 * Missing records and unavailable CMS databases keep the existing fallback behavior.
 */
function cms_require_published_page(string $slug): void
{
    $db = cms_db();
    if (!$db) {
        return;
    }

    try {
        $stmt = $db->prepare('SELECT status FROM pages WHERE slug = ? LIMIT 1');
        $stmt->execute([$slug]);
        $page = $stmt->fetch();

        if ($page && ($page['status'] ?? '') !== 'published') {
            http_response_code(404);
            require dirname(__DIR__) . '/404.php';
            exit;
        }
    } catch (Throwable $e) {
        error_log('CMS Error (cms_require_published_page): ' . $e->getMessage());
    }
}

function cms_page_field(?array $page, string $field, string $fallback = ''): string
{
    $value = is_array($page) ? ($page[$field] ?? '') : '';
    $value = is_string($value) ? trim($value) : '';
    return $value !== '' ? $value : $fallback;
}

function cms_page_content(?array $page, string $fallback = ''): string
{
    return cms_page_field($page, 'content', $fallback);
}

function cms_page_section(?array $page, string $section, string $fallback = ''): string
{
    $content = cms_page_content($page);
    if ($content === '') {
        return $fallback;
    }

    $section = trim($section);
    if ($section === '') {
        return cms_page_content($page, $fallback);
    }

    $pattern = sprintf(
        '/<!--\s*cms-section:%s\s*-->(.*?)<!--\s*\/cms-section:%s\s*-->/s',
        preg_quote($section, '/'),
        preg_quote($section, '/')
    );

    if (preg_match($pattern, $content, $matches)) {
        $sectionContent = trim($matches[1]);
        if ($sectionContent !== '') {
            return $sectionContent;
        }
    }

    return $fallback;
}

function cms_seo_context_from_request(): array
{
    $settings = cms_seo_settings();
    $script = basename(parse_url($_SERVER['SCRIPT_NAME'] ?? '', PHP_URL_PATH) ?: '');
    $slug = strtolower(pathinfo($script, PATHINFO_FILENAME));
    $querySlug = trim((string) ($_GET['slug'] ?? ''));

    if ($script === 'Blog-detail.php' && $querySlug !== '') {
        $post = cms_get_post($querySlug);
        if ($post) {
            return [
                'type' => 'post',
                'record' => $post,
                'title' => $post['meta_title'] ?: $post['title'],
                'description' => $post['meta_description'] ?: cms_excerpt($post['excerpt'] ?: ($post['content'] ?? ''), 28),
                'keywords' => $post['meta_keywords'] ?? '',
                'canonical' => $post['canonical_url'] ?: cms_current_url(),
                'image' => cms_blog_image($post, $settings['default_og_image'] ?: './assets/images/Blogs/Intersect.jpg'),
                'robots' => !empty($post['index']) || !isset($post['index']) ? 'index,follow' : 'noindex,follow',
                'site_name' => $settings['site_name'],
                'og_type' => 'article',
                'og_title' => $post['og_title'] ?: ($post['meta_title'] ?: $post['title']),
                'og_description' => $post['og_description'] ?: ($post['meta_description'] ?: cms_excerpt($post['excerpt'] ?: ($post['content'] ?? ''), 28)),
            ];
        }
    }

    $page = null;
    foreach (array_values(array_unique([$slug, 'home', str_replace('_', '-', $slug), str_replace(['.php', '_'], ['', '-'], $slug)])) as $candidate) {
        if ($candidate === '' || in_array($candidate, ['index', '404', 'robots', 'sitemap'], true)) {
            continue;
        }

        $page = cms_get_page($candidate);
        if ($page) {
            break;
        }
    }

    $pageTitle = $page['meta_title'] ?? $page['title'] ?? '';
    if ($pageTitle === '') {
        $pageTitle = cms_page_label_from_script($script);
    }

    $description = $page['meta_description'] ?? '';
    if ($description === '' && !empty($page['content'])) {
        $description = cms_excerpt($page['content'], 28);
    }

    $keywords = $page['meta_keywords'] ?? '';
    $canonical = $page['canonical_url'] ?? '';
    $image = $page['og_image'] ?? '';

    return [
        'type' => 'page',
        'record' => $page,
        'title' => $pageTitle,
        'description' => $description ?: ($settings['default_meta_description'] ?? ''),
        'keywords' => $keywords ?: ($settings['default_keywords'] ?? ''),
        'canonical' => $canonical ?: cms_current_url(),
        'image' => cms_asset_url($image) ?: ($settings['default_og_image'] ?: './assets/images/Blogs/Intersect.jpg'),
        'robots' => !isset($page['index']) || (bool) $page['index'] ? 'index,follow' : 'noindex,follow',
        'site_name' => $settings['site_name'],
        'og_type' => 'website',
        'og_title' => $page['og_title'] ?? $pageTitle,
        'og_description' => $page['og_description'] ?? ($description ?: ($settings['default_meta_description'] ?? '')),
    ];
}

function cms_page_label_from_script(string $script): string
{
    $slug = strtolower(pathinfo($script, PATHINFO_FILENAME));
    $slug = str_replace(['_', '.php'], ['-', ''], $slug);
    $slug = trim($slug, '-');

    if ($slug === '' || $slug === 'index') {
        return 'Swades Foundation';
    }

    $label = ucwords(str_replace('-', ' ', $slug));
    $label = preg_replace('/\s+/', ' ', $label);

    return trim($label);
}

function cms_get_media_by_id(int $id): ?array
{
    $db = cms_db();
    if (!$db) {
        return null;
    }

    try {
        $stmt = $db->prepare("SELECT id, name, path, alt, folder FROM media WHERE id = ? LIMIT 1");
        $stmt->execute([$id]);
        $media = $stmt->fetch();

        if ($media) {
            $media['url'] = cms_asset_url($media['path'] ?? null);
        }

        return $media ?: null;
    } catch (Throwable $e) {
        error_log('CMS Error (cms_get_media_by_id): ' . $e->getMessage());
        return null;
    }
}

function cms_get_media_by_name(string $name): ?array
{
    $db = cms_db();
    if (!$db) {
        return null;
    }

    try {
        $stmt = $db->prepare("SELECT id, name, path, alt, folder FROM media WHERE name = ? LIMIT 1");
        $stmt->execute([$name]);
        $media = $stmt->fetch();

        if ($media) {
            $media['url'] = cms_asset_url($media['path'] ?? null);
        }

        return $media ?: null;
    } catch (Throwable $e) {
        error_log('CMS Error (cms_get_media_by_name): ' . $e->getMessage());
        return null;
    }
}

function cms_get_media_by_folder(string $folder, int $limit = 0): array
{
    $db = cms_db();
    if (!$db) {
        return [];
    }

    try {
        $sql = "SELECT id, name, path, alt, folder FROM media WHERE folder = ?";
        $params = [$folder];

        $sql .= ' ORDER BY id ASC';

        if ($limit > 0) {
            $sql .= ' LIMIT ' . (int) $limit;
        }

        $stmt = $db->prepare($sql);
        $stmt->execute($params);

        $media = $stmt->fetchAll() ?: [];
        foreach ($media as &$item) {
            $item['url'] = cms_asset_url($item['path'] ?? null);
        }

        return $media;
    } catch (Throwable $e) {
        error_log('CMS Error (cms_get_media_by_folder): ' . $e->getMessage());
        return [];
    }
}

function cms_get_media_by_path(string $path): ?array
{
    static $mediaCache = [];
    $db = cms_db();
    if (!$db) {
        return null;
    }

    $normalizedPath = ltrim(str_replace('\\', '/', trim($path)), './');
    if ($normalizedPath === '') {
        return null;
    }

    if (array_key_exists($normalizedPath, $mediaCache)) {
        return $mediaCache[$normalizedPath];
    }

    try {
        $stmt = $db->prepare("SELECT id, name, path, alt, folder FROM media WHERE path = ? LIMIT 1");
        $stmt->execute([$normalizedPath]);
        $media = $stmt->fetch();

        if ($media) {
            $media['url'] = cms_asset_url($media['path'] ?? null);
        }

        $mediaCache[$normalizedPath] = $media ?: null;
        return $mediaCache[$normalizedPath];
    } catch (Throwable $e) {
        error_log('CMS Error (cms_get_media_by_path): ' . $e->getMessage());
        $mediaCache[$normalizedPath] = null;
        return null;
    }
}

function cms_media_alt(string $path, string $fallback = ''): string
{
    static $altCache = [];
    $normalizedPath = ltrim(str_replace('\\', '/', trim($path)), './');

    if ($normalizedPath === '') {
        return $fallback;
    }

    if (!array_key_exists($normalizedPath, $altCache)) {
        $media = cms_get_media_by_path($normalizedPath);
        $altCache[$normalizedPath] = trim((string) ($media['alt'] ?? ''));
    }

    return $altCache[$normalizedPath] !== '' ? $altCache[$normalizedPath] : $fallback;
}

function cms_media_src(string $path, string $fallback = ''): string
{
    static $srcCache = [];
    $normalizedPath = ltrim(str_replace('\\', '/', trim($path)), './');

    if ($normalizedPath === '') {
        return $fallback;
    }

    if (!array_key_exists($normalizedPath, $srcCache)) {
        $media = cms_get_media_by_path($normalizedPath);
        $srcCache[$normalizedPath] = $media['url'] ?? '';
    }

    return $srcCache[$normalizedPath] !== '' ? $srcCache[$normalizedPath] : $fallback;
}

function cms_media_image_tag(string $path, string $fallbackAlt = '', array $attributes = []): string
{
    $src = cms_media_src($path, $path);
    $alt = cms_media_alt($path, $fallbackAlt);

    if ($src === '') {
        return '';
    }

    return cms_image_tag($src, $alt, $attributes);
}

function cms_image_tag(string $imagePath, string $altText = '', array $attributes = []): string
{
    $url = cms_asset_url($imagePath);
    if (!$url) {
        return '';
    }

    $alt = htmlspecialchars($altText ?? '', ENT_QUOTES, 'UTF-8');
    $class = isset($attributes['class']) ? ' class="' . htmlspecialchars($attributes['class'], ENT_QUOTES, 'UTF-8') . '"' : '';
    $style = isset($attributes['style']) ? ' style="' . htmlspecialchars($attributes['style'], ENT_QUOTES, 'UTF-8') . '"' : '';
    $id = isset($attributes['id']) ? ' id="' . htmlspecialchars($attributes['id'], ENT_QUOTES, 'UTF-8') . '"' : '';
    $width = isset($attributes['width']) ? ' width="' . htmlspecialchars($attributes['width'], ENT_QUOTES, 'UTF-8') . '"' : '';
    $height = isset($attributes['height']) ? ' height="' . htmlspecialchars($attributes['height'], ENT_QUOTES, 'UTF-8') . '"' : '';
    $loading = isset($attributes['loading']) ? ' loading="' . htmlspecialchars($attributes['loading'], ENT_QUOTES, 'UTF-8') . '"' : '';

    return '<img src="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" alt="' . $alt . '"' . $class . $style . $id . $width . $height . $loading . '>';
}

function cms_frontend_media_buffer(string $html): string
{
    return preg_replace_callback(
        '~<img\b([^>]*?\bsrc=["\'])(\.?/assets/images/[^"\']+)(["\'][^>]*)>~i',
        static function (array $matches): string {
            $path = $matches[2];
            $src = cms_media_src($path, $path);
            $alt = cms_media_alt($path, '');
            $attributes = $matches[1] . htmlspecialchars($src, ENT_QUOTES, 'UTF-8') . $matches[3];

            if ($alt !== '') {
                $escapedAlt = htmlspecialchars($alt, ENT_QUOTES, 'UTF-8');
                if (preg_match('~\balt=["\'][^"\']*["\']~i', $attributes)) {
                    $attributes = preg_replace(
                        '~\balt=["\'][^"\']*["\']~i',
                        'alt="' . $escapedAlt . '"',
                        $attributes,
                        1
                    );
                } else {
                    $attributes .= ' alt="' . $escapedAlt . '"';
                }
            }

            return '<img' . $attributes . '>';
        },
        $html
    ) ?: $html;
}

function cms_seo_settings(): array
{
    $settings = cms_get_site_settings();
    $seo = is_array($settings['seo'] ?? null) ? $settings['seo'] : [];
    $features = is_array($settings['features'] ?? null) ? $settings['features'] : [];

    return [
        'site_name' => (string) ($settings['site_name'] ?? 'Swades Foundation'),
        'title_format' => (string) ($settings['title_format'] ?? '%title% | Swades Foundation'),
        'default_meta_description' => (string) ($settings['default_meta_description'] ?? ''),
        'default_keywords' => (string) ($settings['default_keywords'] ?? ''),
        'default_og_image' => (string) ($settings['default_og_image'] ?? ''),
        'robots_content' => (string) ($seo['robots_content'] ?? ''),
        'sitemap_url' => (string) ($seo['sitemap_url'] ?? rtrim(cms_public_base_url(), '/') . '/sitemap.xml'),
        'schema_url' => (string) ($seo['schema_url'] ?? cms_public_base_url()),
        'redirects' => is_array($seo['redirects'] ?? null) ? $seo['redirects'] : [],
        'sitemap_enabled' => (bool) ($features['sitemap_enabled'] ?? true),
    ];
}

function cms_render_seo_tags(array $context = []): string
{
    $settings = cms_seo_settings();
    $defaultTitle = cms_page_label_from_script($_SERVER['SCRIPT_NAME'] ?? '');
    $rawTitle = trim((string) ($context['title'] ?? $defaultTitle));
    $titleFormat = $settings['title_format'] ?: '%title% | ' . $settings['site_name'];
    $fullTitle = str_replace(
        ['%title%', '%site_name%'],
        [$rawTitle, $settings['site_name']],
        $titleFormat
    );

    $description = trim((string) ($context['description'] ?? $settings['default_meta_description']));
    $keywords = trim((string) ($context['keywords'] ?? $settings['default_keywords']));
    $canonical = trim((string) ($context['canonical'] ?? cms_current_url()));
    $image = trim((string) ($context['image'] ?? $settings['default_og_image']));
    $robots = trim((string) ($context['robots'] ?? 'index,follow'));
    $siteName = trim((string) ($context['site_name'] ?? $settings['site_name']));
    $ogType = trim((string) ($context['og_type'] ?? 'website'));
    $ogTitle = trim((string) ($context['og_title'] ?? $fullTitle));
    $ogDescription = trim((string) ($context['og_description'] ?? $description));

    if ($image !== '' && !preg_match('#^https?://#i', $image)) {
        $image = cms_asset_url($image) ?: $image;
    }

    $tags = [];
    $tags[] = '<title>' . htmlspecialchars($fullTitle, ENT_QUOTES, 'UTF-8') . '</title>';

    if ($description !== '') {
        $tags[] = '<meta name="description" content="' . htmlspecialchars($description, ENT_QUOTES, 'UTF-8') . '">';
    }

    if ($keywords !== '') {
        $tags[] = '<meta name="keywords" content="' . htmlspecialchars($keywords, ENT_QUOTES, 'UTF-8') . '">';
    }

    if ($canonical !== '') {
        $tags[] = '<link rel="canonical" href="' . htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') . '">';
    }

    $tags[] = '<meta name="robots" content="' . htmlspecialchars($robots, ENT_QUOTES, 'UTF-8') . '">';
    $tags[] = '<meta property="og:site_name" content="' . htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8') . '">';
    $tags[] = '<meta property="og:title" content="' . htmlspecialchars($ogTitle, ENT_QUOTES, 'UTF-8') . '">';
    if ($ogDescription !== '') {
        $tags[] = '<meta property="og:description" content="' . htmlspecialchars($ogDescription, ENT_QUOTES, 'UTF-8') . '">';
    }
    if ($canonical !== '') {
        $tags[] = '<meta property="og:url" content="' . htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') . '">';
    }
    $tags[] = '<meta property="og:type" content="' . htmlspecialchars($ogType, ENT_QUOTES, 'UTF-8') . '">';
    if ($image !== '') {
        $tags[] = '<meta property="og:image" content="' . htmlspecialchars($image, ENT_QUOTES, 'UTF-8') . '">';
    }

    $tags[] = '<meta name="twitter:card" content="' . ($image !== '' ? 'summary_large_image' : 'summary') . '">';
    $tags[] = '<meta name="twitter:title" content="' . htmlspecialchars($ogTitle, ENT_QUOTES, 'UTF-8') . '">';
    if ($ogDescription !== '') {
        $tags[] = '<meta name="twitter:description" content="' . htmlspecialchars($ogDescription, ENT_QUOTES, 'UTF-8') . '">';
    }
    if ($image !== '') {
        $tags[] = '<meta name="twitter:image" content="' . htmlspecialchars($image, ENT_QUOTES, 'UTF-8') . '">';
    }

    return implode("\n", $tags) . "\n";
}

function cms_frontend_seo_buffer(string $html): string
{
    $html = cms_frontend_media_buffer($html);

    if ($html === '' || stripos($html, '<html') === false || stripos($html, '<head') === false) {
        return $html;
    }

    $title = '';
    if (preg_match('~<title>(.*?)</title>~is', $html, $matches)) {
        $title = html_entity_decode(trim($matches[1]), ENT_QUOTES, 'UTF-8');
    }

    $context = cms_seo_context_from_request();
    if ($title !== '' && empty($context['title'])) {
        $context['title'] = $title;
    }

    $seoTags = cms_render_seo_tags($context);

    $patterns = [
        '~<title>.*?</title>\s*~is',
        '~<meta[^>]+name=["\']description["\'][^>]*>\s*~is',
        '~<meta[^>]+name=["\']keywords["\'][^>]*>\s*~is',
        '~<meta[^>]+name=["\']robots["\'][^>]*>\s*~is',
        '~<link[^>]+rel=["\']canonical["\'][^>]*>\s*~is',
        '~<meta[^>]+property=["\']og:[^"\']+["\'][^>]*>\s*~is',
        '~<meta[^>]+name=["\']twitter:[^"\']+["\'][^>]*>\s*~is',
    ];

    $html = preg_replace($patterns, '', $html);

    if (preg_match('~<meta[^>]+charset[^>]*>\s*~i', $html, $matches, PREG_OFFSET_CAPTURE)) {
        $insertPos = $matches[0][1] + strlen($matches[0][0]);
        return substr($html, 0, $insertPos) . "\n" . $seoTags . substr($html, $insertPos);
    }

    return preg_replace('~<head([^>]*)>~i', '<head$1>' . "\n" . $seoTags, $html, 1) ?: $html;
}

function cms_boot_frontend_seo(): void
{
    if (PHP_SAPI === 'cli') {
        return;
    }

    // Keep our callback active even when PHP or the host has already opened a buffer.
    ob_start('cms_frontend_seo_buffer');
}

cms_boot_frontend_seo();
