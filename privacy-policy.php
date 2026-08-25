<?php
require_once __DIR__ . '/include/cms.php';
$cmsPrivacyPage = cms_get_page('privacy-policy');
$cmsPrivacyContent = cms_page_content($cmsPrivacyPage);
?>
<!DOCTYPE html>
<html>

<head>
  <title><?= htmlspecialchars(cms_page_field($cmsPrivacyPage, 'meta_title', 'Swades Foundation Privacy Policy')) ?></title>
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


  <div class="impact-section blogs-pages">
    <div class="container">
      <div class="detail-hd">
        <h2><?= htmlspecialchars(cms_page_field($cmsPrivacyPage, 'title', 'Privacy Policy')) ?></h2>
      </div><!--detail-hd-->

      <div class="detail-werap">
        <?php if ($cmsPrivacyContent !== ''): ?>
          <div class="initiative2">
            <?= $cmsPrivacyContent ?>
          </div>
        <?php else: ?>
        <div class="initiative2">
          <p>The terms "We" / "Us" / "Our"/”Company” individually and collectively refer to Swades Foundation and the terms "You" /"Your" / "Yourself" refer to the users.</p>
          
          <p>This Privacy Policy is an electronic record in the form of an electronic contract formed under the information Technology Act, 2000 and the rules made there under and the amended provisions pertaining to electronic documents / records in various statutes as amended by the information Technology Act, 2000. This Privacy Policy does not require any physical, electronic or digital signature.</p>
          
          <p>This Privacy Policy is a legally binding document between you and Swades Foundation (both terms defined below). The terms of this Privacy Policy will be effective upon your acceptance of the same (directly or indirectly in electronic form, by clicking on the I accept tab or by use of the website or by other means) and will govern the relationship between you and Swades Foundation for your use of the website “swadesfoundation.org” (defined below).</p>
          
          <p>This document is published and shall be construed in accordance with the provisions of the Information Technology (reasonable security practices and procedures and sensitive personal data of information) rules, 2011 under Information Technology Act, 2000; that require publishing of the Privacy Policy for collection, use, storage and transfer of sensitive personal data or information.</p>
          
          <p>Please read this Privacy Policy carefully. By using the Website, you indicate that you understand, agree and consent to this Privacy Policy. If you do not agree with the terms of this Privacy Policy, please do not use this Website.</p>
          
          <p>By providing us your Information or by making use of the facilities provided by the Website, You hereby consent to the collection, storage, processing and transfer of any or all of Your Personal Information and Non-Personal Information by us as specified under this Privacy Policy. You further agree that such collection, use, storage and transfer of Your Information shall not cause any loss or wrongful gain to you or any other person. Your personal information may be used by Swades Foundation to send You relevant newsletters occasionally.</p>
        </div>
        <?php endif; ?>

        <div class="initiative2">
          <h5>USER INFORMATION</h5>
          <p>To avail certain services on our Websites, users maybe required to provide certain information for the registration process namely: - a) your name, b) email address, c) phone, d) address, e) PAN number, f) credit card or debit card details.</p>
          
          <p>The Information as supplied by the users enables us to provide you with the most user-friendly experience.</p>
          
          <p>All required information is service dependent and we may use the above said user information to, maintain, protect, and improve its services (including advertising services) and for developing new services such information will not be considered as sensitive if it is freely available and accessible in the public domain or is furnished under the Right to Information Act, 2005 or any other law for the time being in force.</p>
        </div>
        
        <div class="initiative2">
          <h5>COOKIES</h5>
          <p>To improve the responsiveness of the sites for our users, we may use "cookies", or similar electronic tools to collect information to assign each visitor a unique, random number as a User Identification (User ID) to understand the user's individual interests using the Identified Computer. Unless you voluntarily identify yourself (through registration, for example), we will have no way of knowing who you are, even if we assign a cookie to your computer. The only personal information a cookie can contain is information you supply (an example of this is when you ask for our Personalized Horoscope). A cookie cannot read data off your hard drive.</p>
          
          <p>Our web servers automatically collect limited information about your computer's connection to the Internet, including your IP address, when you visit our site. (Your IP address is a number that lets computers attached to the Internet know where to send you data -- such as the web pages you view.) Your IP address does not identify you personally. We use this information to deliver our web pages to you upon request, to tailor our site to the interests of our users, to measure traffic within our site and let advertisers know the geographic locations from where our visitors come.</p>
        </div>
        
        <div class="initiative2">
          <h5>LINKS TO THE OTHER SITES</h5>
          <p>Our policy discloses the privacy practices for our own web site only. Our site provides links to other websites also that are beyond our control. We shall in no way be responsible in way for your use of such sites.</p>
        </div>
        
        <div class="initiative2">
          <h5>INFORMATION SHARING</h5>
          <p>We shares the sensitive personal information to any third party without obtaining the prior consent of the user only in the following limited circumstances:</p>
          
          <p>(a) When it is requested or required by law or by any court or governmental agency or authority to disclose, for the purpose of verification of identity, or for the prevention, detection, investigation including cyber incidents, or for prosecution and punishment of offences. These disclosures are made in good faith and belief that such disclosure is reasonably necessary for enforcing these Terms; for complying with the applicable laws and regulations.</p>
          <p>(b) We proposes to share such information within its group companies and officers and employees of such group companies for the purpose of processing personal information on its behalf. We also ensure that these recipients of such information agree to process such information based on our instructions and in compliance with this Privacy Policy and any other appropriate confidentiality and security measures.</p>
        </div>
        
        <div class="initiative2">
          <h5>INFORMATION SECURITY</h5>
          <p>We take appropriate security measures to protect against unauthorized access to or unauthorized alteration, disclosure or destruction of data. These include internal reviews of our data collection, storage and processing practices and security measures, including appropriate encryption and physical security measures to guard against unauthorized access to systems where we store personal data.</p>
          
          <p>All information gathered on our Website is securely stored within our controlled database. The database is stored on servers secured behind a firewall; access to the servers is password-protected and is strictly limited. However, as effective as our security measures are, no security system is impenetrable. We cannot guarantee the security of our database, nor can we guarantee that information you supply will not be intercepted while being transmitted to us over the Internet. And, of course, any information you include in a posting to the discussion areas is available to anyone with Internet access.</p>
          
          <p>However the internet is an ever evolving medium. We may change our Privacy Policy from time to time to incorporate necessary future changes. Of course, our use of any information we gather will always be consistent with the policy under which the information was collected, regardless of what the new policy may be.</p>
        </div>
        <div class="initiative2">
          <!--<h5>WHISTLE BLOWER</h5>-->
          <h5>Whistle Blower</h5>
          <p>“Whistle Officer” or “Whistle Committee” or “Committee” means an officer or Committee of persons who is/are nominated/ appointed to conduct detailed investigation of the disclosure received from the Whistle blower and recommend disciplinary action. Currently, the CEO is nominated as Whistle Officer. The Committee, if appointed, should include Senior Level Officers of Director HR & Admin , Director Finance and a representative of the Division/ Department where the alleged malpractice has occurred.</p>
          
          <h5>Grievance Redressal</h5>
          <p>Redressal Mechanism: Any complaints, abuse or concerns with regards to content and or comment or breach of these terms shall be immediately informed to the designated Grievance Officer as mentioned below via in writing or through email signed with the electronic signature to Mr. Amit Gupta.</p>
        </div>
        
        <div class="initiative2">
          <ul class="listitem">
            <li>Mr. Amit Gupta</li>
            <li>Director - Finance</li>
            <li>www.swadesfoundation.org</li>
            <li>Swades Foundation</li>
            <li>Nishuvi, 3rd floor,</li>
            <li>75, Dr Annie Besant Road, Worli, Mumbai 400018</li>
            <li>Telephone: +91 22 61093730</li>
            <li>Fax: +91 22 610093722</li>
            <li>Email:amit.gupta@swadesfoundation.org</li>
          </ul>
        </div>
        
      </div>
    </div>
  </div><!---impact-section-->

  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>
  
  <?php include 'include/footer.php'; ?><!--footer-->

</body>

</html>
