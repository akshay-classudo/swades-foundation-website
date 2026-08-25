<?php 
include 'db.php';
require_once __DIR__ . '/include/cms.php';
$cmsStats = cms_get_impact_stats();
$cmsEconomicPage = cms_get_page('economic-development');
cms_require_published_page('economic-development');
$cmsEconomicContent = cms_page_content($cmsEconomicPage);
?>
<!DOCTYPE html>
<html>
<head>
  <title><?= htmlspecialchars(cms_page_field($cmsEconomicPage, 'meta_title', 'Swades Foundation Work Economic Development'), ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/js/owlcarousel/owl.carousel.css">
  <link rel="stylesheet" href="./assets/css/aos.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom-animation.css">
  <link rel="icon" type="image/png" href="./assets/images/favicon.png">
  <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css">
  <style>
  .constructed1 img {
    border-radius: 24px !important;
  }
  .ed-impact h4, .ed-impact h5 {
      color: #117D32;
  }
  .covercolor4 {
      background-color: #D9FFE7;
  }
  @media(max-width: 767px){
      #ed-impact {
        margin-top: 95px;
     }
  }
  @media (max-width: 425.8px) {
    .titlewrap h3 {
        margin-top: -30px !important;
    }
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
  <header id="header" class="home-header ecomonic-header">
    <div class="container">
      <div class="header-menu">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="/">
            <img src="./assets/images/inner-page-logo.svg" alt="">
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
                  <li><a href="ecomonic-development">Economic Development</a></li>
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
              <a href="javascript:void(0)" onClick="submitCause(3)" class="btn">Donate <i class="fas fa-heart"></i></a>
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

  <div class="inner-page ecomonic-header">
    <div class="container">
      <div class="inner-hd text-center">
        <?php if ($cmsEconomicContent !== ''): ?>
          <?= $cmsEconomicContent ?>
        <?php else: ?>
          <h2>Ecomonic Development</h2>
          <p>Our various livelihoods initiatives aim to ensure that every household earns a minimum annual income of ₹2 lakhs by providing access to diversified and resilient livelihood opportunities.</p>
        <?php endif; ?>
      </div>
      <div class="inner-cover">
        <img src="./assets/images/EconomicDevelopement/ed-banner.png" alt="" class="desktop">
        <img src="./assets/images/EconomicDevelopement/ed-banner.png" alt="" class="mobile">
      </div>
    </div>
  </div><!---home-section-->

  <div class="abundance-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="aerial-view">
            <!--<img src="./assets/images/Development/ecomonic-img.svg" alt="">-->
            <video id="myVideo" autoplay muted loop playsinline>
                <source src="./assets/videos/ED.mp4" type="video/mp4">
                    Your browser does not support the video tag.
            </video>
          </div>
        </div>
        <div class="col-md-7">
          <div class="aerial-text">
            <h3>Building Sustainable Livelihoods, On and Off the Farm</h3>
            <p>Our livelihood initiatives enhance rural prosperity through a comprehensive approach. The On-Farm Programme promotes sustainable, year-round farming of vegetables, fruits, and flowers with techniques like solar drip irrigation, farm ponds and rainwater harvesting. The Off-Farm Programme offers steady income through activities such as dairy farming, goat rearing, poultry, and fishing, with a strong focus on empowering women and marginalized communities by providing skills, resources, and market access. The Non-Farm Programme empowers rural youth with vocational skills in diverse trades such as masonry, electrical work, data entry, hospitality, and beauty services, enabling them to build sustainable livelihoods through employment or self-employment.</p>
          </div>
        </div>
      </div>
    </div>
  </div><!---abundance-section--->

  <div class="impact-section reality—proving">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>Our Impact</h2>
        <p>Over 2,50,000 individuals have benefitted from Swades' livelihood programmes, augmenting rural incomes by 120 crores annually 
        </p>
      </div><!--heading-hd-->

      <div class="gridlayer5 desktop">
        <!--<div class="proving-cover covercolor4">
          <div class="top-content">
            <h4>12,050</h4>
            <p>farmers trained</p>
          </div>
          <div class="constructed1 rainwater3">
            <img src="./assets/images/EconomicDevelopement/1.svg" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor4">
          <div class="top-content">
               
            <h4>4,456 Acres</h4>
            <p>transformed through irrigation</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/EconomicDevelopement/2.png" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor4">
          <div class="top-content">
               
            <h4>~4,933</h4>
            <p>dairy entrepreneurs created</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/EconomicDevelopement/3.svg" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor4">
          <div class="constructed1 rainwater3">
            <img src="./assets/images/EconomicDevelopement/4.svg" alt="">
          </div>
          <div class="top-content bottom-content">
               
            <h4>8,396</h4>
            <p>youth in skilled</p>
          </div>
        </div>

        <div class="proving-cover covercolor4">
          <div class="top-content">
            <h4>10,160</h4>
            <p>Youth skilled </p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/EconomicDevelopement/5.png" alt="">
          </div>
        </div>-->
        <div class="through-box covercolor4 ed-impact Impact2 newheight2">
          <div class="through-cnt stat-1">
             <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_gdp', 'Rs. 1260')) ?></h4>
             <h5>million</h5>
            <p>added to annual GDP through community livelihood initiatives</p>
          </div>
            <div class="climate-img watsanicon">
          <img src="./assets/images/EconomicDevelopement/1.svg" alt="">
          </div>
        </div><!---through-box ed-impact-->

        <div class="through-box covercolor4 ed-impact newheight1">
          <div class="through-cnt">
            <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_entrepreneurs', '50,800+')) ?></h4>
            <h5>entrepreneurs</h5>
            <p>empowered across livestock and farm initiatives</p>
          </div>
          <div class="climate-img">
            <img src="./assets/images/EconomicDevelopement/i-ed.png" alt="">
          </div>
        </div><!---through-box ed-impact-->

        <div class="through-box covercolor4 ed-impact newheight3">
          <div class="through-cnt stat-3">
            <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_youth', '10,500+')) ?></h4>
            <h5>youth</h5>
            <p>skilled through training programs</p>
          </div>
          <div class="climate-img watsanicon">
            <img src="./assets/images/EconomicDevelopement/3.svg" alt="">
          </div>
        </div><!---through-box ed-impact-->

        <div class="through-box covercolor4 ed-impact Impact5 newheight5">
          <div class="through-cnt">
            <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_farmers', '103,000+')) ?></h4>
            <h5>farmers</h5>
            <p>trained through capacity-building programmes</p>
          </div>
          <div class="climate-img">
            <img src="./assets/images/EconomicDevelopement/i-ed-2.png" alt="">
          </div>
        </div><!---through-box ed-impact-->
        
        <div class="through-box covercolor4 ed-impact newheight4">
          <div class="through-cnt stat-5">
            <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_women', '21,352')) ?></h4>
            <h5>women</h5>
            <p>empowered across livelihood programmes</p>
          </div>
          <div class="climate-img watsanicon">
            <img src="./assets/images/EconomicDevelopement/5.svg" alt="">
          </div>
        </div><!---through-box ed-impact-->
      </div>

      <div class="stories-section rainwater mobile">
       <div class="owl-carousel owl-theme slider1">
        <!--<div class="proving-cover covercolor4">
          <div class="top-content">
            <h4>2,558</h4>
            <p>Swades Mitras, with 1,665 active and serving nearly 4,97,260 people.</p>
          </div>
          <div class="constructed1 rainwater3">
            <img src="./assets/images/Development/ecomonic1.svg" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor4">
          <div class="top-content">
            <h4>16.33 lakh <br> KWP</h4>
            <p>of solar energy generated annually, cutting 1,183 MT of carbon emissions
            </p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/sanitation/constructed2.svg" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor4">
          <div class="top-content">
            <h4>114.7</h4>
            <p>metric tonnes of waste recycled through community participation</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/Development/ecomonic3.svg" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor4">
          <div class="constructed1 rainwater3">
            <img src="./assets/images/Development/ecomonic4.svg" alt="">
          </div>
          <div class="top-content bottom-content">
            <h4>15.25 crore litres</h4>
            <p>of rainwater have percolated into the ground through contour trenches, boosting groundwater recharge</p>
          </div>
        </div>

        <div class="proving-cover covercolor4">
          <div class="top-content">
            <h4>38 acres</h4>
            <p>of barren land converted to cultivable land</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/sanitation/constructed5.svg" alt="">
          </div>
        </div>-->
         <div class="through-box covercolor4 ed-impact Impact2 newheight2">
          <div class="through-cnt stat-1">
             <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_gdp', 'Rs. 1260')) ?></h4>
             <h5>million</h5>
            <p>added to annual GDP through community livelihood initiatives</p>
          </div>
            <div class="climate-img watsanicon">
          <img src="./assets/images/EconomicDevelopement/1.svg" alt="">
          </div>
        </div><!---through-box ed-impact-->

        <div class="through-box covercolor4 ed-impact newheight1">
          <div class="through-cnt">
            <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_entrepreneurs', '50,800+')) ?></h4>
            <h5>entrepreneurs</h5>
            <p>empowered across livestock and farm initiatives</p>
          </div>
          <div class="climate-img">
            <img src="./assets/images/EconomicDevelopement/i-ed.png" alt="">
          </div>
        </div><!---through-box ed-impact-->

        <div class="through-box covercolor4 ed-impact newheight3">
          <div class="through-cnt stat-3">
            <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_youth', '10,500+')) ?></h4>
            <h5>youth</h5>
            <p>skilled through training programs</p>
          </div>
          <div class="climate-img watsanicon">
            <img src="./assets/images/EconomicDevelopement/3.svg" alt="">
          </div>
        </div><!---through-box ed-impact-->

        <div class="through-box covercolor4 ed-impact Impact5 newheight5">
          <div class="through-cnt">
            <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_farmers', '103,000+')) ?></h4>
            <h5>farmers</h5>
            <p>trained through capacity-building programmes</p>
          </div>
          <div class="climate-img">
            <img src="./assets/images/EconomicDevelopement/i-ed-2.png" alt="">
          </div>
        </div><!---through-box ed-impact-->
        
        <div class="through-box covercolor4 ed-impact newheight4">
          <div class="through-cnt stat-5">
            <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'livelihood_women', '21,352')) ?></h4>
            <h5>women</h5>
            <p>empowered across livelihood programmes</p>
          </div>
          <div class="climate-img watsanicon">
            <img src="./assets/images/EconomicDevelopement/5.svg" alt="">
          </div>
        </div><!---through-box ed-impact-->
        </div>
        </div>

      <!---girdlayer5-->
    </div>
  </div><!---impact-section reality—proving-->


  <div class="program-section" style="background-image: url('./assets/images/Development/banner2.jpg');">
    <div class="container">
      <div class="inner-hd text-center">
        <h2><span>Economic Development Programmes</span></h2>
      </div>

      <div class="owl-carousel owl-theme programmeslider">
        <div class="ensure-werp">
          <img src="./assets/images/Development/On-Farm.svg" alt="">
          <div class="ensure-cnt">
            <h5>On Farm</h5>
            <p>Our On-Farm Programme empowers farmers with sustainable, year-round cultivation options beyond rain-fed paddy, including vegetables, fruits, and flowers. Key initiatives like solar-powered drip irrigation, fruit sapling plantations, and rainwater storage ponds ensure water efficiency & security.</p>
          </div>
        </div><!---ensure-werp-->

        <div class="ensure-werp">
          <img src="./assets/images/Development/Off-farm.svg" alt="">
          <div class="ensure-cnt">
            <h5>Off farm</h5>
            <p>Our Off-Farm Programme creates sustainable livelihoods through dairy farming, goat rearing, poultry, and fishing. It ensures steady income with innovations like hydroponic fodder, veterinary care, and market linkages.</p>
          </div>
        </div><!---ensure-werp-->

        <div class="ensure-werp">
          <img src="./assets/images/Development/2.png" alt="">
          <div class="ensure-cnt">
            <h5>Non-farm</h5>
            <p>Our Non-Farm Programme empowers rural youth with skill training in trades like masonry, electrical work, data entry, hospitality, and more, opening doors to formal employment. For those with entrepreneurial dreams, we offer training, exposure visits, and guidance, helping them turn ideas into sustainable businesses.
</p>
          </div>
        </div><!---ensure-werp-->

        <div class="ensure-werp">
     <img src="./assets/images/Development/1.png" alt="">
          <div class="ensure-cnt">
            <h5>Swadhin</h5>
            <p>Swadhin, a livelihood initiative by Swades Foundation, champions rural women entrepreneurs and farmers, empowering them to forge a sustainable financial future. It proudly presents premium products meticulously crafted and naturally processed by the rural community.</p>
          </div>
        </div><!---ensure-werp-->
      </div>
    </div>
  </div><!---program-section-->

  <div class="stories-section empowerment">
    <div class="heading-hd text-center">
      <h2>Stories of Empowerment</h2>
    </div><!--heading-hd-->
    <br/>
    <!--<div class="owl-carousel owl-theme slider1">
      <div class="empowered-werap overcolor4">
        <div class="empowe-cnt">
          <span class="heading6 colorbg2">Economic Development</span>
          <h6>Sweet homecoming</h6>
          <p>How a young farmer has transformed his family’s paddy fields into thriving farms</p>
          <a href="sweet-homecoming" class="readmore">Read Impact Story <img src="./assets/images/arrow-right.svg" alt=""></a>
        </div>
        <div class="empowe-img">
          <img src="./assets/images/home/ed.png" alt="">
        </div>
      </div>
      <div class="empowered-werap overcolor4">
        <div class="empowe-cnt">
          <span class="heading6">Education</span>
          <h6>Building a Sustainable Knowledge Network for Empowered Communities</h6>
          <p>How our water management initiatives helped a village overcome drought conditions.</p>
          <a href="#" class="readmore">Read impact story <img src="./assets/images/arrow-right.svg" alt=""></a>
        </div>
        <div class="empowe-img">
          <img src="./assets/images/stories1.svg" alt="">
        </div>
      </div>

      <div class="empowered-werap overcolor4">
        <div class="empowe-cnt">
          <span class="heading6">Economic Development</span>
          <h6>Empowering Rural Communities: The Transformative Role of Solar Energy</h6>
          <p>How our water management initiatives helped a village overcome drought conditions.</p>
          <a href="#" class="readmore">Read impact story <img src="./assets/images/arrow-right.svg" alt=""></a>
        </div>
        <div class="empowe-img">
          <img src="./assets/images/stories2.svg" alt="">
        </div>
      </div>

      <div class="empowered-werap overcolor4">
        <div class="empowe-cnt">
          <span class="heading6">Water, Sanitation & Green Initiatives</span>
          <h6>Defeating Cancer: A Comprehensive Guide to Prevention and Treatment</h6>
          <p>How our water management initiatives helped a village overcome drought conditions.</p>
          <a href="#" class="readmore">Read impact story <img src="./assets/images/arrow-right.svg" alt=""></a>
        </div>
        <div class="empowe-img">
          <img src="./assets/images/stories3.svg" alt="">
        </div>
      </div>

      <div class="empowered-werap overcolor4">
        <div class="empowe-cnt">
          <span class="heading6">Economic Development</span>
          <h6>Empowering Rural Communities: The Transformative Role of Solar Energy</h6>
          <p>How our water management initiatives helped a village overcome drought conditions.</p>
          <a href="#" class="readmore">Read impact story <img src="./assets/images/arrow-right.svg" alt=""></a>
        </div>
        <div class="empowe-img">
          <img src="./assets/images/stories2.svg" alt="">
        </div>
      </div>

    </div>-->
    <div class="container">
      <div class="desktop">
        <div class="sliderlavel">
          <div class="row">
            <div class="col-md-6">
              <div class="togetherimg">
                <img src="./assets/images/home/ed.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="together-text">
                  
                  <!--<h4>How a young farmer has transformed his family's paddy fields into thriving farms</h4>-->
                <h4>Sweet homecoming</h4>
                <p>Unlike many young boys and girls from his village, Amar Rajendra Kadam never aspired for city life. But when challenges on the family farm grew, he took up a job in Mumbai.
                </p>
                <p>Determined to make rural life work, he began planting saplings, only to watch them wither in the scorching Konkan summer. That’s when he sought Swades Foundation's support with drip irrigation. Slowly, the farm flourished.</p>

                <p>Today, Amar’s farm - once home to rain-fed paddy only - is thriving with mango, cashew, turmeric, avocado, pineapple, and organically grown dragon fruit. His last dragon fruit harvest yielded 200 kgs, making it a source of inspiration for farmers in the region.</p>
                
                <p>But Amar’s story doesn’t stop at his own farm. As a Swades Sarvekshan Mitra, he now helps other farmers lay the foundations for their own orchards—spreading knowledge, and hope.</p>
                <p>"I want to help as many people as possible in my village and beyond, to see the value in working on their own farms – it can be fulfilling and empowering if you have good guidance and therefore I want to share my learning with more people," he says.</p>
                <p>Because when rural youth are empowered, they don’t just stay. They lead.</p>
                              </div>
            </div>
          </div>
        </div><!---sliderlavel-->
      </div>
      
      <div class="mobile">
        <div class="sliderlavel">
          <div class="row">
            <div class="col-md-6">
              <div class="togetherimg">
                <img src="./assets/images/home/ed.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="together-text">
                  
                  <!--<h4>How a young farmer has transformed his family's paddy fields into thriving farms</h4>-->
                <h4>Sweet homecoming</h4>
                <p>Unlike many young boys and girls from his village, Amar Rajendra Kadam never aspired for city life. But when challenges on the family farm grew, he took up a job in Mumbai.
                </p>
                <p>Determined to make rural life work, he began planting saplings, only to watch them wither in the scorching Konkan summer. That’s when he sought Swades Foundation's support with drip irrigation. Slowly, the farm flourished.</p>

                <p>Today, Amar’s farm - once home to rain-fed paddy only - is thriving with mango, cashew, turmeric, avocado, pineapple, and organically grown dragon fruit. His last dragon fruit harvest yielded 200 kgs, making it a source of inspiration for farmers in the region.</p>
                
                <p>But Amar’s story doesn’t stop at his own farm. As a Swades Sarvekshan Mitra, he now helps other farmers lay the foundations for their own orchards—spreading knowledge, and hope.</p>
                <p>"I want to help as many people as possible in my village and beyond, to see the value in working on their own farms – it can be fulfilling and empowering if you have good guidance and therefore I want to share my learning with more people," he says.</p>
                <p>Because when rural youth are empowered, they don’t just stay. They lead.</p>
                              </div>
            </div>
          </div>
        </div><!---sliderlavel-->
      </div>
    </div>
  </div><!---stories-section-->
  
  
     
  <!-- <div class="believers-section"> <!-----believers-section-->-->
  <!--  <div class="heading-hd text-center">-->
  <!--    <h2>Our Believers</h2>-->
  <!--  </div>-->
  <!--  <div class="owl-carousel owl-theme productbrandlogo">-->
  <!--    <div class="brandlogo">-->
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
  <!--</div><!-----believers-section-->-->
  
  
  
  
  <div class="thriving-section">
    <div class="container">
      <div class="immediate-bg overly desktop" style="background-image: url('./assets/images/Development/banner3.svg');">
        <div class="titlewrap" id="ed-impact">
          <h3>Your support can <br> boost rural household <br> incomes</h3>
          <p>Join Swades Foundation in creating thriving rural communities across India</p>
          <a href="javascript:void(0)" onClick="submitCause(3)" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
      <div class="immediate-bg overly mobile" style="background-image: url('./assets/images/Development/Economic-development.jpg');">
        <div class="titlewrap" id="ed-impact">
          <h3>Your support can <br> boost rural household <br> incomes</h3>
          <p>Join Swades Foundation in creating thriving rural communities across India</p>
          <a href="javascript:void(0)" onClick="submitCause(3)" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
    </div>
  </div><!----thriving-section-->
  <div class="donate-button innerbtn mobile pre-footer-btn">
    <a href="javascript:void(0)" onClick="submitCause(3)" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
  </div>
  <!-- End Pre Footer -->
  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>
  <?php include 'include/footer.php'; ?> <!-- Footer -->
  <form id="causeForm" action="set_cause.php" method="post" style="display:none;">
    <input type="hidden" name="cause" id="causeField">
  </form>
<script>
function submitCause(id) {
    document.getElementById('causeField').value = id;
    document.getElementById('causeForm').submit();
}
</script>
</body>
</html>
