<?php require_once __DIR__ . '/include/cms.php';
?>
<?php
$cmsStats = cms_get_impact_stats();
$cmsEducationPage = cms_get_page('educations');
cms_require_published_page('educations');
$cmsEducationContent = cms_page_content($cmsEducationPage);
?>
<!DOCTYPE html>
<html>

<head>
  <title><?= htmlspecialchars(cms_page_field($cmsEducationPage, 'meta_title', 'Swades Foundation Work Education'), ENT_QUOTES, 'UTF-8') ?></title>
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
   .edu-impact h4, .edu-impact h5{
       color: #7B5508 !important;
   }
   @media (max-width: 425.8px) {
        .titlewrap h3 {
            margin-top: 35px !important;
        }
    }
    .through-box {
        background: #FFEFC0 !important;
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
  <header id="header" class="home-header education-header">
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


  <div class="inner-page education-header">
    <div class="container">
      <div class="inner-hd text-center">
        <?php if ($cmsEducationContent !== ''): ?>
          <?= $cmsEducationContent ?>
        <?php else: ?>
          <h2>Education</h2>
          <p>Swades is committed to transforming rural classrooms by creating a joyful, inclusive learning environment supported by safe infrastructure, trained educators, and opportunities that go beyond the traditional curriculum to nurture conscious citizens.</p>
        <?php endif; ?>
      </div>

      <div class="inner-cover">
        <img src="./assets/images/education/Water-banner.svg" alt="" class="desktop">
        <img src="./assets/images/education/Water-banner.svg" alt="" class="mobile">
      </div>

    </div>
  </div><!---home-section-->

  <div class="abundance-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="aerial-view">
            <!--<img src="./assets/images/education/laptop-view.svg" alt="">-->
            <video id="myVideo" autoplay muted loop playsinline>
                <source src="./assets/videos/Education.mp4" type="video/mp4">
                    Your browser does not support the video tag.
            </video>
          </div>
        </div>
        <div class="col-md-7">
          <div class="aerial-text">
            <h3>Nurturing Conscious Citizens in Joyful Classrooms</h3>
            <p>We are transforming rural classrooms by creating a happy learning environment that engages not only teachers and principals but also parents and communities as active partners. Our education efforts enhance school infrastructure with essential amenities like clean drinking water, separate toilets for boys and girls, handwashing stations, and solar power to ensure uninterrupted learning. Through scholarships and the EduSkilling programme, we bridge the gap between education and opportunity. This comprehensive approach nurtures future-ready learners in thriving, supportive school environments.</p>
          </div>
        </div>
      </div>
    </div>
  </div><!---abundance-section--->

  <div class="impact-section reality—proving">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>Our Impact</h2>
        <p>Our Education programme has impacted 1,53,688 students in 1,437 schools, 843 Anganwadis
          <br>
          and 41 Junior colleges through various education initiatives.</p>
      </div><!--heading-hd-->

      <div class="gridlayer5 desktop">
        <!--<div class="proving-cover covercolor2">
          <div class="top-content">
               
            <h4>1,214 Principals</h4>
            <p>provided leadership training </p>
          </div>
          <div class="constructed1 rainwater3">
            <img src="./assets/images/Education/1.png" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor2">
          <div class="top-content">
            <h4>60,625 Students</h4>
            <p>provided career counselling</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/Education/2.png" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor2">
          <div class="top-content">
               
            <h4>598 Students</h4>
            <p>provided excellence scholarships</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/Education/3.png" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor2">
          <div class="constructed1 rainwater3">
            <img src="./assets/images/Education/4.png" alt="">
          </div>
          <div class="top-content bottom-content">
            <h4>7,482 Students</h4>
            <p>provided mass scholarships (Grade XI & XII)</p>
          </div>
        </div>

        <div class="proving-cover covercolor2">
          <div class="top-content">
            <h4>136 Schools</h4>
            <p>powered with solar infra</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/Education/5.png" alt="">
          </div>
        </div>-->
          <div class="through-box Impact2 covercolor2 newheight2">
            <div class="through-cnt edu-impact stat-1">
              <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_students', '155,000+')) ?></h4>
              <h5>students</h5>
              <p>impacted through education efforts</p>
            </div>
             <div class="climate-img watsanicon">
              <img src="./assets/images/edu/1.svg" alt="">
            </div>
          </div><!---through-box-->
      
          <div class="through-box newheight1 covercolor2">
            <div class="through-cnt edu-impact">
              <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_scholarships', '9,500+')) ?></h4>
              <h5>students</h5>
              <p>supported through <br />scholarship</p>
            </div>
            <div class="climate-img">
              <img src="./assets/images/edu/i-edu-1.png" alt="">
            </div>
          </div><!---through-box-->
      
          <div class="through-box newheight4 covercolor2" >
            <div class="through-cnt edu-impact stat-3">
              <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_teachers', '4,500+')) ?></h4>
              <h5>teachers</h5>
              <p>trained across multiple programmes</p>
            </div>
            <div class="climate-img watsanicon">
              <img src="./assets/images/edu/3.svg" alt="">
            </div>
          </div><!---through-box-->
      
          <div class="through-box Impact5 covercolor2 newheight5">
            <div class="through-cnt edu-impact">
              <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_libraries', '659+')) ?></h4>
              <h5>schools</h5>
              <p>supported with library set-up</p>
            </div>
            <div class="climate-img">
              <img src="./assets/images/edu/i-edu-2.png" alt="">
            </div>
          </div><!---through-box-->
          
          <div class="through-box covercolor2 newheight3">
            <div class="through-cnt edu-impact stat-5">
              <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_solar_students', '18,800+')) ?></h4>
              <h5>students</h5>
              <p>impacted with solar infra in 365+ schools & anganwadi's</p>
            </div>
            <div class="climate-img watsanicon">
              <img src="./assets/images/edu/5.svg" alt="">
            </div>
          </div><!---through-box-->
      </div>

      <div class="stories-section rainwater mobile">
       <div class="owl-carousel owl-theme slider1">
        <!--<div class="proving-cover covercolor2">
          <div class="top-content">
            <h4>8.16 crores</h4>
            <p>litres of rainwater harvested<br> through farm ponds</p>
          </div>
          <div class="constructed1 rainwater3">
            <img src="./assets/images/education/through1.svg" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor2">
          <div class="top-content">
            <h4>16.33 lakh <br> KWP</h4>
            <p>of solar energy generated annually, cutting 1,183 MT of carbon emissions
            </p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/sanitation/constructed2.svg" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor2">
          <div class="top-content">
            <h4>114.7</h4>
            <p>metric tonnes of waste recycled through community participation</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/education/through3.svg" alt="">
          </div>
        </div>

        <div class="proving-cover covercolor2">
          <div class="constructed1 rainwater3">
            <img src="./assets/images/education/through4.svg" alt="">
          </div>
          <div class="top-content bottom-content">
            <h4>15.25 crore litres</h4>
            <p>of rainwater have percolated into the ground through contour trenches, boosting groundwater recharge</p>
          </div>
        </div>

        <div class="proving-cover covercolor2">
          <div class="top-content">
            <h4>38 acres</h4>
            <p>of barren land converted to cultivable land</p>
          </div>
          <div class="constructed1">
            <img src="./assets/images/sanitation/constructed5.svg" alt="">
          </div>
        </div>-->
        <div class="through-box Impact2 covercolor2 newheight2">
            <div class="through-cnt edu-impact stat-1">
            <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_students', '155,000+')) ?></h4>
              <h5>students</h5>
              <p>impacted through education efforts</p>
            </div>
             <div class="climate-img watsanicon">
              <img src="./assets/images/edu/1.svg" alt="">
            </div>
          </div><!---through-box-->
      
          <div class="through-box newheight1 covercolor2">
            <div class="through-cnt edu-impact">
          <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_scholarships', '9,500+')) ?></h4>
              <h5>students</h5>
              <p>supported through <br />scholarship</p>
            </div>
            <div class="climate-img">
              <img src="./assets/images/edu/i-edu-1.png" alt="">
            </div>
          </div><!---through-box-->
      
          <div class="through-box newheight4 covercolor2" >
            <div class="through-cnt edu-impact stat-3">
          <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_teachers', '4,500+')) ?></h4>
              <h5>teachers</h5>
              <p>trained across multiple programmes</p>
            </div>
            <div class="climate-img watsanicon">
              <img src="./assets/images/edu/3.svg" alt="">
            </div>
          </div><!---through-box-->
      
          <div class="through-box Impact5 covercolor2 newheight5">
            <div class="through-cnt edu-impact">
          <h4><?= htmlspecialchars(cms_stat_value($cmsStats, 'education_libraries', '659+')) ?></h4>
              <h5>schools</h5>
              <p>supported with library set-up</p>
            </div>
            <div class="climate-img">
              <img src="./assets/images/edu/i-edu-2.png" alt="">
            </div>
          </div><!---through-box-->
          
          <div class="through-box covercolor2 newheight3">
            <div class="through-cnt edu-impact stat-5">
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


      <!---girdlayer5-->
    </div>
  </div><!---impact-section reality—proving-->


  <div class="program-section" style="background-image: url('./assets/images/education/banner-bg2.svg');">
    <div class="container">
      <div class="inner-hd text-center">
        <h2><span>Education Programmes</span></h2>
      </div>

      <div class="owl-carousel owl-theme programmeslider">
        <div class="ensure-werp">
          <img src="./assets/images/education/Mindset.svg" alt="">
          <div class="ensure-cnt">
            <h5>Mindset Change</h5>
            <p>Swades’ programme grew from training teachers and principals to involving parents and communities. So
              far, it has empowered over 5,000 school leaders across the education system.</p>
          </div>
        </div><!---ensure-werp-->

        <div class="ensure-werp">
          <img src="./assets/images/education/Enabling.png" alt="">
          <div class="ensure-cnt">
            <h5>Enabling Environment</h5>
            <p>Swades enhances schools with clean water, sanitation, and solar power, ensuring uninterrupted learning
              and healthier environments that support students’ growth, safety, and access to digital education.</p>
          </div>
        </div><!---ensure-werp-->

        <div class="ensure-werp">
          <img src="./assets/images/education/Future-Ready.svg" alt="">
          <div class="ensure-cnt">
            <h5>Future-Ready Learners</h5>
            <p>Swades offers Mass Scholarships for Grades XI–XII and Excellence Scholarships for professional degrees
              like Engineering, Medicine, CA, and Architecture.</p>
          </div>
        </div><!---ensure-werp-->

        <div class="ensure-werp">
          <img src="./assets/images/sanitation/edupro.png" alt="">
          <div class="ensure-cnt">
            <h5>Strengthening Soft Skills</h5>
            <p>Through our EduSkilling programme (Education + Skilling), we equip youth with skills such as communication, time management, and problem-solving etc., bridging the gap between education and opportunity. In partnership with the GTT Foundation, the program delivers structured soft skills training to college students.</p>
          </div>
        </div><!---ensure-werp-->
      </div>
    </div>
  </div><!---program-section-->

  <div class="stories-section empowerment">
    <div class="heading-hd text-center">
      <h2>Stories of Empowerment</h2>
    </div><!--heading-hd-->
    <!--<div class="owl-carousel owl-theme slider1">
      <div class="empowered-werap overcolor2">
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
      <div class="empowered-werap overcolor2">
        <div class="empowe-cnt">
          <span class="heading6">Education</span>
          <h6>Empowering Rural Communities: The Transformative Role of Solar Energy</h6>
          <p>How our water management initiatives helped a village overcome drought conditions.</p>
          <a href="#" class="readmore">Read impact story <img src="./assets/images/arrow-right.svg" alt=""></a>
        </div>
        <div class="empowe-img">
          <img src="./assets/images/stories2.svg" alt="">
        </div>
      </div>
      <div class="empowered-werap overcolor2">
        <div class="empowe-cnt">
          <span class="heading6">Education</span>
          <h6>Defeating Cancer: A Comprehensive Guide to Prevention and Treatment</h6>
          <p>How our water management initiatives helped a village overcome drought conditions.</p>
          <a href="#" class="readmore">Read impact story <img src="./assets/images/arrow-right.svg" alt=""></a>
        </div>
        <div class="empowe-img">
          <img src="./assets/images/stories3.svg" alt="">
        </div>
      </div>
      <div class="empowered-werap overcolor2">
        <div class="empowe-cnt">
          <span class="heading6">Education</span>
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
                  
                <img src="./assets/images/home/soe-edu.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="together-text">
                <h4>A Scholar's Journey from Aspiration to Achievement</h4>
                <p>Sharvari's journey is proof of what's possible when talent meets opportunity and determination. Through the Swades Excellence Scholarship, she was able to pursue her dream of studying Neuro Physiotherapy — a field that captured her curiosity and compassion in equal measure.</p>

                <p>"I wanted to study this stream because it's fascinating," she says, "but more importantly, I want to be a healing hand for patients suffering from neurological conditions."</p>
                
                <p>With the scholarship lifting the burden of loans or dependence, Sharvari is now stepping confidently into her role, ready to begin her career as a neuro physiotherapist. Her story reflects the power of support and self-belief — and the ripple effect of empowering one determined young mind.</p>
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
                  
                <img src="./assets/images/home/soe-edu.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="together-text">
                <h4>A Scholar's Journey from Aspiration to Achievement</h4>
                <p>Sharvari's journey is proof of what's possible when talent meets opportunity and determination. Through the Swades Excellence Scholarship, she was able to pursue her dream of studying Neuro Physiotherapy — a field that captured her curiosity and compassion in equal measure.</p>

                <p>"I wanted to study this stream because it's fascinating," she says, "but more importantly, I want to be a healing hand for patients suffering from neurological conditions."</p>
                
                <p>With the scholarship lifting the burden of loans or dependence, Sharvari is now stepping confidently into her role, ready to begin her career as a neuro physiotherapist. Her story reflects the power of support and self-belief — and the ripple effect of empowering one determined young mind.</p>
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
      <div class="immediate-bg overly desktop" style="background-image: url('./assets/images/education/banner3.svg');">
        <div class="titlewrap">
          <h3>Your support <br>can change <br />the course of a <br> child’s life</h3>
          <p>Join Swades Foundation in creating thriving rural communities across India</p>
          <a href="javascript:void(0)" onClick="submitCause(1)" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
      <div class="immediate-bg overly mobile" style="background-image: url('./assets/images/education/Education.jpg');">
        <div class="titlewrap">
          <h3>Your support <br>can change <br />the course of a <br> child’s life</h3>
          <p>Join Swades Foundation in creating thriving rural communities across India</p>
          <a href="javascript:void(0)" onClick="submitCause(1)" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
    </div>
  </div><!----thriving-section-->
  <div class="donate-button innerbtn mobile pre-footer-btn">
    <a href="javascript:void(0)" onClick="submitCause(1)" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
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
