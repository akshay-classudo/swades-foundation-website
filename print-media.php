<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
require_once __DIR__ . '/include/cms.php';
$cmsPrintMedia = cms_get_media_coverage('print');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Swades Foundation Media Publications</title>
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
    }
     .featured-card { 
    background: #F5F5F5;}
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
 

  <div class="media-section bg-white" id="print-media">
    <div class="container">
      <?php if ($cmsPrintMedia): ?>
      <div class="coverage-section">
        <div class="heading-hd text-center">
          <h2>Print Media</h2>
        </div><!--heading-hd-->
        <div class="gridlayer4">
          <?php foreach ($cmsPrintMedia as $cmsMediaItem): ?>
            <div class="featured-card print-media-card">
              <div class="blog-img">
                <a href="<?= htmlspecialchars($cmsMediaItem['external_url'] ?: cms_media_image($cmsMediaItem), ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener">
                  <img src="<?= htmlspecialchars(cms_media_image($cmsMediaItem), ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($cmsMediaItem['title'], ENT_QUOTES, 'UTF-8') ?>">
                </a>
              </div>
              <div class="blog-content">
                <?php if (!empty($cmsMediaItem['title'])): ?>
                  <p><?= htmlspecialchars($cmsMediaItem['title'], ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>
                <a href="<?= htmlspecialchars($cmsMediaItem['external_url'] ?: cms_media_image($cmsMediaItem), ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php else: ?>
      <div class="coverage-section">
        <div class="heading-hd text-center">
          <h2>Print Media</h2>
        </div><!--heading-hd-->

         <div class="gridlayer4">
             
             <div class="featured-card print-media-card">
                <div class="blog-img">
                  <a href="./assets/images/Blogs/print-media/print-media-47.jpeg"  target="_blank">
                    <img src="./assets/images/Blogs/print-media/print-media-47.jpeg" alt="" ></a>
                </div>
                <div class="blog-content">
                  <br />
                  <a href="./assets/images/Blogs/print-media/print-media-47.jpeg" target="_blank" class="read-more">View Article <img
                      src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>
             
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

              <div class="featured-card print-media-card">
                <div class="blog-img">
                  <a href="./assets/images/Blogs/print-media/Swacchta-doot.jpeg"  target="_blank">
                    <img src="./assets/images/Blogs/print-media/Swacchta-doot.jpeg" alt="" ></a>
                </div>
                <div class="blog-content">
                  <br />
                  <a href="./assets/images/Blogs/print-media/Swacchta-doot.jpeg" target="_blank" class="read-more">View Article <img
                      src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>
              <!-- start  -->
              <div class="featured-card print-media-card">
                <div class="blog-img">
                  <a href="./assets/images/Blogs/print-media/print-media-1.jpeg"  target="_blank">
                    <img src="./assets/images/Blogs/print-media/print-media-1.jpeg" alt="" ></a>
                </div>
                <div class="blog-content">
                  <br />
                  <a href="./assets/images/Blogs/print-media/print-media-1.jpeg" target="_blank" class="read-more">View Article <img
                      src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>
              <!-- end -->
              <!-- start  -->
              <div class="featured-card print-media-card">
                <div class="blog-img">
                  <a href="./assets/images/Blogs/print-media/print-media-2.jpeg"  target="_blank">
                    <img src="./assets/images/Blogs/print-media/print-media-2.jpeg" alt="" ></a>
                </div>
                <div class="blog-content">
                  <br />
                  <a href="./assets/images/Blogs/print-media/print-media-2.jpeg" target="_blank" class="read-more">View Article <img
                      src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>
              <!-- end -->
              <!-- start  -->
              <div class="featured-card print-media-card"> <div class="blog-img"> <a href="./assets/images/Blogs/print-media/print-media-3.jpeg"  target="_blank"> <img src="./assets/images/Blogs/print-media/print-media-3.jpeg" alt="" ></a> </div> <div class="blog-content"> <br /> <a href="./assets/images/Blogs/print-media/print-media-3.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a> </div></div>
              <!-- end -->
              <!-- start  -->
              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-4.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-4.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-4.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>
              <!-- end -->

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-5.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-5.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-5.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-6.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-6.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-6.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-7.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-7.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-7.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-8.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-8.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-8.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-9.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-9.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-9.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-10.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-10.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-10.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-11.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-11.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-11.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-12.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-12.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-12.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-13.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-13.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-13.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-14.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-14.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-14.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>
              <!-- Start -->
              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-15.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-15.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-15.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>
               <!-- End -->
              <!-- Start -->
              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-15.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-15.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-15.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>
               <!-- End -->
              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-16.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-16.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-16.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-17.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-17.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-17.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-18.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-18.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-18.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-19.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-19.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-19.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-20.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-20.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-20.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-21.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-21.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-21.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-22.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-22.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-22.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-23.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-23.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-23.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-24.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-24.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-24.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-25.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-25.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-25.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-26.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-26.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-26.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-27.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-27.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-27.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-28.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-28.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-28.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-29.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-29.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-29.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-30.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-30.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-30.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-31.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-31.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-31.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-32.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-32.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-32.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-33.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-33.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-33.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-34.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-34.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-34.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-35.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-35.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-35.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-36.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-36.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-36.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-37.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-37.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-37.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-38.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-38.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-38.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-39.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-39.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-39.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-40.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-40.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-40.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-41.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-41.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-41.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

              <div class="featured-card print-media-card"><div class="blog-img"><a href="./assets/images/Blogs/print-media/print-media-42.jpeg" target="_blank"><img src="./assets/images/Blogs/print-media/print-media-42.jpeg" alt=""></a></div><div class="blog-content"><br /><a href="./assets/images/Blogs/print-media/print-media-42.jpeg" target="_blank" class="read-more">View Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a></div></div>

            </div>
 
      </div><!---coverage-section-->
      <?php endif; ?>
    </div>
  </div><!---media-section-->
 

  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>

  <?php include 'include/footer.php'; ?> <!-- Footer -->

</body>

</html>
