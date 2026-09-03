<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
require_once __DIR__ . '/include/cms.php';

$featuredBlogs = cms_get_posts(3);
$cmsDigitalCoverage = cms_get_media_coverage('digital', 4);
$cmsPrintCoverage = cms_get_media_coverage('print', 4);
$cmsVideoCoverage = cms_get_media_coverage('video', 4);
$cmsVideosMediaPage = cms_get_page('videos-media');
?>
<!DOCTYPE html>
<html>

<head>
  <title><?= htmlspecialchars(cms_page_field($cmsVideosMediaPage, 'meta_title', 'Swades Foundation Media Publications'), ENT_QUOTES, 'UTF-8') ?></title>
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
    }

    .blog-content p {
      margin-top: 10px;
    }

    .more-btn img {
      width: 40px;
    }

    .gridlayer4 { 
      gap: 20px 20px;
    }
    .custom-tabs-rounded-btn .nav-pills .nav-link{
      border-radius: 70px;
      background-color: #e4671a;
    }
    /* print-media-card */
      .featured-card.print-media-card .blog-img a{display: block;}
      .featured-card.print-media-card .blog-img a img{height: 315px;object-fit: cover;object-position:top;border: 1px solid #dddddd;}
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
      n.queue = []; t = b.createElement(e); t.async = !0;
      t.src = v; s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2999132110393698');
    fbq('track', 'PageView');</script> <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=2999132110393698&ev=PageView&noscript=1" /></noscript>
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BR3T5F" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
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
            <button class="navbar-toggler navbarblack" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapsibleNavbar">
              <div class="menu-icon">
                <span class="navicon"></span>
              </div>
            </button>
          </div>
        </nav>

      </div>
    </div>
  </header><!----home-header-->


  <div class="impact-section blogs-pages" id="videos">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>Videos</h2>
      </div><!--heading-hd-->
      <?php if ($cmsVideoCoverage): ?>
      <div class="gridlayer4">
        <?php foreach ($cmsVideoCoverage as $cmsMediaItem): ?>
          <?php $cmsVideoLink = $cmsMediaItem['external_url'] ?: $cmsMediaItem['embed_url']; ?>
          <div class="featured-card">
            <div class="blog-img">
              <img src="<?= htmlspecialchars(cms_media_image($cmsMediaItem), ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($cmsMediaItem['title'], ENT_QUOTES, 'UTF-8') ?>">
              <?php if ($cmsVideoLink): ?>
                <div class="thumbnail"><a href="<?= htmlspecialchars($cmsVideoLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/Blogs/youtube.svg" alt="Watch video"></a></div>
              <?php endif; ?>
            </div>
            <div class="blog-content yt-title"><p><?= htmlspecialchars($cmsMediaItem['title'], ENT_QUOTES, 'UTF-8') ?></p></div>
          </div>
        <?php endforeach; ?>
      </div>
      <?php else: ?>
      <div class="gridlayer4">
        <div class="featured-card">
          <div class="blog-img">
            <img src="./assets/images/Blogs/y-1.jpg" alt="">
            <div class="thumbnail">
              <a href="https://www.youtube.com/watch?v=3ZyrL-OOgik&t=100s - CNBC" target="_blank"><img
                  src="./assets/images/Blogs/youtube.svg" alt=""></a>
            </div>
          </div>
          <div class="blog-content yt-title">
            <p>A Ground Report On Ronnie & Zarina Screwvala's Swades Foundation & How It's Empowering Rural India</p>
          </div>
        </div>
        <div class="featured-card">
          <div class="blog-img">
            <img src="./assets/images/Blogs/y-2.jpg" alt="">
            <div class="thumbnail">
              <a href="https://www.youtube.com/watch?v=3Yu5R0KKgS8" target="_blank"><img
                  src="./assets/images/Blogs/youtube.svg" alt=""></a>
            </div>
          </div>
          <div class="blog-content yt-title">
            <p>Swades Founders Receiving Prestigious #FILA2024 Award</p>
          </div>
        </div>
        <div class="featured-card">
          <div class="blog-img">
            <img src="./assets/images/Blogs/y-3.jpg" alt="">
            <div class="thumbnail">
              <a href="https://www.youtube.com/watch?v=vfhgkRPXUqU" target="_blank"><img
                  src="./assets/images/Blogs/youtube.svg" alt=""></a>
            </div>
          </div>
          <div class="blog-content yt-title">
            <p>How water touched lives in Gotvihira</p>
          </div>
        </div>
        <div class="featured-card">
          <div class="blog-img">
            <img src="./assets/images/Blogs/y-4.jpg" alt="">
            <div class="thumbnail">
              <a href="https://www.youtube.com/watch?v=AVi918xZUWo" target="_blank"><img
                  src="./assets/images/Blogs/youtube.svg" alt=""></a>
            </div>
          </div>
          <div class="blog-content yt-title">
            <p>Inside Swades Dream Village: A Model for Community-Driven Change | Swades Foundation</p>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <div class="more-btn text-center">
        <a href="https://www.youtube.com/@TheSwadesFoundation" target="_blank" class="btn"><img
            src="./assets/images/Blogs/youtube.svg" alt=""> Visit Our Youtube Channel</a>
      </div>
    </div>
  </div><!---impact-section-->

  <div class="media-section" id="media">
    <div class="container">
      <div class="coverage-section">
        <div class="heading-hd mb-3">
          <h2>Media Gallery</h2>
        </div><!--heading-hd-->

        <div class="custom-tabs custom-tabs-rounded-btn">
          <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-digital-media-tab" data-bs-toggle="pill"
                data-bs-target="#pills-digital-media" type="button" role="tab" aria-controls="pills-digital-media"
                aria-selected="false">Digital Media</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-print-media-tab" data-bs-toggle="pill"
                data-bs-target="#pills-print-media" type="button" role="tab" aria-controls="pills-print-media"
                aria-selected="false">Print Media</button>
            </li>

          </ul>
        </div>

        <div class="tab-content" id="pills-tab2Content">

          <div class="tab-pane fade show active" id="pills-digital-media" role="tabpanel"
            aria-labelledby="pills-digital-media-tab">
            <?php if ($cmsDigitalCoverage): ?>
            <div class="gridlayer4">
              <?php foreach ($cmsDigitalCoverage as $cmsMediaItem): ?>
                <div class="featured-card">
                  <div class="blog-img"><img src="<?= htmlspecialchars(cms_media_image($cmsMediaItem), ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($cmsMediaItem['title'], ENT_QUOTES, 'UTF-8') ?>"></div>
                  <div class="blog-content">
                    <small><?= htmlspecialchars(cms_format_date($cmsMediaItem['published_date'], 'd/m/Y'), ENT_QUOTES, 'UTF-8') ?></small>
                    <?php if (!empty($cmsMediaItem['source_logo'])): ?><img src="<?= htmlspecialchars(cms_asset_url($cmsMediaItem['source_logo']), ENT_QUOTES, 'UTF-8') ?>" class="news-logo" alt=""><?php endif; ?>
                    <p><?= htmlspecialchars($cmsMediaItem['title'], ENT_QUOTES, 'UTF-8') ?></p>
                    <?php $cmsMediaLink = $cmsMediaItem['external_url'] ?: $cmsMediaItem['embed_url']; ?>
                    <?php if ($cmsMediaLink): ?><a href="<?= htmlspecialchars($cmsMediaLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a><?php endif; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <?php else: ?>
            <div class="gridlayer4">
                
             
             <div class="featured-card">
            <div class="blog-img">
              <img src="https://images.indianexpress.com/2026/08/Mangesh-Wange-CEO-Swades-Foundation.jpg?w=1024" alt="">
            </div>
            <div class="blog-content">
              <small>08/08/2026</small>
              <img src="https://indianexpress.com/wp-content/themes/indianexpress/images/indian-express-logo-n.svg" class="news-logo">
              <p>Tech should work even in remote regions for impact: Mangesh Wange, CEO, Swades Foundation</p>
              <br />
              <a href="https://swadesfoundation.org/Mangesh-Wange-Swades-Foundation-Interview.pdf"
                target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                  alt=""></a>
            </div>
          </div>
            
               
    
             <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/social-new-digital-media.avif" alt="">
            </div>
            <div class="blog-content">
              <small>22/06/2026</small>
              <h5>Social Story</h5>
              
              <img src="./assets/images/Blogs/logo_socialstory.svg" class="news-logo">
              <p>Social sector thrives on collaboration, not competition</p>
              <br />
              <a href="https://yourstory.com/socialstory/2026/06/social-sector-thrives-on-collaboration-not-competition"
                target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                  alt=""></a>
            </div>
          </div>
          
          
          <div class="featured-card">
            <div class="blog-img">
              <img src="https://bl-i.thgim.com/public/news/education/1l9r9b/article71108980.ece/alternates/LANDSCAPE_1200/Oracle%20Swades.JPG" alt="">
            </div>
            <div class="blog-content">
              <small>17/06/2026</small>
              <img src="./assets/images/Blogs/thbl.svg" class="news-logo">
              <p>Oracle,Swades Foundation rural livelihoods programme helps women in MH</p>
              <br />
              <a href="https://www.thehindubusinessline.com/economy/agri-business/oracle-swades-foundation-rural-livelihoods-programme-helps-women-in-maharashtra/article71108986.ece"
                class="read-more" target="_blank">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                  alt=""></a>
            </div>
          </div>

                
                   
                  <div class="featured-card">
                <div class="blog-img">
                  <img src="https://thelogicalindian.com/wp-content/uploads/2026/02/Dream-Village-Celebration-in-Nagloli-Raigad-1-1024x683.jpg.webp" alt="">
                </div>
                <div class="blog-content">
                  <small>27/02/2026</small>
                  <h5>The logical Indian</h5>
                  <img src="https://thelogicalindian.com/wp-content/uploads/2024/10/the-logical-indian-logo.png.webp" class="news-logo">
                  <p>What Happens When Villages Lead Their Own Change</p>
                  <br />
                  <a href="https://thelogicalindian.com/what-happens-when-villages-lead-their-own-change-inside-swades-foundations-community-led-model-of-rural-transformation/"
                    class="read-more" target="_blank">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                      alt=""></a>
                </div>
              </div>
              
                
            </div>

            <?php endif; ?>
            <div class="more-btn text-center">
              <a href="digital-media"  class="btn">View More</a>
            </div>
          </div> 
          <div class="tab-pane fade" id="pills-print-media" role="tabpanel" aria-labelledby="pills-print-media-tab">
            <?php if ($cmsPrintCoverage): ?>
            <div class="gridlayer4">
              <?php foreach ($cmsPrintCoverage as $cmsMediaItem): ?>
                <?php $cmsMediaLink = $cmsMediaItem['external_url'] ?: cms_media_image($cmsMediaItem); ?>
                <div class="featured-card print-media-card">
                  <div class="blog-img"><a href="<?= htmlspecialchars($cmsMediaLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="<?= htmlspecialchars(cms_media_image($cmsMediaItem), ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($cmsMediaItem['title'], ENT_QUOTES, 'UTF-8') ?>"></a></div>
                  <div class="blog-content"><a href="<?= htmlspecialchars($cmsMediaLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div>
                </div>
              <?php endforeach; ?>
            </div>
            <?php else: ?>
            <div class="gridlayer4">
                
                <div class="featured-card print-media-card">
                <div class="blog-img">
                  <a href="./assets/images/Blogs/print-media/print-media-46.jpeg"  target="_blank">
                    <img src="./assets/images/Blogs/print-media/print-media-46.jpeg" alt="" ></a>
                </div>
                <div class="blog-content">
                  <br />
                  <a href="./assets/images/Blogs/print-media/print-media-46.jpeg" target="_blank" class="read-more">View Article <img
                      src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>
                
                 <div class="featured-card print-media-card">
                <div class="blog-img">
                  <a href="./assets/images/Blogs/print-media/print-media-45.jpeg"  target="_blank">
                    <img src="./assets/images/Blogs/print-media/print-media-45.jpeg" alt="" ></a>
                </div>
                <div class="blog-content">
                  <br />
                  <a href="./assets/images/Blogs/print-media/print-media-45.jpeg" target="_blank" class="read-more">View Article <img
                      src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>
                
                 <div class="featured-card print-media-card">
                <div class="blog-img">
                  <a href="./assets/images/Blogs/print-media/print-media-44.jpeg"  target="_blank">
                    <img src="./assets/images/Blogs/print-media/print-media-44.jpeg" alt="" ></a>
                </div>
                <div class="blog-content">
                  <br />
                  <a href="./assets/images/Blogs/print-media/print-media-44.jpeg" target="_blank" class="read-more">View Article <img
                      src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>
                
                <div class="featured-card print-media-card">
                <div class="blog-img">
                  <a href="./assets/images/Blogs/print-media/print-media-43.jpeg"  target="_blank">
                    <img src="./assets/images/Blogs/print-media/print-media-43.jpeg" alt="" ></a>
                </div>
                <div class="blog-content">
                  <br />
                  <a href="./assets/images/Blogs/print-media/print-media-43.jpeg" target="_blank" class="read-more">View Article <img
                      src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>

            </div>
            <?php endif; ?>
            <div class="more-btn text-center">
              <a href="print-media"  class="btn">View More</a>
            </div>
          </div>

        </div>
 
      </div><!---coverage-section-->
    </div>
  </div><!---media-section-->

  <div class="impact-section blogs-pages" id="blogs">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>Blogs</h2>
      </div><!--heading-hd-->
      <div class="tab-content" id="pills-tabContent">
        <!--<div class="tab-pane fade" id="pills-Sanitation" role="tabpanel" aria-labelledby="pills-Sanitation-tab">-->
        <div class="blog-werap">
          <div class="gridlayer3">
            <?php if (!empty($featuredBlogs)): ?>
              <?php foreach ($featuredBlogs as $post): ?>
                <?php
                  $postTitle = $post['title'] ?? '';
                  $postDate = cms_format_date($post['published_at'] ?? '', 'd/m/Y');
                  $postImage = cms_blog_image($post);
                ?>
                <div class="blog-card">
                  <div class="blog-img">
                    <img src="<?php echo htmlspecialchars($postImage, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($postTitle, ENT_QUOTES, 'UTF-8'); ?>">
                  </div>
                  <div class="blog-content">
                    <small><?php echo htmlspecialchars($postDate, ENT_QUOTES, 'UTF-8'); ?></small>
                    <h4><?php echo htmlspecialchars($postTitle, ENT_QUOTES, 'UTF-8'); ?></h4>
                    <a href="blog/<?php echo urlencode($post['slug'] ?? ''); ?>" class="read-more">Read Blog <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <div class="blog-card">
                <div class="blog-content">
                  <h4>No blog posts available yet.</h4>
                  <a href="blogs.php" class="read-more">View all blogs <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <!--</div>-->
      </div>
       <div class="more-btn text-center">
              <a href="blogs.php"  class="btn">View More</a>
        </div>
    </div>
  </div><!---impact-section-->


  <div class="reports-section" id="financials">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>Reports and Financials</h2>
      </div><!--heading-hd-->
      <div class="custom-tabs">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-Annual-tab" data-bs-toggle="pill" data-bs-target="#pills-Annual"
              type="button" role="tab" aria-controls="pills-Annual" aria-selected="false">Annual Reports</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Audited-tab" data-bs-toggle="pill" data-bs-target="#pills-Audited"
              type="button" role="tab" aria-controls="pills-Audited" aria-selected="false">Audited Statements</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-FC6-tab" data-bs-toggle="pill" data-bs-target="#pills-FC6" type="button"
              role="tab" aria-controls="pills-FC6" aria-selected="false"> FCRA reports FC6</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-FC4-tab" data-bs-toggle="pill" data-bs-target="#pills-FC4" type="button"
              role="tab" aria-controls="pills-FC4" aria-selected="false">FCRA reports FC4</button>
          </li>

        </ul>
      </div>

      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">..All.
        </div>

        <div class="tab-pane fade show active" id="pills-Annual" role="tabpanel" aria-labelledby="pills-Annual-tab">
          <div class="Allreports">
            <h4>Annual Reports</h4>
            <ul class="report-list">
                <li class="report-item">
                <span class="report-title">Annual Report 2025–26</span>
                <a href="https://swadesfoundation.org/annualreportpdf/Annual-Report-25-26.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              
              <li class="report-item">
                <span class="report-title">Annual Report 2024–25</span>
                <a href="https://swadesfoundation.org/annualreportpdf/AR-2024-25revised.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2023–24</span>
                <a href="https://swadesfoundation.org/annualreportpdf/Swades%20Foundation_Annual%20Report%202023-24.pdf"
                  target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2022–23</span>
                <a href="https://swadesfoundation.org/annualreportpdf/AR%20-%202022-23.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2021–22</span>
                <a href="https://swadesfoundation.org/annualreportpdf/Swades-AR-2021-22-C2C_060123-low-res.pdf"
                  target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2020–21</span>
                <a href="https://swadesfoundation.org/annualreportpdf/Swades-Final-Annual-Report-20-21_compressed.pdf"
                  target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2019–20</span>
                <a href="https://swadesfoundation.org/annualreportpdf/SwadesFoundation_DigitalFinal_compressed.pdf"
                  target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2018–19</span>
                <a href="https://swadesfoundation.org/annualreportpdf/AnnualReport-2019.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2017–18</span>
                <a href="https://swadesfoundation.org/annualreportpdf/AnnualReport-2018.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2016–17</span>
                <a href="https://swadesfoundation.org/annualreportpdf/annualreport2018_01.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2014–15</span>
                <a href="https://swadesfoundation.org/annualreportpdf/Annual-Report-2014-15.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
            </ul>
          </div><!--Allreports-->
        </div>

        <div class="tab-pane fade" id="pills-Audited" role="tabpanel" aria-labelledby="pills-Audited-tab">
          <div class="Allreports">
            <h4>Audited Statements</h4>
            <ul class="report-list">
                
                <li class="report-item">
                <span class="report-title">Audited Financials 2025–26</span>
                <a href="https://swadesfoundation.org/annualreportpdf/Swades-Foundation-signed-FS-and-Audit-report-M26-Final.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              
              
              <li class="report-item">
                <span class="report-title">Audited Financials 2024–25</span>
                <a href="https://swadesfoundation.org/auditsubmitted/Audited Financials 24-25.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2023–24</span>
                <a href="https://swadesfoundation.org/auditsubmitted/Audit-Report23-24.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2022-23</span>
                <a href="https://swadesfoundation.org/auditsubmitted/Audit-Report22-23.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2021-22</span>
                <a href="https://swadesfoundation.org/auditsubmitted/Audit-Report21-22.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2020-21</span>
                <a href="https://swadesfoundation.org/auditsubmitted/Swades-Financial-Audit-report-20-21.pdf"
                  target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2019-20</span>
                <a href="https://swadesfoundation.org/auditsubmitted/Swades-Financials-Audit-report-for-Mar-20.pdf"
                  target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2018-19</span>
                <a href="https://swadesfoundation.org/auditsubmitted/Swades-Financial-March-2019.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2017-18</span>
                <a href="https://swadesfoundation.org/auditsubmitted/Audited Financials FY 17-18.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2016-17</span>
                <a href="https://swadesfoundation.org/auditsubmitted/Audited Financials FY 16-17.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2015-16</span>
                <a href="https://swadesfoundation.org/auditsubmitted/Audited Financials FY 15-16.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="tab-pane fade" id="pills-FC6" role="tabpanel" aria-labelledby="pills-FC6-tab">
          <div class="Allreports">
            <h4>FCRA Reports FC6</h4>
            <ul class="report-list">
              <li class="report-item">
                <span class="report-title">FC6 Q1 2023-24</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 23-24.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2023-24</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 23-24.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2023-24</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 23-24.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2022-23</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 22-23.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2022-23</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 22-23.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2022-23</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 22-23.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2022-23</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 22-23.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2021-22</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 21-22.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2021-22</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 21-22.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2021-22</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 21-22.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2021-22</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 21-22.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2020-21</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 20-21.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2020-21</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 20-21.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2020-21</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 20-21.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2020-21</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 20-21.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2019-20</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 19-20.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2019-20</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 19-20.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2019-20</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 19-20.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2019-20</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 19-20.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2018-19</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 18-19.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2018-19</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 18-19.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2018-19</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 18-19.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2018-19</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 18-19.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2017-18</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 17-18.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2017-18</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 17-18.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2017-18</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 17-18.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2017-18</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 17-18.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2016-17</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 16-17.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2016-17</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 16-17.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2016-17</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 16-17.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2016-17</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 16-17.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="tab-pane fade" id="pills-FC4" role="tabpanel" aria-labelledby="pills-FC4-tab">
          <div class="Allreports">
            <h4>FCRA Reports FC4</h4>
            <ul class="report-list">
              <li class="report-item">
                <span class="report-title">FC4 FY 2023–24</span>
                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2023-24.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2022-23</span>
                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2022-23.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2021-22</span>
                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2021-22.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2020-21</span>
                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2020-21.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2019-20</span>
                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2019-20.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2018-19</span>
                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2018-19.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2017-18</span>
                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2017-18.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2016-17</span>
                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2016-17.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2015-16</span>
                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2015-16.pdf" target="_blank"
                  class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!---reports-section-->

  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>

  <?php include 'include/footer.php'; ?> <!-- Footer -->

</body>

</html>
