<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
$cmsAboutPage = cms_get_page('about-us');
cms_require_published_page('about-us');
$cmsAboutIntro = cms_page_section($cmsAboutPage, 'intro', cms_page_content($cmsAboutPage));
$cmsAboutFootprint = cms_page_section($cmsAboutPage, 'footprint', '');
$cmsAboutDonate = cms_page_section($cmsAboutPage, 'donate', '');
?>
<!DOCTYPE html>
<html>
<head>
  <title><?= htmlspecialchars(cms_page_field($cmsAboutPage, 'meta_title', 'Swades Foundation About Us'), ENT_QUOTES, 'UTF-8') ?></title>
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
    #whatsapp-chat {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
    }
    #whatsapp-chat img {
        width: 60px;
        height: 60px;
    }
    .mute-btn {
      position: absolute;
      bottom: 20px;
      right: 20px;
      background: rgba(0, 0, 0, 0.6);
      color: white;
      border: none;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      font-size: 22px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .mute-btn:hover {
      background: rgba(0, 0, 0, 0.8);
    }
    @media (max-width: 767px){
        .desktop {
            display: none !important;
        }
    }
    .mep-werap {
        width: 100% !important;
        max-width: 100% !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    
    .mep-werap img {
        width: 100% !important;
        height: auto !important;
        display: block !important;
    }
    @media (max-width: 425.8px) {
    .titlewrap h3 {
        margin-top: -20px !important;
    }
}
.logo-page{
    display:grid;
    grid-template-columns:repeat(7,1fr);
    gap:25px 20px;
    align-items:center;
    padding:20px 40px;
}
.logo-page-partner {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
}
.brandlogo{
    display:flex;
    justify-content:center;
    align-items:center;
    height:70px;
}

.brandlogo img{
    max-width:100%;
    max-height:70px;
    object-fit:contain;
}

@media(max-width:991px){

    .logo-page{
        grid-template-columns:repeat(5,1fr);
    }
}

@media(max-width:767px){

    .logo-page{
        grid-template-columns:repeat(3,1fr);
        gap:15px;
        padding:15px;
    }

    .brandlogo{
        height:60px;
    }

    .brandlogo img{
        max-height:40px;
    }
}
.believers-carousel{
    max-width:1500px;
    margin:0 auto;
}
.owl-dots{
    display:block !important;
    text-align:center;
    margin-top:20px !important;
}

.owl-dot{
    display:inline-block !important;
}

.owl-dot span{
    width:12px !important;
    height:12px !important;
    margin:5px !important;
    background:#ccc !important;
    border-radius:50% !important;
    display:block !important;
}

.owl-dot.active span{
    background:#ff6b00 !important;
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
  <header id="header" class="home-header">
    <div class="container">
      <div class="header-menu">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="index.php">
            <img src="./assets/images/sawades-logo.svg" alt="">
          </a>

          <div class="nav-container collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav navmenu mx-auto">
              <?php include __DIR__ . '/include/nav-items.php'; ?>
            </ul>
            <div class="donate-button desktop">
              <a href="Donate" class="btn">Donate <img src="./assets/images/heart.svg" alt=""></a>
            </div>
          </div>

          <div class="naviconmobile">
            <div class="donate-button mobile">
              <a href="Donate" class="btn">Donate <img src="./assets/images/heart.svg" alt=""></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <div class="menu-icon">
                <span class="navicon"></span>
              </div>
            </button>
          </div>

        </nav>
      </div>
    </div>
  </header><!----home-header-->


  <div class="about-pages">
    <div class="container">
      <div class="inner-hd text-center">
        <?php if ($cmsAboutIntro !== ''): ?>
          <?= $cmsAboutIntro ?>
        <?php else: ?>
          <h2>Empowering Rural India, Together</h2>
          <p>Swades Foundation is a community-driven non-profit working with a singular aim of lifting a million lives out of poverty every 5 years in rural India. Our motto – Swa Se Bane Des – asserts the belief that every person has the power to transform themselves, their country and the world. </p>
          <p>We build ambition, ignite hope, and empower communities to take charge of their own journey through a unique holistic model of development, in Water, Sanitation & Green Initiatives, Health, Education, and Livelihoods.</p>
          <p>At the heart of our mission is nurturing community leadership and ownership to ensure deep, sustainable, long-term empowerment. With over 11,000 community volunteers and 270+ full-time staff—predominantly working at the grassroots level—Swades Foundation has the execution capability to drive impactful change.</p>
        <?php endif; ?>
      </div>
    </div>
  </div><!---home-section-->


  <div class="watch-section">
    <div class="container">
      <div class="about-cover">
       <div class="video-cover">
        <video id="myvideo" autoplay muted loop playsinline>
        <source src="./assets/videos/About.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <button id="muteBtn" class="mute-btn" type="button">🔇</button>
       </div>
      </div>
      <!--banner-cover-->
    </div>
  </div><!---watch-section-->

  <div class="Vision-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="vision-img">
            <img src="./assets/images/about/about-img.jpg" alt="">
            <p>Our founders, Zarina & Ronnie Screwvala, interacting with the community in Gaydhond, Nashik.</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="Vision-text">
            <h5>Our Vision:</h5>
            <p>An empowered and poverty-free rural India where communities are capable of transforming their own lives.</p>

            <h5>Our Mission:</h5>
            <p>To lift a million people out of poverty in rural India every 5 years through a holistic approach to Health, Education, Water, Sanitation & Green Initiatives, and Economic Development - by creating a scalable, replicable and community-centric model of sustainable development.</p>


            <h5>Our Philosophy:</h5>
            <p>At the Swades Foundation, we believe that the partnership of rural India with corporates, young urban India, the Government and other foundations is the key to create a permanent and irreversible change for good.</p>
          </div>
        </div>
      </div>
    </div>
  </div><!----Vision-sectio-->


  <div class="pivotal-moments">
    <div class="container">
      <div class="pivotal-hd">
        <h5>Defining Moments</h5>
        <h2>The Swades Journey</h2>
      </div>
      <div class="time-line">
        <div class="dates-overflow">
          <div class="dates-wrap">
            <div class="date active">
              <div class="date-year">
                <h2>2012</h2>
              </div>
              <div class="date-content">
                <div class="date-image">
                  <img src="./assets/images/about/2012.png" alt="">
                </div>
                <div class="date-text">
                  <p>Laid the foundation for Swades' rural empowerment efforts in Raigad</p>
                </div>
              </div>
            </div>

            <div class="date ">
              <div class="date-year">
                <h2>2013</h2>
              </div>
              <div class="date-content">
                <div class="date-image">
                  <img src="./assets/images/about/2013.png" alt="">
                </div>
                <div class="date-text">
                  <p>Adopted a holistic model of development</p>
                </div>
              </div>
            </div>

            <div class="date">
              <div class="date-year">
                <h2>2016</h2>
              </div>
              <div class="date-content">
                <div class="date-image">
                  <img src="./assets/images/about/2016.png" alt="">
                </div>
                <div class="date-text">
                  <p>Evolved from a philanthropic 'push' to 'pull' strategy that encourages community participation</p>
                </div>
              </div>
            </div>

            <div class="date">
              <div class="date-year">
                <h2>2017</h2>
              </div>
              <div class="date-content">
                <div class="date-image">
                  <img src="./assets/images/about/2017.png" alt="">
                </div>
                <div class="date-text">
                  <p>Built 15,000 household toilets across Raigad</p>
                </div>
              </div>
            </div>

            <div class="date">
              <div class="date-year">
                <h2>2018</h2>
              </div>
              <div class="date-content">
                <div class="date-image">
                  <img src="./assets/images/about/2018.png" alt="">
                </div>
                <div class="date-text">
                  <p>Created the Village Development Committee (VDC) model to build community ownership</p>
                </div>
              </div>
            </div>

            <div class="date">
              <div class="date-year">
                <h2>2020-21</h2>
              </div>
              <div class="date-content">
                <div class="date-image">
                  <img src="./assets/images/about/2020-21.png" alt="">
                </div>
                <div class="date-text">
                  <p>Aided COVID relief and recovery efforts in rural Maharashtra with vaccination drives and supporting medical equipment</p>
                </div>
              </div>
            </div>

            <div class="date">
              <div class="date-year">
                <h2>2022</h2>
              </div>
              <div class="date-content">
                <div class="date-image">
                  <img src="./assets/images/about/2022.png" alt="">
                </div>
                <div class="date-text">
                  <p>Celebrated 75 Dream Villages to mark the 75th year of India's Independence</p>
                </div>
              </div>
            </div>

            <div class="date">
              <div class="date-year">
                <h2>2023</h2>
              </div>
              <div class="date-content">
                <div class="date-image">
                  <img src="./assets/images/about/2023.png" alt="">
                </div>
                <div class="date-text">
                  <p>5,000+ youth skilled; 20,000+ cataract surgeries; 30,000+ toilets constructed</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--pivotal-moments---->


  <div class="footprint-section">
    <div class="map-container">
      <div class="heading-hd text-center">
        <?php if ($cmsAboutFootprint !== ''): ?>
          <?= $cmsAboutFootprint ?>
        <?php else: ?>
          <h2>Our Footprint</h2>
          <p>We are currently working across 7 blocks in Raigad (Mahad, Mangaon, Mhasla, Poladpur, Shrivardhan, Tala, and Sudhagad) and 4 blocks in Nashik (Igatpuri, Trimbakeshwar, Surgana, and Peth). We will soon be adding 6 new talukas across 4 districts - beginning with Jawhar and Mokhada in Palghar district</p>
        <?php endif; ?>
      </div>
      <div class="mep-werap">
        <!--<div class="row">
          <div class="col-md-6 mobile">
            <h5>Maharashtra</h5>
            <img src="./assets/images/about/map2.jpg" alt="">
          </div>

          <div class="col-md-3">
            <h5>Nashik</h5>
            <img src="./assets/images/about/Nashik.jpg" alt="">
          </div>

          <div class="col-md-6 desktop">
            <h5>Maharashtra</h5>
            <img src="./assets/images/about/map2.jpg" alt="">
          </div>
          <div class="col-md-3">
            <h5>Raigad</h5>
            <img src="./assets/images/about/Raigad.jpg" alt="">
          </div>
        </div>-->
        <div class="col-md-12 desktop">
            <img src="./assets/images/about/map-desk.jpg" alt="">
        </div>
        <div class="col-md-12 mobile">
            <img src="./assets/images/about/map-mob.jpg" alt="">
        </div>
      </div>

    </div>
  </div><!----footprint-section-->


  <div class="thriving-section">
    <div class="container">
      <div class="immediate-bg overly desktop" style="background-image: url('./assets/images/about/roberta.jpg');">
        <div class="titlewrap" id="about-us-donate">
          <?php if ($cmsAboutDonate !== ''): ?>
            <?= $cmsAboutDonate ?>
          <?php else: ?>
            <h3>Empower livelihoods, <br> Transform lives</h3>
            <p>Support rural families in building secure, dignified livelihoods</p>
          <?php endif; ?>
          <a href="Donate" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
      <div class="immediate-bg overly mobile" style="background-image: url('./assets/images/about/OurStory.jpg');">
        <div class="titlewrap" id="about-us-donate">
          <?php if ($cmsAboutDonate !== ''): ?>
            <?= $cmsAboutDonate ?>
          <?php else: ?>
            <h3>Empower livelihoods, <br> Transform lives</h3>
            <p>Support rural families in building secure, dignified livelihoods</p>
          <?php endif; ?>
          <a href="Donate" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
    </div>
  </div><!----thriving-section-->
  <div class="donate-button innerbtn mobile pre-footer-btn">
    <a href="Donate" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
  </div>
  <!-- End Pre Footer Donation -->
  <!--<div class="believers-section">-->
  <!--  <div class="heading-hd text-center">-->
  <!--    <h2>Our Believers</h2>-->
  <!--  </div>-->
  <!--  <div class="owl-carousel owl-theme productbrandlogo">-->
  <!--          <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/1.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/2.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/3.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/4.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/5.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/6.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/7.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/8.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/9.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/10.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/11.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/12.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/13.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/14.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/15.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/16.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/17.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/18.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/19.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/20.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/21.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/22.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/23.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/24.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/25.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/26.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/27.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/28.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/idbi_logo.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/30.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/31.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/32.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/33.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/34.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/35.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/36.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/37.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/38.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/39.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/40.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/41.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/42.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/43.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/44.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/45.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/46.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/47.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/48.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/49.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/50.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/51.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/52.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/53.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/54.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/55.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/56.png" alt="">-->
  <!--    </div>-->
  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/57.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/58.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/59.png" alt="">-->
  <!--    </div>-->

  <!--    <div class="brandlogo">-->
  <!--      <img src="./assets/images/believerslogo/60.png" alt="">-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div><!-----believers-section-->
  
  
   <div class="believers-section">
    <div class="heading-hd text-center">
        <h2>Our Believers</h2>
    </div>

    <div class="owl-carousel believers-carousel">

        <?php foreach (cms_logo_slides('believer', 21) as $chunk) {
            echo '<div class="logo-page">';

            foreach ($chunk as $logo) {
                $logoUrl = cms_asset_url($logo['logo_path']);
                echo '
                <div class="brandlogo">
                    <img src="' . htmlspecialchars($logoUrl ?: '', ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($logo['alt_text'] ?: 'Believer Logo', ENT_QUOTES, 'UTF-8') . '" loading="lazy">
                </div>';
            }

            echo '</div>';
        } ?>

    </div>

</div>




  <script src="./assets/js/jquery-3.6.3.js"></script>
  <?php include 'include/footer.php'; ?> <!-- Footer -->
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>
  
  <script>
   $('.believers-carousel').owlCarousel({
    items:1,
    loop:true,
    dots:true,
    nav:false,
    autoplay:true,
    autoplayTimeout:4000,
    smartSpeed:600
});
  
    window.addEventListener('load', function () {
      const dates = document.querySelectorAll('.date');
      const controls = document.querySelectorAll('.controls');
      let activeDate = 0;
      let autoplayInterval;
      const autoplayDelay = 3000; // Delay in milliseconds (3 seconds)

      function changeDate(index) {
        if (index < 0) index = 0;
        if (index >= dates.length) index = dates.length - 1;

        dates.forEach((date, i) => {
          date.classList.remove('active', 'sibling');
          if (i === index) {
            date.classList.add('active');
          } else if (i === index - 1 || i === index + 1) {
            date.classList.add('sibling');
          }
        });
      }

      function startAutoplay() {
        stopAutoplay(); // Ensure no duplicate intervals are running
        autoplayInterval = setInterval(() => {
          activeDate = (activeDate + 1) % dates.length; // Loop back to the start
          changeDate(activeDate);
        }, autoplayDelay);
      }

      function stopAutoplay() {
        clearInterval(autoplayInterval);
      }

      dates.forEach((date, index) => {
        date.addEventListener('click', () => {
          activeDate = index;
          changeDate(activeDate);
          startAutoplay(); // Restart autoplay after manual interaction
        });
      });

      controls.forEach(control => {
        control.addEventListener('click', () => {
          const direction = parseInt(control.dataset.direction);
          activeDate += direction;
          if (activeDate < 0) activeDate = 0;
          if (activeDate >= dates.length) activeDate = dates.length - 1;
          changeDate(activeDate);
          startAutoplay(); // Restart autoplay after manual interaction
        });
      });

      // Start autoplay when the page loads
      startAutoplay();
    });

  </script>
  
  
<script>
  const video = document.getElementById('myvideo');
  const muteBtn = document.getElementById('muteBtn');

  // Initial emoji (muted)
  muteBtn.textContent = '🔇';

  muteBtn.addEventListener('click', () => {
    if (video.muted) {
      // Unmute
      video.muted = false;
      muteBtn.textContent = '🔊'; // Unmute icon

      // Ensure video plays with sound
      const playPromise = video.play();
      if (playPromise !== undefined) {
        playPromise.catch(error => {
          console.log("Autoplay blocked. Wait for user interaction.");
        });
      }
    } else {
      // Mute
      video.muted = true;
      muteBtn.textContent = '🔇'; // Mute icon
    }
  });
</script>


</body>

</html>
