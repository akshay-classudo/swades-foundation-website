<?php require_once __DIR__ . '/include/cms.php';
$cmsCsrPage = cms_get_page('csr');
cms_require_published_page('csr');
$cmsCsrIntro = cms_page_section($cmsCsrPage, 'intro', cms_page_content($cmsCsrPage));
$cmsCsrPartner = cms_page_section($cmsCsrPage, 'partner', '');
$cmsCsrCallout = cms_page_section($cmsCsrPage, 'cta', '');
?>
<!DOCTYPE html>
<html>
<head>
  <title><?= htmlspecialchars(cms_page_field($cmsCsrPage, 'meta_title', 'Swades Foundation CSR')) ?></title>
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
</head>
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
<style>
/* SDG Section Override */
.gridlayerimg9{
    display:grid !important;
    grid-template-columns:repeat(9, 1fr) !important;
    gap:20px !important;
    align-items:center !important;
}

.directlyimg{
    display:block !important;
}

.directlyimg img{
    width:100% !important;
    height:auto !important;
    display:block !important;
}

/* Tablet */
@media (max-width:991px){
    .gridlayerimg9{
        grid-template-columns:repeat(5,1fr) !important;
    }
}

/* Mobile */
@media (max-width:576px){
    .gridlayerimg9{
        grid-template-columns:repeat(3,1fr) !important;
        gap:10px !important;
    }
}

.gridlayerimg9{
    display:flex !important;
    flex-wrap:wrap !important;
    justify-content:center !important;
    gap:20px !important;
}

.directlyimg{
    width:110px !important;
    
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
    <div class="container">
      <div class="inner-hd text-center">
        <h2><span><?= htmlspecialchars(cms_page_field($cmsCsrPage, 'title', 'Driving Change Through CSR')) ?></span></h2>
        <?php if ($cmsCsrIntro !== ''): ?>
          <?= $cmsCsrIntro ?>
        <?php else: ?>
          <p>At Swades, our institutional and corporate partnerships go beyond funding — they’re built on a shared vision,
            active employee engagement, measurable outcomes, and sustainable impact at scale.</p>
        <?php endif; ?>
      </div>

      <div class="inner-cover">
        <!--<img src="./assets/images/CSR/504A9743.JPG" alt="" class="desktop">-->
        <img src="./assets/images/CSR/SWADES1.png" alt="" class="desktop">
        <img src="./assets/images/CSR/swades-mob.jpg" alt="" class="mobile">
      </div>

    </div>
  </div><!---home-section-->


  <div class="commitments-section">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>How Can You Partner?</h2>
        <p>Whether you want to support a specific cause, commit long-term, or uplift entire villages, there are many meaningful ways to partner.  We align with your objectives to drive sustainable community growth and track meaningful progress.</p>
      </div><!--heading-hd-->

      <div class="gridlayer3">
        <div class="effort-box">
          <div class="effort-cnt">
            <h5>Support thematic development</h5>
            <p>With a focused approach, your support can help meet the specific needs of a village. Be it clean water, better sanitation, education, healthcare, or livelihoods. By partnering with us, you can help grow and sustain these efforts, bringing lasting change to rural communities.</p>
          </div>

          <div class="owl-carouselowl-theme">
            <!--<div class="effort-img">
              <img src="./assets/images/CSR/accord1.svg" alt="">
              <div class="these">
                <h6>Education</h6>
              </div>
            </div>-->
            <div class="effort-img">
              <img src="./assets/images/CSR/accord1.svg" alt="">
              <div class="these">
                <!--<h6>Education</h6>-->
                <!--<a href="#"><img src="./assets/images/CSR/arrow.svg" alt=""></a>-->
              </div>
            </div>
            <!--<div class="effort-img">
              <img src="./assets/images/CSR/accord1.svg" alt="">
              <div class="these">
                <h6>Education</h6>
                <a href="#"><img src="./assets/images/CSR/arrow.svg" alt=""></a>
              </div>
            </div>-->
          </div><!---CSRslider-->



        </div><!--effort-box--->

        <div class="effort-box">
          <div class="effort-cnt">
            <h5>Support village cluster development</h5>
            <p>Through village cluster development, your support may take a holistic approach to addressing the diverse
              needs of communities across multiple focus areas. Rather than being confined to a single vertical, our
              interventions here are guided by the specific priorities and aspirations of the communities in the village
              cluster.
            </p>
          </div>

          <div class="owl-carouselowl-theme">
            <div class="effort-img">
              <img src="./assets/images/CSR/csr-suppt.svg" alt="">
            </div>
            <!--<div class="effort-img">
              <img src="./assets/images/CSR/csr-suppt.svg" alt="">
            </div>
            <div class="effort-img">
              <img src="./assets/images/CSR/csr-suppt.svg" alt="">
            </div>-->
          </div><!---CSRslider-->



        </div><!--effort-box--->

        <div class="effort-box">
          <div class="effort-cnt">
            <h5>Corporate Volunteering</h5>
            <p>Employees can take part in a variety of activities that support rural communities. These include tree planting, setting up solar panels, cleaning villages, harvesting crops, interacting with students and trainees, wall painting, and conducting surveys – to name a few.</p>
          </div>

          <div class="owl-carouselowl-theme">
            <div class="effort-img">
              <img src="./assets/images/CSR/csr-corpt3.svg" alt="">
            </div>
            <!--<div class="effort-img">
              <img src="./assets/images/CSR/csr-corpt3.svg" alt="">
            </div>
            <div class="effort-img">
              <img src="./assets/images/CSR/csr-corpt3.svg" alt="">
            </div>-->
          </div><!---CSRslider-->
        </div><!--effort-box--->
      </div>
    </div>
  </div><!----commitments-section-->


  <div class="collaborative">
    <div class="container">
      <div class="heading-hd text-center">
        <?php if ($cmsCsrPartner !== ''): ?>
          <?= $cmsCsrPartner ?>
        <?php else: ?>
          <h2>Why Partner With Swades Foundation?</h2>
          <p>We truly value the trust our corporate partners place in us and are committed to creating an open,<br>
            collaborative environment where we can achieve our shared goals together.</p>
        <?php endif; ?>
      </div><!---heading-hd-->

      <div class="gridlayer3">
        <div class="timelywerap">
          <span><img src="./assets/images/CSR/icon1.svg" alt=""></span>
          <h5>100% Fund Utilisation & audit reports:</h5>
          <p>We ensure timely utilization of funds, supported by audited utilisation certificates, quarterly reports and
            donor-commissioned third-party impact assessments.</p>
        </div><!---timelywerap-->

        <div class="timelywerap">
          <span><img src="./assets/images/CSR/icon2.svg" alt=""></span>
          <h5>Alignment with SDGs:</h5>
          <p>Our impactful projects address 13 out of 17 Sustainable Development Goals (SDGs).</p>
        </div><!---timelywerap-->

        <div class="timelywerap">
          <span><img src="./assets/images/CSR/icon3.svg" alt=""></span>
          <h5>Long-Term Impact</h5>
          <p>Our interventions are structured as multi-year projects for sustainable outcomes.</p>
        </div><!---timelywerap-->


        <div class="timelywerap">
          <span><img src="./assets/images/CSR/icon4.svg" alt=""></span>
          <h5>Compliance Assurance</h5>
          <p>We are fully compliant with FCRA and 80G regulations.</p>
        </div><!---timelywerap-->

        <div class="timelywerap">
          <span><img src="./assets/images/CSR/icon5.svg" alt=""></span>
          <h5>Volunteering Opportunities</h5>
          <p>We design an annual volunteering calendar to engage employees meaningfully.</p>
        </div><!---timelywerap-->

        <div class="timelywerap">
          <span><img src="./assets/images/CSR/icon6.svg" alt=""></span>
          <h5>Dedicated Donor Engagement</h5>
          <p>Our donor engagement team provides regular updates on fund utilization and project impact, facilitating
            donor visits and community interactions upon request.</p>
        </div><!---timelywerap-->

        <div class="timelywerap">
          <span><img src="./assets/images/CSR/icon7.svg" alt=""></span>
          <h5>Amplifying</h5>
          <p>Our in-house communications team enhances visibility through engaging social media campaigns.</p>
        </div><!---timelywerap-->

        <div class="timelywerap">
          <span><img src="./assets/images/CSR/icon8.svg" alt=""></span>
          <h5>Employee Giving Programs</h5>
          <p>We encourage employee participation through one-time and monthly giving options.</p>
        </div><!---timelywerap-->

        <div class="timelywerap">
          <span><img src="./assets/images/CSR/icon9.svg" alt=""></span>
          <h5>Expert Partnerships</h5>
          <p>We collaborate with credible NGO partners with proven expertise in rural implementation and
            ready-to-execute projects.</p>
        </div><!---timelywerap-->

      </div>
    </div>
  </div><!---collaborative-->

 <div class="sustainable-section">
    <div class="container">
      <div class="drivinghd">
        <h4>Driving Sustainable Impact</h4>

        <h2>Swades Foundation’s integrated rural development model<br> contributes to <span> 14 of the 17  </span>UN SDGs.<br> 
        </h2>
    
      </div>
    
      <div class="gridlayerimg9">
        <div class="directlyimg">
          <img src="./assets/images/CSR/img1.svg" alt="">
        </div>
         <div class="directlyimg">
          <img src="./assets/images/CSR/img2.svg" alt="">
        </div>
         <div class="directlyimg">
          <img src="./assets/images/CSR/img3.svg" alt="">
        </div>
         <div class="directlyimg">
          <img src="./assets/images/CSR/img4.svg" alt="">
        </div>
         <div class="directlyimg">
          <img src="./assets/images/CSR/img5.svg" alt="">
        </div>
         <div class="directlyimg">
          <img src="./assets/images/CSR/img6.svg" alt="">
        </div>
         <div class="directlyimg">
          <img src="./assets/images/CSR/img7.svg" alt="">
        </div>
         <div class="directlyimg">
          <img src="./assets/images/CSR/img8.svg" alt="">
        </div>
         <div class="directlyimg">
          <img src="./assets/images/CSR/img10.svg" alt="">
        </div>
         <div class="directlyimg">
          <img src="./assets/images/CSR/img11.svg" alt="">
        </div>
         <div class="directlyimg">
          <img src="./assets/images/CSR/img12.svg" alt="">
        </div>
         <div class="directlyimg">
          <img src="./assets/images/CSR/img13.svg" alt="">
        </div>
         <div class="directlyimg">
          <img src="./assets/images/CSR/img15.svg" alt="">
        </div>
         <div class="directlyimg">
          <img src="./assets/images/CSR/img17.svg" alt="">
        </div>
      </div>
      <!--gridlayer9-->

    </div>
  </div><!--sustainable-section-->



  <div class="thriving-section">
    <div class="container">
      <!--<div class="immediate-bg overly" style="background-image: url('./assets/images/CSR/Empower2.jpg');">-->
      <div class="immediate-bg overly desktop" style="background-image: url('./assets/images/CSR/Skilling.JPG');">
        <div class="titlewrap sustainable">
          <?php if ($cmsCsrCallout !== ''): ?>
            <?= $cmsCsrCallout ?>
          <?php else: ?>
            <h3>Empower rural youth</h3>
            <p>Support skilling programme to create rural jobs and curb forced migration</p>
          <?php endif; ?>
          <p id="csr_content" style="display:none;">
              To explore CSR opportunities with Swades Foundation, write to us at  
            <a href="mailto:fr@swadesfoundation.org" style="color:#ffff">fr@swadesfoundation.org</a>
           </p>
            <a href="javascript:void(0)" id="contact_btn" class="btn desktop">Contact Us</a>
        </div>
      </div>
      <div class="immediate-bg overly mobile" style="background-image: url('./assets/images/CSR/CSR.jpg');">
        <div class="titlewrap sustainable">
          <?php if ($cmsCsrCallout !== ''): ?>
            <?= $cmsCsrCallout ?>
          <?php else: ?>
            <h3>Empower rural youth</h3>
            <p>Support skilling programme to create rural jobs and curb forced migration</p>
          <?php endif; ?>
          <p id="csr_content_mob" style="display:none;">
              To explore CSR opportunities with Swades Foundation, write to us at  
            <a href="mailto:fr@swadesfoundation.org" style="color:#ffff">fr@swadesfoundation.org</a>
           </p>
            <a href="javascript:void(0)" id="contact_btn" class="btn desktop">Contact Us</a>
        </div>
      </div>
    </div>
  </div><!----thriving-section-->
  
  <div class="donate-button innerbtn mobile pre-footer-btn">
    <a href="javascript:void(0)" id="contact_btn-mob" class="btn">Contact Us</a>
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
        ?>

    </div>

</div>





  <script src="./assets/js/jquery-3.6.3.js"></script>
  <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
  
    jQuery(document).ready(function($) {
      $('#contact_btn').on('click', function() {
        $('#csr_content').show();
        $(this).remove(); 
      });
      $('#contact_btn-mob').on('click', function() {
        $('#csr_content_mob').show();
        $(this).remove(); 
      });
    });
  </script>
  <?php include 'include/footer.php'; ?> <!-- Footer -->
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>

</body>

</html>
