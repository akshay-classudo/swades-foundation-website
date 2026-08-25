<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
$cmsSite = cms_get_site_settings();
$cmsStats = cms_get_impact_stats();
$cmsHomePosts = cms_get_posts(5);
$cmsHomePage = cms_get_page('home');
cms_require_published_page('home');
$cmsHomepageSettings = is_array($cmsSite['homepage'] ?? null) ? $cmsSite['homepage'] : [];
$cmsHeroTitle = trim((string) ($cmsHomePage['content'] ?? ''));
$cmsHeroTitle = trim((string) ($cmsHomepageSettings['hero_title'] ?? $cmsHeroTitle));
$cmsHeroTitle = $cmsHeroTitle !== '' ? $cmsHeroTitle : ($cmsSite['tagline'] ?? 'Committed to lifting one million rural Indians out of poverty every five years through community-driven change');
$cmsHeroTitle = str_replace(' out of poverty every five years', " out of poverty\nevery five years", $cmsHeroTitle);
$cmsImpactIntro = $cmsHomepageSettings['impact_intro'] ?? ($cmsSite['default_meta_description'] ?? 'Every number represents a life touched. Over 600,000 lives have been positively impacted through Swades\' holistic interventions');
$cmsStoryFallbacks = [
  ['category' => 'Health', 'title' => 'A health champion making lasting impact', 'excerpt' => 'How Swades Mitra Aarti Pawar goes above and beyond for community well-being', 'link' => 'aarti-sudhir-pawar', 'image' => './assets/images/home/health.png', 'category_class' => 'colorbg3'],
  ['category' => 'Education', 'title' => 'A Scholar’s Journey from Aspiration to Achievement', 'excerpt' => 'Sharvari’s journey is proof of what’s possible when talent meets opportunity and determination.', 'link' => 'aspiration-to-achievement', 'image' => './assets/images/home/soe-edu.png', 'category_class' => 'colorbg3'],
  ['category' => 'Economic Development', 'title' => 'Sweet homecoming', 'excerpt' => 'How a young farmer has transformed his family\'s paddy fields into thriving farms', 'link' => 'sweet-homecoming', 'image' => './assets/images/home/ed.png', 'category_class' => 'colorbg2'],
  ['category' => 'Community Leadership and Institution Building', 'title' => 'What\'s in name (plate)?', 'excerpt' => 'When empowerment begins at the doorstep', 'link' => 'what-is-name-plate', 'image' => './assets/images/home/community-empowerment.png', 'category_class' => ''],
  ['category' => 'Water & Sanitisation', 'title' => 'How access to water transformed life in Chachkond', 'excerpt' => 'When clean water flows home, hope and opportunity follow', 'link' => 'sagibai-maruti-mahable', 'image' => './assets/images/home/watsan.png', 'category_class' => 'colorbg2'],
];
$cmsStories = !empty($cmsHomePosts) ? array_slice($cmsHomePosts, 0, 5) : $cmsStoryFallbacks;
$cmsWorkCards = $cmsHomepageSettings['work_cards'] ?? [
  ['slug' => 'water-and-sanitation', 'image' => './assets/images/water.svg', 'title' => 'Water, Sanitation & Green Initiatives', 'description' => 'Facilitating access to drinking water, and individual toilets at home.', 'button' => 'water-and-sanitation', 'alt' => 'Water, Sanitation & Green Initiatives'],
  ['slug' => 'health', 'image' => './assets/images/2.png', 'title' => 'Health', 'description' => 'Fostering health-seeking behaviour and access to primary healthcare', 'button' => 'health', 'alt' => 'Health'],
  ['slug' => 'educations', 'image' => './assets/images/education2.svg', 'title' => 'Education', 'description' => 'Creating joyful centres of learning', 'button' => 'educations', 'alt' => 'Education'],
  ['slug' => 'ecomonic-development', 'image' => './assets/images/economic.svg', 'title' => 'Economic Development', 'description' => 'Empowering through diversified livelihoods', 'button' => 'ecomonic-development', 'alt' => 'Economic Development'],
  ['slug' => 'our-approach', 'image' => './assets/images/1.png', 'title' => 'Community Leadership & Institution Building', 'description' => 'Training community volunteers to lead change', 'button' => 'Our-Approach', 'alt' => 'Community Empowerment'],
];
$cmsDreamVillagePage = cms_get_page('dream-village');
$cmsDreamVillageTitle = $cmsHomepageSettings['dream_village_title'] ?? ($cmsDreamVillagePage['title'] ?? 'Swades Dream Village');
$cmsDreamVillageIntro = $cmsHomepageSettings['dream_village_intro'] ?? ($cmsDreamVillagePage['meta_description'] ?? 'A Swades Dream Village is a community’s collective vision brought to life through local action, with support from Swades and the government. It embodies the five defining qualities — our 6 Ss.');
$cmsDreamVillageKnowMore = $cmsHomepageSettings['dream_village_page_slug'] ?? ($cmsDreamVillagePage['slug'] ?? 'dreamvillage');
$cmsDreamVillageKnowMoreLabel = $cmsHomepageSettings['dream_village_know_more_label'] ?? 'Know More';
$cmsApproachPage = cms_get_page('our-approach');
$cmsCommunityTitle = $cmsHomepageSettings['community_title'] ?? ($cmsApproachPage['title'] ?? 'Community-Driven Change');
$cmsCommunityIntro = $cmsHomepageSettings['community_intro'] ?? ($cmsApproachPage['meta_description'] ?? 'Placing the community at the heart of change, the Swades 4E Model supports sustained progress and a thoughtful exit.');
$cmsCommunityCards = $cmsHomepageSettings['community_model_cards'] ?? [
  ['title' => 'Engage', 'description' => 'We involve communities from the start, building relationships and understanding their needs before implementing any programs', 'image' => './assets/images/Engage.svg', 'alt' => 'Engage'],
  ['title' => 'Empower', 'description' => 'We equip communities with the skills, knowledge, and resources to manage and sustain development initiatives', 'image' => './assets/images/Empower.svg', 'alt' => 'Empower'],
  ['title' => 'Execute', 'description' => 'We implement programmes across water, sanitation, health, education and economic development, working with local partners and volunteers', 'image' => './assets/images/Execute.svg', 'alt' => 'Execute'],
  ['title' => 'Exit', 'description' => 'After empowering communities and creating strong ecosystem leaders, we monitor community progress and provide support to ensure long-term sustainability and self-reliance', 'image' => './assets/images/Exit.svg', 'alt' => 'Exit'],
];
$cmsDonateHeroTitle = $cmsHomepageSettings['donate_title'] ?? ($cmsSite['tagline'] ?? 'Empower rural communities to lead their development journey');
$cmsDonateHeroIntro = $cmsHomepageSettings['donate_intro'] ?? ($cmsSite['footer_text'] ?? 'Join Swades Foundation in Creating Thriving Rural Communities across India');
$cmsStoriesHeading = $cmsHomepageSettings['stories_title'] ?? 'Stories of Empowerment';
$cmsWorkHeading = $cmsHomepageSettings['work_title'] ?? 'Our Work';
$cmsWorkSubheading = $cmsHomepageSettings['work_subtitle'] ?? 'Transforming Rural Lives Through Holistic Change';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Swades Foundation</title>
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
    
    /************************/
    /* MAIN WRAPPER */
    .stats-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 40px;
      background: #f47600;
      padding: 50px 20px;
    }
    
    /* CARDS */
    .ruralcard {
      text-align: center;
      color: #fff;
    }
    
    .ruraltext h5 {
      font-size: 30px;
      font-weight: 600;
      margin: 0;
    }
    
    .ruraltext p, 
    .ruraltext span {
      font-size: 18px;
      font-weight: 400;
      margin: 0;
      letter-spacing: 0px;
    }
    
    /* 5 Districts / 17 Blocks layout */
    .two-line div {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
    }
    
    /* BIGGER DIVIDER (Height Increased) */
    .divider {
      width: 2.5px;
      height: 120px;
      background: #ffeed5;
    }
    
    /* CENTER THE LOGO */
    
    .home-btn img {
      display: inline-block;
      margin: 0 auto;
      width: 300px;
      margin-top: -100px !important;
      margin-bottom: -100px !important;
    }
    @media (max-width: 480.8px) {
        .desktop {
            display: none !important;
        }
    }
    .mobile-stats-wrapper {
      background: #f77600;
      padding: 30px 20px;
      color: #fff;
      display: flex;
      flex-direction: column;
      gap: 40px;
    }
    
    .mobile-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
    }
    
    .left, .right {
      width: 48%;
      text-align: center;
    }
    
    .mobile-row h5 {
      font-size: 26px;
      font-weight: 700;
      margin: 0 0 5px 0;
    }
    
    .mobile-row p, 
    .mobile-row span {
      font-size: 16px;
      margin: 0;
      display: block;
      letter-spacing: 0px;
    }
    
    /* Vertical Divider */
    .vline {
      width: 2.8px;
      background: #ffeed5;
      height: 100%;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }
    
    /* Show only on mobile */
    @media (min-width: 768px) {
      .mobile-stats-wrapper {
        display: none;
      }
    }
    @media (max-width: 767px){
    .home-btn img {
        margin-top: -50px !important;
    }
}
    .two-line {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.stat-line {
    display: flex;
    align-items: center;
    gap: 6px;
    line-height: 1.2;
    margin: 3px 0;
}

.stat-line h5 {
    margin: 0;
    font-size: 32px;
    font-weight: 700;
}

.stat-line span {
    margin: 0;
    font-size: 18px;
}


.logo-page{
    display:grid;
    grid-template-columns:repeat(7,1fr);
    gap:25px 20px;
    align-items:center;
    padding:20px 40px;
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
/*.logo-page-partners {*/
/*    display: grid;*/
/*    grid-template-columns: repeat(5, 1fr);*/
/*}*/
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
          <a class="navbar-brand" href="/">
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

  <div class="home-section">
    <div class="container">
        <div class="banner-cover">
          <div class="video-cover">
            <video id="myvideo" autoplay muted loop playsinline preload="auto">
                <source src="./assets/videos/homebannervideo.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
          </div>
        </div>

      <div class="home-tittle">
        <!--<h6>ABOUT US</h6>-->
        <h1><?= nl2br(htmlspecialchars($cmsHeroTitle, ENT_QUOTES, 'UTF-8')) ?></h1>
      </div>
      <div class="layernewwerap gridlayer6 stats-wrapper desktop">
          <div class="ruralcard">
            <div class="ruraltext">
              <h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_years', '11+'), ENT_QUOTES, 'UTF-8') ?></h5>
              <p>Years</p>
            </div>
          </div>
        
          <div class="divider"></div>
    
          <div class="ruralcard">
            <div class="ruraltext two-line">
              <div><h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_districts', '5')) ?></h5><span>Districts</span></div>
              <div><h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_blocks', '17')) ?></h5><span>Blocks</span></div>
            </div>
          </div>
        
          <div class="divider"></div>
        
          <div class="ruralcard">
            <div class="ruraltext">
              <h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_volunteers', '13,200+'), ENT_QUOTES, 'UTF-8') ?></h5>
              <p>Community <br> Volunteers</p>
            </div>
          </div>
        
          <div class="divider"></div>
        
          <div class="ruralcard">
            <div class="ruraltext">
              <h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_reached', '1.19 Mn'), ENT_QUOTES, 'UTF-8') ?></h5>
              <p>Reached</p>
            </div>
          </div>
        
          <div class="divider"></div>
        
          <div class="ruralcard">
            <div class="ruraltext">
              <h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_benefited', '668K'), ENT_QUOTES, 'UTF-8') ?></h5>
              <p>Lives Impacted</p>
            </div>
          </div>
        
          <div class="divider"></div>
        
          <div class="ruralcard">
            <div class="ruraltext">
              <h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_interventions', '1.3 Mn'), ENT_QUOTES, 'UTF-8') ?></h5>
              <p>Unique Interventions <br> Delivered</p>
            </div>
          </div>
        
        </div>
        
      <div class="mobile-stats-wrapper">
        <!-- Row 1 -->
          <div class="mobile-row">
            <div class="left">
              <h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_years', '11+'), ENT_QUOTES, 'UTF-8') ?></h5>
              <p>Years</p>
            </div>
        
            <div class="vline"></div>
        
            <div class="ruraltext two-line">
                <div class="stat-line">
                    <h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_districts', '5')) ?></h5>
                    <span>Districts</span>
                </div>
                <div class="stat-line">
                    <h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_blocks', '17')) ?></h5>
                    <span>Blocks</span>
                </div>
            </div>
          </div>
        
          <!-- Row 2 -->
          <div class="mobile-row">
            <div class="left">
              <h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_volunteers', '13,200+'), ENT_QUOTES, 'UTF-8') ?></h5>
              <p>Community Volunteers</p>
            </div>
        
            <div class="vline"></div>
        
            <div class="right">
              <h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_reached', '1.19 Mn'), ENT_QUOTES, 'UTF-8') ?></h5>
              <p>Reached</p>
            </div>
          </div>
        
          <!-- Row 3 -->
          <div class="mobile-row">
            <div class="left">
              <h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_benefited', '668K'), ENT_QUOTES, 'UTF-8') ?></h5>
              <p>Lives Impacted</p>
            </div>
        
            <div class="vline"></div>
        
            <div class="right">
              <h5><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_interventions', '1.3 Mn'), ENT_QUOTES, 'UTF-8') ?></h5>
              <p>Unique Interventions Delivered</p>
            </div>
          </div>
        </div>
        
        <div class="home-btn text-center logo-img">
          <img src="./assets/images/home/swasebanedes.svg">
        </div>
    </div>
  </div><!---home-section-->

  <div class="impact-section">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>Our Impact</h2>
        <p><?= htmlspecialchars($cmsImpactIntro, ENT_QUOTES, 'UTF-8') ?></p>
      </div><!--heading-hd-->

      <div class="education-select">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Leadership-tab" data-bs-toggle="pill" data-bs-target="#pills-Leadership" type="button" role="tab" aria-controls="pills-Leadership" aria-selected="false">Community Leadership & Institution Building</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link " id="pills-Sanitation-tab" data-bs-toggle="pill" data-bs-target="#pills-Sanitation"
              type="button" role="tab" aria-controls="pills-Sanitation" aria-selected="true">Water, Sanitation & Green Initiatives</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-Health-tab" data-bs-toggle="pill" data-bs-target="#pills-Health" type="button" role="tab" aria-controls="pills-Health" aria-selected="false">Health</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Education-tab" data-bs-toggle="pill" data-bs-target="#pills-Education" type="button" role="tab" aria-controls="pills-Education" aria-selected="false">Education</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Economic-tab" data-bs-toggle="pill" data-bs-target="#pills-Economic" type="button" role="tab" aria-controls="pills-Economic" aria-selected="false">Economic Development</button>
          </li>
        </ul>
      </div>

      <div class="custom-tabs">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Leadership-tab" data-bs-toggle="pill" data-bs-target="#pills-Leadership" type="button" role="tab" aria-controls="pills-Leadership" aria-selected="false">Community Leadership & Institution Building</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link " id="pills-Sanitation-tab" data-bs-toggle="pill" data-bs-target="#pills-Sanitation" type="button" role="tab" aria-controls="pills-Sanitation" aria-selected="true">Water, Sanitation & Green Initiatives</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-Health-tab" data-bs-toggle="pill" data-bs-target="#pills-Health" type="button" role="tab" aria-controls="pills-Health" aria-selected="false">Health</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Education-tab" data-bs-toggle="pill" data-bs-target="#pills-Education" type="button" role="tab" aria-controls="pills-Education" aria-selected="false">Education</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Economic-tab" data-bs-toggle="pill" data-bs-target="#pills-Economic" type="button" role="tab" aria-controls="pills-Economic" aria-selected="false">Economic Development</button>
          </li>
        </ul>
      </div>
      
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade" id="pills-Leadership" role="tabpanel" aria-labelledby="pills-Leadership-tab">
          <div class="health-werap">
            <div class="gridlayer5 desktop">
        
              <!-- Card 1 -->
              <div class="through-box Impact2 newheight2">
                <div class="through-cnt stat-1"> 
              <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'home_volunteers', '13,200+')) ?></h4>
                  <h5>Community volunteers</h5>
                  <p>trained in multi-dimensional programmes</p>
                </div>
                <div class="supportedimg icon3">
                  <img src="./assets/images/home/clib/1.svg" alt="">
                </div>
              </div>
        
              <!-- Card 2 -->
              <div class="through-box newheight1">
                <div class="through-cnt">
              <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'home_vdc', '1,417+')) ?></h4>
                  <h5>Village Development Committees</h5>
                  <p>creating empowered community leaders</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/home/clib/vdc.png" alt="">
                </div>
              </div>
        
              <!-- Card 3 -->
              <div class="through-box newheight4">
                <div class="through-cnt stat-3">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'home_ecosystem_builders', '2,372')) ?></h4>
                  <h5>specialised eco-system builders</h5>
                  <p>trained in Health care, Animal welfare, Livelihoods & more</p>
                </div>
                <div class="climate-img icon5">
                  <img src="./assets/images/home/clib/3.svg" alt="">
                </div>
              </div>
        
              <!-- Card 4 -->
              <div class="through-box newheight3">
                <div class="through-cnt">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'home_women', '14,135+')) ?></h4>
                  <h5>women</h5>
                  <p>empowered through capacity building across 1,417 SHGs</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/home/clib/women.png" alt="">
                </div>
              </div>
        
              <!-- Card 5 -->
              <div class="through-box Impact5 newheight5">
                <div class="through-cnt stat-5">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'home_fpos', '6'), ENT_QUOTES, 'UTF-8') ?></h4>
                  <h5>Farmer Producer Organisations</h5>
                  <p>for farmer support system and ongoing training</p>
                </div>
                <div class="climate-img icon4">
                  <img src="./assets/images/home/clib/5.svg" alt="">
                </div>
              </div>
        
            </div>
          </div>
         
          <div class="stories-section rainwater mobile" id="water" >
              <div class="owl-carousel owl-theme slider1">
                <!-- Card 1 -->
              <div class="through-box Impact2 newheight2">
                <div class="through-cnt stat-1"> 
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'home_volunteers', '13,200+')) ?></h4>
                  <h5>Community volunteers</h5>
                  <p>trained in multi-dimensional programmes</p>
                </div>
                <div class="supportedimg icon3">
                  <img src="./assets/images/home/clib/1.svg" alt="">
                </div>
              </div>
        
              <!-- Card 2 -->
              <div class="through-box newheight1">
                <div class="through-cnt">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'home_vdc', '1,417+')) ?></h4>
                  <h5>Village Development Committees</h5>
                  <p>creating empowered community leaders</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/home/clib/vdc.png" alt="">
                </div>
              </div>
        
              <!-- Card 3 -->
              <div class="through-box newheight4">
                <div class="through-cnt stat-3">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'home_ecosystem_builders', '2,372')) ?></h4>
                  <h5>specialised eco-system builders</h5>
                  <p>trained in Health care, Animal welfare, Livelihoods & more</p>
                </div>
                <div class="climate-img icon5">
                  <img src="./assets/images/home/clib/3.svg" alt="">
                </div>
              </div>
        
              <!-- Card 4 -->
              <div class="through-box newheight3">
                <div class="through-cnt">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'home_women', '14,135+')) ?></h4>
                  <h5>women</h5>
                  <p>empowered through capacity building across 1,417 SHGs</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/home/clib/women.png" alt="">
                </div>
              </div>
        
              <!-- Card 5 -->
              <div class="through-box Impact5 newheight5">
                <div class="through-cnt stat-5">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'home_fpos', '6'), ENT_QUOTES, 'UTF-8') ?></h4>
                  <h5>Farmer Producer Organisations</h5>
                  <p>for farmer support system and ongoing training</p>
                </div>
                <div class="climate-img icon4">
                  <img src="./assets/images/home/clib/5.svg" alt="">
                </div>
              </div>
              </div>

</div>

        
          <div class="impact-btn">
            <a href="impact" class="btn">View Our Impact</a>
          </div>
        </div>

    
        <div class="tab-pane fade" id="pills-Sanitation" role="tabpanel" aria-labelledby="pills-Sanitation-tab">
          <div class="health-werap">
            <div class="gridlayer5 desktop">
              <div class="through-box newheight1">
                <div class="through-cnt watsan stat-1">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'watsan_water_lives', '298,855'), ENT_QUOTES, 'UTF-8') ?></h4>
                  <h5>lives</h5>
                  <p>received access to<br /> clean drinking water<br /> through 763 drinking<br /> water schemes</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/home/watsan/3.svg" alt="">
                </div>
              </div><!---through-box-->

              <div class="through-box newheight3">
                <div class="through-cnt watsan ">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'watsan_toilet_lives', '177,080'), ENT_QUOTES, 'UTF-8') ?></h4>
                  <h5>Individuals</h5>
                  <p>received access to safe,<br /> individual toilets at home</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/home/watsan/2.png" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box Impact2 newheight2">
                <div class="through-cnt watsan stat-3">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'watsan_toilets', '39,222'), ENT_QUOTES, 'UTF-8') ?></h4>
                  <!--<h5>toilets</h5>-->
                  <p>Individual household toilets<br />built in rural homes</p>
                </div>
                <div class="climate-img p-0 watsanicon">
                 <img src="./assets/images/home/watsan/1.svg" alt="">
                </div>
              </div><!---through-box-->

              <div class="through-box Impact5 newheight5">
                <div class="through-cnt watsan">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'watsan_schools', '437'), ENT_QUOTES, 'UTF-8') ?></h4>
                  <h5>schools</h5>
                  <p>supported with WASH facilities</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/home/watsan/wat-san.png" alt="">
                </div>
              </div><!---through-box-->

              <div class="through-box newheight4">
                <div class="through-cnt watsan stat-5">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'watsan_odf_hamlets', '1,503+')) ?></h4>
                  <h5>hamlets</h5>
                  <p>declared open defecation free (ODF)</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/home/watsan/5.svg" alt="">
                </div>
              </div><!---through-box-->
            </div>

            <div class="stories-section rainwater mobile" id="water" >
              <div class="owl-carousel owl-theme slider1">
               <div class="through-box newheight1">
                <div class="through-cnt watsan stat-1">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'watsan_water_lives', '240,000+')) ?></h4>
                  <h5>lives</h5>
                  <p>received access to<br /> clean drinking water<br /> through 763 drinking<br /> water schemes</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/home/watsan/3.svg" alt="">
                </div>
              </div><!---through-box-->

              <div class="through-box newheight3">
                <div class="through-cnt watsan ">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'watsan_toilet_lives', '116,000+')) ?></h4>
                  <h5>lives</h5>
                  <p>received access to safe,<br /> individual toilets at home</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/home/watsan/2.png" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box Impact2 newheight2">
                <div class="through-cnt watsan stat-3">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'watsan_toilets', '35,000+')) ?></h4>
                  <h5>toilets</h5>
                  <p>Individual household toilets<br />built in rural homes</p>
                </div>
                <div class="climate-img p-0 watsanicon">
                 <img src="./assets/images/home/watsan/1.svg" alt="">
                </div>
              </div><!---through-box-->

              <div class="through-box Impact5 newheight5">
                <div class="through-cnt watsan">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'watsan_schools', '390+')) ?></h4>
                  <h5>schools</h5>
                  <p>supported with WASH facilities</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/home/watsan/wat-san.png" alt="">
                </div>
              </div><!---through-box-->

              <div class="through-box newheight4">
                <div class="through-cnt watsan stat-5">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'watsan_odf_hamlets', '1,503+')) ?></h4>
                  <h5>hamlets</h5>
                  <p>declared open defecation free (ODF)</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/home/watsan/5.svg" alt="">
                </div>
              </div><!---through-box-->
               </div>
            </div>
          </div>
          <div class="impact-btn">
            <a href="impact" class="btn">View Our Impact</a>
          </div>
        </div>
        
        <div class="tab-pane fade show active" id="pills-Health" role="tabpanel" aria-labelledby="pills-Health-tab">
          <div class="health-werap">
            <div class="gridlayer5 desktop">
              <div class="through-box Impact2 newheight2">
                  <div class="supportedimg-1 watsanicon">
                    <img src="./assets/images/home/Home/1.svg" alt="">
                  </div>
                <div class="through-cnt stat-1">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_screened', '415,000+')) ?></h4>
                  <h5>people</h5>
                  <p>screened By<br />Swades Mitras</p>
                </div>
                <!--<div class="climate-img p-0">
                  <img src="./assets/images/Impact2.svg" alt="">
                </div>-->
              </div><!---through-box-->
              <div class="through-box newheight1">
                <div class="through-cnt">
                    <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_volunteers', '2,700+')) ?></h4>
                    <h5>health volunteers</h5>
                    <p>trained within the communities</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/home/Home/i-health.png" alt="" >
                </div>
              </div><!---through-box-->
              
              <div class="through-box newheight4">
                <div class="through-cnt stat-3">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_spectacles', '130,000+')) ?></h4>
                  <h5>spectacles</h5>
                  <p>delivered to rural doorsteps</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/home/Home/3.svg" alt="" >
                </div>
              </div><!---through-box-->
              
              <div class="through-box newheight3">
                <div class="through-cnt">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_cataract', '22,000+')) ?></h4>
                  <h5>cataract surgeries</h5>
                  <p>conducted to restore sight</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/home/Home/i-health2.png" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box Impact5 newheight5">
                <div class="through-cnt stat-5">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_camps', '170+')) ?></h4>
                  <h5>village health camps</h5>
                  <p>screening & care for<br />19,000+ individuals</p>
                </div>
                <div class="climate-img cause-image">
                  <img src="./assets/images/home/Home/5.svg" alt="">
                </div>
              </div><!---through-box-->
            </div>
            
            <div class="stories-section rainwater mobile" id="health">
              <div class="owl-carousel owl-theme slider1">
              <div class="through-box Impact2 newheight2">
                  <div class="supportedimg-1 watsanicon">
                    <img src="./assets/images/home/Home/1.svg" alt="">
                  </div>
                <div class="through-cnt stat-1">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_screened', '415,000+')) ?></h4>
                  <h5>people</h5>
                  <p>screened By<br />Swades Mitras</p>
                </div>
                <!--<div class="climate-img p-0">
                  <img src="./assets/images/Impact2.svg" alt="">
                </div>-->
              </div><!---through-box-->
              <div class="through-box newheight1">
                <div class="through-cnt">
                    <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_volunteers', '2,700+')) ?></h4>
                    <h5>health volunteers</h5>
                    <p>trained within the communities</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/home/Home/i-health.png" alt="" >
                </div>
              </div><!---through-box-->
              
              <div class="through-box newheight4">
                <div class="through-cnt stat-3">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_spectacles', '130,000+')) ?></h4>
                  <h5>spectacles</h5>
                  <p>delivered to rural doorsteps</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/home/Home/3.svg" alt="" >
                </div>
              </div><!---through-box-->
              
              <div class="through-box newheight3">
                <div class="through-cnt">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_cataract', '22,000+')) ?></h4>
                  <h5>cataract surgeries</h5>
                  <p>conducted to restore sight</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/home/Home/i-health2.png" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box Impact5 newheight5">
                <div class="through-cnt stat-5">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_camps', '170+')) ?></h4>
                  <h5>village health camps</h5>
                  <p>screening & care for<br />19,000+ individuals</p>
                </div>
                <div class="climate-img cause-image">
                  <img src="./assets/images/home/Home/5.svg" alt="">
                </div>
              </div><!---through-box-->
              </div>
            </div>
          </div>
          <div class="impact-btn">
            <a href="impact" class="btn">View Our Impact</a>
          </div>
        </div>

        <div class="tab-pane fade" id="pills-Education" role="tabpanel" aria-labelledby="pills-Education-tab">
            <div class="health-werap">
            <div class="gridlayer5 desktop">
              <div class="through-box Impact2 newheight2">
                <div class="through-cnt stat-1">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_students', '155,000+')) ?></h4>
                  <h5>students</h5>
                  <p>impacted through education efforts</p>
                </div>
                 <div class="climate-img watsanicon">
                  <img src="./assets/images/edu/1.svg" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box newheight1">
                <div class="through-cnt">
                  <h4>10,649</h4>
                  <h5>students</h5>
                  <p>supported through <br />scholarship</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/edu/i-edu-1.png" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box newheight4">
                <div class="through-cnt stat-3">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_teachers', '4,500+')) ?></h4>
                  <h5>teachers</h5>
                  <p>trained across multiple programmes</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/edu/3.svg" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box Impact5 newheight5">
                <div class="through-cnt">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_libraries', '659+')) ?></h4>
                  <h5>schools</h5>
                  <p>supported with library set-up</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/edu/i-edu-2.png" alt="">
                </div>
              </div><!---through-box-->
              <div class="through-box newheight3">
                <div class="through-cnt stat-5">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_solar_students', '18,800+')) ?></h4>
                  <h5>students</h5>
                  <p>impacted with solar infra in 365+ schools & anganwadi's</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/edu/5.svg" alt="">
                </div>
              </div><!---through-box-->
              
            </div>
            <div class="stories-section rainwater mobile" id="education">
              <div class="owl-carousel owl-theme slider1">
               <div class="through-box Impact2 newheight2">
                <div class="through-cnt stat-1">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_students', '155,000+')) ?></h4>
                  <h5>students</h5>
                  <p>impacted through education efforts</p>
                </div>
                 <div class="climate-img watsanicon">
                  <img src="./assets/images/edu/1.svg" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box newheight1">
                <div class="through-cnt">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_scholarships', '9,500+')) ?></h4>
                  <h5>students</h5>
                  <p>supported through <br />scholarship</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/edu/i-edu-1.png" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box newheight4">
                <div class="through-cnt stat-3">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_teachers', '4,500+')) ?></h4>
                  <h5>teachers</h5>
                  <p>trained across multiple programmes</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/edu/3.svg" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box Impact5 newheight5">
                <div class="through-cnt">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_libraries', '659+')) ?></h4>
                  <h5>schools</h5>
                  <p>supported with library set-up</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/edu/i-edu-2.png" alt="">
                </div>
              </div><!---through-box-->
              <div class="through-box newheight3">
                <div class="through-cnt stat-5">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_solar_students', '18,800+')) ?></h4>
                  <h5>students</h5>
                  <p>impacted with solar infra in 365+ schools & anganwadi's</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/edu/5.svg" alt="">
                </div>
              </div><!---through-box-->
              </div>
            </div>
          </div>
          <div class="impact-btn">
            <a href="impact" class="btn">View Our Impact</a>
          </div>
          </div>
          
        <div class="tab-pane fade" id="pills-Economic" role="tabpanel" aria-labelledby="pills-Economic-tab">
          <div class="health-werap">
            <div class="gridlayer5 desktop">
                
              <div class="through-box Impact2 newheight2">
                <div class="through-cnt stat-1">
                   <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_gdp', 'Rs. 1260')) ?></h4>
                   <h5>million</h5>
                  <p>added to annual GDP through community livelihood initiatives</p>
                </div>
                  <div class="climate-img watsanicon">
                <img src="./assets/images/EconomicDevelopement/1.svg" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box newheight1">
                <div class="through-cnt">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_entrepreneurs', '50,800+')) ?></h4>
                  <h5>entrepreneurs</h5>
                  <p>empowered across livestock and farm initiatives</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/EconomicDevelopement/i-ed.png" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box newheight3">
                <div class="through-cnt stat-3">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_youth', '10,500+')) ?></h4>
                  <h5>youth</h5>
                  <p>skilled through training programs</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/EconomicDevelopement/3.svg" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box Impact5 newheight5">
                <div class="through-cnt">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_farmers', '103,000+')) ?></h4>
                  <h5>farmers</h5>
                  <p>trained through capacity-building programmes</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/EconomicDevelopement/i-ed-2.png" alt="">
                </div>
              </div><!---through-box-->
              <div class="through-box newheight4">
                <div class="through-cnt stat-5">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_women', '21,352')) ?></h4>
                  <h5>women</h5>
                  <p>empowered across livelihood programmes</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/EconomicDevelopement/5.svg" alt="">
                </div>
              </div><!---through-box-->
            </div>
            <div class="stories-section rainwater mobile" id="economic">
              <div class="owl-carousel owl-theme slider1">
               <div class="through-box Impact2 newheight2">
                <div class="through-cnt stat-1">
                   <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_gdp', 'Rs. 1260')) ?></h4>
                   <h5>million</h5>
                  <p>added to annual GDP through community livelihood initiatives</p>
                </div>
                  <div class="climate-img watsanicon">
                <img src="./assets/images/EconomicDevelopement/1.svg" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box newheight1">
                <div class="through-cnt">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_entrepreneurs', '50,800+')) ?></h4>
                  <h5>entrepreneurs</h5>
                  <p>empowered across livestock and farm initiatives</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/EconomicDevelopement/i-ed.png" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box newheight3">
                <div class="through-cnt stat-3">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_youth', '10,500+')) ?></h4>
                  <h5>youth</h5>
                  <p>skilled through training programs</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/EconomicDevelopement/3.svg" alt="">
                </div>
              </div><!---through-box-->
              
              <div class="through-box Impact5 newheight5">
                <div class="through-cnt">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_farmers', '103,000+')) ?></h4>
                  <h5>farmers</h5>
                  <p>trained through capacity-building programmes</p>
                </div>
                <div class="climate-img">
                  <img src="./assets/images/EconomicDevelopement/i-ed-2.png" alt="">
                </div>
              </div><!---through-box-->
              <div class="through-box newheight4">
                <div class="through-cnt stat-5">
                  <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_women', '21,352')) ?></h4>
                  <h5>women</h5>
                  <p>empowered across livelihood programmes</p>
                </div>
                <div class="climate-img watsanicon">
                  <img src="./assets/images/EconomicDevelopement/5.svg" alt="">
                </div>
              </div><!---through-box-->
              </div>
            </div>
          </div>
          <div class="impact-btn">
            <a href="impact" class="btn">View Our Impact</a>
          </div>
        </div>
      </div>
    </div>
  </div><!---impact-section-->
  <?php include __DIR__ . '/include/home-work.php'; ?>
  <?php include __DIR__ . '/include/home-dream-village.php'; ?>
  
  <div class="community-section">
    <div class="container">
      <div class="heading-hd">
        <h2><?= htmlspecialchars($cmsCommunityTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        <p><?= htmlspecialchars($cmsCommunityIntro, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="gridlayer4">
        <?php foreach ($cmsCommunityCards as $cmsCommunityCard): ?>
        <div class="engage-cnt">
          <h5><?= htmlspecialchars($cmsCommunityCard['title'] ?? '', ENT_QUOTES, 'UTF-8') ?></h5>
          <p><?= htmlspecialchars($cmsCommunityCard['description'] ?? '', ENT_QUOTES, 'UTF-8') ?></p>
          <span class="Engage-img"><img src="<?= htmlspecialchars($cmsCommunityCard['image'] ?? '', ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($cmsCommunityCard['alt'] ?? '', ENT_QUOTES, 'UTF-8') ?>"></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div><!--community-section-->
  <?php include __DIR__ . '/include/home-stories.php'; ?>

  <!-- Start Pre Footer Donation -->
  <div class="thriving-section">
    <div class="container">
      <div class="immediate-bg overly" style="background-image: url('./assets/images/roberta-sant.svg');">
        <div class="titlewrap">
          <h3><?= nl2br(htmlspecialchars($cmsDonateHeroTitle, ENT_QUOTES, 'UTF-8')) ?></h3>
          <p><?= htmlspecialchars($cmsDonateHeroIntro, ENT_QUOTES, 'UTF-8') ?></p>
          <a href="Donate" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
    </div>
  </div><!----thriving-section-->
  <div class="donate-button innerbtn mobile pre-footer-btn">
    <a href="Donate" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
  </div>
  


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
    
    
    
    
  
  <div class="believers-section">
    <div class="heading-hd text-center">
        <h2>Our Partners</h2>
    </div>

    <div class="owl-carousel believers-carousel">
        <?php foreach (cms_logo_slides('partner', 14) as $chunk) {
            echo '<div class="logo-page logo-page-partners">';

            foreach ($chunk as $logo) {
                $logoUrl = cms_asset_url($logo['logo_path']);

                echo '
                <div class="brandlogo">
                    <img src="' . htmlspecialchars($logoUrl ?: '', ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($logo['alt_text'] ?: 'Partner Logo', ENT_QUOTES, 'UTF-8') . '" loading="lazy">
                </div>';
            }

            echo '</div>';
        } ?>
    </div>
</div>






  
  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
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
  
  </script>
  
  <script src="./assets/js/custom.js"></script>
  <?php include 'include/footer.php'; ?> <!-- Footer -->
</body>
</html>
