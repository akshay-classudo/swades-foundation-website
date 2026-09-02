<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
require_once __DIR__ . '/include/cms.php';
$cmsTeamMembers = cms_get_team_members();
$cmsTeamGroups = [];
$cmsTeamPage = cms_get_page('our-team');
$cmsTeamContent = cms_page_content($cmsTeamPage);
foreach ($cmsTeamMembers as $cmsMember) {
    $cmsTeamGroups[$cmsMember['department'] ?: 'Team'][] = $cmsMember;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title><?= htmlspecialchars(cms_page_field($cmsTeamPage, 'meta_title', 'Swades Foundation Our Team'), ENT_QUOTES, 'UTF-8') ?></title>
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
      @media (max-width: 767px) {
          .gridlayer5 {
                grid-template-columns: repeat(1, 1fr);
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
          <a class="navbar-brand" href="index.php">
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
            <div class="donate-button desktop">
              <a href="Donate" class="btn">Donate <img src="./assets/images/heart.svg" alt=""></a>
            </div>
          </div>
          
          <div class="naviconmobile">
            <div class="donate-button innerbtn  mobile">
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

  <div class="inner-page ourteam-page">
    <div class="container">
      <div class="inner-hd text-center">
        <?php if ($cmsTeamContent !== ''): ?>
          <?= $cmsTeamContent ?>
        <?php else: ?>
          <h2><span>Meet The Team Behind Swades</span></h2>
          <p>Our 270+ team is one with Swades’ overall mission of Rural Empowerment. Their energy on-field and perseverance in working under some really challenging conditions and ensuring the best outcomes for our rural communities is something that binds us all together in spirit and integrity.</p>
        <?php endif; ?>
      </div>

      <div class="inner-cover">
        <img src="./assets/images/ourteam/ourteam-banner.jpg" alt="" class="desktop">
        <img src="./assets/images/ourteam/ourteam-banner2.jpg" alt="" class="mobile">
      </div>
    </div>
  </div><!---home-section-->

  <?php if ($cmsTeamMembers): ?>
  <div class="leadership-section">
    <div class="container">
      <?php foreach ($cmsTeamGroups as $cmsDepartment => $cmsMembers): ?>
        <div class="swadesteam">
          <div class="heading-hd">
            <h2><?= htmlspecialchars($cmsDepartment === 'Management' ? 'Swades Team' : $cmsDepartment, ENT_QUOTES, 'UTF-8') ?></h2>
          </div>
        </div>
        <div class="gridlayer5">
          <?php foreach ($cmsMembers as $cmsMember): ?>
            <div class="our-werap">
              <div class="teamimg" data-bs-toggle="modal" data-bs-target="#cmsTeamModal<?= (int) $cmsMember['id'] ?>" role="button" tabindex="0">
                <img src="<?= htmlspecialchars(cms_asset_url($cmsMember['photo']) ?: './assets/images/ourteam/frame.svg', ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($cmsMember['name'], ENT_QUOTES, 'UTF-8') ?>">
              </div>
              <div class="ourtext">
                <p><?= htmlspecialchars($cmsMember['role'] ?: $cmsDepartment, ENT_QUOTES, 'UTF-8') ?></p>
                <h6><?= htmlspecialchars($cmsMember['name'], ENT_QUOTES, 'UTF-8') ?></h6>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php else: ?>
  <div class="leadership-section">
    <div class="container">
      <div class="heading-hd">
        <h2>Our Leadership</h2>
      </div><!--heading-hd-->

      <div class="gridlayer4">
          
        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
            <img src="./assets/images/ourteam/ronnie-screwvala.svg" alt="">
          </div>
          <div class="ourtext">
            <p>Co-founder</p>
            <h6>Ronnie Screwvala</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
            <img src="./assets/images/ourteam/zarina-screwvala.svg" alt="">
          </div>
          <div class="ourtext">
            <p>Co-founder</p>
            <h6>Zarina Screwvala</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
            <img src="./assets/images/ourteam/mangesh-wange.svg" alt="">
          </div>
          <div class="ourtext">
            <p>CEO & Board Member</p>
            <h6>Mangesh Wange</h6>
          </div>
        </div>
      </div><!---gridlayer3-->


      <div class="swadesteam">
        <div class="heading-hd">
          <h2>Swades Team</h2>
        </div>
      </div><!---swadesteam-->

      <div class="gridlayer5">
        <!--<div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
            <img src="./assets/images/ourteam/team1.svg" alt="">
          </div>
          <div class="ourtext">
            <p>CFO, Sr. Director M&E and Donor Engagement</p>
            <h6>Amit Gupta</h6>
          </div>
        </div>-->

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
            <img src="./assets/images/ourteam/team02.svg" alt="">
          </div>
          <div class="ourtext">
            <p>Sr Director - Watsan</p>
            <h6>Bejoy Davis Chiramel</h6>
          </div>
        </div>
        
        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
            <img src="./assets/images/ourteam/team03.svg" alt="">
          </div>
          <div class="ourtext">
            <p>Director - Economic Dev & Institution Building</p>
            <h6>Neeta Harmalkar</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
            <img src="./assets/images/ourteam/team4.svg" alt="">
          </div>
          <div class="ourtext">
            <p>Director - 360 Degree</p>
            <h6>Pradip Sathe</h6>
          </div>
        </div>
        
        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
            <img src="./assets/images/ourteam/team6.svg" alt="">
          </div>
          <div class="ourtext">
            <p>Deputy Director - 360 Degree</p>
            <h6>Prasad Patil</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop10">
            <img src="./assets/images/ourteam/team7.svg" alt="">
          </div>
          <div class="ourtext">
            <p>Sr Director – HR & Administration, Govt Partnerships and Fundraising</p>
            <h6>Rahul Katariya</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop9">
            <img src="./assets/images/ourteam/team5.svg" alt="">
          </div>
          <div class="ourtext">
            <p>Sr Director - Health, Education & Skilling</p>
            <h6>Ranjish Kattady</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop12">
            <img src="./assets/images/ourteam/team9.svg" alt="">
          </div>
          <div class="ourtext">
            <p>Deputy Director – Government Affairs & Partnerships</p>
            <h6>Tushar Inamdar</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop13">
            <img src="./assets/images/ourteam/team10.svg" alt="">
          </div>
          <div class="ourtext">
            <p>Sr Director - Partnerships, CSR & Philanthropy</p>
            <h6>Tushar Sud</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop11">
            <img src="./assets/images/ourteam/team08.svg" alt="">
          </div>
          <div class="ourtext">
            <p>Director</p>
            <h6>Dr Surendra Yadav</h6>
          </div>
        </div>
        
       
        <div class="our-werap">
              <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop28">
                <img src="./assets/images/ourteam/team12.jpeg" alt="">
              </div>
              <div class="ourtext">
                <p>General Manager</p>
                <h6>Manoj Ahire</h6>
              </div>
        </div>
        
        <div class="our-werap">
              <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop29">
                <img src="./assets/images/ourteam/team13.png" alt="">
              </div>
              <div class="ourtext">
                <p>Chief Financial Officer and Director – IT, Monitoring & Evaluation</p>
                <h6>Parag Ganu</h6>
              </div>
        </div>
    </div><!---gridlayer4-->

      <div class="swadesteam">
        <div class="heading-hd">
          <h2>Advisory Board</h2>
        </div>
      </div><!---swadesteam-->

      <div class="gridlayer5">
        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop14">
            <img src="./assets/images/ourteam/1.png" alt="">
          </div>
          <div class="ourtext">
            <p>Founder & Chairman, Mahindra Holidays & Resorts India Ltd. and Mahindra Lifespace Developers Ltd.</p>
            <h6>Arun Nanda</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop19">
            <img src="./assets/images/ourteam/6.png" alt="">
          </div>
          <div class="ourtext">
            <p>Managing Director, Bain Capital</p>
            <h6>Amit Chandra</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop21">
            <img src="./assets/images/ourteam/8.png" alt="">
          </div>
          <div class="ourtext">
            <p>Managing Partner, DSK Legal</p>
            <h6>Anand Desai</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop26">
            <img src="./assets/images/ourteam/13.png" alt="">
          </div>
          <div class="ourtext">
            <h6>Bernhard Steinruecke</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop18">
            <img src="./assets/images/ourteam/5.png" alt="">
          </div>
          <div class="ourtext">
            <p>Chairman, Narayana Hrudayalaya Limited</p>
            <h6>Dr. Devi Prasad Shetty</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop22">
            <img src="./assets/images/ourteam/9.png" alt="">
          </div>
          <div class="ourtext">
            <p>Vice Chairman, Zensar Technologies</p>
            <h6>Dr. Ganesh Natarajan</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop15">
            <img src="./assets/images/ourteam/2.png" alt="">
          </div>
          <div class="ourtext">
            <p>Chairman, Marico Ltd.</p>
            <h6>Harsh Mariwala</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop23">
            <img src="./assets/images/ourteam/10.png" alt="">
          </div>
          <div class="ourtext">
            <p>Country Director, India – Apple Services</p>
            <h6>Ipsita Dasgupta</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop16">
            <img src="./assets/images/ourteam/3.png" alt="">
          </div>
          <div class="ourtext">
            <p>Dr. R.A. Mashelkar, National Research Professor & the President of Global Research Alliance,</p>
            <h6>Dr. R.A Mashelkar</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop24">
            <img src="./assets/images/ourteam/11.png" alt="">
          </div>
          <div class="ourtext">
            <p>MD & CEO, IL&FS Education & Skills</p>
            <h6>RCM Reddy</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop20">
            <img src="./assets/images/ourteam/7.png" alt="">
          </div>
          <div class="ourtext">
            <p>Independent Director</p>
            <h6>Sangeeta Talwar</h6>
          </div>
        </div>

        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop25">
            <img src="./assets/images/ourteam/12.png" alt="">
          </div>
          <div class="ourtext">
            <p>Jt. Managing Director and Promoter, Mukand Ltd.</p>
            <h6>Suketu V Shah</h6>
          </div>
        </div>
        
        <div class="our-werap">
          <div class="teamimg" data-bs-toggle="modal" data-bs-target="#staticBackdrop17">
            <img src="./assets/images/ourteam/4.png" alt="">
          </div>
          <div class="ourtext">
            <p>Founder and Senior Partner, AZB & Partners</p>
            <h6>Zia Mody</h6>
          </div>
        </div>
        
      </div>
      <!---gridlayer4-->
    </div>
  </div><!----leadership-section-->
  <?php endif; ?>

  <?php if ($cmsTeamMembers): ?>
    <?php foreach ($cmsTeamMembers as $cmsMember): ?>
      <div class="modal entrepreneur fade" id="cmsTeamModal<?= (int) $cmsMember['id'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modalbody">
              <div class="row">
                <div class="col-md-4">
                  <div class="teamimg m-0">
                    <img src="<?= htmlspecialchars(cms_asset_url($cmsMember['photo']) ?: './assets/images/ourteam/frame.svg', ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($cmsMember['name'], ENT_QUOTES, 'UTF-8') ?>">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="providewerap">
                    <h5><?= htmlspecialchars($cmsMember['role'] ?: $cmsMember['department'], ENT_QUOTES, 'UTF-8') ?></h5>
                    <h3><?= htmlspecialchars($cmsMember['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                    <?php if (!empty($cmsMember['bio'])): ?><p><?= nl2br(htmlspecialchars($cmsMember['bio'], ENT_QUOTES, 'UTF-8')) ?></p><?php endif; ?>
                    <?php if (!empty($cmsMember['email'])): ?><p><strong>Email:</strong> <a href="mailto:<?= htmlspecialchars($cmsMember['email'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($cmsMember['email'], ENT_QUOTES, 'UTF-8') ?></a></p><?php endif; ?>
                    <?php if (!empty($cmsMember['phone'])): ?><p><strong>Phone:</strong> <a href="tel:<?= htmlspecialchars($cmsMember['phone'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($cmsMember['phone'], ENT_QUOTES, 'UTF-8') ?></a></p><?php endif; ?>
                    <?php $cmsSocial = array_filter($cmsMember['social'] ?? [], fn ($link) => is_string($link) && $link !== ''); ?>
                    <?php if (!$cmsSocial): ?>
                      <?php $cmsSocial = array_filter(['linkedin' => $cmsMember['linkedin_url'] ?? '', 'twitter' => $cmsMember['twitter_url'] ?? '', 'github' => $cmsMember['github_url'] ?? '']); ?>
                    <?php endif; ?>
                    <?php if ($cmsSocial): ?>
                      <p><strong>Connect:</strong>
                        <?php foreach ($cmsSocial as $cmsNetwork => $cmsLink): ?>
                          <a href="<?= htmlspecialchars($cmsLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener" style="margin-right: 12px;"><?= htmlspecialchars(ucfirst((string) $cmsNetwork), ENT_QUOTES, 'UTF-8') ?></a>
                        <?php endforeach; ?>
                      </p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>

  <div class="modal entrepreneur fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop1Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/ronnie-screwvala.svg" alt="">
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Co-founder</h5>
                <h3>Ronnie Screwvala</h3>
                <p>Ronnie Screwvala is a first-generation entrepreneur who started his journey by introducing India to multi-channel TV viewing by launching the first cable TV network in the country. From there, he went on to build a Media and Entertainment conglomerate spanning Television, Motion Pictures, Broadcasting, Games and Digital, that he listed in 2005 for a market cap of $ 55 million and that The Walt Disney Company bought in 2012 for an enterprise value of $1.4 billion.</p>

                <p>Ronnie puts a great deal of emphasis on Social Welfare. He founded the Swades Foundation with a focus on rural India and adopted villages in Maharashtra to work on their self-sufficiency in water, health, education and livelihood. Through this foundation, he aims to impact one million rural lives every five years, with a clear exit/empowerment strategy from those villages and building a model for others to follow.</p>
                
                <p>He also co-founded upGrad with a dream of establishing India as the teaching capital of the World. He aims to create an impact at scale by taking high-quality education to a large population.Simultaneously extend India’s soft power globally by upskilling more than 100 million knowledge
                  economy workforce.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/zarina-screwvala.svg" alt="">
              </div>
            </div>

            <div class="col-md-8">
              <div class="providewerap">
                <h5>Co-founder</h5>
                <h3>Zarina Screwvala</h3>
                <p>Zarina Screwvala is a Co-founder of the Swades Foundation and works full time as its Managing Trustee/Director. Swades Foundation operates with the single-minded focus of empowering rural India through holistic and sustainable growth by engaging with and empowering village communities, executing multiple programmes on the ground and working towards an exit strategy, believing strongly in creating partnerships between Rural India, Corporates, Young India, the Government and other NGO’s for an irreversible change for good.</p>

                <p>Swades Foundation has created a unique 360-degree model of development with nearly 300 full time staff, working in 2000+ hamlets impacting over half a million people across drinking Water, Sanitation & Green Initiatives, nutrition, health, education as well as a huge focus on progressive farming, animal husbandry, skilling & other livelihoods. Zarina is especially interested in Education that is joyful and empowering.</p>

                <p>She pursues her passion for philosophy at New Acropolis (India North), which is a school of philosophy in the classical sense of investigating universal truth through a comparative study of ancient cultures and working to apply these principles to our own lives, in order to help make the world  a better place.</p>

                <p>Zarina was also one of the Founder-Directors of UTV (now a part of the Walt Disney Company India), one of India’s foremost media and entertainment conglomerates, where she led the creation and launch of leading broadcast brands, including UTV Bindass, UTV Stars, UTV Action and Hungama TV in India and the children’s channel Astro Ceria in Indonesia & Malaysia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop3Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/mangesh-wange.svg" alt="">
              </div>
            </div>

            <div class="col-md-8">
              <div class="providewerap">
                <h5>CEO & Board Member</h5>
                <h3>Mangesh Wange</h3>
                <p>Mangesh Wange has been at the helm of the Swades Foundation as CEO since May 2016, applying his extensive experience in General Management and P&L oversight to drive the organization’s mission.</p>

                <p>His career began with Mahindra Tractors in 1987, followed by key roles at Godrej Agrovet where he spearheaded the Agri Inputs and Animal Feeds verticals. Mangesh then played a pivotal role at Godrej in establishing the modern retail ventures of Nature’s Basket and Aadhaar.</p>

                <p>In 2007, Mangesh transitioned to the microfinance sector with Fullerton India, where he spent three years doing HR and business roles. Thereafter he continued his journey with Thomson Reuters, where he was responsible for startup of Reuters Market Light by focusing on mobile information services for rural India.</p>

                <p>Mangesh holds a degree in Agricultural Engineering from PAU, Ludhiana, and a Postgraduate degree from IIM, Ahmedabad. He is also a Professional Certified Coach (PCC) accredited by the International Coaching Federation.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--<div class="modal entrepreneur fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop4Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/team1.svg" alt="">
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Chief Financial Officer, Sr Director M&E and Donor Engagement</h5>
                <h3>Amit Gupta</h3>
                <p>Amit is a seasoned finance professional with over 20 years of experience, driving transformation and strategic initiatives across functions in various sectors, including Healthcare, Telecom, Commercial finance, Financial Services and Oil & Gas. He has a proven track record of leading high-impact projects that deliver operational excellence and organizational growth.</p>

                <p>As CFO at Swades, Amit successfully led the organization’s listing at the Social Stock Exchange (SSE) with the highest amount raised. In addition, he heads the Monitoring & Evaluation and Donor Engagement verticals, spearheading the digitization of operations to align processes with cutting-edge technology for enhanced efficiency and impact.</p>

                <p>Before joining Swades, Amit worked at renowned organizations such as International SOS and Bharti Airtel, GE Capital, Genpact, and Indian Oil Corporation, consistently contributing to financial strategy and transformation efforts.</p>
                
                <p>Amit is a Chartered Accountant and holds a degree in Commerce, providing a robust foundation in financial management and strategic leadership across all his roles.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>-->
  
  <div class="modal entrepreneur fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop5Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/team02.svg" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Sr Director - Watsan</h5>
                <h3>Bejoy Davis Chiramel</h3>
                <p>Bejoy has over 29 years of experience in Projects & Maintenance, Project Procurement, Managing Construction, renovations and Vendor Management. He has been associated with organizations like Blue Sky Luxury Apartments Pvt. ltd. as Construction Project Manager(Srilanka), with Nilgai Foods Pvt. Ltd. as Head of projects & maintenance (Mumbai), with Ka- Restaurants as AVP Projects and Maintenance, with Mirah Group as AGM Projects and Maintenance, with YUVA(NGO) as GM.</p>
                <p>Bejoy has done B.E. (CIVIL) from Mumbai University.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop6Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/team03.svg" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Director - Economic Development and Institution Building</h5>
                <h3>Neeta Harmalkar</h3>
                <p>Neeta is a seasoned professional with over 18 years of experience, known for inspiring teams and driving organizational growth through people-focused development programs. As a Director, she possesses a unique blend of strategic acumen and hands-on leadership, consistently delivering high levels of employee and community satisfaction. Her diverse background includes teaching, training, and project management across various domains.</p>

                <p>Since joining Swades in 2014, Neeta has played a pivotal role in driving the growth of two major verticals—Health and Education—within the organization. In her current role as Director of Economic Development at Swades Foundation, she is renowned for her approachable demeanor and strong interpersonal skills, making her widely recognized as a people’s person. Her leadership has been instrumental in implementing impactful initiatives that address critical community needs.</p>

                <p>Neeta holds a post-graduate diploma in management and education (PGDME), along with an MA in Marathi Literature and Education. Early in her career, she dedicated herself to projects focused on HIV/AIDS awareness and women’s empowerment, collaborating closely with organizations such as UNICEF and Roshni Shikshan Prasarak Mandal. Her commitment to social causes and her ability to drive tangible results make her a valuable asset to any organization.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop7Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/team4.svg" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Director - 360 Degree</h5>
                <h3>Pradip Sathe</h3>
                <p>Pradip holds a Master of Education degree from Aurangabad University. He started his career in 2004 as a teacher and moved on to a mentorship role by training teachers and re-enforcing quality education, over 68,947 teachers from 5000 Govt schools and private schools have been trained by him. Pradip was associated with Pearson Education Service Private Ltd. as a Project Manager for CSR projects for four years and during his tenure he served 3000 Zilla Parishad schools across all the districts of Maharashtra. He was a part of Bal Bharti, Bal Chitrawani & MSCERT (Maharashtra State Council of Educational Research & Training)team for content up gradation and approvals for Rural School Transformation. He was instrumental in organizing a mega event in State to create awareness about ‘Integrating ICT in Education in Rural Schools’. Pradip’s key skills include monitoring teacher training programs, managing stakeholder relationship, budgeting and implementation of projects.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop8Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/team6.svg" alt="">
              </div>
            </div>

            <div class="col-md-8">
              <div class="providewerap">
                <h5>Deputy Director - 360 Degree</h5>
                <h3>Prasad Patil</h3>
                <p>With over two decades of experience in the development sector, Prasad has been a part of the Swades Foundation for the past 19 years. Contributing to Swades verticals like Community Mobilisation, Economic Development and Health, Prasad has been the representative of Swades Vision and Mission for all the visitors and donors. He is currently leading the L&D function along with other initiatives. Community Mobilization and Community Connect are his core expertise. In 2010, through Swades, he participated in an International Exchange Programme in Finland. Before joining the Swades Foundation, he has worked in various programmes like domestic violence and family counselling, community institutions and local self – governance. He has received recognition for his body of work in minimising domestic violence cases in Sindhudhurg district of Maharashtra by ex-Chief Minister of Maharashtra. Prasad holds a master’s degree in Social Work from CSIBER Kolhapur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop10Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/team7.svg" alt="">
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Sr Director – HR & Administration, Govt Partnerships and Fundraising</h5>
                <h3>Rahul Katariya</h3>

                <p>Rahul comes in with a rich experience of 28 years which is an amalgamation of various functions like Training, Marketing, Operations and he started his HR journey in April 2007 with EXL.</p>

                <p>He has a proven track record as HR Generalist profile which includes People Management, Performance Appraisal, Manpower Planning, Recruitment, MIS, Training and Development, etc. among other things. His expertise lies in partnering with Business units to develop overall business strategy and objectives and translating them into goals, plans and tactics.</p>

                <p>He has completed his B.Com and MBA in Marketing from Pune University and has completed his PGCHRM from XLRI. Before joining Swades, Rahul was associated with MNCs like GE, EXL, WNS, Stream Global Services where he was the Director HR. Post Stream got acquired by Convergys in 2014, he was responsible for the HR Generalist profile for the West region in capacity of a Regional HR Business Partner, managing around 4500 employees based out of Mumbai, Thane and Pune.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop9Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/team5.svg" alt="">
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Sr Director - Health, Education & Skilling</h5>
                <h3>Ranjish Kattady</h3>
                <p>Ranjish leads Swades Foundation’s health, education, and skilling verticals, overseeing large-scale, community-driven programs that empower rural households across Maharashtra. With over 25 years in the development sector, he brings deep expertise in strategic management, program design, and cross-sector partnerships.</p>

                <p>He began his career with an international nonprofit, where he spearheaded initiatives to improve eye health and address disability in some of India’s most underserved states. He later headed CSR operations in Mumbai for a leading media conglomerate, expanding his perspective on corporate–nonprofit collaboration. Since joining Swades in 2015, Ranjish has held key leadership roles, including heading Marketing & Communications and driving a pan-India skilling program that funded 79 NGOs across 23 states. He also established Swades’ in-house community empowerment team, creating a robust beneficiary training and certification system that underpins the foundation’s program delivery today.

</p>

                <p>Ranjish holds a postgraduate degree in Science and an MBA in Social Entrepreneurship and Healthcare Management from IIM Ahmedabad. Passionate about equity and sustainable development, he focuses on building resilient rural communities by bridging gaps in access to quality health, education, and livelihood opportunities.

</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop12Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/team9.svg" alt="">
              </div>
            </div>

            <div class="col-md-8">
              <div class="providewerap">
                <h5>Deputy Director – Government Affairs & Partnerships</h5>
                <h3>Tushar Inamdar</h3>
                <p>Tushar, among Swades’ earliest team members, has been with the organisation for over 21 years. He led the Raigad district team, later drove community and resource mobilisation, and now anchors government partnerships to ensure communities benefit from key government schemes.</p>

                <p>Tushar was the one of the first employees for Swades based out of Raigad and led the district team for 12 years. Thereafter, moved into community mobilization and resource mobilisation and now with the ‘Government Affairs and Partnerships’ team building a robust working partnership with the government and ensuring the people in our geography benefit from various government led schemes.</p>

                <p>He presented a paper at an international conference in Hong Kong (2007) on conflict resolution among the target communities and was also the Indian representative at an international conference on ‘Rural Social Work’ held in China. He also participated in an International exchange program to Israel in 2010.</p>

                <p>In 2013, he received Paul Harris Fellow (PHF) recognition through Rotary International for his most valuable contribution to integrated community development in India.</p>

                <p>He has also been an enabler for fundraising and advocacy initiatives at Sightsavers, setting up the communication ecosystem for the organization.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop13" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop13Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/team10.svg" alt="">
              </div>
            </div>
        
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Sr Director - Partnerships, CSR & Philanthropy</h5>
                <h3>Tushar Sud</h3>
                <p>Tushar is an ex-banker /strategy consultant turned social development professional with 22 years of management experience including the recent 7+ years in social organizational leadership. Since coming on board at the start of 2016, he has been heading partnerships around institutional giving, international grants & individual philanthropy at Swades.</p>

                <p>His corporate career began with financial services in 2003, followed by strategy consulting & business development across MNC Banks such as JP Morgan, Royal Bank of Scotland and Deutsche Bank. In his social avatar – prior to joining Swades, he briefly led philanthropic & wealth partnerships at a social catalyst foundation. Tushar’s expertise is in strategic consulting, planning & analysis, business development, forging partnerships, client & stakeholder relationship management, and understanding of philanthropy & CSR. He is an MBA in Int’l Business from the Indian Institute of Foreign Trade (IIFT), New Delhi and a B.Com. from Panjab University, Chandigarh.</p>

                <p>Rediscovering his passion with permanent social impact, he enjoys roles that inspire thinking around & out of the box and beyond. Having lived, studied & worked in various geographies, his other interests include travelling, trekking, mountains & open waters, meeting new people & sharing experiences, gourmet food, reading, music & playing the guitar.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div class="modal entrepreneur fade" id="staticBackdrop11" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop11Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/team08.svg" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Director</h5>
                <h3>Dr Surendra Yadav</h3>
                <p>As a detail-oriented professional, he has more than 22 years of extensive experience in implementing Public Health and Development programs. His expertise lies in preparing a strategic plan for Public Health programs and strengthening the implementation of large-scale Public-Private Partnership programs. Throughout his career, he has worked with multiple stakeholders at the state and national level, including government departments, the private health sector, and bilateral organizations such as MSACS, CGSACS, UNICEF, GFATM, SAATHII, FOGSI, IAP, API, NACO and Swades Foundation.</p>

                <p>He has successfully led major national public health programs, such as Elimination of Mother-to-Child Transmission of HIV and Syphilis, National Blind Control Program, Rashtriya Bal Swasthya Karyakram (RBSK), Anaemia Control Programme, and Nutrition Program. His role encompassed program design, budgeting, monitoring, and implementation.</p>
                <p>Academic Qualification: MPH, DIH, FHM, BAMS, DMLT</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  <div class="modal entrepreneur fade" id="staticBackdrop28" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop28Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/team12.jpeg" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="providewerap">
                <h5>General Manager</h5>
                <h3>Manoj Ahire</h3>
                <p>Manoj is a seasoned rural development professional with over 18 years of experience spanning operations leadership, program implementation, strategic planning, budgeting, and organisational development. Currently serving as Deputy General Manager at Swades Foundation, he leads operations across the organisation’s geographies in Nashik district, overseeing end-to-end implementation of all interventions and ensuring alignment with institutional goals, operational efficiency, and measurable community impact.</p>

                <p>Manoj is a postgraduate in Social Work, bringing together grassroots understanding and corporate rigor to advance scalable and sustainable development initiatives.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal entrepreneur fade" id="staticBackdrop29" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop29Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/team13.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Chief Financial Officer and Director – IT, Monitoring & Evaluation</h5>
                <h3>Parag Ganu</h3>
                <p>With over 19 years of experience across finance, MIS & reporting, IT, investor relations and more, in both corporate and development sectors, Parag brings deep expertise in building scalable processes for mission-driven organisations.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop14" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop14Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/1.png" alt="">
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Founder & Chairman, Mahindra Holidays & Resorts India Ltd. and Mahindra Lifespace Developers Ltd.</h5>
                <h3>Arun Nanda</h3>
                <p>Nanda is a Law Graduate, fellow member of Institute of Chartered Accountants and Institute of Company Secretaries of India. He joined the Mahindra Group in 1973 and held several important positions within the Group over the 40 years he was with the company. He was inducted to the Board of Mahindra & Mahindra Ltd. (M&M) in August 1992 and resigned as Executive Director in March 2010 to focus on the social sector and create a favourable ecosystem for senior citizens. He is Founder Chairman of Mahindra Holidays & Resorts India Ltd. and Mahindra Lifespace Developers Ltd. He is also the Chairman of Holiday Club Oy, Finland.</p>

                <p>Nanda was honoured with an award of “Chevalier de la Legion d’Honneur” (Knight of the National Order of the Legion of Honour) by the President of the French Republic, Mr. Nicolas Sarkozy in 2008.</p>

                <p>Arun Nanda is the recipient of the following awards:
                   1. “CA Business Achiever Award – Corporate” at The Institute of Chartered Accountants of India Award 2009
                   2. “Lifetime Achievement Award” for his outstanding contribution to the Hospitality Industry and the Service Sector by the Golden Star Awards 2010.
                   3. “Aatithya Ratna Award” by the Business Hotels Network and Horwath HTL in 2014 for his contribution to the success of the Hospitality Industry.</p>

                <p>“Lifetime Achievement Award” in December 2014 at the CNBC Awaaz Real Estate Awards for his relentless pursuit of excellence and dynamic leadership that steered the growth of Mahindra Lifespaces.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop15" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop15Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/2.png" alt="">
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Chairman, Marico Ltd.</h5>
                <h3>Harsh Mariwala</h3>
                <p>Mr. Mariwala leads Marico Limited as its Chairman. He is also Chairman & Managing Director of Kaya Limited. Mr. Mariwala’s passion for innovation, enthused him to establish the Marico Innovation Foundation in 2003 which works towards nurturing innovations in India. In 2012, Mr. Mariwala started ASCENT Foundation, a peer-learning entrepreneurial platform.</p>

                <p>Sharrp Ventures is the Family Office of the Harsh Mariwala Family. He also founded the Mariwala Health Initiative (MHI) in 2015, with the philanthropic aim of giving back to society.</p>
                    
                <p>Mr. Mariwala was recently bestowed the EY Entrepreneur of the year award 2020 for India which is the world’s most prestigious business award for entrepreneurs.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop16" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop15Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/3.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Dr. R.A. Mashelkar, National Research Professor & the President of Global Research Alliance</h5>
                <h3>Dr. R.A Mashelkar</h3>
                <p>Dr. R.A. Mashelkar, National Research Professor, is presently also the President of Global Research Alliance, a network of publicly funded R&D institutes from Asia-Pacific, Europe and USA with over 60,000 scientists.</p>

                <p>Dr. Mashelkar served as the Director General of Council of Scientific and Industrial Research (CSIR), with thirty-eight laboratories and about 20,000 employees for over eleven years. He was also the President of Indian National Science Academy and President of Institution of Chemical Engineers (UK).</p>

                <p>Dr. Mashelkar has been on the Board of Directors of several reputed companies such as Reliance Industries Ltd., Tata Motors Ltd., Hindustan Unilever Ltd., Thermax Ltd., Piramal Enterprises Ltd., KPIT Technologies Ltd., etc. He chairs the Boards of GeneMedix Life Sciences Pvt. Ltd., Vyome Biosciences Pvt. Ltd. and Invictus Oncology Pvt. Ltd.</p>

                <p>Deeply connected with the innovation movement in India, Dr. Mashelkar is currently the Chairman of India’s National Innovation Foundation, Reliance Innovation Council, KPIT Technologies Innovation Council, Persistent Systems Innovation Council and Marico Innovation Foundation’s Governing Council. He co-chairs the Maharashtra State Innovation Council.</p>

                <p>Dr. Mashelkar is greatly involved in several social causes. He is the President/Chairman of International Longevity Centre – India, Swarupvardhini, Dnyan Prabodhni, Pune International Centre and also of Advisory Boards of Yuvaparivarthan, Vanarai, etc. He chairs the Corporate Social Responsibility Committees of Tata Motors Ltd. and Godrej Agrovet Ltd.</p>

                <p>Dr. Mashelkar is a Fellow of Royal Society (FRS), US National Academy of Science, US National Academy of Engineering, American Academy of Arts & Sciences, UK Royal Academy of Engineering, Australian Technological Science and Engineering Academy, Australian Academy of Science and finally, US National Academy of Inventors, the first ever Indian from India to be elected.</p>

                <p>Thirty seven universities have honored him with honorary doctorates, which include Universities of London, Salford, Pretoria, Wisconsin, Swinburne, Monash and Delhi.</p>

                <p>Dr. Mashelkar received the Business Week (USA) award of ‘Stars of Asia’ at the hands of George Bush (Sr.), the former President of USA. He was the first Asian Scientist to receive it.</p>
                
                <p>The President of India honored Dr. Mashelkar with Padmashri (1991), with Padmabhushan (2000) and with Padma Vibhushan (2014), three of the highest civilian honours.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop17" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop16Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/4.png" alt="">
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Founder and Senior Partner, AZB & Partners</h5>
                <h3>Zia Mody</h3>
                <p>ZIA MODY is the Founder and Senior Partner of AZB & Partners and one of India’s foremost corporate attorneys. She passed her law degree from the University of Cambridge in 1978 and was enrolled as an Advocate with the Bar Council of Maharashtra & Goa in 1978. She did her LLM from Harvard Law School and was then admitted as a member of the New York State Bar by examination in 1980. Zia worked as a corporate associate at Baker & McKenzie, New York, for five years before moving to India to set up practice, establishing the Chambers of Zia Mody in 1984, which then became AZB & Partners in 2004. The Firm has offices in Mumbai, Delhi, Bangalore, and Pune with an integrated team of approximately 400 legal professionals.</p>

                <p>Zia’s abilities are recognized globally, as is reflected in her appointment as the Deputy Chairman and a Non-Executive Director of the HSBC Asia Pacific Board, a member of the Governing Board of the International Council for Commercial Arbitration (ICCA), member of the Singapore International Arbitration Centre (SIAC) Users Council and a member on the SIAC Panel of Arbitrators (2017-2018), a foreign arbitrator on the Panel of Arbitrators of the China International Economic and Trade Arbitration Commission (CIETAC), a member of the World Bank Administrative Tribunal, Washington D.C. (2008-2013), and a Vice President and Member of the London Court of International Arbitration (2010-2013). Zia serves on various advisory committees of the Confederation of Indian Industry including its National Council and its committees on Corporate Governance, Financial Services, Capital Markets and Legal Services.</p>

                <p>Zia was a member of the Godrej Committee on Corporate Governance constituted by the Ministry of Corporate Affairs. She was nominated to be part of the “Committee on Rationalisation of Investment Routes and Monitoring of Foreign Portfolio Investments” formed by the Securities and Exchange Board of India under the chairmanship of Shri K.M. Chandrashekar. She was appointed by the Reserve Bank of India in 2014 as a member of Committee on Comprehensive Financial Services for Small Businesses and Low-Income Households which was chaired by Dr. Nachiket Mor. Awarded the “India Managing Partner of the Year – 2016” by Asian Legal Business (Thomson Reuters), Zia features on Fortune India as The 50 Most Powerful Women in Business in India, for 2016 & 2017. She has also been awarded the “Professional of the Year – 2017” at the inaugural UK India Awards.</p>
                
                <p>She has been recognized as a Top 13 female Acritas Star globally by Acritas Star 2018. She is listed by Forbes India (2013, 2014 & 2015) as one of ‘India’s 10 most Powerful women’; also listed by Forbes Asia as one of ‘Asia’s 50 Power Businesswomen’ (2015), it has been said that few of Zia’s peers can match her skills or take her on when it comes to acquisitions, joint ventures, company restructuring, foreign inward investment related practice and corporate law. She has been named as a Leading Individual for Banking, Finance, Corporate and M&A and Investment Funds in The Legal 500 Asia-Pacific 2016. Euromoney awarded her a Lifetime Achievement award – at Asia Women in Business Law Awards 2015. Among her many awards, Zia has received the “Outstanding Women Business Leader of the Year – 2013” award at India Business Leader Awards; also “Legal Icon of the Decade – 2013” and “Best M&A Lawyer of the Year – 2012” award at the Legal Era Awards and she has been voted as “Business Woman of the Year, 2010” by the Economic Times, for which she was felicitated by The Society of Indian Law Firms (SILF). She has also been voted by the Economic Times as one of the country’s most powerful CEOs (2004 to 2016) and as one of the 15 most powerful Indian women leaders in 2010-2014. She has been selected as one of the 25 most powerful women in business by Business Today in 2004-2014 and named one of India’s top ten most powerful women in business by Fortune Magazine in 2014.</p>

                <p>AsiaLaw Profile hailed Zia as one of ‘Market Leading Lawyers’ in the fields of Mergers & Acquisitions, General Corporate Practice (2016 to 2018), while Legal 500 Asia Pacific has identified her as a leading individual in the Corporate Mergers & Acquisition, Banking & Finance, Private Equity and Investment Funds. “Zia Mody is an obvious choice for many clients involved in large international M&A transactions” states IFLR1000. Zia has been nominated as one of the world’s leading practitioners by the International Who’s Who Legal for her legal expertise in various practice areas including Mergers & Acquisitions, Corporate Governance, Private Funds, Competition, Franchise, TMT (India Specialist), Project Finance, Litigation and Arbitration, Business Lawyers and Outstanding Business Professionals (India). She has also been selected as one of the world’s pre-eminent commercial arbitration specialists by the International Who’s Who of Commercial Arbitration (2012-2018), one of the International Who’s Who Legal’s – Thought Leaders, Arbitration (2017).</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop18" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop15Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/5.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Chairman, Narayana Hrudayalaya Limited</h5>
                <h3>Dr. Devi Prasad Shetty</h3>
                <p>A cardiac surgeon of repute and a successful entrepreneur, Dr Shetty is a highly respected luminary for his ingenious ideas for reforms in healthcare sector. His visionary leadership to make quality healthcare affordable for all has drawn global recognition. Treading the path of economies of scale to bring down the cost of healthcare delivery, Narayana Hrudayalaya has been an interesting case study for the likes of Harvard University and The Wall Street Journal.</p>

                <p>In association with Government of Karnataka, Dr. Shetty pioneered Yeshaswini, a very inexpensive micro health insurance scheme benefitting more than 3.4 million rural poor. Dr. Shetty is the current Chairman, Board of Governors, Indian Institute of Management, Bangalore. He has also served as member Board of Governors of Medical Council of India and Representative of President of India in the Board of Governors of Indira Gandhi National Open University.</p>

                <p>The Government of India, state governments, trade bodies and global policy think tanks invite him regularly for discussions on healthcare policies. He was part of International Advisory Group, a strategic advisory platform, invited by Japan Centre for International Exchange to address the global health agenda under Japan’s G-20 leadership during 2019-20. A strong advocate of technology for efficient healthcare delivery, Dr.Shetty takes deep interest in creating and developing software products and applications to achieve time and cost efficiency while minimizing clinical errors in healthcare delivery.</p>

                <p>Dr. Shetty also has a US Patent No.10,109,377 dated October 23, 2018 registered as inventor – “System and Method for Facilitating Delivery of Patient-Care” – ‘A computer-implemented method for facilitating delivery of patient-care in adherence with a standard of care clinical protocol is described’. Dr.Shetty is the recipient of several prestigious awards including the Padma Bhushan, Padma Shri, The Economist Innovation Award, Ernst and Young – Entrepreneur of the Year, Financial Times Arcelor Mittal ‘Boldness in Business’ Award, Nikkei Asia Prize for Economic and Business Innovation. He has also been awarded honorary doctorates from University of Minnesota, University of Mysore and IIT, Madras.</p>

                <p>After his post-graduation from Kasturba Medical College and having undergone higher training in Cardiothoracic Surgery at NHS, UK, Dr. Shetty held positions in BM Birla Heart Research Centre, Kolkata and Manipal Heart Foundation, Bangalore before becoming the Founder and Chairman at Narayana Hrudayalaya Group of Hospitals. The group now has 32 hospitals with close to 7,000 beds.</p>

                <p>In Feb. 2016 NH went public and received an overwhelming response getting oversubscribed eight times stands testimony to the investors’ trust in Dr.Shetty’s visionary leadership.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal entrepreneur fade" id="staticBackdrop19" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop16Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/6.png" alt="">
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Managing Director, Bain Capital</h5>
                <h3>Amit Chandra</h3>
                <p>Chandra joined Bain Capital as a Managing Director in early 2008, and is a part of the firm’s leadership team in Asia. He is an engineer by training having received his undergraduate degree in Electrical Engineering from VJTI, Bombay University, post which he worked at India’s leading engineering & construction firm, Larsen & Toubro. He then received his MBA from Boston College and was awarded the school’s Distinguished Alumni in 2007.</p>

                <p>Prior to joining Bain Capital, Mr.Chandra spent most of his professional career at DSP Merrill Lynch, a leading investment bank in India. At the firm, he had direct oversight of its Global Markets & Investment Banking business, which included the firm’s substantial principal investment businesses. He retired from DSP Merrill Lynch in 2007 as its Board Member & Managing Director, to move to Private Equity.</p>

                <p>Chandra was named a Young Global Leader by the World Economic Forum in 2007 and was named Next Generation Philanthropic Leader of the Year by Forbes in 2013. He is currently a Member of the Board of Directors of Genpact, L&T Finance, Tata Investment Corporation and Emcure Pharmaceuticals, and recently retired from the Board of Piramal Enterprises. He is also active in India’s not for profit space and serves as a Trustee of two of the Tata Trusts –Navajbai Ratan Tata Trust & Jamshetji Tata Trust, Founder & Trustee of Ashoka University, and as a Trustee/Board Member of The Akanksha Foundation (providing education to less privileged children) and GiveIndia (India’s leading philanthropic exchange).</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop20" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop20Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/7.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Independent Director</h5>
                <h3>Sangeeta Talwar</h3>
                <p>In a career spanning over 30 years Talwar has worked across large businesses of European, American and Indian corporations. She helped to craft, launch and establish what became a marketing legend in its time, Maggi Noodles. She was the first Regional head of sales for Nestle, VP HR and Marketing Director. She also worked as a strategic advisor at the Nestle HQ in Switzerland.</p>

                <p>Subsequently she served as MD & CEO of Mattel India, moved to Tata Tea as Executive Director and later as President-South Asia for Tata Global Beverages. She led the launch of the “Jaago Re” campaign, the first social marketing campaign in India, which won international acclaim and several awards.</p>

                <p>From building brands and businesses she then moved to the social sector as Managing Director of NDDB Dairy Services and spearheaded the design and establishment of an innovative business model for creating sustainable livelihood for dairy farmers in rural India. She has served on several Tata Boards, Mother Dairy and IIM Kolkata.</p>

                <p>A few distinctions along the way:<br />Business Today 30 Most Powerful Women in Indian Business<br />India Today Woman in the Corporate World<br />Women Super Achievers Award for Outstanding Contribution to Social Marketing</p>
                
                <p>She now serves as an Independent Director on several large boards with businesses ranging across, FMCG, alternative energy, education, financial services & IT Infrastructure & hardware distribution. As one of the early and senior woman business professionals in India, she now leads a practice in Gender Diversity. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop21" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop21Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/8.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Managing Partner, DSK Legal</h5>
                <h3>Anand Desai</h3>
                <p>Having started his career in 1984 as a junior counsel in the Bombay High Court, Anand joined a firm of solicitors and advocates as a partner in 1991. In 2001 he set up DSK Legal as the Andersen Legal network firm in India. After Andersen Legal closed down (with Arthur Andersen) in 2002, Anand continued as the managing partner of DSK Legal. DSK Legal is known as one of the best law firms in India for the last several years.</p>

                <p>Anand has extensive specialist experience in the fields of banking laws, financial services, M&A, intellectual property rights, media and entertainment, real estate, and outsourcing issues, and advises various large corporates, funds and high networth individuals on diverse issues and represents them before various courts and other fora.</p>

                <p>Anand is listed as one of the leading lawyers in India in the Whos Who Legal (an International Bar Association publication) for Commercial Litigation, Real Estate, M&A and Regulatory Communication, and is also listed in also in Chambers Global, PLC Which Lawyer, IFLR, and Asia-Pacific Legal 500 for diverse practice areas. He has personally won, and his firm has won several awards in India and internationally, including his being awarded “Managing Partner of the Year 2014” by LegalEra.</p>

                <p>Anand has been a speaker at various fora including CII, ASSOCHAM, Indo-American Chamber of Commerce GOOS (1, 2 and 4), Economist Corporate Network, SILF, Indian Film Festival at Los Angeles, Wisconsin Department of Trade, University of Wisconsin etc., and is a resource at the National Judicial Academy, addressing a wide range of issues.</p>

                <p>Anand has served as the National President of the Indo-American Chamber of Commerce for the year 2011-2012 and has also served and continues to serve on various committees, including of the Indian Merchants Chamber, CII, the International section of the American Bar Association, and as vice-president of the Indian Society of Law Firms.</p>

                <p>Anand is currently involved with several well-known NGOs, and is a trustee of L&T Employees Welfare Foundation and director of L&T Employees Welfare Foundation Private Limited.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop22" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop22Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/9.png" alt="">
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Vice Chairman, Zensar Technologies</h5>
                <h3>Dr. Ganesh Natarajan</h3>  
                <p>He is the Vice Chairman of Zensar Technologies, a leading firm that optimises technology and processes for Fortune 500 companies. He is also a Founder and Board Member of Global Talent Track, a pioneer in Employability Skills Training in Asia.</p>

                <p>Ganesh’s industry responsibilities include leadership of the HBS Club of India, Chairman of the National Committee on Knowledge Management and Business Transformation and the Western Region Committee on Skills for the Confederation of Indian Industry. He was Chairman of NASSCOM in 2008 and is a member of the Chairmen’s Council of NASSCOM.</p>

                <p>He is also a fellow of the Computer Society of India. Ganesh is a Director of Social Venture Partners India and Convener of SVP Pune. He has been appointed the Chairman of NASSCOM Foundation for 2014-16.</p>
                
                <p>A Gold Medalist in Mechanical Engineering and Industrial Engineering, Dr Ganesh Natarajan has completed his PhD in Knowledge Management at IIT Bombay; Dr Natarajan is an alumnus of the Indian Institute of Technology Bombay and the Harvard Business School.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop23" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop23Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/10.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Country Director, India – Apple Services</h5>
                <h3>Ipsita Dasgupta</h3>
                <p>Ipsita Dasgupta is President – Corporate Strategy and Incubated Businesses at Star. Aside from heading group strategy, her mandate includes leading Hotstar International and Sports Leagues- specifically the Pro-Kabaddi League, the second most watched sport in India today. Ipsita’s work experience spans across the U.S., China, India and South-East Asia and across multiple sectors, including technology, general industrials, and consulting. Her focus at Star, along with Strategy, is to drive and grow the international digital business for Star and grow the Sports League Business. “The foundational strength and adaptive nature of high growth businesses establish their scalability and sustainability in the long term. To achieve this, it is essential to be able to see around corners and distil market signals from the noise.”</p>

                <p>Ipsita was the Chief Commercial Officer of GE South Asia and Greater China where she was responsible for strategy, new product and solutions, marketing and strategic customer accounts across GE businesses. She led ‘In India for India’ growth programs, sales force effectiveness for the region, and was responsible for GE Bangladesh.</p>

                <p>Prior to joining GE, Ipsita Dasgupta was Managing Director, Smart Connected Communities – Emerging Businesses, focused on developing business opportunities in Emerging Markets, specifically focused on the global, emerging middle class. Ipsita joined Cisco from IBM, where she worked since 2002, and has spanned strategy, marketing and operational roles in the U.S. and India. Some of her roles included building and driving marketing strategies and practices for IBM’s global hardware, software and services businesses; creating and leading IBM’s global senior consulting Center of Competency out of India; leading and strengthening IBM’s competitive intelligence/strategy practice for Corporate Headquarters.</p>
 
                <p>Ipsita holds a Bachelor’s degree in Mathematics and Economics from Columbia University, and a Masters in Business Administration from the Harvard Business School.</p> 
                
                <p>Ipsita is a member of the advisory boards of the Acumen Fund and Swades Foundation. Ipsita has held advisory board positions with the HBS Alumni Club of India, The HBS Social Enterprise Club of New York, The American Marketing Association, The China Advisory Council – AMA and Americares India Foundation.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal entrepreneur fade" id="staticBackdrop24" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop24Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/11.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="providewerap">
                <h5>MD & CEO, IL&FS Education & Skills</h5>
                <h3>RCM Reddy</h3>
                <p>RCM Reddy, Managing Director & CEO of IL&FS Education & Technology Services Ltd. is responsible for all social sector initiatives of IL&FS Group in the areas of education, skill development, e-governance, healthand cluster development. These companies are promoted by Infrastructure Leasing & Financial Services Ltd. (IL&FS), the leading infrastructure and financing company of India.</p>
                
                <p>He has designed and implemented several path-breaking initiatives in partnership with the government and industry in the areas of SME cluster development and skill development with focus on youth below poverty line.</p>
                
                <p>He is also actively engaged in several industry-government interface initiatives. He is the Chairman of FICCI Skills Forum, co-chair of FICCI MSME Committee, in addition to being the cochair of UK India Skills Forum.</p>

                <p>Reddy is a former Indian Administrative Service (IAS) officer, and before joining IL&FS, he worked with Government of India and Government of Tripura in various capacities. He also worked briefly with United Nations Industrial Development Organization (UNIDO) in the area of cluster development.</p>

                <p>Reddy holds a master’s degree in Urban & Regional Planning and a bachelor degree in Civil Engineering.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal entrepreneur fade" id="staticBackdrop25" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop25Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/12.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="providewerap">
                <h5>Jt. Managing Director and Promoter, Mukand Ltd.</h5>
                <h3>Suketu V Shah</h3>
                <p>Shah is currently the Jt. Managing Director and a promoter of Mukand Ltd., leading alloy, special and stainless-steel producer in India serving both national and international markets. He serves as the Chairman of the Alloy Steel Producers Association of India. A Harvard Business School graduate, Mr Shah has served as a chairman for Young President Organisation, Mumbai, Western Regional Council of Confederation of Indian Industries and is also a part of the National Council. He was formerly on the Board of UTV Software Communications Ltd.</p>

                <p>Founding Keventer Agro Ltd., Kolkata and Metro Dairy Ltd., Kolkata, Shah has demonstrated his high entrepreneurial spirits, where he served as the Founder and Director. He was conferred Doctorate of Human Letters by the board of trustees of Goodwin College, Connecticut, U.S.A for his contributions for Indo-Pak peace efforts.</p>
                
                <p>Shah’s hobbies and interests include art & music, trekking, travel, food, international affairs, writing and playing badminton. He hails from a family deeply involved in the freedom struggle, national affairs and social/philanthropic initiatives. He too has an abiding interest in these and has been involved in several social impact initiatives of his company and family.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="modal entrepreneur fade" id="staticBackdrop26" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop26Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modalbody">
          <div class="row">
            <div class="col-md-4">
              <div class="teamimg m-0">
                <img src="./assets/images/ourteam/13.png" alt="">
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="providewerap">
                <h3>Bernhard Steinruecke</h3>
                <p>Bernhard Steinruecke was born on 29 June 1955 in Frankfurt as the third of seven children of a banker. He studied Law and Economics in Vienna, Bonn, Geneva and finally at Heidelberg, where he passed the primary state examination in law in 1980 with distinction. This was followed by work as a junior lawyer and the secondary state examination in law at the Hanseatic High Court in Hamburg. In the interim, Mr. Steinruecke specialized in tax law and auditing and worked with the former company of what is today PwC – PricewaterhouseCoopers.</p>

                <p>In 1984 he joined Deutsche Bank AG, initially as a trainee. He was then Assistant to the Executive Board Member Dr. Herbert Zapp from 1986 to 1989. In 1989 he became a member of the Management Board of Deutsche Bank in Idar-Oberstein and in 1991, General Manager of Deutsche Bank in Colombo, Sri Lanka. This was followed by his first posting to India as General Manager of Deutsche Bank Mumbai, and Joint Chief Executive Officer – India. During this period he was also a Committee Member and Treasurer of the Indo-German Chamber of Commerce. From 1997 to 2003, Mr Steinruecke was the Managing Partner and Spokesperson on the board of ABC- Privatkundenbank with its headquarters in Berlin.</p>
                
                <p>From July 2003 to end March 2021, Mr Steinruecke was the Director General of the Indo-German Chamber of Commerce. He is on the board of various Indo-German and Indian companies, Chairman of the German International School in Mumbai.</p>
                
                <p>Since 2013, he is the Program Ambassador of the German Chancellor’s Fellowship Program of the Alexander von Humboldt Foundation in India and was the AHK World Speaker for five years from 2016.</p>
                
                <p>He is married to gallerist Ranjana Steinruecke, and they have two sons.</p>
              </div>
            </div>
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
  <?php include 'include/footer.php'; ?> <!-- Footer -->
</body>
</html>
