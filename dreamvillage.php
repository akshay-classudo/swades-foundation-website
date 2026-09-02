<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
$cmsDreamVillagePage = cms_get_page('dream-village');
cms_require_published_page('dream-village');
$cmsDreamVillageIntro = cms_page_section($cmsDreamVillagePage, 'intro', cms_page_content($cmsDreamVillagePage));
$cmsDreamVillageFramework = cms_page_section($cmsDreamVillagePage, 'framework', '');
$cmsDreamVillageDonate = cms_page_section($cmsDreamVillagePage, 'donate', '');
?>
<!DOCTYPE html>
<html>
<head>
  <title><?= htmlspecialchars(cms_page_field($cmsDreamVillagePage, 'meta_title', 'Swades Foundation Dream Village'), ENT_QUOTES, 'UTF-8') ?></title>
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
  @media (max-width: 767px){
    #dream-village-donate {
        margin-top: 95px !important;
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
  <header id="header" class="home-header inner-contact">
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


  <div class="inner-page Dreamvillage">
    <div class="container">
      <div class="inner-hd text-center">
        <?php if ($cmsDreamVillageIntro !== ''): ?>
          <?= $cmsDreamVillageIntro ?>
        <?php else: ?>
          <h2><span>What is a Swades Dream Village?</span></h2>
          <p>Before we set out to create a ‘Swades Dream Village’, we asked our communities to describe a village of their dreams - what would it look like? What qualities would it embody? What role would they play in it? Almost unanimously, the communities described the villages to as clean, with access to water and toilets, quality education, affordable healthcare and livelihood opportunities, to mention a few, - but also a village united in its path to progress. Thus were laid down the cornerstones or the 5 Ss of a Swades Dream Village.</p>
        <?php endif; ?>
      </div>

      <div class="inner-cover">
        <img src="./assets/images/dreamvillage/dream-village.jpg" alt="" class="desktop">
        <img src="./assets/images/dreamvillage/dream-village2.jpg" alt="" class="mobile">
      </div>

    </div>
  </div><!---home-section-->

  <div class="framework-section">
    <div class="container">
      <div class="heading-hd text-center">
        <?php if ($cmsDreamVillageFramework !== ''): ?>
          <?= $cmsDreamVillageFramework ?>
        <?php else: ?>
          <h2><span>Swades 6S Framework</span></h2>
          <p><span>Driving transformation at the grassroots </span></p>
        <?php endif; ?>
      </div><!--heading-hd-->

      <div class="gridlayer6 desktop">
        <div class="swades-cover">
          <div class="proper-content">
            <h4>Swacch</h4>
            <p>Each household has its own toilet, a functional drainage system, and follows mindful waste segregation and disposal, making the village open defecation-free. Additionally, every home has access to clean drinking water through a household tap. </p>
          </div>
          <div class="swades-img">
            <img src="./assets/images/swacch-clean.svg" alt="">
          </div>
        </div><!---swades-cover-->

        <div class="swades-cover">
          <div class="proper-content">
            <h4>Sundar</h4>
            <p>The village is equipped with well-maintained internal roads and sufficient solar street lighting, contributing to a clean environment and a sense of safety and security within the community.</p>
          </div>
          <div class="swades-img">
            <img src="./assets/images/sundar-beautiful.svg" alt="">
          </div>
        </div><!---swades-cover-->

        <div class="swades-cover">
          <div class="proper-content swasthcontent">
            <h4>Swasth</h4>
            <p>The community demonstrates health-seeking behavior, with access to primary healthcare through a trained community health volunteer, institutional delivery services, and awareness of timely, prescribed vaccinations.</p>
          </div>
          <div class="swades-img">
            <img src="./assets/images/swasth-healthy.svg" alt="">
          </div>
        </div><!---swades-cover-->

        <div class="swades-cover">
          <div class="proper-content">
            <h4>Sakshar</h4>
            <p>Every child under the age of 16 has access to a quality and joyful learning environment and each school has functional Water, Sanitation & Green Initiatives facilities, ensuring that children and especially girls, do not drop out of school.</p>
          </div>
          <div class="swades-img">
            <img src="./assets/images/sakshar-literate.svg" alt="">
          </div>
        </div><!---swades-cover-->

        <div class="swades-cover">
          <div class="proper-content">
            <h4>Samruddh</h4>
            <p>Every household in the village earns a dignified income of at least ₹2 lakhs annually by engaging in multiple sources of livelihood across on-farm, off-farm, and non-farm activities.</p>
          </div>
          <div class="swades-img">
            <img src="./assets/images/samruddh-prosper.svg" alt="">
          </div>
        </div><!---swades-cover-->
        
        <div class="swades-cover">
          <div class="proper-content">
            <h4>Shristi</h4>
            <p>Each village embraces climate-conscious living through integrated efforts in water and waste management, solar energy adoption, soil restoration, regenerative farming, and tree plantation.</p>
          </div>
          <div class="swades-img">
            <img src="./assets/images/shristi-climate.svg" alt="">
          </div>
        </div><!---swades-cover-->
      </div>



      <div class="sliderframework mobile">
        <div class="owl-carousel owl-theme mobileslider">
          <div class="swades-cover">
          <div class="proper-content">
            <h4>Swacch</h4>
            <p>Each household has its own toilet, a functional drainage system, and follows mindful waste segregation and disposal, making the village open defecation-free. Additionally, every home has access to clean drinking water through a household tap. </p>
          </div>
          <div class="swades-img">
            <img src="./assets/images/swacch-clean.svg" alt="">
          </div>
        </div><!---swades-cover-->

        <div class="swades-cover">
          <div class="proper-content">
            <h4>Sundar</h4>
            <p>The village is equipped with well-maintained internal roads and sufficient solar street lighting, contributing to a clean environment and a sense of safety and security within the community.</p>
          </div>
          <div class="swades-img">
            <img src="./assets/images/sundar-beautiful.svg" alt="">
          </div>
        </div><!---swades-cover-->

        <div class="swades-cover">
          <div class="proper-content swasthcontent">
            <h4>Swasth</h4>
            <p>The community demonstrates health-seeking behavior, with access to primary healthcare through a trained community health volunteer, institutional delivery services, and awareness of timely, prescribed vaccinations.</p>
          </div>
          <div class="swades-img">
            <img src="./assets/images/swasth-healthy.svg" alt="">
          </div>
        </div><!---swades-cover-->

        <div class="swades-cover">
          <div class="proper-content">
            <h4>Sakshar</h4>
            <p>Every child under the age of 16 has access to a quality and joyful learning environment and each school has functional Water, Sanitation & Green Initiatives facilities, ensuring that children and especially girls, do not drop out of school.</p>
          </div>
          <div class="swades-img">
            <img src="./assets/images/sakshar-literate.svg" alt="">
          </div>
        </div><!---swades-cover-->

        <div class="swades-cover">
          <div class="proper-content">
            <h4>Samruddh</h4>
            <p>Every household in the village earns a dignified income of at least ₹2 lakhs annually by engaging in multiple sources of livelihood across on-farm, off-farm, and non-farm activities.</p>
          </div>
          <div class="swades-img">
            <img src="./assets/images/samruddh-prosper.svg" alt="">
          </div>
        </div><!---swades-cover-->

        <div class="swades-cover">
          <div class="proper-content">
            <h4>Shristi</h4>
            <p>Each village embraces climate-conscious living through integrated efforts in water and waste management, solar energy adoption, soil restoration, regenerative farming, and tree plantation.</p>
          </div>
          <div class="swades-img">
            <img src="./assets/images/shristi-climate.svg" alt="">
          </div>
        </div>
        </div>
      </div><!---sliderframework-->

    </div>
  </div><!-----framework-section-->


  <div class="criteria-section">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>Key Swades Dream Village Criteria</h2>
        <p>Where Vision Meets Measurable Impact</p>
      </div><!--heading-hd-->

      <div class="gridlayer4">
        <div class="potable-werap">
          <span><img src="./assets/images/dreamvillage/top-arrow.svg" alt=""></span>
          <p>Every household is connected with taps at home for potable drinking water.</p>
        </div><!---potable-werap-->

        <div class="potable-werap">
          <span><img src="./assets/images/dreamvillage/top-arrow.svg" alt=""></span>
          <p>Every household has a toilet of their own and 100% usage.</p>
        </div><!---potable-werap-->

        <div class="potable-werap">
          <span><img src="./assets/images/dreamvillage/top-arrow.svg" alt=""></span>
          <p>Every child under the age of 16 is in school.</p>
        </div><!---potable-werap-->

        <div class="potable-werap">
          <span><img src="./assets/images/dreamvillage/top-arrow.svg" alt=""></span>
          <p>Every school has a provision of drinking water and separate toilets for boys & girls.</p>
        </div><!---potable-werap-->

        <div class="potable-werap">
          <span><img src="./assets/images/dreamvillage/top-arrow.svg" alt=""></span>
          <p>Every household has at least two diverse sources of income across agriculture and animal husbandry and earns at least INR 2,00,000 per annum.</p>
        </div><!---potable-werap-->

        <div class="potable-werap">
          <span><img src="./assets/images/dreamvillage/top-arrow.svg" alt=""></span>
          <p>Youth are skilled and employable.</p>
        </div><!---potable-werap-->

        <div class="potable-werap">
          <span><img src="./assets/images/dreamvillage/top-arrow.svg" alt=""></span>
          <p>Credit linkages available for business loans.</p>
        </div>

        <div class="potable-werap">
          <span><img src="./assets/images/dreamvillage/top-arrow.svg" alt=""></span>
          <p>At Least 1 Swades Mitra (community health worker) in the village ensuring primary health care services.</p>
        </div>
      </div>
    </div>
  </div><!----criteria-section-->

  <div class="together-section">
    <div class="container">

      <!--<div class="sliderlavel mobile">
        <div class="row">
          <div class="col-md-6">
            <div class="togetherimg">
              <img src="./assets/images/dreamvillage/solar-img.svg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="together-text">
              <h4>1000 Dream Villages</h4>
              <h6>A Transformative Vision with the Government of Maharashtra </h6>
              <p>On September 5, 2024, Swades Foundation and the Government of Maharashtra came together in a powerful
                public-private partnership to reimagine the future of rural Maharashtra. A Letter of Intent (LoI) was
                signed
                to
                co-create 1000 Swades Dream Villages across the state—a milestone moment witnessed by Swades
                co-founders
                Zarina
                and Ronnie Screwvala, Hon’ble Chief Minister Eknath Shinde, and Deputy Chief Minister Devendra
                Fadnavis.
              </p>

              <p>This ambitious collaboration builds on the success of the first phase of the Dream Village
                initiative,
                launched
                in 2022, where 75 villages in Raigad district were the first to be recognised as ‘Swades Dream
                Villages.’
              </p>

              <p>Rooted deeply in Swades Foundation’s mission of holistic, community-led rural development, the
                initiative
                now
                enters its second phase, with close to 250 villages already having earned the Dream Village title.</p>
            </div>
          </div>
        </div>
      </div>-->
      <div class="sliderlavel mobile">
          <div class="row">
            <div class="col-md-6">
              <div class="togetherimg">
                <img src="./assets/images/dreamvillage/solar-img.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="together-text">
                <h4>1000 Dream Villages</h4>
                <h6>A Transformative Vision with the Government of Maharashtra</h6>
                <p>On September 5, 2024, Swades Foundation and the Government of Maharashtra came together in a powerful public-private partnership to reimagine the future of rural Maharashtra. A Letter of Intent (LoI) was signed to co-create 1000 Swades Dream Villages across the state—a milestone moment witnessed by Swades co-founders Zarina and Ronnie Screwvala, Hon’ble Chief Minister Eknath Shinde, and Deputy Chief Minister Devendra Fadnavis.|
                </p>
                <p>This ambitious collaboration builds on the success of the first phase of the Dream Village initiative, launched in 2022, where 75 villages in Raigad district were the first to be recognised as ‘Swades Dream Villages.’
                </p>
                <p>Rooted deeply in Swades Foundation’s mission of holistic, community-led rural development, the initiative now enters its second phase, with close to 250 villages already having earned the Dream Village title. </p>
              </div>
            </div>
          </div>
        </div><!---sliderlavel-->
        <div class="sliderlavel mobile">
          <div class="row">
            <div class="col-md-6">
              <div class="togetherimg">
                <img src="./assets/images/dreamvillage/Washihavelikoliwada.JPG" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="together-text">
                <h4>Washi Haveli Koliwada</h4>
                <h6> A Dream Village that Turned the Tide</h6>
                <p>Washi Haveli Koliwada in Mhasla, Raigad, is one of Swades Foundation’s Dream Villages—a picturesque coastal hamlet with one of the most powerful transformation stories to tell. Once burdened by the stench of fishing waste and held back by community apathy, the village was long stigmatized for its unhygienic conditions.
                </p>
                <p>But not anymore. Driven by the collective will of its people and a renewed spirit of change, Washi Haveli embraced ‘Swacch’—a key ‘S’ among the 5 that guide Swades’ holistic approach. What followed was nothing short of remarkable: a cleaner, healthier village that not only reclaimed its dignity but also secured an independent ₹10 lakh grant from the government under the Swacch Bharat Mission.
                </p>
                <p>From being shunned to being showcased, Washi Haveli Koliwada now stands as a shining example of what’s possible when a community comes together with vision and purpose.</p>
                <p>Number of Swades Dream Villages Celebrated Till Date – 230 (this number will change constantly) </p>
              </div>
            </div>
          </div>
        </div><!---sliderlavel-->


      <div class="desktop owl-carousel owl-theme togetherslider1">
        <div class="sliderlavel">
          <div class="row">
            <div class="col-md-6">
              <div class="togetherimg">
                <img src="./assets/images/dreamvillage/solar-img.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="together-text">
                <h4>1000 Dream Villages</h4>
                <h6>A Transformative Vision with the Government of Maharashtra</h6>
                <p>On September 5, 2024, Swades Foundation and the Government of Maharashtra came together in a powerful public-private partnership to reimagine the future of rural Maharashtra. A Letter of Intent (LoI) was signed to co-create 1000 Swades Dream Villages across the state—a milestone moment witnessed by Swades co-founders Zarina and Ronnie Screwvala, Hon’ble Chief Minister Eknath Shinde, and Deputy Chief Minister Devendra Fadnavis.|
                </p>
                <p>This ambitious collaboration builds on the success of the first phase of the Dream Village initiative, launched in 2022, where 75 villages in Raigad district were the first to be recognised as ‘Swades Dream Villages.’
                </p>
                <p>Rooted deeply in Swades Foundation’s mission of holistic, community-led rural development, the initiative now enters its second phase, with close to 250 villages already having earned the Dream Village title. </p>
              </div>
            </div>
          </div>
        </div><!---sliderlavel-->
        <div class="sliderlavel">
          <div class="row">
            <div class="col-md-6">
              <div class="togetherimg">
                <img src="./assets/images/dreamvillage/Washihavelikoliwada.JPG" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="together-text">
                <h4>Washi Haveli Koliwada</h4>
                <h6> A Dream Village that Turned the Tide</h6>
                <p>Washi Haveli Koliwada in Mhasla, Raigad, is one of Swades Foundation’s Dream Villages—a picturesque coastal hamlet with one of the most powerful transformation stories to tell. Once burdened by the stench of fishing waste and held back by community apathy, the village was long stigmatized for its unhygienic conditions.
                </p>
                <p>But not anymore. Driven by the collective will of its people and a renewed spirit of change, Washi Haveli embraced ‘Swacch’—a key ‘S’ among the 5 that guide Swades’ holistic approach. What followed was nothing short of remarkable: a cleaner, healthier village that not only reclaimed its dignity but also secured an independent ₹10 lakh grant from the government under the Swacch Bharat Mission.
                </p>
                <p>From being shunned to being showcased, Washi Haveli Koliwada now stands as a shining example of what’s possible when a community comes together with vision and purpose.</p>
                <p>Number of Swades Dream Villages Celebrated Till Date – 230 (this number will change constantly) </p>
              </div>
            </div>
          </div>
        </div><!---sliderlavel-->
      </div>
    </div>
  </div><!---together-section-->


  <div class="thriving-section">
    <div class="container">
      <div class="immediate-bg overly desktop" style="background-image: url('./assets/images/dreamvillage/village-girl.png');">
        <div class="titlewrap" id="dream-village-donate">
          <?php if ($cmsDreamVillageDonate !== ''): ?>
            <?= $cmsDreamVillageDonate ?>
          <?php else: ?>
            <h3>Be a part of <br>our dream to <br>empower rural India</h3>
            <p>Join Swades Foundation in creating thriving rural communities across India</p>
          <?php endif; ?>
          <a href="Donate" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
      <div class="immediate-bg overly mobile" style="background-image: url('./assets/images/dreamvillage/DreamVillage.jpg');">
        <div class="titlewrap" id="dream-village-donate">
          <?php if ($cmsDreamVillageDonate !== ''): ?>
            <?= $cmsDreamVillageDonate ?>
          <?php else: ?>
            <h3>Be a part of <br>our dream to <br>empower rural India</h3>
            <p>Join Swades Foundation in creating thriving rural communities across India</p>
          <?php endif; ?>
          <a href="Donate" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
    </div>
  </div><!----thriving-section-->
  <div class="donate-button innerbtn mobile pre-footer-btn">
    <a href="Donate" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
  </div>
  <!----End Pre Footer-->
  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>
  <?php include 'include/footer.php'; ?> <!-- Footer -->

</body>
</html>
