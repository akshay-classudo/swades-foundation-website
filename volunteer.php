<?php
require_once __DIR__ . '/include/cms.php';
$cmsVolunteerPage = cms_get_page('volunteer');
$cmsVolunteerIntro = cms_page_content($cmsVolunteerPage);
?>
<!DOCTYPE html>
<html>

<head>
  <title><?= htmlspecialchars(cms_page_field($cmsVolunteerPage, 'meta_title', 'Swades Foundation Careers')) ?></title>
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
    @media (max-width: 576.8px) {
        .initiative {
            padding-left: 0px !important;
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
  <header id="header" class="home-header ourteam-header">
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
              <a href="Donate" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
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

  <div class="inner-page ourteam-page">
    <div class="container container-mobile">
      <div class="inner-hd text-center padding-mobile">
        <h2><span><?= htmlspecialchars(cms_page_field($cmsVolunteerPage, 'title', 'Be the Change. Volunteer with Us.')) ?></span></h2>
        <?php if ($cmsVolunteerIntro !== ''): ?>
          <?= $cmsVolunteerIntro ?>
        <?php else: ?>
          <p>At Swades, volunteers help drive real change in rural communities. Lend your time, share <br> your skills,
            and be
            a part of transforming lives on the ground.</p>
        <?php endif; ?>
      </div>
      <div class="inner-cover">
        <img src="./assets/images/volunteers/Volunteerbanner.jpg" alt="" class="desktop">
        <img src="./assets/images/volunteers/Volunteerbanner.jpg" alt="" class="mobile">
      </div>
      
      <div class="heading-hd text-center" style="margin-top: 21px;">
        <h2>Why Volunteer?</h2>
      </div>
      <div class="gridlayer5 volunteer-section desktop ">
        <div class="vol-box light-card">
          <div class="grow-img">
            <img src="./assets/images/volunteers/Grow.svg" alt="">
          </div>
          <div class="through-text">
            <h3>Grow <br>Personally</h3>
            <p>Discover hidden talents and boost your confidence through action.</p>
          </div>

        </div>

        <div class="vol-box white-card">
          <div class="card-content">
            <h3>Dream Villages Transformed</h3>
            <p>Your time directly helps build sustainable, thriving rural communities.</p>
          </div>
          <div class="highlight-box">
            <div class="heart-icon"><img src="./assets/images/volunteers/brings.svg" alt="">
              <p>Your support <br> brings to life</p>
            </div>

          </div>
        </div>

        <div class="vol-box image-card">
          <img src="./assets/images/volunteers/Diverse.svg" alt="">
          <div class="text-overlay">
            <h3>Diverse<br>Connections<br>Made</h3>
          </div>
        </div>

        <div class="vol-box image-card2">
          <img src="./assets/images/volunteers/difference.svg" alt="Woman Farmer">
          <div class="text-overlay">
            <h3>Make a<br>difference</h3>
            <p>Enjoy the joy of supporting rural communities and receive a volunteer badge/kit as a keepsake.</p>
          </div>
        </div>

        <div class="vol-box dark-card">
          <img src="./assets/images/volunteers/elders.svg" alt="Woman Farmer">
          <div class="text-overlay">
            <h3>Support education, youth, and elders</h3>
          </div>

        </div>
      </div>

       <div class="stories-section rainwater mobile padding-mobile">
              <div class="owl-carousel owl-theme slider1">
        <div class="vol-box light-card">
          <div class="grow-img">
            <img src="./assets/images/volunteers/Grow.svg" alt="">
          </div>
          <div class="through-text">
            <h3>Grow <br>Personally</h3>
            <p>Discover hidden talents and boost your confidence through action.</p>
          </div>

        </div>

        <div class="vol-box white-card">
          <div class="card-content">
            <h3>Dream Villages Transformed</h3>
            <p>Your time directly helps build sustainable, thriving rural communities.</p>
          </div>
          <div class="highlight-box">
            <div class="heart-icon"><img src="./assets/images/volunteers/brings.svg" alt="">
              <p>Your support <br> brings to life</p>
            </div>

          </div>
        </div>

        <div class="vol-box image-card">
          <img src="./assets/images/volunteers/Diverse.svg" alt="">
          <div class="text-overlay">
            <h3>Diverse<br>Connections<br>Made</h3>
          </div>
        </div>

        <div class="vol-box image-card2">
          <img src="./assets/images/volunteers/difference.svg" alt="Woman Farmer">
          <div class="text-overlay">
            <h3>Make a<br>difference</h3>
            <p>Enjoy the joy of supporting rural communities and receive a volunteer badge/kit as a keepsake.</p>
          </div>
        </div>

        <div class="vol-box dark-card">
          <img src="./assets/images/volunteers/elders.svg" alt="Woman Farmer">
          <div class="text-overlay">
            <h3>Support education, youth, and elders</h3>
          </div>

        </div>
                </div>
                </div>

    </div>
  </div><!---home-section-->

  <div class="involved-ssection">
    <div class="container">
      <div class="heading-hd text-center">
        <h2><span>How to Volunteer</span></h2>
      </div>

      <div class="gridlayer4 farmers involved-desktop">
        <div class="timelywerap">
          <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
          <h5>Knowledge Sharing Workshops</h5>
          <p>Engage with school children, women, farmers, and tribal communities to share knowledge and skills.</p>
        </div><!---timelywerap-->
        <!-- Card 2 -->
        <div class="timelywerap">
          <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
          <h5>Shramdaan (Community Service Projects)</h5>
          <p>Participate in physical volunteering during civil work projects.</p>
        </div>

        <!-- Card 3 -->
        <div class="timelywerap">
          <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
          <h5>Green Earth Initiative</h5>
          <p>Contribute your bit to making the planet greener.</p>
        </div>

        <!-- Card 4 -->
        <div class="timelywerap">
          <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
          <h5>Village Beautification Drive</h5>
          <p>Help clean and beautify the village area.</p>
        </div>

        <!-- Card 5 -->
        <div class="timelywerap">
          <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
          <h5>Community Art Project</h5>
          <p>Paint and decorate house walls in the community.</p>
        </div>

        <!-- Card 6 -->
        <div class="timelywerap">
          <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
          <h5>Village Connect Program</h5>
          <p>Interact with rural communities to understand their needs and aspirations.</p>
        </div>

        <!-- Card 7 -->
        <div class="timelywerap">
          <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
          <h5>Farm Assistance Program</h5>
          <p>Assist farmers during the harvest season.</p>
        </div>

        <!-- Card 8 -->
        <div class="timelywerap">
          <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
          <h5>Build Together Initiative</h5>
          <p>Participate in construction and infrastructure improvement projects.</p>
        </div>


      </div>

      <div class="sliderframework mobile">
        <div class="owl-carousel owl-theme mobileslider2">
          <div class="tribalcard2">
            <div class="timelywerap">
              <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
              <h5>Knowledge Sharing Workshops</h5>
              <p>Engage with school children, women, farmers, and tribal communities to share knowledge and skills.</p>
            </div><!---timelywerap-->

            <div class="timelywerap">
              <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
              <h5>Shramdaan (Community Service Projects)</h5>
              <p>Participate in physical volunteering during civil work projects.</p>
            </div>
          </div><!--tribalcard2-->

          <div class="tribalcard2">
            <div class="timelywerap">
          <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
          <h5>Green Earth Initiative</h5>
          <p>Contribute your bit to making the planet greener.</p>
        </div>

        <!-- Card 4 -->
        <div class="timelywerap">
          <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
          <h5>Village Beautification Drive</h5>
          <p>Help clean and beautify the village area.</p>
        </div>
          </div><!--tribalcard2-->

          <div class="tribalcard2">
            <div class="timelywerap">
              <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
              <h5>Community Art Project</h5>
              <p>Paint and decorate house walls in the community.</p>
            </div>

            <!-- Card 6 -->
            <div class="timelywerap">
              <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
              <h5>Village Connect Program</h5>
              <p>Interact with rural communities to understand their needs and aspirations.</p>
            </div>
          </div><!--tribalcard2-->

          <div class="tribalcard2">
            <!-- Card 7 -->
            <div class="timelywerap">
              <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
              <h5>Farm Assistance Program</h5>
              <p>Assist farmers during the harvest season.</p>
            </div>

        <!-- Card 8 -->
            <div class="timelywerap">
              <span><img src="./assets/images/volunteers/arrow.svg" alt=""></span>
              <h5>Build Together Initiative</h5>
              <p>Participate in construction and infrastructure improvement projects.</p>
            </div>
          </div>


        </div>
      </div><!---sliderframework mobile-->




    </div>
  </div><!--involved-ssection-->

  <div class="explore-section">
    <div class="container">
      <div class="heading-hd text-center">
        <!--<h2>Explore Current Opportunities</h2>-->
      </div>
      <div class="initiative" style="text-align: center;">
          <h5 style="letter-spacing: normal;">If you wish to volunteer with us, write to us at</h5>
          <p style="letter-spacing: normal;"><a href="mailto:partner.relations@swadesfoundation.org">partner.relations@swadesfoundation.org</a></p>
        </div>
    </div>
  </div><!----explore-section-->
<br />
<div class="believers-section">
    <div class="heading-hd text-center">
        <h2>Organizations that have volunteered with us</h2>
    </div>
    <div class="owl-carousel owl-theme productbrandlogo">
      <div class="brandlogo">
        <img src="./assets/images/believerslogo/18.png" alt="">
      </div>
      <div class="brandlogo">
        <img src="./assets/images/believerslogo/36.png" alt="">
      </div>
      <div class="brandlogo">
        <img src="./assets/images/believerslogo/28.png" alt="">
      </div>
      <div class="brandlogo">
        <img src="./assets/images/believerslogo/32.png" alt="">
      </div>
      <div class="brandlogo">
        <img src="./assets/images/believerslogo/24.png" alt="">
      </div>
      <div class="brandlogo">
        <img src="./assets/images/believerslogo/18.png" alt="">
      </div>
      <div class="brandlogo">
        <img src="./assets/images/believerslogo/36.png" alt="">
      </div>
      <div class="brandlogo">
        <img src="./assets/images/believerslogo/28.png" alt="">
      </div>
      <div class="brandlogo">
        <img src="./assets/images/believerslogo/32.png" alt="">
      </div>
      <div class="brandlogo">
        <img src="./assets/images/believerslogo/24.png" alt="">
      </div>
    </div>
  </div><!-----believers-section-->
  <div class="Volunteering">
    <div class="container">
      <!--<div class="gridlayer5 desktop">
        <div class="brandlogo">
          <img src="./assets/images/Deutsche.svg" alt="">
          <img src="./assets/images/believerslogo/18.png" alt="">
        </div>
        <div class="brandlogo">
          <img src="./assets/images/volunteers/marsh.svg" alt="">
          <img src="./assets/images/believerslogo/36.png" alt="">
        </div>
        <div class="brandlogo">
          <img src="./assets/images/Icici.svg" alt="">
          <img src="./assets/images/believerslogo/28.png" alt="">
        </div>
        <div class="brandlogo">
          <img src="./assets/images/about/indiaexim.svg" alt="">
          <img src="./assets/images/believerslogo/32.png" alt="">
        </div>
        <div class="brandlogo">
          <img src="./assets/images/Honeywell.svg" alt="">
          <img src="./assets/images/believerslogo/24.png" alt="">
        </div>
      </div>
      <div class="gridlayer5 mobile">
        <div class="brandlogo">
          <img src="./assets/images/Deutsche.svg" alt="">
          <img src="./assets/images/believerslogo/18.png" alt="">
        </div>
        <div class="brandlogo">
          <img src="./assets/images/volunteers/marsh.svg" alt="">
          <img src="./assets/images/believerslogo/36.png" alt="">
        </div>
        <div class="brandlogo">
          <img src="./assets/images/Icici.svg" alt="">
          <img src="./assets/images/believerslogo/28.png" alt="">
        </div>
        <div class="brandlogo">
          <img src="./assets/images/about/indiaexim.svg" alt="">
          <img src="./assets/images/believerslogo/32.png" alt="">
        </div>
        <div class="brandlogo">
          <img src="./assets/images/Honeywell.svg" alt="">
          <img src="./assets/images/believerslogo/24.png" alt="">
        </div>
      </div>-->
      <div class="gridlayer3">
        <div class="postplant">
          <div class="plantimg">
            <img src="./assets/images/volunteers/plant.svg" alt="">
          </div>
          <div class="postlogo">
            <ul>
              <li><a href="#"><img src="./assets/images/volunteers/marsh.svg" alt=""></a></li>
              <li><a href="#"><img src="./assets/images/volunteers/logo.svg" alt=""></a></li>
            </ul>
          </div>
        </div>
        <div class="postplant">
          <div class="plantimg">
            <img src="./assets/images/volunteers/solar.svg" alt="">
          </div>
          <div class="postlogo">
            <ul>
              <li><a href="#"><img src="./assets/images/Honeywell.svg" alt=""></a></li>
              <li><a href="#"><img src="./assets/images/volunteers/logo.svg" alt=""></a></li>
            </ul>
          </div>
        </div>
        <div class="postplant">
          <div class="plantimg">
            <img src="./assets/images/volunteers/volunteer-page.png" alt="">
          </div>
          <div class="postlogo">
            <ul>
              <li><a href="#"><img src="./assets/images/logo-12.png" alt=""></a></li>
              <li><a href="#"><img src="./assets/images/volunteers/logo.svg" alt=""></a></li>
            </ul>
          </div>
        </div>

      </div>

    </div>
  </div><!---Volunteering--->


  <!--<div class="faqs-section">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>FAQs</h2>
      </div>

      <div class="faqs-accordion">
        <div class="accordion" id="accordionExample2">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingcan">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecan"
                aria-expanded="true" aria-controls="collapsecan">
                Who can volunteer with <br> Swades Foundation?
              </button>
            </h2>
            <div id="collapsecan" class="accordion-collapse collapse" aria-labelledby="headingcan"
              data-bs-parent="#accordionExample2">
              <div class="accordion-card">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br> Nostrum architecto voluptatibus</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Where do volunteer opportunities <br> take place?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample2">
              <div class="accordion-card">
                <p>You can support us by donating, volunteering, or partnering with us on initiatives.<br> Visit our
                  ""Get
                  Involved"" section for more details.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Can I carry gifts for <br> the community?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample2">
              <div class="accordion-card">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br> Nostrum architecto voluptatibus</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingsafety">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsesafety" aria-expanded="false" aria-controls="collapsesafety">
                What safety measures are <br> in place?
              </button>
            </h2>
            <div id="collapsesafety" class="accordion-collapse collapse" aria-labelledby="headingsafety"
              data-bs-parent="#accordionExample2">
              <div class="accordion-card">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br> Nostrum architecto voluptatibus</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingtypes">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsetypes" aria-expanded="false" aria-controls="collapsetypes">
                What types of volunteer activities <br> are available?
              </button>
            </h2>
            <div id="collapsetypes" class="accordion-collapse collapse" aria-labelledby="headingtypes"
              data-bs-parent="#accordionExample2">
              <div class="accordion-card">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br> Nostrum architecto voluptatibus</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>--><!---faqs-section-->

  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>
  <?php include 'include/footer.php'; ?> <!-- Footer -->

</body>

</html>
