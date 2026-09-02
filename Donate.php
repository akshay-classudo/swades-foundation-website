<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
require_once __DIR__ . '/include/cms.php';
$cmsDonatePage = cms_get_page('donate');
cms_require_published_page('donate');
$cmsDonateIntro = cms_page_content($cmsDonatePage);
?>
<!DOCTYPE html>
<html>

<head>
  <title><?= htmlspecialchars(cms_page_field($cmsDonatePage, 'meta_title', 'Swades Foundation Donate')) ?></title>
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
.amount-error{
    display:none;
    margin-top:12px;
    padding:14px 16px;
    background:#fff5f5;
    border:1px solid #dc3545;
    border-radius:8px;

    font-family: Arial, Helvetica, sans-serif !important;
    font-size:16px !important;
    font-weight:400 !important;
    line-height:1.6 !important;

    letter-spacing:0 !important;
    word-spacing:0 !important;
    text-transform:none !important;
    white-space:normal !important;
    word-break:normal !important;
    overflow-wrap:break-word !important;

    color:#c82333;
}

.amount-error *{
    letter-spacing:0 !important;
    word-spacing:0 !important;
    font-family:inherit !important;
    line-height:inherit !important;
}

/* CMS copy must retain normal word separation and wrapping. */
.donate-intro,
.donate-intro * {
    display: block;
    font-family: Arial, Helvetica, sans-serif !important;
    font-size: 18px !important;
    font-weight: 400 !important;
    line-height: 1.6 !important;
    letter-spacing: normal !important;
    word-spacing: normal !important;
    white-space: normal !important;
    word-break: normal !important;
    overflow-wrap: break-word !important;
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
  <header id="header" class="home-header inner-contact mobile">
    <div class="container">
      <div class="header-menu">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="index.html">
            <img src="./assets/images/inner-page-logo.svg" alt="">
          </a>

          <div class="nav-container collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav navmenu mx-auto">
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
            <div class="donate-button desktop">
              <a href="Donate" class="btn">Donate <img src="./assets/images/heart.svg" alt=""></a>
            </div>
          </div>

          <div class="naviconmobile">
            <div class="donate-button innerbtn mobile">
              <a href="" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
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


  <div class="row wrapper-section">
    <div class="left-panel">
      <div class="donate-werp">
        <div class="dlfwerap">
          <div class="logoway">
            <a href="/"><img src="./assets/images/donate/logo.svg" alt=""></a>
          </div>
          <div class="login-btn m-0">
            <?php if (!isset($_SESSION['user_id'])): ?>
                <a href="create-account" class="btn signup">Signup</a>
                <a href="signin" class="btn">Login</a>
            <?php else: ?>
                <a href="dashboard" class="btn signup">View Dashboard</a>
                <a href="logout" class="btn"><img src="./assets/images/Logout.svg" alt=""> Logout</a>
            <?php endif; ?>
          </div>

        </div>
        <!--<h3>Donate and fuel a child’s future with education</h3>-->
        <h3><?= htmlspecialchars(cms_page_field($cmsDonatePage, 'title', 'Be part of India’s rise through community-driven rural transformation')) ?></h3>
        <?php if ($cmsDonateIntro !== ''): ?>
          <div class="donate-intro"><?= $cmsDonateIntro ?></div>
        <?php endif; ?>

        <div class="getform">
          <form action="" method="POST">
            <div class="row">
              <div class="col-md-12 group-from">
                <label>Choose your cause</label>
                <?php
                  // Session ko read karo — overwrite mat karo
                    
                    $selected = $_SESSION['selected_cause'] ?? '';
                ?>
                <!--<select class="form-select form-control" aria-label="Default select example">
                    <option value="1">Education</option>
                    <option value="2">Health</option>
                    <option value="3">Economic Development</option>
                    <option value="4">Water, Sanitation & Green Initiatives</option>
                </select>-->
                <select class="form-select form-control" name="cause" aria-label="Default select example">
                    <option value="1" <?= ($selected == 1) ? 'selected' : '' ?>>Education</option>
                    <option value="2" <?= ($selected == 2) ? 'selected' : '' ?>>Health</option>
                    <option value="3" <?= ($selected == 3) ? 'selected' : '' ?>>Economic Development</option>
                    <option value="4" <?= ($selected == 4) ? 'selected' : '' ?>>Water, Sanitation & Green Initiatives</option>
                     <option value="5" <?= ($selected == 5) ? 'selected' : '' ?>>Swades Dream Village</option>  
                </select>
              </div>
            </div>

            <div class="tabs-werrap">
              <div class="row">
                <div class="col-md-12 group-from">
                  <label>Choose a donation frequency</label>

                  <div class="give-tabs group-from">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                          type="button" role="tab" aria-controls="pills-home" aria-selected="true">Give one
                          time</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                          data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                          aria-selected="false">Give Monthly <i class="fas fa-heart"></i></button>
                      </li>
                    </ul>
                  </div>

                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                      <div class="amountlist">
                        <div class="row">
                          <div class="col-md-12 group-from">
                            <label>Choose an amount</label>
                            <div class="amountdlf">
                              <div class="amount-option">
                                <input type="radio" name="donation_amount_onetime" id="amt_1k" value="1000">
                                <label for="amt_1k">₹1000</label>
                              </div>
                              <div class="amount-option">
                                <input type="radio" name="donation_amount_onetime" id="amt_2k" value="2000">
                                <label for="amt_2k">₹2000</label>
                              </div>
                              <div class="amount-option">
                                <input type="radio" name="donation_amount_onetime" id="amt_3k" value="3000">
                                <label for="amt_3k">₹3000</label>
                              </div>
                              <div class="amount-option">
                                <input type="radio" name="donation_amount_onetime" id="amt_4k" value="4000">
                                <label for="amt_4k">₹4000</label>
                              </div>
                              <div class="amount-option">
                                <input type="radio" name="donation_amount_onetime" id="amt_5k" value="5000">
                                <label for="amt_5k">₹5000</label>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-12 group-from">
                              <input type="hidden" name="donate_amount" value="0">	
                            <input type="text" class="form-control" id="other_amount" placeholder="OTHER AMOUNT" oninput="checkAmt()" onclick="otherAmount()">
                            <span class="wer-input">INR</span>
                             <!-- Error message -->
   <div id="amount-error" class="amount-error">
<i class="fa-solid fa-circle-exclamation"></i>
   Request you to sponsor for a minimum of <strong>INR 500</strong>, as any lower contribution is unviable due to processing costs.
</div>
                          </div>

                          <div class="col-md-12 group-from">
                            <div class="submit-btn">
                              <!--<button type="button" class="donate btn">Donate </button>-->
                              
                              <!--<button type="button" class="donate btn" data-bs-toggle="modal"-->
                              <!--  data-bs-target="#staticBackdrop">Donate <i class="fas fa-heart"></i></button>-->
                              <button type="button" class="donate btn" onclick="validateDonationAmount()">   Donate <i clas="fas fa-heart"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                      aria-labelledby="pills-profile-tab">
                      <div class="amountlist">
                        <div class="row">
                          <div class="col-md-12 group-from">
                            <label>Choose an amount</label>
                            <div class="amountdlf">
                              <div class="amount-option">
                                <input type="radio" name="donate_amount_m" id="amt_500_m" value="500">
                                <label for="amt_500_m">₹500</label>
                              </div>
                              <div class="amount-option">
                                <input type="radio" name="donate_amount_m" id="amt_1000_m" value="1000">
                                <label for="amt_1000_m">₹1000</label>
                              </div>
                              <div class="amount-option">
                                <input type="radio" name="donate_amount_m" id="amt_1500_m" value="1500">
                                <label for="amt_1500_m">₹1500</label>
                              </div>
                              <div class="amount-option">
                                <input type="radio" name="donate_amount_m" id="amt_2000_m" value="2000">
                                <label for="amt_2000_m">₹2000</label>
                              </div>
                              <div class="amount-option">
                                <input type="radio" name="donate_amount_m" id="amt_2500_m" value="2500">
                                <label for="amt_2500_m">₹2500</label>
                              </div>
                            </div>
                          </div>

                          <!--<div class="col-md-12 group-from">
                            <input type="text" class="form-control" placeholder="Other Amount">
                            <span class="wer-input">INR</span>
                          </div>-->

                          <div class="col-md-12 group-from">
                            <div class="submit-btn">
                                <input type="hidden" name="referrer_url" id="referrer_url" value="<?php echo urlencode("https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);?>">
                                <input type="hidden" name="ip_address" id="ip_address" value="<?php echo $_SERVER['REMOTE_ADDR'];?>">
                              <button type="button" class="donate btn" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop" id="pay_now_rz" onclick="amountSet()">Donate <i class="fas fa-heart"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

          </form>
        </div>
        <p class="requiredtext">The donor is required to fill in their Full Name, Address and PAN number to claim tax
          exemption, as per
          the Indian Income Tax Department’s directives. Your donation will add up to the pool of donations that
          will help students finish secondary school</p>
      </div>
    </div><!---left-panel-->

    <div class="right-panel">
      <!--<div class="owl-carouselowl-theme donateslider">-->
      <div class="owl-carouselowl-theme">
        <div class="supportimg" style="background-image: url(./assets/images/donate/donate-img.jpg);">
        </div>
      </div>
    </div><!--right-panel-->
  </div><!----wrapper-section-->




  <footer class="footer mobile">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="ftr-logo">
            <a href="#"><img src="./assets/images/ftr_Logo.svg" alt=""></a>
            <p>We create lasting change for people and the planet through grassroots action.</p>
          </div>
          <div class="social-icon desktop">
            <a href="#"><img src="./assets/images/facebook.svg" alt=""></a>
            <a href="#"><img src="./assets/images/Twitter.svg" alt=""></a>
            <a href="#"><img src="./assets/images/instagram.svg" alt=""></a>
            <a href="#"><img src="./assets/images/linkedIn.svg" alt=""></a>
          </div>

        </div>
        <div class="col-md-6">
          <div class="ftr-werp">
            <div class="ftr-menu">
              <h5>Swades Foundation</h5>
              <ul>
                <li><a href="about-us">Who we are</a></li>
                <li><a href="impact">Our Impact</a></li>
                <li><a href="dream-village">Swades Dream Village</a></li>
                <li><a href="careers">Careers</a></li>
                <li><a href="Donate">Donate</a></li>
              </ul>
            </div>


            <div class="ftr-menu">
              <h5>Our Work</h5>
              <ul>
                <li><a href="work-water-sanitation">Water, Sanitation & Green Initiatives</a></li>
                <li><a href="work-health">Health</a></li>
                <li><a href="work-education">Education</a></li>
                <li><a href="Work-economic-Development">Economic Development</a></li>
              </ul>
            </div>

            <div class="ftr-menu">
              <h5>Other Pages</h5>
              <ul>
                <li><a href="https://nexgenclassy.in/swadesnew/media-publications#newsmedia">News and Media</a></li>
                <li><a href="https://nexgenclassy.in/swadesnew/media-publications#blogs">Blogs</a></li>
                <li><a href="https://nexgenclassy.in/swadesnew/media-publications#financials">Financial Reports</a></li>
                <li><a href="contact-us">Contact</a></li>
              </ul>
            </div>
          </div><!--ftr-werp-->
        </div>
      </div>

      <div class="social-icon mobile">
        <a href="https://www.facebook.com/SwadesFoundation"><img src="./assets/images/facebook.svg" alt=""></a>
        <a href="https://twitter.com/WeAreSwades"><img src="./assets/images/x.png" alt=""></a>
        <a href="https://instagram.com/swadesfoundation?igshid=YmMyMTA2M2Y="><img src="./assets/images/instagram.svg" alt=""></a>
        <a href="https://in.linkedin.com/company/swadesfoundation"><img src="./assets/images/linkedIn.svg" alt=""></a>
      </div>

      <div class="ftr-menu mobile">
        <ul>
          <li><a href="privacy-policy">Privacy policy</a></li>
          <li><a href="terms-conditions">Terms & Condition</a></li>
          <li> <a href="refund-policy">Refund policy</a></li>
          <li><a href="posh-policy">POSH policy</a></li>
        </ul>
      </div>

      <div class="copyright">
        <div class="row">
          <div class="col-md-6">
            <p>Copyright 2025 © Swades Foundation</p>
          </div>
          <div class="col-md-6">
            <div class="privacy-dlf">
              <a href="#">Privacy policy</a>
              <a href="#">Terms & Condition</a>
              <a href="#">Cookies policy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!--footer-->


<!--- One Time Modal--->
<!--<div class="modal detailspopup fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modaltitle">Please fill the mandatory details</h5>
          <button type="button" class="btnclose" data-bs-dismiss="modal" aria-label="Close"> <img
              src="./assets/images/donate/crossicon.svg" alt=""></button>
        </div>
        <div class="modal-body">
          <div class="getform">
            <form action="POST">
              <input type="hidden" name="donation_type" id="donation_type" value="Monthly">
              <div class="row">
                <div class="col-md-6 group-from">
                  <label for="">Your Name</label>
                  <input type="text" name="donar_name" id="donar_name" class="form-control" placeholder="Ritesh Deshmukh">
                </div>
                <div class="col-md-6 group-from">
                  <label for="">PAN Number</label>
                  <input type="text" name="donar_pan" id="donar_pan" class="form-control" placeholder="AFZPK7190K">
                </div>
                <div class="col-md-6 group-from">
                  <label for="">E-mail ID</label>
                  <input type="text" name="donar_email" id="donar_email" class="form-control" placeholder="9213441532">
                </div>
                <div class="col-md-6 group-from">
                  <label for="">Your Phone Number</label>
                  <input type="text" name="donar_no" id="donar_no" class="form-control" placeholder="Ritesh Deshmukh">
                </div>
                <div class="col-md-6 group-from">
                  <label for="">Age</label>
                  <input type="text" name="donar_age" id="donar_age" class="form-control" placeholder="56">
                </div>

                <div class="col-md-6 group-from">
                  <label for="">City</label>
                  <input type="text" name="donar_city" id="donar_city" class="form-control" placeholder="New Delhi">
                </div>
                <div class="col-md-12 group-from">
                  <label for="">How did you hear about us?</label>
                  <select class="form-select form-control" name="donar_hear_us" id="donar_hear_us" aria-label="Default select example">
                    <option value="N/A">--Select--</option>
                    <option value="Swades Website">Swades Website</option>
                    <option value="Social Media">Social Media (Facebook, Instagram, LinkedIn, Twitter/X, YourTube)</option>
                    <option value="Word of Mouth">Word of Mouth / Friend or Family</option>
                    <option value="Corporate Partner">Corporate Partner / CSR Initiative</option>
                    <option value="Fundraising Event">Fundraising Event / NGO Fair</option>
                    <option value="News">News / Media Coverage</option>
                    <option value="Google Search">Google Search / Online Articles / Blogs</option>
                    <option value="Swades Volunteer">Swades Volunteer / Employee</option>
                  </select>
                </div>
                <div class="col-md-12">
                    <p style="letter-spacing: 0px;">As per the Indian Income Tax Department’s rules, a donor is required to add their address and PAN number in case they wish to receive the 80G tax-exemption certificate</p>
                </div>
                <div class="col-md-8">
                  <div class="submit-btn">
                    <button type="button" class="donate btn">Donate <i class="fas fa-heart"></i></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>-->

  <!-- Monthly Modal -->
  <div class="modal detailspopup fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modaltitle">Please fill the mandatory details</h5>
          <button type="button" class="btnclose" data-bs-dismiss="modal" aria-label="Close"> <img
              src="./assets/images/donate/crossicon.svg" alt=""></button>
        </div>
        <div class="modal-body">
          <div class="getform">
            <form method="POST">
              <input type="hidden" name="donation_type" id="donation_type" value="Monthly">
              <div class="row">
                <div class="col-md-6 group-from">
                  <label for="">Your Name</label>
                  <input type="text" name="donar_name" id="donar_name" class="form-control" placeholder="Ritesh Deshmukh">
                </div>
                <div class="col-md-6 group-from">
                  <label for="">PAN Number</label>
                  <input type="text" name="donar_pan" id="donar_pan" class="form-control" placeholder="AFZPK7190K">
                </div>
                <div class="col-md-6 group-from">
                  <label for="">E-mail ID</label>
                  <input type="text" name="donar_email" id="donar_email" class="form-control" placeholder="9213441532">
                </div>
                <div class="col-md-6 group-from">
                  <label for="">Your Phone Number</label>
                  <input type="text" name="donar_no" id="donar_no" class="form-control" placeholder="Ritesh Deshmukh">
                </div>
                <div class="col-md-6 group-from">
                  <label for="">Age</label>
                  <input type="text" name="donar_age" id="donar_age" class="form-control" placeholder="56">
                </div>

                <div class="col-md-6 group-from">
                  <label for="">City</label>
                  <input type="text" name="donar_city" id="donar_city" class="form-control" placeholder="New Delhi">
                </div>
                <div class="col-md-12 group-from">
                  <label for="">How did you hear about us?</label>
                  <select class="form-select form-control" name="donar_hear_us" id="donar_hear_us" aria-label="Default select example">
                    <option value="N/A">--Select--</option>
                    <option value="Swades Website">Swades Website</option>
                    <option value="Social Media">Social Media (Facebook, Instagram, LinkedIn, Twitter/X, YourTube)</option>
                    <option value="Word of Mouth">Word of Mouth / Friend or Family</option>
                    <option value="Corporate Partner">Corporate Partner / CSR Initiative</option>
                    <option value="Fundraising Event">Fundraising Event / NGO Fair</option>
                    <option value="News">News / Media Coverage</option>
                    <option value="Google Search">Google Search / Online Articles / Blogs</option>
                    <option value="Swades Volunteer">Swades Volunteer / Employee</option>
                  </select>
                </div>
                <div class="col-md-12">
                    <p style="letter-spacing: 0px;">As per the Indian Income Tax Department’s rules, a donor is required to add their address and PAN number in case they wish to receive the 80G tax-exemption certificate</p>
                </div>
                <div class="col-md-8">
                  <div class="submit-btn">
                    <button type="button" class="donate btn" id="pay_now_rz" onclick="amountSet()">Donate <i class="fas fa-heart"></i></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>
  <script>
   jQuery(".nav-item").each(function () {
      var $item = jQuery(this);
      var $toggle = $item.find(".toggle-dropdown");
      var $link = $item.find("> a");
    
      if ($toggle.length) {
        function toggleMenu(e) {
          e.preventDefault();
    
          // sabse pehle dusre sab close kar do
          jQuery(".nav-item").not($item).removeClass("open")
            .find(".toggle-dropdown").removeClass("open");
    
          // current open/close
          $item.toggleClass("open");
          $toggle.toggleClass("open");
        }
    
   
        $link.on("click", function (e) {
          if (window.innerWidth <= 991) { // mobile/tablet breakpoint
            toggleMenu(e); 
          }
          // warna desktop pe link normal chalega
        });
    
        // icon par click hamesha submenu open kare
        $toggle.on("click", toggleMenu);
      }
    });
  </script>
  <!-- Razorpay Checkout -->
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <!--<script src="./assets/js/payment.js"></script>-->
  <script>
  
  
  function validateDonationAmount() {

    let amount = 0;

    // Check selected one-time amount
    let selectedAmount = document.querySelector(
        'input[name="donation_amount_onetime"]:checked'
    );

    if (selectedAmount) {
        amount = parseInt(selectedAmount.value) || 0;
    }

    // If user entered a custom amount, use that instead
    let otherAmount = document.getElementById("other_amount");

    if (otherAmount && otherAmount.value.trim() !== "") {
        amount = parseInt(otherAmount.value) || 0;
    }

    // Minimum donation validation
    if (amount < 500) {
        document.getElementById("amount-error").style.display = "block";
        return false;
    }

    // Hide error
    document.getElementById("amount-error").style.display = "none";

    // Open donor details modal
    var modal = new bootstrap.Modal(
        document.getElementById("staticBackdrop")
    );

    modal.show();
}

function amountSet() {

    let amount = 0;

    // Check one-time donation amount
    var donation = document.querySelector(
        'input[name="donation_amount_onetime"]:checked'
    );

    if (donation && parseInt(donation.value) > 0) {
        amount = parseInt(donation.value);
    }

    // Check custom amount
    var otherAmt = document.getElementById("other_amount");

    if (otherAmt && otherAmt.value.trim() !== "") {
        amount = parseInt(otherAmt.value) || 0;
    }

    // Check monthly donation
    var checkMonthly = document.querySelector(
        'input[name="donate_amount_m"]:checked'
    );

    if (checkMonthly && parseInt(checkMonthly.value) > 0) {

        amount = parseInt(checkMonthly.value);

        createSubscription(amount);

    } else {

        createOrder(amount);

    }

   
}



// For Onetime Donation
function createOrder(amount) {
  jQuery("#pay_now_rz").attr("disabled", true);
  let order_id = "order";
  let name = jQuery("#donar_name").val();
  let pan = jQuery("#donar_pan").val();
  let email = jQuery("#donar_email").val();
  let mob_number = jQuery("#donar_no").val();  
  let age = jQuery("#donar_age").val();
  let city = jQuery("#donar_city").val();
  let hear_us = jQuery("#donar_hear_us").val();  
  let referrer_url = jQuery("#referrer_url").val();
  let ip_address = jQuery("#ip_address").val();
  
  let page = "FOS";
  jQuery.ajax({
    type: "post",
    url: "donation/apis/create_order.php",
    data: "amount=" + amount +
          "&name=" +
          name +
          "&phone=" +
          mob_number +
          "&pan=" +
          pan +
          "&email=" +
          email +
          "&age=" + 
          age +
          "&city=" +
          city +
          "&donar_hear=" +
          hear_us +
          "&page=" + page+
		  "&referrer_url=" + referrer_url+
		  "&ip_address=" + ip_address,
    success: function (result) {
     
      order_id = result;
      payment(amount, order_id);
    },
  });
}

function payment(amount, orderId) {
  let name = jQuery("#donar_name").val();
  let pan = jQuery("#donar_pan").val();
  let email = jQuery("#donar_email").val();
  let mob_number = jQuery("#donar_no").val();
  
  let age = jQuery("#donar_age").val();
  let city = jQuery("#donar_city").val();
  let hear_us = jQuery("#donar_hear_us").val();
  let referrer_url = jQuery("#referrer_url").val();
  let ip_address = jQuery("#ip_address").val();
  
  let page = "FOS";
    
  if(age == undefined && city == undefined && hear_us == undefined){
      age = "N/A";
      city = "N/A";
      hear_us = "N/A";
      
      //page = "CAMP";
  }
 

  var options = {
    key: "rzp_live_81kJM09YvTAHgb", // Enter the Key ID generated from the Dashboard
    amount: amount * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    currency: "INR",
    name: "Swades Foundation",
    description: "Donation of " + amount,
    image: "https://swadesfoundation.org/dream-village/images/logo.png",
    order_id: orderId,
    customer: {
      name: name,
      contact: mob_number,
      email: email,
    },

    handler: function (response) {
      jQuery.ajax({
        type: "post",
        url: "donation/payment_process.php",
        data:
          "payment_id=" +
          response.razorpay_payment_id +
          "&amt=" +
          amount +
          "&name=" +
          name +
          "&phone=" +
          mob_number +
          "&pan=" +
          pan +
          "&email=" +
          email +
          "&age=" + 
          age +
          "&city=" +
          city +
          "&donar_hear=" +
          hear_us +
          "&page=" + page+
		  "&referrer_url=" + referrer_url+
		  "&ip_address=" + ip_address,
        success: function (result) {
          jQuery("#pay_now_rz").attr("disabled", false);
          window.location.href =
            "thank-you?payment_id=" + response.razorpay_payment_id;
        },
      });
    },
  };

  var rzp1 = new Razorpay(options);

  if (name != "" && pan != "" && email != "" && mob_number != "") {
    rzp1.open();
  } else {
    alert("Please Fill All The Mandatory Details Before Submit!");
  }
}

// For Monthly Donation
function createSubscription(amount) {
  let name = jQuery("#donar_name").val();
  let pan = jQuery("#donar_pan").val();
  let email = jQuery("#donar_email").val();
  let mob_number = jQuery("#donar_no").val();
  
 let age = jQuery("#donar_age").val();
  let city = jQuery("#donar_city").val();
  let hear_us = jQuery("#donar_hear_us").val();
  
  let referrer_url = jQuery("#referrer_url").val();
  let ip_address = jQuery("#ip_address").val();
  
  let page = "FOS";
  
  let sub_id = "";
  let plan_id = "";

  if (amount == 500) {
    plan_id = "plan_KE7yqqbNRnWdA8";
  } else if (amount == 650) {
    plan_id = "plan_KE7zKVyn8Wtk6J";
  } else if (amount == 750) {
    plan_id = "plan_KE7zr8XdOyhsfz";
  } else if (amount == 1000) {
    plan_id = "plan_KE80KEvpJH3GUU";
  } else if (amount == 1500) {
    plan_id = "plan_KE80i7BYKVTfez";
  } else if (amount == 2000) {
    plan_id = "plan_KE811kN9tvaIIU";
  }

 if (
    name != "" &&
    pan != "" &&
    email != "" &&
    mob_number != ""
    ) {
      $.ajax({
        type: "post",
        url: "donation/apis/create_subscription.php",
        data: "plan_id=" + plan_id +
		  "&amount=" +
          amount +
          "&name=" +
          name +
          "&phone=" +
          mob_number +
          "&pan=" +
          pan +
          "&email=" +
          email +
          "&age=" + 
          age +
          "&city=" +
          city +
          "&donar_hear=" +
          hear_us +
          "&page=" + page+
		  "&referrer_url=" + referrer_url+
		  "&ip_address=" + ip_address,
        success: function (response) {

          sub_id = response;
          buySubscription(sub_id, amount);
        },
      });
  } else {
    alert("Please Fill All The Details Before Submit!");
  }
}

function buySubscription(sub_id, amount) {
  let name = jQuery("#donar_name").val();
  let pan = jQuery("#donar_pan").val();
  let email = jQuery("#donar_email").val();
  let mob_number = jQuery("#donar_no").val();
  
  let age = jQuery("#donar_age").val();
  let city = jQuery("#donar_city").val();
  let hear_us = jQuery("#donar_hear_us").val();
  let referrer_url = jQuery("#referrer_url").val();
  let ip_address = jQuery("#ip_address").val();
  
  let page = "FOS";
    
  if(age == undefined && city == undefined && hear_us == undefined){
      age = "N/A";
      city = "N/A";
      hear_us = "N/A";
      
      //page = "CAMP";
  }
  
 /*  else if(hear_us == "Facebook" || hear_us == "LinkedIn" || hear_us == "Instagram" || hear_us == "Twitter" || hear_us == "Feet on Street"){
      page = "WEB";
  }else if(hear_us == "Social Media" || hear_us == "Swadesh Representative" || hear_us == "Google Ad" || hear_us == "Email" || hear_us == "Radio"|| hear_us == "Print"|| hear_us == "Word of Mouth"){
      page = "FOS";
  } */

  var options = {
    key: "rzp_live_81kJM09YvTAHgb",
    subscription_id: sub_id,
    name: "Swades Foundation",
    description: "Monthly Donation To Swades Foundation",
    image: "https://swadesfoundation.org/dream-village/images/logo.png",
    handler: function (response) {
      
      jQuery.ajax({
        type: "post",
        url: "donation/payment_process.php",
        data:
            "payment_id=" +
            response.razorpay_payment_id +
            "&amt=" +
            amount +
            "&name=" +
            name1 +
            "&phone=" +
            mob_number1 +
            "&pan=" +
            pan1 +
            "&email=" +
            email1 +
            "&age=" +
            age1 +
            "&city=" +
            city1 +
            "&donar_hear=" +
            hear_us1 +
            "&page=" + page +
            "&sub_id=" + sub_id+
			"&referrer_url=" + referrer_url+
		  "&ip_address=" + ip_address,
        success: function (result) {
          window.location.href =
            "thank-you.php?payment_id=" + response.razorpay_payment_id;
        },
      });
    },
  };

  var rzp1 = new Razorpay(options);
  rzp1.open();
}

  </script>
  
  <script>
    window.onload = function() {
      let $containers = $('.amount');
      $containers.find(':radio').on('change', e => {
        $containers.removeClass('active'); // remove from all containers
        document.getElementById('other_amount').value = "";
        $(e.target).closest('.amount').addClass('active'); // add class to current
      });
    }

    
    function otherAmount() {

    // Remove active state from amount containers
    let $containers = $('.amount');
    $containers.removeClass('active');

    // Clear selected one-time amount
    var donationAmounts = document.querySelectorAll(
        'input[name="donation_amount_onetime"]'
    );

    donationAmounts.forEach(function (donation) {
        donation.checked = false;
    });

    // Focus custom amount
    var otherAmount = document.getElementById("other_amount");

    if (otherAmount) {
        otherAmount.focus();
    }
}



function checkAmt() {

    let input = document.getElementById("other_amount");
    let error = document.getElementById("amount-error");

    let amount = parseInt(input.value) || 0;

    if (amount > 0 && amount < 500) {
        error.style.display = "block";
    } else {
        error.style.display = "none";
    }
}


    function tabFields() {
      var checkRadio = document.querySelector('input[name="donate_amount"]:checked');
      if (checkRadio == null) {
        if (document.getElementById('other_amount').value != '') {
          $("#tab-fields").fadeIn('slow').siblings(".tab-box").hide();
        } else {
          alert("Please Select Or Enter the amount to continue!");
            return false;
          //document.getElementById('next-field').setAttribute("disabled", "disabled");
        }
      } else {
        $("#tab-fields").fadeIn('slow').siblings(".tab-box").hide();
      }
    }

    function tabFieldsM() {
      var checkRadio = document.querySelector('input[name="donate_amount_m"]:checked');
      if (checkRadio == null) {
        alert("Please Select Or Enter the amount to continue!");
        return false;
       // document.getElementById('next-field_m').setAttribute("disabled", "disabled");
      } else {
        $("#tab-fields").fadeIn('slow').siblings(".tab-box").hide();
      }
    }
  </script>
</body>
</html>
