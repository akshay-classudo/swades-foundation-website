<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
require_once __DIR__ . '/include/cms.php';
$cmsSsePage = cms_get_page('sse');
$cmsSseIntro = cms_page_section($cmsSsePage, 'intro', '');
$cmsSseIntroFallback = 'Social Stock Exchange regulated by SEBI is a pioneering effort that brings together individuals and social impact organisations towards a common goal of nation building.';
$cmsSseDocuments = cms_get_documents('nse_sse');
$cmsSsePolicies = array_values(array_filter($cmsSseDocuments, fn ($document) => !in_array($document['label'], ['Fundraising Document', 'SEBI Regular Compliance Submission'], true)));
?>
<!DOCTYPE html>
<html>

<head>
  <title><?= htmlspecialchars(cms_page_field($cmsSsePage, 'meta_title', 'Swades Foundation NSE SSE')) ?></title>
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

  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5BR3T5F');</script>
  <!-- End Google Tag Manager-->

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YFG7G32BG5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-YFG7G32BG5');
  </script>

  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="facebook-domain-verification" content="aod2id14o8ub2c0dkp4tyksrlymfff" />
  <meta name="p:domain_verify" content="1ed9cb39617f70c21aa292570c39c319" />
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5BR3T5F');</script>


  <script>!function (f, b, e, v, n, t, s) {
      if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
      n.queue = []; t = b.createElement(e); t.async = !0;
      t.src = v; s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2999132110393698');
    fbq('track', 'PageView');</script> <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=2999132110393698&ev=PageView&noscript=1" /></noscript>

  <style>
    @media (max-width: 425.8px) {
      .report-item {
        display: block !important;
      }
    }
    .legacy-sse-reports { display: none !important; }
  </style>
  <style>
    .ensure-cnt p {
      height: auto;
    }

    .impact-listing {
      background: #F9F9F9;
      padding: 60px 0px;
      position: relative;
      overflow: hidden;
    }

    .impact-card {
      padding: 20px;
    }

    .impact-card img {
      /* height: 70px; */
      width: 100%;
      border-radius: 20px;
      margin-bottom: 10px
    }

    .impact-card p {
      font-size: 16px;
      font-weight: 300;
      line-height: 1.2;
      letter-spacing: -0.48px;
      margin-bottom: 0;
    }

    .impact-card h5 {
      margin-bottom: 2px;
      margin-top: 10px;
      font-weight: 600;
      letter-spacing: normal;
      font-size: 25px;
    }

    .modal-loader {
      position: relative;
      margin-bottom: -20px;
      z-index: 1;
    }

    .modal-loader .more-btn .btn {
      font-weight: 600;
      font-size: 16px;
      padding: 9px 50px;
      letter-spacing: normal;
    }

    .ensure-werp {
      position: relative;
      overflow: hidden;
      padding: 0 15px;
    }

    .ensure-werp img {
      height: auto;
    }

    .ensure-cnt {
      padding: 0 20px;
    }

    .custom-form-modal .form-label {
      letter-spacing: normal;
    }

    .custom-form-modal .modal-title {
      letter-spacing: normal;
      font-weight: 600;
      font-size: 26px !important;
    }

    .custom-form-modal .modal-content {
      border-radius: 20px;
      padding: 15px;
      border: 1px solid grey;
    }

    .custom-form-modal .modal-content .form-control {
      padding: 10px 12px;
      background: #F9F9F9;
      box-shadow: none !important;
      outline: none !important;
      border: 1px solid #d3d0d0;
    }

    .modal-dark-btn {
      background: #222;
      color: white;
      width: 100%;
      border-radius: 20px;
      line-height: 1.8;
      font-size: 14px;
    }

    .modal-dark-btn:hover,
    .modal-dark-btn:focus,
    .modal-dark-btn:focus-within{
      background: black;
      color: white;
    }
    .accordion-card h6{letter-spacing: normal;}
  </style>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BR3T5F" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header id="header" class="home-header ourteam-header">
    <div class="container">
      <div class="header-menu">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="index.php">
            <img src="./assets/images/inner-page-logo.svg" alt="">
          </a>

          <div class="nav-container collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav innermenu  navmenu mx-auto">
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
        <img src="./assets/images/NSE/logoNSE.svg" alt="" class="nselogo">
        <h3>Swades Foundation is preparing for its second listing on the NSE Social Stock Exchange (SSE)</h3>

        <div class="buttonDocument">
          <a href="<?= htmlspecialchars($cmsSseDocuments[0]['file_url'] ?? './assets/pdf/Swades Foundation_(July 30 2024)_Final FRD-Filing _240801_155141.pdf') ?>" class="btn"
            target="_blank">Download Fundraising Document</a>
          <a href="<?= htmlspecialchars($cmsSseDocuments[1]['file_url'] ?? './assets/pdf/SwadesFoundation-S1(ZCZP)-Statement-of-utilisation-of-funds-Q-2-2425.pdf') ?>"
            class="btn compliance" target="_blank">SEBI Regular Compliance Submission</a>
        </div>
      </div>
    </div>
  </div><!---home-section-->

  <div class="Empowering-section">
    <div class="container">
      <div class="heading-hd text-center through">
        <h2><?= htmlspecialchars(cms_page_field($cmsSsePage, 'subtitle', 'Empowering change through transparent funding')) ?></h2>
        <?php if ($cmsSseIntro !== ''): ?>
          <?= $cmsSseIntro ?>
        <?php else: ?>
          <p><?= htmlspecialchars($cmsSseIntroFallback, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
      </div>

      <div class="heading-hd text-center through">
        <h2>What causes can I support?</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
          <div class="gridlayer3 Livelihoods">
            <div class="contentwrap">
              <span class="placement"><img src="./assets/images/impact/icon2.svg" alt=""></span>
              <h6>Safe Sanitation Access</h6>
              <p>Creating open defecation free communities (ODF) by providing households with individual toilets,
                thereby
                restoring their dignity, health and hygiene.</p>
            </div>
            <div class="contentwrap">
              <span class="placement"><img src="./assets/images/impact/icon3.svg" alt=""></span>
              <h6>Rural Education</h6>
              <p>Empowering rural students to pursue a better future – by providing Mass scholarship (for class XI &
                XII)
                and Excellence Scholarship (enabling higher education, beyond class XII).</p>
            </div>
            <div class="contentwrap">
              <span class="placement"><img src="./assets/images/impact/icon4.svg" alt=""></span>
              <h6>Empowering Employability</h6>
              <p>Equipping college graduates with industry-specific skill development and rural youth with vocational
                skills
                training for self-employment /formal placement. This will ensure a sustainable income (ranging between
                INR
                80-120k p.a. after the 1st year).</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!---impact-section-->

  <div class="proposed-section">
    <div class="container">
      <div class="heading-hd text-center">
        <h2><span>Proposed Impact of the Project</span></h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
          <div class="gridlayer3">
            <div class="ensure-werp">
              <img src="./assets/images/sse/sse-impact-1.jpg" alt="">
              <div class="ensure-cnt">
                <p>Enable 4,000 household to lead dignified lives with individual toilets at home</p>
              </div>
            </div><!---ensure-werp-->

            <div class="ensure-werp">
              <img src="./assets/images/sse/sse-impact-2.jpg" alt="">
              <div class="ensure-cnt">
                <p>Support 1700 students to pursue quality education via scholarship</p>
              </div>
            </div><!---ensure-werp-->

            <div class="ensure-werp">
              <img src="./assets/images/sse/sse-impact-3.jpg" alt="">
              <div class="ensure-cnt">
                <p>Empower 1800 youth to earn a dignified and sustainable livelihood with skill training </p>
              </div>
            </div><!---ensure-werp-->

          </div>
        </div>
      </div>
    </div>
  </div><!---proposed-section-->

  <div class="impact-listing">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="heading-hd text-center">
            <h2 class="Policies">Impact of first listing</h2>
          </div>
        </div>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="impact-card text-center">
            <img src="./assets/images/sse/Goat.jpeg" alt="">
            <h5>1200+ households</h5>
            <p>empowered with sustainable
              livelihoods through livestock
              assets (Goat Rearing)</p>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="impact-card text-center">
            <img src="./assets/images/sse/Education.jpeg" alt="">
            <h5>600+ students</h5>
            <p>supported to pursue quality education via scholarships</p>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="impact-card text-center">
            <img src="./assets/images/sse/Skilling.jpeg" alt="">
            <h5>1,050 youth</h5>
            <p>empowered to earn dignified and sustainable livelihoods with skill training</p>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="impact-card text-center">
            <img src="./assets/images/sse/Toilet.jpeg" alt="">
            <h5>1,000+ households</h5>
            <p>received individual toilets at home restoring dignity and safety of the families </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="openings-section">
    <div class="container">
      <div class="heading-hd text-center">
        <h2 class="Policies">Policies for Public Disclosure under SSE</h2>
      </div>

      <?php if ($cmsSsePolicies): ?>
      <div class="Allreports">
        <ul class="report-list">
          <?php foreach ($cmsSsePolicies as $document): ?>
            <li class="report-item">
              <span class="report-title"><?= htmlspecialchars($document['label']) ?></span>
              <a href="<?= htmlspecialchars($document['file_url']) ?>" target="_blank" class="download-link">Download PDF <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>
      <div class="Allreports<?= $cmsSsePolicies ? ' legacy-sse-reports' : '' ?>">

        <ul class="report-list">
          <li class="report-item">
            <span class="report-title">Whistle Blower Policy</span>

            <a href="https://swadesfoundation.org/nse-sse/Swades_Whistle-Blower-Policy.pdf" target="_blank"
              class="download-link">Download PDF
              <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
            </a>
          </li>

          <li class="report-item">
            <span class="report-title">Policy for Determination the Materiality of Events and Information</span>

            <a href="https://swadesfoundation.org/nse-sse/POLICY-FOR-DETERMINATION-OF-MATERIALITY-OF-EVENTS-AND-INFORMATION.pdf"
              target="_blank" class="download-link">Download PDF
              <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
            </a>
          </li>

          <li class="report-item">
            <span class="report-title">Anti-Bribery and Anti-Corruption Policy</span>

            <a href="https://swadesfoundation.org/nse-sse/Swades_ANTI-BRIBERY-AND-ANTI-CORRUPTION-POLICY.pdf"
              class="download-link">Download PDF
              <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
            </a>
          </li>

          <li class="report-item">
            <span class="report-title">Supplier Conduct and Work Rules</span>

            <a href="https://swadesfoundation.org/nse-sse/Swades_supplier-Conduct-and-Work-Rules-Policy.pdf"
              class="download-link">Download PDF
              <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
            </a>
          </li>

          <li class="report-item">
            <span class="report-title">Statement of Utilization Filed in SSE NSE Portal ( Q-3 FY 2024-25 )</span>

            <a href="https://swadesfoundation.org/nse-sse/Statement-of-utilisation-of-funds-for-the-quarter-ended-December-31-202.pdf"
              class="download-link">Download PDF
              <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
            </a>
          </li>
        </ul>

      </div>


    </div>
  </div><!--Location & More-->

  <div class="modal-loader">
    <div class="containe">
      <div class="more-btn text-center mt-0">
        <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"> I'm Interested</button>
      </div>
    </div>
  </div>
  <div class="faqssection">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>Key Information</h2>
      </div>

      <div class="faqs-accordion">
        <div class="accordion" id="accordionExample2">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingcan">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecan"
                aria-expanded="true" aria-controls="collapsecan">
                Demat Account
              </button>
            </h2>
            <div id="collapsecan" class="accordion-collapse collapse show" aria-labelledby="headingcan"
              data-bs-parent="#accordionExample2">
              <div class="accordion-card">
                <p>Demat Account is a prerequisite for applying to the ZCZP instrument. Make sure you hold an active DP
                  account before you proceed for application.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Minimum Investment
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample2">
              <div class="accordion-card">
                <p>The minimum investment amount is ₹ 1000</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Swades Issue open & close dates
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample2">
              <div class="accordion-card">
                <p>To be announced soon!</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingsafety">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsesafety" aria-expanded="false" aria-controls="collapsesafety">
                Application Process
              </button>
            </h2>
            <div id="collapsesafety" class="accordion-collapse collapse" aria-labelledby="headingsafety"
              data-bs-parent="#accordionExample2">
              <div class="accordion-card">
                <h6>1. ASBA (via bank / SCSB / e-lPO platform)</h6> 
                    <p>ASBA = Application Supported by Blocked Amount
                    Your bank blocks the amount in your account until allotment.</br> <br>
                    Step-by-Step (ASBA):</br>
                    Step 1: Visit your bank's ASBA portal or the NSE's e-lPO platform.</br>
                    Step 2: Select the SSE Issue and fill the ASBA Application Form.</br>
                    Step 3: Ensure your bank account used is an ASBA-enabled SCSB account.</br>
                    Step 4: Submit the application online OR via your bank's designated branch.</br>
                    Step 5: Your bank (SCSB) will block the application amount in your bank account.</br>
                    Step 6: The SCSB uploads your bid details to the NSE bidding platform.</br>
                    Step 7: Once allotment is finalized, the blocked amount will be debited (if allotted) or released (if not allotted).</br><br>
                    Who can submit ASBA forms:</br>
                    - SCSBs (Self-Certified Syndicate Banks)</br>
                    - Designated intermediaries registered on the NSE's e-lPO platform (except for UPI-based retail investors)</p>
                    
                </br> 
                <h6>2. Physical / Offline Application</h6> 
                    <p>Step-by-step Physical / Offline Application Process (via Registrar to the Issue)</br>
                    Step-by-Step (Physica 1/0ffine):</br>
                    Step 1: Obtain the Physical Application Form from the issuer or Registrar.</br>
                    Step 2: Fill in all required details accurately (PAN, DP ID, quantity, bank details, etc.).</br>
                    Step 3: Make payment using: Cheque/Demand Draft, Or Electronic bank transfer to the Escrow Account</br>
                    Step 4: If paying via bank transfer, mention the UTR number on the form.</br>
                    Step 5: Submit the completed form directly to the Registrar before the Issue Closing Date.</br>
                    Step 6: Ensure the Registrar receives:</br>
                    Form + cheque/DD before Issue Closing Date, OR</br>
                    Form + confirmation that the transferred amount reached the Escrow Account before Issue Close (form must be received within 3 working days).</p>
                    </br> 
                    <h6>3. UPI Mechanism (for retail investors - up to ₹5,00,000)</h6> 
                    <p>UPI applies only to Category IV (Retail Individual Investors) for bids up to ₹5 lakh.</br><br>
                    Step-by-Step (UPI Mechanism):</br>
                    Step 1: Visit the NSE's e-IPO platform (app or web-based).</br>
                    Step 2: Select the SSE Issue and enter your details, including your UPI ID.</br>
                    Step 3: Submit your bid online.</br>
                    Step 4: NSE shares your bid and UPI ID with the Sponsor Bank.</br>
                    Step 5: Sponsor Bank sends you a UPI Mandate Request.</br>
                    Step 6: Approve the UPI mandate to block funds in your UPI-linked bank account.</br>
                    Step 7: Your application is considered valid once the mandate is successfully approved.</br>
                    Step 8: On allotment: Funds are debited (if allotted), Funds are released (if not allotted)</br>
                    Note:
                    <em>UPI-based applications are not submitted via physical forms.</em></p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingtypes">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsetypes" aria-expanded="false" aria-controls="collapsetypes">
                Contact Us
              </button>
            </h2>
            <div id="collapsetypes" class="accordion-collapse collapse" aria-labelledby="headingtypes"
              data-bs-parent="#accordionExample2">
              <div class="accordion-card">
                <p>
                  For any queries in the process please contact us at –
                  <br />
                  Call / Whatsapp – +91-9782100368 (Saral Purohit)
                  <br />
                  Email – info.sse@swadesfoundation.org
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div><!---faqssection-->

  <!-- Modal -->
  <div class="modal fade custom-form-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-bottom-0 pb-0">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Please fill the details</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
		<form id="submit_form_data" method="POST">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
              <div class="mb-3">
                <label for="userName" class="form-label">Your Name<sup>*</sup></label>
                <input type="text" name="userName" class="form-control" id="userName" placeholder="Enter Your Name" required>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="mb-3">
                <label for="mobile" class="form-label">Mobile Number<sup>*</sup></label>
                <input type="text" name="mobile" class="form-control" id="name="userName"" placeholder="Enter Mobile Number" required>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="mb-3">
                <label for="email" class="form-label">Email<sup>*</sup></label>
                <input type="email"  name="email" class="form-control" id="email" placeholder="Enter Your Email" required>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="mb-3">
                <label for="companyName" class="form-label">Company Name<sup>*</sup></label>
                <input type="text" name="companyName" class="form-control" id="companyName" placeholder="Enter Company Name" required>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="mb-3">
                <label for="donationAmt" class="form-label">Tentative Donation(in ₹)</label>
                <input type="text"  name="donationAmt" class="form-control" id="donationAmt" placeholder="Enter Amount" required>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="mb-3">
                <button class="btn modal-dark-btn" type="button" name="submit" onclick="saveForm();" data-bs-dismiss="modal">Submit</button>
              </div>
            </div>
          </div>
		  </form>
        </div>
      </div>
    </div>
  </div>

  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>
  
  <script type="text/javascript">
    function saveForm(){
		//$("#submit_form_data")
		let data=$("form#submit_form_data").serialize();
		$.ajax({
			  url: 'data.php', // The URL to send the request to
			  type: 'POST', // The type of request (e.g., GET or POST)
			  data:data,
			  //dataType: 'html', // The type of data expected back from the server
			  success: function(result) {
				  //console.log(result);
				  if(result){
				  //let parsedData=JSON.parse(result);
				  alert('Mail sent successfully');
				  }
				// Function to run if the request succeeds
				//$('#result-container').html(result);
			  },
			  error: function(xhr, status, error) {
				// Function to run if the request fails
				alert('An error occurred: ' + error);
			  }
});
		
	}
    
  
  </script>
  <?php include 'include/footer.php'; ?> <!-- Footer -->

</body>

</html>
