<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
require_once __DIR__ . '/include/cms.php';
$cmsDigitalMedia = cms_get_media_coverage('digital');
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
      display: block;
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

    .custom-tabs-rounded-btn .nav-pills .nav-link {
      border-radius: 70px;
    }

    .featured-card {
      background: #F5F5F5;
    }
    .blog-content p{
    height: 76px;
    display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden; 
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


  <div class="media-section bg-white" id="digital-media">
    <div class="container">
      <?php if ($cmsDigitalMedia): ?>
      <div class="coverage-section">
        <div class="heading-hd text-center">
          <h2>Digital Media</h2>
        </div><!--heading-hd-->
        <div class="gridlayer4">
          <?php foreach ($cmsDigitalMedia as $cmsMediaItem): ?>
            <div class="featured-card">
              <div class="blog-img">
                <img src="<?= htmlspecialchars(cms_media_image($cmsMediaItem), ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($cmsMediaItem['title'], ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($cmsMediaItem['description'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
              </div>
              <div class="blog-content">
                <small><?= htmlspecialchars(cms_format_date($cmsMediaItem['published_date'], 'd/m/Y'), ENT_QUOTES, 'UTF-8') ?></small>
                <?php if (!empty($cmsMediaItem['source_logo'])): ?>
                  <img src="<?= htmlspecialchars(cms_asset_url($cmsMediaItem['source_logo']), ENT_QUOTES, 'UTF-8') ?>" class="news-logo" alt="<?= htmlspecialchars($cmsMediaItem['source'], ENT_QUOTES, 'UTF-8') ?>">
                <?php elseif (!empty($cmsMediaItem['source'])): ?>
                  <h5><?= htmlspecialchars($cmsMediaItem['source'], ENT_QUOTES, 'UTF-8') ?></h5>
                <?php endif; ?>
                <p><?= htmlspecialchars($cmsMediaItem['title'], ENT_QUOTES, 'UTF-8') ?></p>
                <br />
                <?php $cmsMediaLink = $cmsMediaItem['external_url'] ?: $cmsMediaItem['embed_url']; ?>
                <?php if ($cmsMediaLink): ?>
                  <a href="<?= htmlspecialchars($cmsMediaLink, ENT_QUOTES, 'UTF-8') ?>" class="read-more" target="_blank" rel="noopener">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php else: ?>
      <div class="coverage-section">
        <div class="heading-hd text-center">
          <h2>Digital Media</h2>
        </div><!--heading-hd-->

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
              <!--<h5>Hindu Business Line</h5>-->
              <img src="./assets/images/Blogs/thbl.svg" class="news-logo">
              <p>Oracle, Swades Foundation rural livelihoods programme helps women in Maharashtra</p>
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
              
            
                <div class="featured-card">
                <div class="blog-img">
                  <img src="https://www.hindustantimes.com/ht-img/img/2026/02/26/550x309/download_1693989972713_1772096812425.jpg" alt="">
                </div>
                <div class="blog-content">
                  <small>26/02/2026</small>
                  <h5>Hindustan Times</h5>
                  <img src="./assets/images/Blogs/ht_100_logoblack@2x.webp" class="news-logo">
                  <p>Beyond numbers: Measuring the heart of social change</p>
                  <br />
                  <a href="https://www.hindustantimes.com/ht-insight/economy/beyond-numbers-measuring-the-heart-of-social-change-101772096617846.html"
                    target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                      alt=""></a>
                </div>
              </div>
               <div class="featured-card">
                <div class="blog-img">
                  <img src="https://img-cdn.publive.online/fit-in/1280x960/filters:format(webp)/shethepeople/media/media_files/2024/11/14/y80LeB35GVlAGDHo1Tfj.png" alt="">
                </div>
                <div class="blog-content">
                  <small>24/01/2026</small>
                  <h5>shethepeople</h5>
                  <img src="https://img-cdn.publive.online/fit-in/580x326/filters:format(webp)/shethepeople/media/agency_attachments/2024/11/11/2024-11-11t082606806z-shethepeople-black-logo-2000-x-2000-px-1.png" class="news-logo">
                  <p>National Girl Child Day: How Skilling Can Unlock Rural Girls' Potential</p>
                  <br />
                  <a href="https://www.shethepeople.tv/author-spotlight/guest-contributions/skilling-girl-child-11027067"
                    class="read-more" target="_blank">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                      alt=""></a>
                </div>
              </div>
              
              
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v1.jpg" alt="">
            </div>
            <div class="blog-content">
              <small>20/10/2025</small>
              <!--<h5>Hindu Business Line</h5>-->
              <img src="./assets/images/Blogs/thbl.svg" class="news-logo">
              <p>Swades Foundation poised to set up 50 more 'dream villages' in Maharashtra</p>
              <br />
              <a href="https://www.thehindubusinessline.com/economy/agri-business/swades-foundation-poised-to-set-up-50-more-dream-villages-in-maharashtra/article70182805.ece"
                class="read-more" target="_blank">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                  alt=""></a>
            </div>
          </div>

          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v2.jpg" alt="">
            </div>
            <div class="blog-content">
              <small>12/09/2025</small>
              <!--<h5>The Hindu</h5>-->
              <img src="./assets/images/Blogs/thehindu-logo.svg" class="news-logo">
              <p>Swades Foundation reshaping rural India through mindset change</p>
              <br />
              <a href="https://www.thehindu.com/news/national/maharashtra/swades-foundation-reshaping-rural-india-through-mindset-change/article70038805.ece"
                target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                  alt=""></a>
            </div>
          </div>
 

          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v3.avif" alt="">
            </div>
            <div class="blog-content">
              <small>27/02/2025</small>
              <img src="./assets/images/Blogs/ht_100_logoblack@2x.webp" class="news-logo">
              <p>Empowering the girl child with an ecosystem of support</p>
              <br />
              <a href="https://www.hindustantimes.com/ht-insight/gender-equality/empowering-the-girl-child-with-an-ecosystem-of-support-101740643967913.html"
                target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                  alt=""></a>
            </div>
          </div>

          <!-- new -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v5.avif" alt="">
            </div>
            <div class="blog-content">
              <small>05/06/2025</small>
              <img src="./assets/images/Blogs/logo_socialstory.svg" class="news-logo">
              <p>How Swades Foundation helps rural girls step into the healthcare workforce</p>
              <br />
              <a href="https://yourstory.com/socialstory/2025/06/swades-foundation-rural-girls-raigad-vision-technicians"
                target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                  alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v6.jfif" alt="">
            </div>
            <div class="blog-content">
              <small>11/06/2025</small>
              <img src="./assets/images/Blogs/logo-csr-universe.png" class="news-logo">
              <p>Swades Foundation And U Mumba Light Up Rural Homes With Solar Power</p>
              <br />
              <a href="https://thecsruniverse.com/articles/swades-foundation-and-u-mumba-light-up-rural-homes-with-solar-power"
                target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                  alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v7.jpg" alt="">
            </div>
            <div class="blog-content">
              <small>11/06/2025</small>
              <img src="./assets/images/Blogs/logo-csr_journal.jpg" class="news-logo">
              <p>CSR News: U Mumba and Swades Foundation Light up Rural Homes in Maharashtra with Solar Power</p>
              <br />
              <a href="https://thecsrjournal.in/csr-news-swades-foundation-light-rural-homes-maharashtra-solar-power/"
                target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                  alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v6.jfif" alt="">
            </div>
            <div class="blog-content">
              <small>11/06/2025</small>
              <img src="./assets/images/Blogs/logo-ngo-box.gif" class="news-logo">
              <p>Swades Foundation and U Mumba Light Up Rural Homes with Solar Power</p>
              <br />
              <a href="https://ngobox.org/full-news_Swades-Foundation-and-U-Mumba-Light-Up-Rural-Homes-with-Solar-Power-Swades-Foundation_41994"
                target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                  alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v8.JPG" alt="">
            </div>
            <div class="blog-content">
              <small>14/02/2025</small>
              <img src="./assets/images/Blogs/logo-cnbc.png" class="news-logo">
              <p>A Ground Report On Ronnie & Zarina Screwvala's Swades Foundation & How It's Empowering Rural India</p>
              <br />
              <a href="https://www.youtube.com/watch?v=3ZyrL-OOgik&t=100s"
                target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                  alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v-9.webp" alt="">
            </div>
            <div class="blog-content">
              <small>23/04/2023</small>
              <img src="./assets/images/Blogs/logo-mid-day.png" class="news-logo">
              <p>How this non-profit counselling centre is making villagers resilient towards climate change</p>
              <br />
              <a href="https://www.mid-day.com/sunday-mid-day/article/velhe-villagers-will-see-a-shrink-23282421"
                target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                  alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v9.avif" alt="">
            </div>
            <div class="blog-content">
              <small>21/05/2023</small>
              <img src="./assets/images/Blogs/logo-shaakaal.avif" class="news-logo">
              <p>ग्रामसेवेची स्वदेशी चळवळ </p>
              <br />
              <a href="https://www.esakal.com/mumbai/todays-latest-marathi-news-mum23h28255-txt-mumbai-20230520123434"
                target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                  alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v2.jpg" alt="">
            </div>
            <div class="blog-content">
              <small>02/07/2023</small>
              <img src="./assets/images/Blogs/logo-the-times-of-india.png" class="news-logo">
              <p>Breaking barriers in healthcare for rural women </p>
              <br />
              <a href="https://timesofindia.indiatimes.com/blogs/voices/breaking-barriers-in-healthcare-for-rural-women/" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v-10.jpg" alt="">
            </div>
            <div class="blog-content">
              <small>13/07/2023</small>
              <img src="./assets/images/Blogs/logo-csr-universe.png" class="news-logo">
              <p>Ronnie and Zarina Screwvala’s Swades Foundation completes 20,000 free cataract surgeries </p>
              <br />
              <a href="https://thecsruniverse.com/articles/ronnie-and-zarina-screwvala-s-swades-foundation-completes-20-000-free-cataract-surgeries" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v-11.jpg" alt="">
            </div>
            <div class="blog-content">
              <small>14/07/2023</small>
              <img src="./assets/images/Blogs/logo-lokmattimes.png" class="news-logo">
              <p>Ronnie and Zarina Screwvala’s Swades Foundation completes 20,000 free cataract surgeries in rural Maharashtra </p>
              <br />
              <a href="https://www.lokmattimes.com/maharashtra/ronnie-and-zarina-screwvalas-swades-foundation-completes-20000-free-cataract-surgeries-in-rural/" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v-12.webp" alt="">
            </div>
            <div class="blog-content">
              <small>15/07/2023</small>
              <img src="./assets/images/Blogs/India-CSR-Logo-Updated-New.webp" class="news-logo">
              <p>Free cataract surgeries in rural Maharashtra</p>
              <br />
              <a href="https://indiacsr.in/free-cataract-surgeries-in-rural-maharashtra/" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v-12.webp" alt="">
            </div>
            <div class="blog-content">
              <small>16/07/2023</small>
              <img src="./assets/images/Blogs/logo-medgate.png" class="news-logo">
              <p>Swades Foundation Completes 20,000 Life-changing Free Cataract Surgeries in Rural Maharashtra</p>
              <br />
              <a href="https://medgatetoday.com/swades-foundation-completes-20000-life-changing-free-cataract-surgeries-in-rural-maharashtra/" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v-12.webp" alt="">
            </div>
            <div class="blog-content">
              <small>16/07/2023</small>
              <img src="./assets/images/Blogs/HR-2025-w-Logo-1.png" class="news-logo">
              <p>Swades Foundation completes 20K free cataract surgeries</p>
              <br />
              <a href="https://www.healthcareradius.in/csr/swades-foundation-completes-20k-free-cataract-surgeries" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v-12.webp" alt="">
            </div>
            <div class="blog-content">
              <small>18/07/2023</small>
              <img src="./assets/images/Blogs/logo-csr-mandate_02-1-300x55.jpg" class="news-logo">
              <p>Swades Foundation Completes 20,000 Life-Changing Free Cataract Surgeries in Rural Maharashtra</p>
              <br />
              <a href="https://www.csrmandate.org/swades-foundation-completes-20000-life-changing-free-cataract-surgeries-in-rural-maharashtra/" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v-13.jpg" alt="">
            </div>
            <div class="blog-content">
              <small>06/09/2023</small>
              <img src="./assets/images/Blogs/logo-csr-mandate_02-1-300x55.jpg" class="news-logo">
              <p>Swades Foundation’s Youth Skilling Programme Completes Training for 5,000 Youth in Rural Maharashtra</p>
              <br />
              <a href="https://www.csrmandate.org/swades-foundations-youth-skilling-programme-completes-training-for-5000-youth-in-rural-maharashtra/" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v-14.jfif" alt="">
            </div>
            <div class="blog-content">
              <small>07/08/2023</small>
              <img src="./assets/images/Blogs/logo-csr-universe.png" class="news-logo">
              <p>Swades Foundation trains 5000 youth in Maharashtra under Rural Youth Skilling Program</p>
              <br />
              <a href="https://thecsruniverse.com/articles/swades-foundation-trains-5000-youth-in-maharashtra-under-rural-youth-skilling-program" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v-15.jfif" alt="">
            </div>
            <div class="blog-content">
              <small>04/09/2023</small>
              <img src="./assets/images/Blogs/logo-csr-universe.png" class="news-logo">
              <p>Interview with Mangesh Wange, CEO, Swades Foundation: "Currently, our skilling interventions in rural Maharashtra generate an annual income of INR 30 crore"</p>
              <br />
              <a href="https://thecsruniverse.com/articles/interview-with-mangesh-wange-ceo-swades-foundation-currently-our-skilling-interventions-in-rural-maharashtra-generate-an-annual-income-of-inr-30-crore-" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
            </div>
          </div>
          <!-- end -->
          <div class="featured-card">
            <div class="blog-img">
              <img src="./assets/images/Blogs/v-16.webp" alt="">
            </div>
            <div class="blog-content">
              <small>08/03/2023</small>
              <img src="./assets/images/Blogs/logo-forbes-india.webp" class="news-logo">
              <p>How Zarina and Ronnie Screwvala plan to take the Swades model to new districts</p>
              <br />
              <a href="https://www.forbesindia.com/article/leadership-awards-2024/how-zarina-and-ronnie-screwvala-plan-to-take-the-swades-model-to-new-districts/92067/1" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
            </div>
          </div>
          <!-- end -->



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
