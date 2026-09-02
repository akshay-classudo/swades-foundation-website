<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
require_once __DIR__ . '/include/cms.php';

$blogPosts = cms_get_posts();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Swades Foundation Blogs Publications</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/js/owlcarousel/owl.carousel.css">
  <link rel="stylesheet" href="./assets/css/aos.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom-animation.css">
  <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css">
  <link rel="icon" type="image/png" href="./assets/images/favicon.png">
  <style>
    .yt-title {
      height: 125px;
    }

    .news-logo {
      margin-top: 15px;
      height: 35px;
      display: block;
      object-fit: contain;
    }

    .blog-content p {
      margin-top: 10px;
    }

    .more-btn img {
      width: 40px;
    }

    .custom-tabs-rounded-btn .nav-pills .nav-link {
      border-radius: 70px;
    }

    /* Upgraded Card Structure for Uniform Grid Alignments */
    .featured-card {
      background: #F5F5F5;
      height: 100%;
      display: flex;
      flex-direction: column;
      border-radius: 12px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
    }
    
    .featured-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.08);
    }

    .blog-img {
      width: 100%;
      height: 220px;
      overflow: hidden;
    }

    .blog-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .blog-content {
      padding: 24px;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .blog-content small {
      color: #777;
      font-size: 0.85rem;
      margin-bottom: 8px;
      display: block;
    }

    .blog-content h5 {
      font-size: 1.2rem;
      margin-bottom: 0;
      font-weight: 600;
    }

    .blog-content p {
      height: 76px;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden; 
      margin-bottom: 20px;
      color: #444;
      font-size: 0.95rem;
      line-height: 1.5;
    }

    .read-more {
      margin-top: auto;
      text-decoration: none;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .read-more img {
      width: 16px;
      transition: transform 0.2s ease;
    }

    .read-more:hover img {
      transform: translateX(4px);
    }
  </style>
  
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5BR3T5F');</script>
  <!-- End Google Tag Manager-->

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YFG7G32BG5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-YFG7G32BG5');
  </script>

  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="facebook-domain-verification" content="aod2id14o8ub2c0dkp4tyksrlymfff" />
  <meta name="p:domain_verify" content="1ed9cb39617f70c21aa292570c39c319" />
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5BR3T5F');</script>


  <script>!function (f, b, e, v, n, t, s) {
      if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
      // System instructions trace
      n.queue = []; t = b.createElement(e); t.async = !0;
      t.src = v; s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2999132110393698');
    fbq('track', 'PageView');</script> 
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2999132110393698&ev=PageView&noscript=1" /></noscript>
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BR3T5F" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <header id="header" class="home-header inner-contact">
    <div class="container">
      <div class="header-menu">

        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="/">
            <img src="./assets/images/inner-page-logo.svg" alt="">
          </a>

          <div class="nav-container collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav innermenu navmenu mx-auto">
              <li class="nav-item"><a href="#"><span> Who we are </span>
                  <i class="fas fa-angle-down toggle-dropdown rotate"></i></a>
                <ul class="dropdown">
                  <li><a href="about-us">Our Story</a></li>
                  <li><a href="our-team">Our Team</a></li>
                  <li><a href="awards-recognition">Awards and Recognition</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="impact">Our Impact</a></li>
              <li class="nav-item"><a href="#"><span> Our Work </span>
                  <i class="fas fa-angle-down toggle-dropdown rotate"></i></a>
                <ul class="dropdown">
                  <li><a href="water-and-sanitation">Water, Sanitation & Green Initiatives</a></li>
                  <li><a href="health">Health</a></li>
                  <li><a href="educations">Education</a></li>
                  <li><a href="economic-development">Economic Development</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="dreamvillage">Swades Dream Village</a></li>
              <li class="nav-item"><a href="videos-media">Video & Media Gallery</a></li>
              <li class="nav-item"><a href="#"><span> Get Involved </span>
                  <i class="fas fa-angle-down toggle-dropdown rotate"></i></a>
                <ul class="dropdown">
                  <li><a href="csr">CSR</a></li>
                  <li><a href="volunteer">Volunteer</a></li>
                  <li><a href="careers">Careers</a></li>
                  <li><a href="Donate">Donate</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="sse">NSE | SSE</a></li>
            </ul>
            <div class="donate-button innerbtn desktop">
              <a href="Donate" class="btn">Donate <img src="./assets/images/heart.svg" alt=""></a>
            </div>
          </div>

          <div class="naviconmobile">
            <div class="donate-button innerbtn mobile">
              <a href="Donate" class="btn">Donate <img src="./assets/images/heart.svg" alt=""></a>
            </div>
            <button class="navbar-toggler navbarblack" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <div class="menu-icon">
                <span class="navicon"></span>
              </div>
            </button>
          </div>
        </nav>

      </div>
    </div>
  </header>


  <div class="media-section bg-white py-5" id="digital-media">
    <div class="container">
      <div class="coverage-section">
        <div class="heading-hd text-center mb-5">
          <h2 class="fw-bold">Blogs</h2>
        </div>

        <!-- Fully Responsive Bootstrap Grid: 1 Col on Mobile, 2 on Tablet, 3 on Desktop -->
        <div class="row g-4">
          <?php if (!empty($blogPosts)): ?>
              <?php foreach ($blogPosts as $post): ?>
              <?php
                $postSlug = $post['slug'] ?? '';
                $postTitle = $post['title'] ?? '';
                $postExcerpt = !empty($post['excerpt']) ? $post['excerpt'] : cms_excerpt($post['content'] ?? '', 28);
                $postDate = cms_format_date($post['published_at'] ?? '', 'd/m/Y');
                $postImage = cms_blog_image($post);
              ?>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="featured-card">
                  <div class="blog-img">
                    <img src="<?php echo htmlspecialchars($postImage, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($postTitle, ENT_QUOTES, 'UTF-8'); ?>">
                  </div>
                  <div class="blog-content">
                    <small><?php echo htmlspecialchars($postDate, ENT_QUOTES, 'UTF-8'); ?></small>
                    <h5><?php echo htmlspecialchars($postTitle, ENT_QUOTES, 'UTF-8'); ?></h5>
                    <p><?php echo htmlspecialchars($postExcerpt, ENT_QUOTES, 'UTF-8'); ?></p>
                    <a href="Blog-detail.php?slug=<?php echo urlencode($postSlug); ?>" class="read-more">
                      Read Blog <img src="./assets/images/Blogs/right-arrow.svg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="col-12">
              <div class="featured-card p-4 text-center">
                <h5 class="mb-2">No blog posts are available right now.</h5>
                <p class="mb-0">Please check back once the CMS has published new articles.</p>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>


  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>

  <?php include 'include/footer.php'; ?>

</body>
</html>
