<?php require_once __DIR__ . '/include/cms.php';
?>
<?php
$_SESSION['water'] = 4;
$cmsStats = cms_get_impact_stats();
$cmsWatsanPage = cms_get_page('water-and-sanitation');
cms_require_published_page('water-and-sanitation');
$cmsWatsanIntro = cms_page_section($cmsWatsanPage, 'intro', cms_page_content($cmsWatsanPage));
$cmsWatsanProgramIntro = cms_page_section($cmsWatsanPage, 'programs', '');
$cmsWatsanStory = cms_page_section($cmsWatsanPage, 'story', '');
$cmsWatsanDonate = cms_page_section($cmsWatsanPage, 'donate', '');
?>
<!DOCTYPE html>
<html>

<head>
  <title><?= htmlspecialchars(cms_page_field($cmsWatsanPage, 'meta_title', 'Swades Foundation Water, Sanitation & Green Initiatives'), ENT_QUOTES, 'UTF-8') ?></title>
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
   @media(max-width: 767px){
       #watsan {
           margin-top: 99px !important;
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

<header id="header" class="home-header inner-header">
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
            <!--<div class="donate-button desktop">
              <a href="Donate" class="btn">Donate <img src="./assets/images/heart.svg" alt=""></a>
            </div>-->
            <div class="donate-button innerbtn desktop">
              <a href="javascript:void(0)" onclick="submitCause(1)" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
            </div>
          </div>

          <div class="naviconmobile">
            <div class="donate-button innerbtn mobile">
              <a href="javascript:void(0)" onClick="submitCause(1)" class="btn">Donate <i class="fas fa-heart"></i></a>
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


  <div class="inner-page">
    <div class="container">
      <div class="inner-hd text-center">
        <?php if ($cmsWatsanIntro !== ''): ?>
          <?= $cmsWatsanIntro ?>
        <?php else: ?>
          <h2>Water, Sanitation & Green Initiatives</h2>
          <p>We are committed to ensuring rural communities have access to safe drinking water through a tap in every home, along with household toilets and irrigation facilities, creating healthy, open defecation-free villages.
               In schools, we strengthen WASH infrastructure by providing safe drinking water, handwash stations, and gender-segregated toilets to create an inclusive learning  environment</p>
        <?php endif; ?>
      </div>

      <div class="inner-cover">
        <img src="./assets/images/sanitation/water-banner.png" alt="" class="desktop"><br />
        <img src="./assets/images/sanitation/water-banner2.jpg" alt="" class="mobile">
      </div>

    </div>
  </div><!---home-section-->

  <div class="abundance-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="aerial-view">
            <video id="myVideo" autoplay muted loop playsinline>
                <source src="./assets/videos/Water, Sanitation & Green Initiatives (1).mp4" type="video/mp4">
                    Your browser does not support the video tag.
            </video>
          </div>
        </div>
        <div class="col-md-7">
          <div class="aerial-text">
            <h3>Turning Villages into Water Guardians</h3>
            <p>In Swades villages, water-conscious behaviour is a way of life. Through a community-driven water conservation initiative called Swajal, local committees take charge of managing and protecting their water resources. From trench digging and stream cleaning to soak pits and building farm ponds to catch rainwater, these communities lead the change. Across 800+ hamlets in Raigad alone, over 7,000 recharge activities have collected more than 400 million litres of water, thanks to strong community ownership. </p>
          </div>
        </div>
      </div>
    </div>
  </div><!---abundance-section--->

  <div class="impact-section reality—proving">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>Our Impact</h2>
        <p>More than 2.3 lakh people in rural Maharashtra now have access to clean drinking water
          <br>and a sanitation facility at home, supported by Swades WASH programme.</p>
      </div><!--heading-hd-->

      <div class="gridlayer5 wat-san desktop">
          
      

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

      <div class="stories-section wat-san rainwater mobile">
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

      <!---girdlayer5-->
    </div>
  </div><!---impact-section reality—proving-->


  <div class="program-section" style="background-image: url('./assets/images/sanitation/water-bg.jpg');">
    <div class="container">
      <div class="inner-hd text-center">
        <?php if ($cmsWatsanProgramIntro !== ''): ?>
          <?= $cmsWatsanProgramIntro ?>
        <?php else: ?>
          <h2><span>Water, Sanitation & Green Initiatives</span></h2>
        <?php endif; ?>
      </div>

      <div class="owl-carousel owl-theme programmeslider">
        <div class="ensure-werp">
          <img src="./assets/images/sanitation/water1.svg" alt="">
          <div class="ensure-cnt">
            <h5>Drinking Water in Homes</h5>
            <p>We believe clean drinking water is a basic human right. Our goal is to ensure every household receives up to 200 litres of safe, potable water daily—delivered through a tap at home. To achieve this, we implement robust water systems that source water from natural sources or borewells, store it centrally, and distribute it through a durable village-wide network. </p>
          </div>
        </div><!---ensure-werp-->

        <div class="ensure-werp" >
          <img src="./assets/images/sanitation/water2.jpg" alt="">
          <div class="ensure-cnt">
            <h5>Household Sanitation for ODF Villages</h5>
            <p>Our household sanitation program provides every rural home with a clean, functional toilet, creating open defecation-free villages that prioritize hygiene. Built on a sustainable twin compost pit model, the toilets safely process fecal waste into nutrient-rich compost for farming.</p>
          </div>
        </div><!---ensure-werp-->

        <div class="ensure-werp">
          <img src="./assets/images/sanitation/water3.svg" alt="" style="">
          <div class="ensure-cnt">
            <h5>School Water and Hygiene</h5>
            <p>Our School WASH program ensures access to clean drinking water, hand-washing stations, and separate toilets for girls and boys—enabling a healthy, inclusive environment for learning. By promoting hygiene and reducing infections, it supports better attendance and overall student well-being. </p>
          </div>
        </div><!---ensure-werp-->

        <div class="ensure-werp">
          <img src="./assets/images/sanitation/water4.png" alt="">
          <div class="ensure-cnt">
            <h5>Climate-smart Irrigation</h5>
            <p>We enable farmers to diversify beyond traditional paddy cultivation by tapping nearby water sources and deploying solar-powered drip irrigation. This reliable, year-round water supply expands arable land and boosts farm productivity. Our sustainable, climate-smart solutions increase incomes while promoting resilient, environmentally responsible agriculture. 
</p>
          </div>
        </div><!---ensure-werp-->
        
        <div class="ensure-werp">
          <img src="./assets/images/sanitation/1.png" alt="">
          <div class="ensure-cnt">
            <h5>Sustainable Waste Management</h5>
            <p>Our waste management program functions at the Development Centre level, ensuring every form of waste is put to good use. Wet waste is directed to composting and biogas plants, promoting organic farming practices. Dry waste is handed over to partner organizations for recycling—some of it creatively repurposed into furniture such as chairs and tables, later distributed to schools and community spaces across villages. Faecal waste is treated and converted into safe, nutrient-rich manure. </p>
          </div>
        </div><!---ensure-werp-->
        
        <div class="ensure-werp">
          <img src="./assets/images/sanitation/2.png" alt="">
          <div class="ensure-cnt">
            <h5>Natural Resource Management (NRM)</h5>
            <p>Our NRM programme focuses on restoring and conserving water, soil, and forest resources through community-led actions. From constructing farm ponds and contour trenches to promoting afforestation and soil conservation, we adopt integrated watershed approaches that not only enhance groundwater recharge but also foster collective stewardship of commons, enabling villages to thrive amidst growing climate uncertainties. </p>
          </div>
        </div><!---ensure-werp-->
        
        <div class="ensure-werp">
          <img src="./assets/images/sanitation/3.png" alt="">
          <div class="ensure-cnt">
            <h5>Solar solutions for sustainable power</h5>
            <p>Our solar initiatives bring decentralized, renewable energy to rural spaces, lighting up streets, powering schools and anganwadis, running drinking water systems (DWS), and fueling solar-based irrigation (WFI- Water for irrigation). By replacing diesel and grid-dependency with solar power, we reduce carbon footprints, lower energy costs, and ensure uninterrupted essential services.</p>
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
    
    
    
    
    
    
    <!--<div class="owl-carousel owl-theme slider1">-->
    <!--  <div class="empowered-werap overcome">-->
    <!--    <div class="empowe-cnt">-->
    <!--      <span class="heading6">Education</span>-->
    <!--      <h6>Building a Sustainable Knowledge Network for Empowered Communities</h6>-->
    <!--      <p>How our water management initiatives helped a village overcome drought conditions.</p>-->
    <!--      <a href="#" class="readmore">Read impact story <img src="./assets/images/arrow-right.svg" alt=""></a>-->
    <!--    </div>-->
    <!--    <div class="empowe-img">-->
    <!--      <img src="./assets/images/stories1.svg" alt="">-->
    <!--    </div>-->
    <!--  </div><-->

    <!--  <div class="empowered-werap overcome">-->
    <!--    <div class="empowe-cnt">-->
    <!--      <span class="heading6">Economic Development</span>-->
    <!--      <h6>Empowering Rural Communities: The Transformative Role of Solar Energy</h6>-->
    <!--      <p>How our water management initiatives helped a village overcome drought conditions.</p>-->
    <!--      <a href="#" class="readmore">Read impact story <img src="./assets/images/arrow-right.svg" alt=""></a>-->
    <!--    </div>-->
    <!--    <div class="empowe-img">-->
    <!--      <img src="./assets/images/stories2.svg" alt="">-->
    <!--    </div>-->
    <!--  </div>-->

    <!--  <div class="empowered-werap overcome">-->
    <!--    <div class="empowe-cnt">-->
    <!--      <span class="heading6">Water, Sanitation & Green Initiatives</span>-->
    <!--      <h6>Defeating Cancer: A Comprehensive Guide to Prevention and Treatment</h6>-->
    <!--      <p>How our water management initiatives helped a village overcome drought conditions.</p>-->
    <!--      <a href="#" class="readmore">Read impact story <img src="./assets/images/arrow-right.svg" alt=""></a>-->
    <!--    </div>-->
    <!--    <div class="empowe-img">-->
    <!--      <img src="./assets/images/stories3.svg" alt="">-->
    <!--    </div>-->
    <!--  </div>-->

    <!--  <div class="empowered-werap overcome">-->
    <!--    <div class="empowe-cnt">-->
    <!--      <span class="heading6">Economic Development</span>-->
    <!--      <h6>Empowering Rural Communities: The Transformative Role of Solar Energy</h6>-->
    <!--      <p>How our water management initiatives helped a village overcome drought conditions.</p>-->
    <!--      <a href="#" class="readmore">Read impact story <img src="./assets/images/arrow-right.svg" alt=""></a>-->
    <!--    </div>-->
    <!--    <div class="empowe-img">-->
    <!--      <img src="./assets/images/stories2.svg" alt="">-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    
    
    
    
    
    
    <div class="container">
      <div class="desktop">
        <div class="sliderlavel">
          <div class="row">
            <div class="col-md-6">
              <div class="togetherimg">
                <img src="./assets/images/home/watsan.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="together-text">
                <?php if ($cmsWatsanStory !== ''): ?>
                  <?= $cmsWatsanStory ?>
                <?php else: ?>
                  <h4>How access to water transformed life in Chachkond</h4>
                  <!--<h6>When clean water flows home, hope and opportunity follow</h6>-->
                  <p>Behind this smile there has been a lot of struggle and pain. Sagibai Maruti Mahable, living in Chachkond (in rural Raigad) has been spending about 10 – 12 hours daily fetching water for her household needs. This everyday tussle, since decades, was not only the plight of Sagibai but for 22 other households in Chachkond.
                  </p>
                  <p>Unclean water often led to a lot of people in the village falling ill. Sagibai in particular, was frustrated with constant illness and resulting weakness. She was no longer able to physically manage the drudgery. This pain and struggle lasted too long but in 2018, after the water intervention all households in the village received potable Drinking Water in homes through taps – Clean water in homes was nothing short of a dream come true for them.
                  </p>
                  <p>Incidence of water borne diseases reduced drastically, people had more time at hand and many engaged this new found free time in some or the other economic activities. Sagibai, herself started #dairy business and also now helps her husband in #farming.</p>
                  <p>“Everything for us in life revolves around water. We were overjoyed to see our dream come true. ” – says Sagibai.</p>
                <?php endif; ?>
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
                <img src="./assets/images/home/watsan.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="together-text">
                <?php if ($cmsWatsanStory !== ''): ?>
                  <?= $cmsWatsanStory ?>
                <?php else: ?>
                  <h4>How access to water transformed life in Chachkond</h4>
                  <!--<h6>When clean water flows home, hope and opportunity follow</h6>-->
                  <p>Behind this smile there has been a lot of struggle and pain. Sagibai Maruti Mahable, living in Chachkond (in rural Raigad) has been spending about 10 – 12 hours daily fetching water for her household needs. This everyday tussle, since decades, was not only the plight of Sagibai but for 22 other households in Chachkond.
                  </p>
                  <p>Unclean water often led to a lot of people in the village falling ill. Sagibai in particular, was frustrated with constant illness and resulting weakness. She was no longer able to physically manage the drudgery. This pain and struggle lasted too long but in 2018, after the water intervention all households in the village received potable Drinking Water in homes through taps – Clean water in homes was nothing short of a dream come true for them.
                  </p>
                  <p>Incidence of water borne diseases reduced drastically, people had more time at hand and many engaged this new found free time in some or the other economic activities. Sagibai, herself started #dairy business and also now helps her husband in #farming.</p>
                  <p>“Everything for us in life revolves around water. We were overjoyed to see our dream come true. ” – says Sagibai.</p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div><!---sliderlavel-->
      </div>
    </div>
  </div><!---stories-section-->
  
     
     
  <!-- <div class="believers-section"> <!-----believers-section-->
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
  <!--</div><!-----believers-section-->
  


 <div class="thriving-section">
    <div class="container">
      <div class="immediate-bg overly desktop" style="background-image: url('./assets/images/sanitation/water-banner.jpg');">
        <div class="titlewrap" id="watsan">
          <?php if ($cmsWatsanDonate !== ''): ?>
            <?= $cmsWatsanDonate ?>
          <?php else: ?>
            <h3>Your support can bring <br> water to parched villages</h3>
            <p>Join Swades Foundation in creating <br> thriving rural communities across India</p>
          <?php endif; ?>
          <a href="javascript:void(0)" onClick="submitCause(4)" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
    </div>
    
    

    <div class="immediate-bg overly mobile" style="background-image: url('./assets/images/sanitation/WaterSanitation.jpg');">
        <div class="titlewrap" id="watsan">
          <?php if ($cmsWatsanDonate !== ''): ?>
            <?= $cmsWatsanDonate ?>
          <?php else: ?>
            <h3>Your support can bring <br> water to parched villages</h3>
            <p>Join Swades Foundation in creating <br> thriving rural communities across India</p>
          <?php endif; ?>
          <a href="javascript:void(0)" onClick="submitCause(4)" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
  </div><!----thriving-section-->
  
  

  
  
  
  <div class="donate-button innerbtn mobile pre-footer-btn">
    <a href="javascript:void(0)" onClick="submitCause(4)" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
  </div>
  <!--End Pre Footer-->
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
