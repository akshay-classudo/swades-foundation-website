<?php
require_once __DIR__ . '/include/cms.php';
$cmsStats = cms_get_impact_stats();
$cmsImpactPage = cms_get_page('impact');
cms_require_published_page('impact');
$cmsImpactIntro = cms_page_section($cmsImpactPage, 'intro', cms_page_content($cmsImpactPage));
$cmsImpactHolistic = cms_page_section($cmsImpactPage, 'holistic', '');
$cmsImpactDonate = cms_page_section($cmsImpactPage, 'donate', '');
?>
<!DOCTYPE html>
<html>

<head>
  <title><?= htmlspecialchars(cms_page_field($cmsImpactPage, 'meta_title', 'Swades Foundation Impact'), ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="./assets/images/favicon.png">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/js/owlcarousel/owl.carousel.css">
  <link rel="stylesheet" href="./assets/css/aos.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom-animation.css">
  <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css">
  <style>
    @media (max-width: 767.8px) {
        .economic .info-grid {
            border-color: #d9ffe7 !important;
        }
        .info-grid {
            border-bottom: 0px solid #ffefc0 !important;
        }
    }
    /* Quote icon design for testimonial paragraphs */
    .test-text p {
        position: relative;
        padding-left: 55px;        
        font-size: 16px;
        line-height: 1.7;
        color: #333;
        margin-left: -55px;
    }
    .two-line {
        display: flex;
        flex-direction: column;
    }
    .two-line div {
        display: flex;
        align-items: center;
        gap: 6px;
        letter-spacing: 0px;
    }
    .impact-data {
        margin-top: 20px;
    }
    @media (max-width: 767px) {
        .test-text p {
            position: relative;
            font-size: 16px;
            line-height: 1.7;
            color: #333;
        }
        #impact-donate {
            margin-top: 99px !important;
        }
        .update_date {
            font-size: 18px !important;
        }
    }
    .update_date {
        letter-spacing: 0px !important;
        margin: 10px;
        float: right;
        font-size: 20px;
        font-weight: 900;
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
              <a href="Donate" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
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


  <div class="inner-page impactpages">
    <div class="container">
      <div class="inner-hd text-center">
        <h6 class="hd6">our impact</h6>
        <h2><span>Making Transformation Count</span></h2>
      </div>
    </div>
  </div><!---home-section-->

  <div class="standards-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="heading-hd">
        <?php if ($cmsImpactIntro !== ''): ?>
          <?= $cmsImpactIntro ?>
        <?php else: ?>
          <p>Founded by Ronnie & Zarina Screwvala, we operate with a single-minded focus of lifting 1 million rural Indians out of poverty every 5 years through community-driven change. We bring together the best global practices, corporate thinking /accountability and highest standards of corporate governance to create a model of sustainable development, which is an industry benchmark and replicable at scale.</p>

              <p>Our USP is a 360° intervention inside-out model of development,with a multiplier effect. Our holistic approach covers all aspects of individual and community development through 4 key verticals – Health & Nutrition, Education, Water, Sanitation & Green Initiatives and Economic Development. Our strength is our strong team comprising 10,000+ community volunteers and 270+ full time staff(FTE specialists & professionals); 90% FTE work at the grassroots, making us a strong execution foundation.</p>

              <p>In 11+ years, we have reached out to 3,540 hamlets across Raigad and Nashik districts of Maharashtra, with an estimated population of 11,82,797 (1.1 million) . Out of these 6,00,000+ (more than half a million) individuals have benefitted directly from one or more of our programmes. We are currently working in 7 blocks (Mahad, Mangaon, Mhasla, Poladpur, Shrivardhan, Tala & Sudhagad) of Raigad and 4 blocks of Nashik (Igatpuri, Trimbakeshwar, Surgana & Peth). We have recently expanded into five new blocks across three districts - Jawhar and Mokhada in Palghar, Shahpur in Thane, and Akkalkuwa in Nandurbar apart from Kalwan and Dindori in Nashik. We have begun work in these regions and are currently in the initial phase of development interventions.</p>
            <?php endif; ?>
          </div>
        </div>

        <div class="col-lg-6">
          <!--<div class="gridlayer2">
            <div class="contentwrap">
              <span><img src="./assets/images/impact/icon1.svg" alt=""></span>
              <h6>11</h6>
              <p>Blocks of Rural Maharashtra</p>
            </div>
            <div class="contentwrap">
              <span><img src="./assets/images/impact/icon2.svg" alt=""></span>
              <h6>11,000</h6>
              <p>Community Volunteers</p>
            </div>
            <div class="contentwrap">
              <span><img src="./assets/images/impact/icon3.svg" alt=""></span>
              <h6>6,00,000</h6>
              <p>Lives Impacted</p>
            </div>
            <div class="contentwrap">
              <span><img src="./assets/images/impact/icon2.svg" alt=""></span>
              <h6>11,000</h6>
              <p>Unique Interventions Delivered</p>
            </div>
             <div class="contentwrap">
              <span><img src="./assets/images/impact/icon4.svg" alt=""></span>
              <h6>1.1 Million</h6>
              <p>Lives Reached</p>
            </div>
          </div>-->
            <div class="gridlayer2 impact-data">
              <div class="contentwrap two-line">
                <div>
                <h6><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_years', '11+')) ?></h6><span>Years</span>
                </div>
              </div>
              <div class="contentwrap two-line desktop">
                <div class="desktop">
                    <h6><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_districts', '5')) ?></h6><span>Districts</span>
                    <h6><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_blocks', '17')) ?></h6><span>Blocks</span>
                </div>
              </div>
              <div class="contentwrap mobile">
                <h6><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_districts', '5')) ?></h6>
                    <p>Districts</p>
                <h6><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_blocks', '17')) ?></h6>
                    <p>Blocks</p>
              </div>
              <div class="contentwrap">
                <h6><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_volunteers', '13,200+')) ?></h6>
                <p>Community Volunteers</p>
              </div>
              <div class="contentwrap">
                <h6><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_reached', '1,189,359')) ?></h6>
                <p>Individuals Reached</p>
              </div>
               <div class="contentwrap">
                <h6><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_benefited', '668,296')) ?></h6>
                <p>Individuals Impacted</p>
              </div>
              <div class="contentwrap">
                <h6><?= htmlspecialchars(cms_stat_value($cmsStats, 'impact_interventions', '1.3 Million')) ?></h6>
                <p>Unique Interventions Delivered</p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div><!---impact-section-->

  <div class="holistic-section">
    <div class="container">
      <div class="heading-hd">
        <?php if ($cmsImpactHolistic !== ''): ?>
          <?= $cmsImpactHolistic ?>
        <?php else: ?>
          <h6 class="hd6">Impact at a glance</h6>
          <h2>Dalberg Assessment 2022</h2>
        <?php endif; ?>
      </div>
      <div class="dalberg-img">
        <img src="./assets/images/impact/Dalberg-slide.svg" alt="" class="desktop">
            <img src="./assets/images/impact/Dalberg-mob.jpg" alt="" class="mobile">
      </div>
      <div class="household">
        <p>SF = Swades Foundation <br> HH= Household</p>
        <p>
          <img src="./assets/images/impact/Dalberg-logo.svg" alt="">
          <span>study 2022</span>
        </p>
      </div>
    </div>
  </div>

  <div class="created-section">
    <div class="container">
      <div class="heading-hd3 text-center">
        <h3>Swades Impact</h3>
      </div><!---heading-hd3-->
      
      <div class="impactAccordion">
        <div class="accordion" id="accordionExample">
            
          <div class="accordion-item water">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed section-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <div class="accordion-header-custom">
                  <div class="accordion-left">
                    <h3 class="hdeducation"><span>Water, Sanitation & Green Initiatives</span></h3>
                    <p>In schools, we strengthen WASH infrastructure by providing safe drinking water, hand-washing facilities, and separate toilets for girls and boys—creating a healthy, inclusive environment conducive to learning.</p>
                  </div>
  
                  <div class="accordion-center">
                    <div class="Reached1">
                      <p>Individuals reached</p>
                      <h4>11,89,359</h4>
                    </div>
                    <div>
                      <p>Individuals Impacted</p>
                      <h4>2,98,855</h4>
                    </div>
                  </div>

                  <div class="Education-img Sanitation" style="right: 10px;">
                    <img src="./assets/images/impact/watsan.png" alt="" class="">
                  </div>
                </div>
              </button>
            </h2>

            <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
              data-bs-parent="#accordionExample">
             <div class="accordion-body">
                <div class="info-grid">
                  <div class="infocnt">
                    <h5>792</h5>
                    <p>Drinking Water Schemes (DWS) completed</p>
                  </div>
                  <div class="infocnt">
                    <h5>1,503</h5>
                    <p>Hamlets verified as ODF</p>
                  </div>
                  <div class="infocnt">
                    <h5>50,060</h5>
                    <p>Households supported with drinking water through taps</p>
                  </div>
                  <div class="infocnt">
                    <h5>2,98,855</h5>
                    <p>Lives impacted with DWS through taps</p>
                  </div>
                  <div class="infocnt">
                    <h5>39,222</h5>
                    <p>Household toilets built</p>
                  </div>
                  <div class="infocnt mobile">
                    <h5>1,77,080</h5>
                    <p>Lives impacted through toilet facility</p>
                  </div>
                </div>

                <div class="info-grid no-border">
                  <div class="infocnt desktop">
                    <h5>1,77,080</h5>
                    <p>Lives impacted through toilet facility</p>
                  </div>
                  <div class="infocnt">
                    <h5>437</h5>
                    <p>Schools provided with WATSAN facilities</p>
                  </div>
                </div>
                <div class="more-btn m-0">
                  <a href="water-and-sanitation" class="btn">Know More</a>
                </div>

              </div>
            </div>
          </div>
          
          
          <div class="accordion-item health">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed section-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <div class="accordion-header-custom">
                  <div class="accordion-left">
                    <h3 class="hdeducation"><span>Health</span></h3>
                    <p>Alongside making healthcare accessible and affordable for rural communities, a key tenet of health programmes at Swades is promoting health seeking behavior.</p>
                  </div>

                  <div class="accordion-center">
                    <div class="Reached1">
                      <p>Individuals reached</p>
                      <h4>11,89,359</h4>
                    </div>
                    <div>
                      <p>Individuals Impacted</p>
                      <h4>5,21,253</h4>
                    </div>
                  </div>

                  <div class="Education-img nutrition">
                    <img src="./assets/images/Health/2.png" alt="" class="">
                  </div>
                </div>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
             <div class="accordion-body">
                <div class="info-grid">
                  <div class="infocnt">
                    <h5>2,697</h5>
                    <p>Swades Mitras created </p>
                  </div>
                  <div class="infocnt">
                    <h5>1,804</h5>
                    <p>Active Swades Mitras</p>
                  </div>
                  <div class="infocnt">
                    <h5>5,43,219</h5>
                    <p>Individuals screened by Swades Mitras for vision care</p>
                  </div>
                  <div class="infocnt">
                    <h5>3,03,130</h5>
                    <p>Screenings conducted by optometrists</p>
                  </div>
                  <div class="infocnt">
                    <h5>1,43,101</h5>
                    <p>Spectacles distributed</p>
                  </div>
                  <div class="infocnt mobile">
                    <h5>24,807</h5>
                    <p>Cataract surgeries facilitated</p>
                  </div>
                </div>

                <div class="info-grid">
                  <div class="infocnt desktop">
                    <h5>24,807</h5>
                    <p>Cataract surgeries facilitated</p>
                  </div>
                  <div class="infocnt">
                    <h5>2,036</h5>
                    <p>Children supported with assistive devices</p>
                  </div>
                  <div class="infocnt">
                    <h5>725</h5>
                    <p>Children with special needs (CWSN) surgeries</p>
                  </div>
                  <div class="infocnt">
                    <h5>337</h5>
                    <p>Village health camps organised</p>
                  </div>
                  <div class="infocnt">
                    <h5>40,310</h5>
                    <p>Individuals screened at village health camps</p>
                  </div>
                  <div class="infocnt mobile">
                    <h5>184</h5>
                    <p>Cardiac care for children</p>
                  </div>
                </div>

                <div class="info-grid no-border">
                  <!-- <div class="infocnt">
                    <h5>379</h5>
                    <p>Children with special needs (CWSN) surgeries </p>
                  </div>
                  <div class="infocnt">
                    <h5>300</h5>
                    <p>Children supported with Hearing aids</p>
                  </div>
                  <div class="infocnt">
                    <h5>60,625</h5>
                    <p>Hearing impairment Surgeries</p>
                  </div> -->
                  <div class="infocnt desktop">
                    <h5>184</h5>
                    <p>Cardiac care for children</p>
                  </div>
                </div>

                <div class="more-btn m-0">
                  <a href="health" class="btn">Know More</a>
                </div>

              </div>
            </div>
          </div>
          
          <div class="accordion-item education">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button section-title" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <div class="accordion-header-custom">
                  <div class="accordion-left">
                    <h3 class="hdeducation">Education</h3>
                    <p>Swades remains committed to transforming rural classrooms by creating a joyful and inclusive learning environment.</p>
                  </div>

                  <div class="accordion-center">
                    <div class="Reached1">
                      <p>Individuals reached</p>
                      <h4>11,89,359</h4>
                    </div>
                    <div class="Reached2">
                      <p>Individuals Impacted</p>
                      <h4>3,17,705</h4>
                    </div>
                  </div>

                  <div class="Education-img">
                    <img src="./assets/images/impact/Education.svg" alt="" class="">

                  </div>
                </div>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="info-grid">
                  <div class="infocnt">
                    <h5>1,589</h5>
                    <p>Schools reached</p>
                  </div>
                  <div class="infocnt">
                    <h5>1,037</h5>
                    <p>Anganwadis Reached</p>
                  </div>
                  <div class="infocnt">
                    <h5>3,17,705</h5>
                    <p>Students impacted</p>
                  </div>
                  <div class="infocnt">
                    <h5>1,240</h5>
                    <p>Excellence scholarships for professional courses</p>
                  </div>
                  <div class="infocnt">
                    <h5>9,409</h5>
                    <p>Mass scholarship (Grade XI & XII) </p>
                  </div>
                  <div class="infocnt mobile">
                    <h5>671</h5>
                    <p>Schools provided with library support</p>
                  </div>
                </div>

                <div class="info-grid no-border">
                  <div class="infocnt desktop">
                    <h5>671</h5>
                    <p>Schools provided with library support</p>
                  </div>
                  <div class="infocnt">
                    <h5>531</h5>
                    <p>280 schools + 251 Anganwadis</p>
                  </div>
                  <!-- <div class="infocnt">
                    <h5>60,625</h5>
                    <p>Career counseling given to students </p>
                  </div>
                  <div class="infocnt">
                    <h5>137</h5>
                    <p>Education committees formed </p>
                  </div> -->
                </div>
                <div class="more-btn m-0">
                  <a href="educations" class="btn">Know More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="accordion-item economic">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed section-title" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <div class="accordion-header-custom">
                  <div class="accordion-left">
                    <h3 class="hdeducation"><span>Economic Development</span></h3>
                    <p>Our efforts in economic development aim to boost rural incomes by building aspiration and enabling sustainable livelihoods through on-farm, off-farm, and non-farm activities.</p>
                  </div>

                  <div class="accordion-center">
                    <div class="Reached1">
                      <p>Individuals reached</p>
                      <h4>11,89,359</h4>
                    </div>
                    <div>
                      <p>Individuals Impacted</p>
                      <h4>2,67,071</h4>
                    </div>
                  </div>

                  <div class="Education-img Economic">
                    <img src="./assets/images/EconomicDevelopement/5.png" alt="" class="">
                  </div>
                </div>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="info-grid">
                  <div class="infocnt">
                    <h5>1,03,000</h5>
                    <p>Farmers trained for capacity building</p>
                  </div>
                  <div class="infocnt">
                    <h5>5,352</h5>
                    <p>Households supported with water for irrigation</p>
                  </div>
                  <div class="infocnt">
                    <h5>7,212</h5>
                    <p>Households supported with meat poultry </p>
                  </div>
                  <div class="infocnt">
                    <h5>5,746</h5>
                    <p>Dairy entrepreneurs created</p>
                  </div>
                  <div class="infocnt">
                    <h5>7,640</h5>
                    <p>Milch cattle supplied</p>
                  </div>
                  <div class="infocnt mobile">
                    <h5>11,130</h5>
                    <p>Households engaged in goat rearing </p>
                  </div>
                </div>

                <div class="info-grid">
                  <div class="infocnt desktop">
                    <h5>11,130</h5>
                    <p>Households engaged in goat rearing </p>
                  </div>
                  <div class="infocnt">
                    <h5>12,409</h5>
                    <p>Youth trained in skilling programme</p>
                  </div>
                  <div class="infocnt">
                    <h5>8,439</h5>
                    <p>Households supported with Drumstick Cultivation</p>
                  </div>
                  <div class="infocnt">
                    <h5>1,748</h5>
                    <p>Households supported with Mandap Cultivation</p>
                  </div>
                  <div class="infocnt">
                    <h5>3,970</h5>
                    <p>Households supported with Fishing nets</p>
                  </div>
                  <div class="infocnt mobile">
                    <h5>21,352</h5>
                    <p>Women empowered across livelihood programmes</p>
                  </div>
                  <div class="infocnt mobile">
                    <h5>14,96,430</h5>
                    <p>Plants distributed for horticulture</p>
                  </div>
                </div>

                <div class="info-grid no-border">
                  <div class="infocnt desktop">
                    <h5>21,352</h5>
                    <p>Women empowered across livelihood programmes</p>
                  </div>
                  <div class="infocnt desktop">
                    <h5>~14,96,430</h5>
                    <p>Plants distributed for horticulture</p>
                  </div>
                  <!-- <div class="infocnt">
                    <h5>11,200</h5>
                    <p>Food Forest Samples Distributed </p>
                  </div> -->
                  <!--<div class="infocnt">
                    <h5>60,625</h5>
                    <p>Career counselling</p>
                  </div>
                  <div class="infocnt">
                    <h5>598</h5>
                    <p>Excellence scholarships</p>
                  </div>-->
                </div>

                <div class="more-btn m-0">
                  <a href="economic-development" class="btn">Know More</a>
                </div>

              </div>
            </div>
          </div>
          
        </div>
        <p class="update_date">Updated as of June 2026</p>
      </div>
    </div>
  </div><!--created-section-->


  <div class="together-section testimonial">
    <div class="container">
      <div class="owl-carousel owl-theme togetherslider1">
        <div class="sliderlavel">
          <div class="row">
            <div class="col-lg-6">
              <div class="testimg">
                <img src="./assets/images/impact/testimonial 1.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="test-text">
                <!--<h6><span>testimonial</span></h6>
                <h4>Toilets that changed lives</h4>-->

                <p><i class="fas fa-quote-left"></i>&nbsp; <span>Life is much better now with a toilet at home. We don’t have to go out at odd hours to avoid people. It is much safer and of course, more hygienic this way. It is truly life changing for the women in the communities and also the elderly. Monsoons were a particularly challenging time with the added fear of scorpions and snakes. But thanks to the toilets, rains will no longer bring dread, only joy."</span>
                </p>

                <h5>Vanita Namdev Smaj, Igatpuri, Nashik</h5>
              </div>
            </div>
          </div>
        </div><!---sliderlavel-->
        
        <div class="sliderlavel">
          <div class="row">
            <div class="col-lg-6">
              <div class="testimg">
                <img src="./assets/images/impact/testimonial 4.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="test-text">
                <!--<h6><span>testimonial</span></h6>
                <h4>Toilets that changed lives</h4>-->

                <p><i class="fas fa-quote-left"></i>&nbsp; Having a water tap at home saves us a lot of time and energy. Earlier mornings were mostly dedicated to bringing back pots of water on our heads. But not anymore. No more sore backs and sore necks from walking close to a kilometer every day. The first time that water poured out of the tap was a magical moment for all of us. We now have the opportunity to do a lot more with our time. We are very grateful for this gift of water."</p>

                <h5>Sangita Telam, Igatpuri, Nashik</h5>
              </div>
            </div>
          </div>
        </div>
        
        <div class="sliderlavel">
          <div class="row">
            <div class="col-lg-6">
              <div class="testimg">
                <img src="./assets/images/impact/testimonial 5.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="test-text">
                <!--<h6><span>testimonial</span></h6>
                <h4>Toilets that changed lives</h4>-->

                <p><i class="fas fa-quote-left"></i>&nbsp; I used to work at MIDC, from 7am to 7pm. But it got very tiring and my children asked me not to go because I would get sick very often. A Swades representative came home and persuaded me to raise goats. I started with two, and now we have 16 goats. They are now worth one lakh rupees, so I am lakhpati, so to speak! I am grateful for being introduced to goat rearing."</p>

                <h5>Anita Pandere, Mahad, Raigad</h5>
              </div>
            </div>
          </div>
        </div>
        
        <div class="sliderlavel">
          <div class="row">
            <div class="col-lg-6">
              <div class="testimg">
                <img src="./assets/images/impact/testimonial 3.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="test-text">
                <!--<h6><span>testimonial</span></h6>
                <h4>Toilets that changed lives</h4>-->

                <p><i class="fas fa-quote-left"></i>&nbsp; When we started our journey as a Swades Mitra, we were given a kit with medicines, a BP testing machine, and a few other instruments. We were trained on various topics such as vision care, maternity care, children's health, nutrition and vaccination enabling us to provide care for multiple health problems. It makes me very happy that I am able to serve my community."</p>

                <h5>Anandibai Gavanda, Igatpuri, Nashik</h5>
              </div>
            </div>
          </div>
        </div>
        
        <div class="sliderlavel">
          <div class="row">
            <div class="col-lg-6">
              <div class="testimg">
                <img src="./assets/images/impact/testimonial 2.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="test-text">
                <!--<h6><span>testimonial</span></h6>
                <h4>Toilets that changed lives</h4>-->

                <p><i class="fas fa-quote-left"></i>&nbsp; I was able to pursue my studies till the 10th std, but my family didn't have the resources for me to continue after that. Fortunately I met someone from Swades Foundation at that time and they told me about the scholarship programme - thanks to which I have completed my Bachelors in Science. I am a proud graduate and very hopeful of a bright future where I can support my family."</p>

                <h5>Shubham Shivaji Shedge, Kumbharkond, Raigad</h5>
              </div>
            </div>
          </div>
        </div>
        

      </div>

    </div>
  </div><!---together-section-->

   <div class="thriving-section">
    <div class="container">
      <div class="immediate-bg overly" style="background-image: url('./assets/images/impact/difference.jpg');">
        <div class="titlewrap" id="impact-donate">
          <?php if ($cmsImpactDonate !== ''): ?>
            <?= $cmsImpactDonate ?>
          <?php else: ?>
            <h3 class="mb-4">Support rural <br />communities to thrive</h3>
          <?php endif; ?>
          <a href="Donate" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
    </div>
  </div><!----thriving-section-->
  <div class="donate-button innerbtn mobile pre-footer-btn">
      <a href="Donate" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
    </div>
  <!-- End Pre Footer -->

  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>
  <?php include 'include/footer.php'; ?> <!-- Footer -->
  
  
</body>

</html>
