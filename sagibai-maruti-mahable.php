<?php require_once __DIR__ . '/include/cms.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <title>Swades Foundation Blog Detail</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.svg" type="image/x-icon">
  <link rel="icon" type="image/png" href="./assets/images/favicon.png">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/js/owlcarousel/owl.carousel.css">
  <link rel="stylesheet" href="./assets/css/aos.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom-animation.css">
  <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css">

  <style>
    /* Container for left image and inset circles */
    .hero-image-wrap {
      position: relative;
      width: 100%;
      border-radius: 28px;
      overflow: visible; /* allow circles to overflow */
      display: block;
    }

    .hero-main-img {
      width: 100%;
      height: auto;
      display: block;
      border-radius: 28px;
      object-fit: cover;
    }

    /* small circular inset images */
    .inset-circle {
      position: absolute;
      width: 110px;
      height: 110px;
      border-radius: 50%;
      overflow: hidden;
      border: 6px solid #fff;
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
      background: #fff;
    }

    /* positions for different inset circles */
    .inset-1 { bottom: -15px; left: 12px; transform: scale(1); }
    .inset-2 { bottom: 30px; left: 92px; transform: scale(1.25); }
    .inset-3 { bottom: 10px; left: 190px; transform: scale(0.95); }

    .inset-circle img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    /* Right column typography */
    .story-title {
      font-weight: 700;
      font-size: 1.6rem !important;
      line-height: 1.14;
      margin-bottom: 0.75rem;
      letter-spacing: normal;
    }

    .story-lead {
        color: #333;
        margin-bottom: 1rem;
        margin-top: 1.25rem;
        letter-spacing: normal;
        font-size: 16px;
    }

    /* bottom full-width story text */
    .story-bottom {
      margin-top: 1.5rem;
      color: #222;
    }
    .bottom_text { display: none; }
    /* Make spacing like the example on larger screens */
    @media (min-width: 992px) {
      .bottom_text { display: none; }
      .hero-image-wrap { margin-right: 2rem; }
      .story-title { font-size: 1.7rem; }
    }

    /* Slightly reduce inset sizes on small screens */
    @media (max-width: 576px) {
      .bottom_text { display: none; }
      .inset-circle { width: 80px; height: 80px; border-width: 5px; }
      .inset-2 { left: 70px; }
      .inset-3 { left: 140px; }
    }
    .story-bottom p {
        letter-spacing: normal;
        font-size: 16px;
        margin-top: 0.36rem;
    }
    @media (max-width: 1024px) {
        .image_side { display: none; }
        .bottom_text { display: block; }
    }
    
  </style>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5BR3T5F');</script>
<!-- End Google Tag Manager--> 

<script async src="https://www.googletagmanager.com/gtag/js?id=G-YFG7G32BG5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YFG7G32BG5');
</script>

<meta name="author" content=""><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="facebook-domain-verification" content="aod2id14o8ub2c0dkp4tyksrlymfff" /><meta name="p:domain_verify" content="1ed9cb39617f70c21aa292570c39c319"/>  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5BR3T5F');</script> 


<script>!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2999132110393698');
fbq('track', 'PageView');</script> <noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2999132110393698&ev=PageView&noscript=1"
/></noscript>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BR3T5F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <header id="header" class="home-header inner-contact">
    <div class="container">
      <div class="header-menu">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="/">
            <img src="./assets/images/inner-page-logo.svg" alt="" >
          </a>

          <div class="nav-container  collapse navbar-collapse" id="collapsibleNavbar">
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
  </header><!----home-header-->
  
  
  <div class="impact-section blogs-pages">
    <div class="container">
      <div class="detail-hd">
        <span>Economic Development</span>
        <h2>How access to water transformed life in Chachkond</h2>
      </div><!--detail-hd-->
    </div>
  </div>
  <div class="container py-1 blog-desc">
    <div class="row align-items-start g-4">
      <div class="col-lg-7">
        <div class="hero-image-wrap">
          <img src="./assets/images/home/watsan.png" alt="" class="hero-main-img">
        </div>
      </div>
      <div class="col-lg-5">
        <h2 class="story-title">When clean water flows home, hope and opportunity follow</h2>
        <p class="story-lead">Behind this smile there has been a lot of struggle and pain. Sagibai Maruti Mahable, living in Chachkond (in rural Raigad) has been spending about 10 – 12 hours daily fetching water for her household needs. This everyday tussle, since decades, was not only the plight of Sagibai but for 22 other households in Chachkond.</p>

        <p class="story-lead">Unclean water often led to a lot of people in the village falling ill. Sagibai in particular, was frustrated with constant illness and resulting weakness. She was no longer able to physically manage the drudgery. This pain and struggle lasted too long but in 2018, after the water intervention all households in the village received potable Drinking Water in homes through taps – Clean water in homes was nothing short of a dream come true for them.</p>
        <p class="story-lead">Incidence of water borne diseases reduced drastically, people had more time at hand and many engaged this new found free time in some or the other economic activities. Sagibai, herself started #dairy business and also now helps her husband in #farming.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 story-bottom">
        <p>“Everything for us in life revolves around water. We were overjoyed to see our dream come true. ” – says Sagibai.</p>
      </div>
    </div>
  </div>
  
  <script src="./assets/js/jquery-3.6.3.js"></script>
  <?php include 'include/footer.php'; ?> <!-- Footer -->
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>
</body>
</html>
