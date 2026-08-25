<?php 
include 'db.php';
$_SESSION['health'] = 2;
require_once __DIR__ . '/include/cms.php';
$cmsStats = cms_get_impact_stats();
$cmsHealthPage = cms_get_page('health');
cms_require_published_page('health');
$cmsHealthContent = cms_page_content($cmsHealthPage);
?>
<!DOCTYPE html>
<html>
<head>
  <title><?= htmlspecialchars(cms_page_field($cmsHealthPage, 'meta_title', 'Swades Foundation Work Health'), ENT_QUOTES, 'UTF-8') ?></title>
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
    @media (max-width: 425.8px) {
        .titlewrap h3 {
            margin-top: 65px !important;
        }
    }
    
    .believers-section {
    padding: 80px 0;
}

.partners-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 25px;
    margin-top: 50px;
}

.brandlogo {
    background: #fff;
    border: 1px solid #eee;
    border-radius: 12px;
    padding: 20px;
    height: 120px;

    display: flex;
    align-items: center;
    justify-content: center;

    transition: all 0.3s ease;
}

.brandlogo:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

.brandlogo img {
    max-width: 100%;
    max-height: 60px;
    object-fit: contain;
}

/* Tablet */
@media (max-width: 992px) {
    .partners-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

/* Mobile */
@media (max-width: 768px) {
    .partners-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .brandlogo {
        height: 90px;
        padding: 12px;
    }

    .brandlogo img {
        max-height: 40px;
    }
}

.partners-section{
    padding:80px 0;
    background:#fafafa;
}

.partners-bento{
    display:grid;
    grid-template-columns:350px 1fr;
    gap:30px;
    margin-top:50px;
}

.impact-card{
    background:#fff;
    border-radius:20px;
    padding:40px;
    box-shadow:0 5px 20px rgba(0,0,0,.05);

    display:flex;
    flex-direction:column;
    justify-content:center;
    gap:35px;
}

.stat h3{
    font-size:42px;
    font-weight:700;
    margin-bottom:5px;
}

.stat p{
    margin:0;
    color:#666;
}

.featured-logos{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
}

.brandlogo{
    background:#fff;
    border-radius:15px;
    height:120px;

    display:flex;
    align-items:center;
    justify-content:center;

    box-shadow:0 3px 15px rgba(0,0,0,.04);
}

.brandlogo img{
    max-width:80%;
    max-height:60px;
    object-fit:contain;
}

.view-partners-btn{
    display:inline-block;
    padding:12px 30px;
    border-radius:50px;
    background:#E53935;
    color:#fff;
    text-decoration:none;
}
@media(max-width:768px){

    .partners-bento{
        grid-template-columns:1fr;
    }

    .featured-logos{
        grid-template-columns:repeat(2,1fr);
    }

    .impact-card{
        text-align:center;
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
  <header id="header" class="home-header health-header">
    <div class="container">
      <div class="header-menu">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="/">
            <img src="./assets/images/inner-page-logo.svg" alt="">
          </a>

          <div class="nav-container innermenu collapse navbar-collapse" id="collapsibleNavbar">
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
            <!--<div class="donate-button desktop">
              <a href="Donate" class="btn">Donate <img src="./assets/images/heart.svg" alt=""></a>
            </div>-->
            <div class="donate-button innerbtn desktop">
              <a href="javascript:void(0)" onclick="submitCause(2)" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
            </div>
          </div>

          <div class="naviconmobile">
            <div class="donate-button innerbtn mobile">
              <a href="javascript:void(0)" onClick="submitCause(2)" class="btn">Donate <i class="fas fa-heart"></i></a>
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


  <div class="inner-page health-header">
    <div class="container">
      <div class="inner-hd text-center">
        <?php if ($cmsHealthContent !== ''): ?>
          <?= $cmsHealthContent ?>
        <?php else: ?>
          <h2>Health</h2>
          <p> We make primary healthcare accessible and affordable through trained community health volunteers who connect villages with government schemes and private partner hospitals, while also promoting health-seeking behaviour in rural communities.</p>
        <?php endif; ?>
      </div>

      <div class="inner-cover">
        <img src="./assets/images/health/health-banner.svg" alt="" class="desktop">
        <img src="./assets/images/health/health-banner.svg" alt="" class="mobile">
      </div>

    </div>
  </div><!---home-section-->

  <div class="abundance-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="aerial-view">
            <!--<img src="./assets/images/education/laptop-view.svg" alt="">-->
            <video id="myVideo" autoplay muted loop playsinline >
                <source src="./assets/videos/Health.mp4" type="video/mp4">
                    Your browser does not support the video tag.
            </video>
          </div>
        </div>
        <div class="col-md-7">
          <div class="aerial-text">
            <h3>Bringing quality healthcare to rural doorsteps </h3>
            <p>We have built a strong community-led healthcare model by creating a dedicated cadre of trained community health volunteers called Swades Mitras, who focus on primary health care and first aid. Additionally, they facilitate specialized care in vision, maternal and child health, and pediatric cardiac care, while fostering community trust and collaborating seamlessly with government and private health stakeholders such as doctors, ASHA, Anganwadi, and ANM workers. Our work also extends to preventive healthcare through cancer screening and regular village health camps, helping rural families access quality healthcare close to home.</p>
          </div>
        </div>
      </div>
    </div>
  </div><!---abundance-section--->

  <div class="impact-section reality—proving">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>Our Impact</h2>
        <p>Over 4.5 lakh lives have benefited from Swades Foundation’s health programmes, improving access to timely
          <br>
          care and promoting health-seeking behaviour in rural communities.</p>
      </div><!--heading-hd-->




       <div class="gridlayer5 desktop">
          
        <!--<div class="proving-cover covercolor3">
          <div class="top-content">
               
            <h4>2,558</h4>
            <p>Swades Mitras trained</p>
          </div>
          <div class="constructed1 rainwater3">
            <img src="./assets/images/Health/1.svg" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor3">
          <div class="top-content">
            <h4>21,693</h4>
            <p>cataract surgeries supported</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/Health/2.png" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor3">
          <div class="top-content">
              
            <h4>692 Children</h4>
            <p>supported with low vision and hearing surgeries</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/Health/3.png" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor3">
          <div class="constructed1 rainwater3">
            <img src="./assets/images/Health/4.svg" alt="">
          </div>
          <div class="top-content bottom-content">
            <h4>45,181 Children</h4>
            <p>screened and tested for anemia</p>
          </div>
        </div>

        <div class="proving-cover covercolor3">
          <div class="top-content">
              
            <h4>98%</h4>
            <p>institutional deliveries</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/Health/5.png" alt="">
          </div>
        </div>-->
        <div class="through-box Impact2 newheight2 covercolor3">
          <div class="supportedimg-1 watsanicon">
            <img src="./assets/images/home/Home/1.svg" alt="">
          </div>
        <div class="through-cnt stat-1">
          <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_screened', '415,000+')) ?></h4>
          <h5>people</h5>
          <p>screened for<br />vision care</p>
        </div>
      </div><!---through-box-->
      
        <div class="through-box newheight1 covercolor3">
        <div class="through-cnt">
            <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_volunteers', '2,700+')) ?></h4>
            <h5>health volunteers</h5>
            <p>trained within the communities</p>
        </div>
        <div class="climate-img">
          <img src="./assets/images/home/Home/i-health.png" alt="" >
        </div>
      </div><!---through-box-->
      
        <div class="through-box covercolor3 newheight4">
        <div class="through-cnt stat-3">
          <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_spectacles', '130,000+')) ?></h4>
          <h5>spectacles</h5>
          <p>delivered to rural doorsteps</p>
        </div>
        <div class="climate-img watsanicon">
          <img src="./assets/images/home/Home/3.svg" alt="" >
        </div>
      </div><!---through-box-->
      
        <div class="through-box covercolor3 newheight3">
        <div class="through-cnt">
          <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_cataract', '22,000+')) ?></h4>
          <h5>cataract surgeries</h5>
          <p>conducted to restore sight</p>
        </div>
        <div class="climate-img">
          <img src="./assets/images/home/Home/i-health2.png" alt="">
        </div>
      </div><!---through-box-->
      
        <div class="through-box covercolor3 Impact5 newheight5">
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

      <div class="stories-section rainwater mobile">
       <div class="owl-carousel owl-theme slider1">
        <!--<div class="proving-cover covercolor3">
          <div class="top-content">
            <h4>8.16 crores</h4>
            <p>litres of rainwater harvested<br> through farm ponds</p>
          </div>
          <div class="constructed1 rainwater3">
            <img src="./assets/images/health/tonnes1.svg" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor3">
          <div class="top-content">
            <h4>16.33 lakh <br> KWP</h4>
            <p>of solar energy generated annually, cutting 1,183 MT of carbon emissions
            </p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/sanitation/constructed2.svg" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor3">
          <div class="top-content">
            <h4>114.7</h4>
            <p>metric tonnes of waste recycled through community participation</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/health/tonnes3.svg" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor3">
          <div class="constructed1 rainwater3">
            <img src="./assets/images/health/tonnes4.svg" alt="">
          </div>
          <div class="top-content bottom-content">
            <h4>15.25 crore litres</h4>
            <p>of rainwater have percolated into the ground through contour trenches, boosting groundwater recharge</p>
          </div>
        </div>

        <div class="proving-cover covercolor3">
          <div class="top-content">
            <h4>38 acres</h4>
            <p>of barren land converted to cultivable land</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/sanitation/constructed5.svg" alt="">
          </div>
        </div>-->
        <div class="through-box Impact2 newheight2 covercolor3">
          <div class="supportedimg-1 watsanicon">
            <img src="./assets/images/home/Home/1.svg" alt="">
          </div>
        <div class="through-cnt stat-1">
          <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_screened', '415,000+')) ?></h4>
          <h5>people</h5>
          <p>screened for<br />vision care</p>
        </div>
      </div><!---through-box-->
      
        <div class="through-box newheight1 covercolor3">
        <div class="through-cnt">
            <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_volunteers', '2,700+')) ?></h4>
            <h5>health volunteers</h5>
            <p>trained within the communities</p>
        </div>
        <div class="climate-img">
          <img src="./assets/images/home/Home/i-health.png" alt="" >
        </div>
      </div><!---through-box-->
      
        <div class="through-box covercolor3 newheight4">
        <div class="through-cnt stat-3">
          <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_spectacles', '130,000+')) ?></h4>
          <h5>spectacles</h5>
          <p>delivered to rural doorsteps</p>
        </div>
        <div class="climate-img watsanicon">
          <img src="./assets/images/home/Home/3.svg" alt="" >
        </div>
      </div><!---through-box-->
      
        <div class="through-box covercolor3 newheight3">
        <div class="through-cnt">
          <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'health_cataract', '22,000+')) ?></h4>
          <h5>cataract surgeries</h5>
          <p>conducted to restore sight</p>
        </div>
        <div class="climate-img">
          <img src="./assets/images/home/Home/i-health2.png" alt="">
        </div>
      </div><!---through-box-->
          <div class="through-box covercolor3 Impact5 newheight5">
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
      <!---girdlayer5-->
    </div>
  </div><!---impact-section reality—proving-->
  
  <div class="program-section" style="background-image: url('./assets/images/health/health-banner2.jpg');">
    <div class="container">
      <div class="inner-hd text-center">
        <h2><span>Health Programmes</span></h2>
      </div>
      <div class="owl-carousel owl-theme programmeslider">
        <div class="ensure-werp">
          <img src="./assets/images/health/Training.svg" alt="">
          <div class="ensure-cnt">
            <h5>Swades Mitras (Health Volunteers)</h5>
            <p>Our vision for Universal Health Coverage in rural and tribal areas relies on Swades Mitras (trained community health volunteers). They are the first healthcare contact in remote villages, providing preventive care, helping with treatments, and offering post-treatment support.</p>
          </div>
        </div><!---ensure-werp-->
        <div class="ensure-werp">
          <img src="./assets/images/health/Vision.png" alt="">
          <div class="ensure-cnt">
            <h5>Vision Care</h5>
            <p>Our Mobile Vision Care programme brings vital eye care to underserved communities through free screenings for cataracts, refractive errors, and other vision problems.</p>
          </div>
        </div><!---ensure-werp-->
        <div class="ensure-werp">
          <img src="./assets/images/health/HealthCamps.svg" alt="">
          <div class="ensure-cnt">
            <h5>Village Health Camps</h5>
            <p>Through our Village and School Health Camps, we offer doorstep screenings for diseases like diabetes, hypertension, cataracts, and reproductive health issues. Those identified are referred to government or partner hospitals for timely care and follow-up.</p>
          </div>
        </div><!---ensure-werp-->
        <div class="ensure-werp">
          <img src="./assets/images/health/ChildrenHealth.svg" alt="">
          <div class="ensure-cnt">
            <h5>Children’s Health</h5>
            <p>We are committed to delivering free, high-quality healthcare to children with low vision and hearing disabilities. Our dedicated team identifies cases and ensures essential treatment through our partner hospitals.</p>
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
      <div class="empowered-werap overcolor3">
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

      <div class="empowered-werap overcolor3">
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

      <div class="empowered-werap overcolor3">
        <div class="empowe-cnt">
          <span class="heading6">Water & Sanitation</span>
          <h6>Defeating Cancer: A Comprehensive Guide to Prevention and Treatment</h6>
          <p>How our water management initiatives helped a village overcome drought conditions.</p>
          <a href="#" class="readmore">Read impact story <img src="./assets/images/arrow-right.svg" alt=""></a>
        </div>
        <div class="empowe-img">
          <img src="./assets/images/stories3.svg" alt="">
        </div>
      </div>

      <div class="empowered-werap overcolor3">
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
                  
                <img src="./assets/images/home/health.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="together-text">
                <h4>A health champion making lasting impact</h4>
                <!--<h6>How Swades Mitra Aarti Pawar goes above and beyond for community well-being</h6>-->
                <p>Aarti Sudhir Pawar is a Swades Mitra par excellence. She has not only displayed extreme compassion for the community but has gone beyond her call of duty on several occasions. She saved the life of a newborn suffering from high fever by admitting her in the hospital just in time and in another instance consulted a family for allowing surgery on their child suffering from bad ear infection. In both these cases, timely medical intervention was critical.
                </p>
                <p>She has also been instrumental in linking the community with multiple Government schemes, like grant for sonography of pregnant women, purchase of medicines and its distribution among community, availing Panchayat Samiti scholarships for deserving candidates, facilitating documentation for senior citizens so they can get their pensions seamlessly.
                </p>
                <p>Her great engagement has made her a ‘Master Trainer’ as she continues to empower more from the community for better health and hygiene.</p> 
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
                  
                <img src="./assets/images/home/health.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="together-text">
                <h4>A health champion making lasting impact</h4>
                <!--<h6>How Swades Mitra Aarti Pawar goes above and beyond for community well-being</h6>-->
                <p>Aarti Sudhir Pawar is a Swades Mitra par excellence. She has not only displayed extreme compassion for the community but has gone beyond her call of duty on several occasions. She saved the life of a newborn suffering from high fever by admitting her in the hospital just in time and in another instance consulted a family for allowing surgery on their child suffering from bad ear infection. In both these cases, timely medical intervention was critical.
                </p>
                <p>She has also been instrumental in linking the community with multiple Government schemes, like grant for sonography of pregnant women, purchase of medicines and its distribution among community, availing Panchayat Samiti scholarships for deserving candidates, facilitating documentation for senior citizens so they can get their pensions seamlessly.
                </p>
                <p>Her great engagement has made her a ‘Master Trainer’ as she continues to empower more from the community for better health and hygiene.</p> 
              </div>
            </div>
          </div>
        </div><!---sliderlavel-->
      </div>
    </div>
  </div><!---stories-section-->
  
  
  
  
  
<!--  <section class="partners-section">-->
<!--    <div class="container">-->

<!--        <div class="heading-hd text-center">-->
<!--            <h2>Our Partners & Supporters</h2>-->
<!--            <p>Trusted by leading organizations across India and globally.</p>-->
<!--        </div>-->

<!--        <div class="partners-bento">-->

<!--            <div class="impact-card">-->
<!--                <div class="stat">-->
<!--                    <h3>60+</h3>-->
<!--                    <p>Partners</p>-->
<!--                </div>-->

<!--                <div class="stat">-->
<!--                    <h3>20+</h3>-->
<!--                    <p>Countries</p>-->
<!--                </div>-->

<!--                <div class="stat">-->
<!--                    <h3>500Cr+</h3>-->
<!--                    <p>CSR Contributions</p>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="featured-logos">-->

<!--                <div class="brandlogo">-->
<!--                    <img src="assets/images/believerslogo/1.png">-->
<!--                </div>-->

<!--                <div class="brandlogo">-->
<!--                    <img src="assets/images/believerslogo/2.png">-->
<!--                </div>-->

<!--                <div class="brandlogo">-->
<!--                    <img src="assets/images/believerslogo/3.png">-->
<!--                </div>-->

<!--                <div class="brandlogo">-->
<!--                    <img src="assets/images/believerslogo/4.png">-->
<!--                </div>-->

<!--                <div class="brandlogo">-->
<!--                    <img src="assets/images/believerslogo/5.png">-->
<!--                </div>-->

<!--                <div class="brandlogo">-->
<!--                    <img src="assets/images/believerslogo/6.png">-->
<!--                </div>-->

<!--                <div class="brandlogo">-->
<!--                    <img src="assets/images/believerslogo/7.png">-->
<!--                </div>-->

<!--                <div class="brandlogo">-->
<!--                    <img src="assets/images/believerslogo/8.png">-->
<!--                </div>-->

<!--            </div>-->

<!--        </div>-->

<!--        <div class="text-center mt-5">-->
<!--            <a href="/partners" class="view-partners-btn">-->
<!--                View All Partners →-->
<!--            </a>-->
<!--        </div>-->

<!--    </div>-->
<!--</section>-->

  
  
  
  
  
  
  
  
  
  
  
  
  
     
  <!-- <div class="believers-section"> <!-----believers-section-->
  <!--  <div class="heading-hd text-center">-->
  <!--    <h2>Our Believers</h2>-->
  <!--  </div>-->
    <!--<div class="owl-carousel owl-theme productbrandlogo">-->
  <!--  <div class="partners-grid">-->
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
      <div class="immediate-bg overly desktop" style="background-image: url('./assets/images/health/health-banner3.svg');">
        <div class="titlewrap">
            <h3>Your support can bring <br> healthcare to rural <br> doorsteps</h3>
            <p>Join Swades Foundation in creating thriving rural communities across India</p>
            <a href="javascript:void(0)" onClick="submitCause(2)" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
      
      <div class="immediate-bg overly mobile" style="background-image: url('./assets/images/health/Health.jpg');">
        <div class="titlewrap">
            <h3>Your support can bring <br> healthcare to rural <br> doorsteps</h3>
            <p>Join Swades Foundation in creating thriving rural communities across India</p>
            <a href="javascript:void(0)" onClick="submitCause(2)" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
    </div>
  </div><!----thriving-section-->
  <div class="donate-button innerbtn mobile pre-footer-btn">
    <a href="javascript:void(0)" onClick="submitCause(2)" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
  </div>
  <!-- End Pre Footer -->
  <?php include 'include/footer.php'; ?> <!-- Footer -->
  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>
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
