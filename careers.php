<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
require_once __DIR__ . '/include/cms.php';
$cmsJobs = cms_get_jobs();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Swades Foundation Careers</title>
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
    .modal-text ul {
      margin: 0 0 15px 20px !important;
      padding: 0 !important;
    }

    .modal-text ul li {
      margin-bottom: 6px !important;
      list-style-type: disc !important;
    }

    .modal-text ul li ul li {
      list-style-type: circle !important;
      margin-bottom: 4px !important;
    }

    .apply-btn {
      display: inline-block;
      background: #d9534f;
      /* red like bootstrap danger button */
      color: #fff;
      padding: 10px 25px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 15px;
      font-weight: 500;
      text-align: center;
      letter-spacing: 0px;
    }

    .apply-btn:hover {
      background: #c9302c;
      color: #fff;
      text-decoration: none;
    }

    @media (max-width: 767px) {
      #career-donate {
        margin-top: 115px !important;
      }
    }

    @media (max-width: 425.8px) {
      .titlewrap h3 {
        margin-top: -20px !important;
      }
    }
  </style>
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
        <h2><span>Join the Swades Team</span></h2>
        <p>If you're committed to helping rural India realize its full potential, we’d love to hear from you. Join us in
          building a stronger, self-reliant India from the grassroots up.</p>
      </div>

      <!-- <div class="inner-cover">
        <img src="./assets/images/careers/communities-begins.jpg" alt="" class="desktop">
        <img src="./assets/images/careers/communities-begins2.jpg" alt="" class="mobile">
        <a href="#" id="playbutton" class="palyicon"><img src="./assets/images/careers/palyicon.svg" alt=""></a>
      </div> -->

      <div class="inner-cover">
        <div class="bannerimg">
          <img src="./assets/images/careers/maxresdefaultcopy.jpg" alt="" class="desktop">
          <img src="./assets/images/careers/communities-begins2.jpg" alt="" class="mobile">
          <div class="bott--omcnt">
            <a href="#" id="playbutton" class="palyicon"><img src="./assets/images/about/play.svg" alt=""></a>
          </div>
        </div>
        <div class="video-cover2" id="videosection2">
          <!-- <video controls autoplay muted loop id="myvideo2">
              <source src="./assets/videos/video.mp4" type="video/mp4">
            </video> -->
          <iframe width="100" height="450" src="https://www.youtube.com/embed/17gni6-VX58?si=3rfkIWvRfUULe7GF"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <!--<iframe width="100" height="450"
            src="https://www.youtube.com/embed/Ss6P9N3KOWU?si=5Y_fR34RKBctsP9n&amp;start=2" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>-->
          <!-- <div class="closecover" id="closebtn">
              <a href="#" >Close</a>
            </div> -->
        </div>
      </div><!--banner-cover-->


    </div>
  </div><!---home-section-->

  <div class="openings-section">
    <div class="container">
      <div class="heading-hd">
        <h2>Latest Job Openings</h2>
      </div>

      <?php if ($cmsJobs): ?>
        <?php foreach ($cmsJobs as $cmsJob): ?>
          <div class="latest-list">
            <div class="row">
              <div class="col-5"><h4><?= htmlspecialchars($cmsJob['title'], ENT_QUOTES, 'UTF-8') ?></h4></div>
              <div class="col-3"><p><?= htmlspecialchars($cmsJob['location'] ?: 'India', ENT_QUOTES, 'UTF-8') ?></p></div>
              <div class="col-2"><p><?= htmlspecialchars(ucwords(str_replace('-', ' ', $cmsJob['type'] ?: 'full-time')), ENT_QUOTES, 'UTF-8') ?></p></div>
              <div class="col-2"><a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#cmsJobModal<?= (int) $cmsJob['id'] ?>">Know More</a></div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>

      <div class="latest-list">
        <div class="row">
          <div class="col-5">
            <h4> Coordinator/Sr. Coordinator-360 Degree</h4>
          </div>
          <div class="col-3">
            <p>Raigad</p>
          </div>
          <div class="col-2">
            <p>Full Time</p>
          </div>
          <div class="col-2">
            <a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#jobModal">Know More</a>
          </div>
        </div>
      </div>

      <div class="latest-list">
        <div class="row">
          <div class="col-5">
            <h4>Supervisor – 360 Degree</h4>
          </div>
          <div class="col-3">
            <p>Nashik, Raigad or any rural areas of Maharashtra.</p>
          </div>
          <div class="col-2">
            <p>Full Time</p>
          </div>
          <div class="col-2">
            <a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#jobModal2">Know More</a>
          </div>
        </div>
      </div>

      <div class="latest-list">
        <div class="row">
          <div class="col-5">
            <h4>Assistant Manager – Donor Engagement</h4>
          </div>
          <div class="col-3">
            <p>Mumbai</p>
          </div>
          <div class="col-2">
            <p>Full Time</p>
          </div>
          <div class="col-2">
            <a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#jobModal3">Know More</a>
          </div>
        </div>
      </div>

      <div class="latest-list">
        <div class="row">
          <div class="col-5">
            <h4>Sr. Coordinator/ Assistant Manager– Fundraising</h4>
          </div>
          <div class="col-3">
            <p>Mumbai</p>
          </div>
          <div class="col-2">
            <p>Full Time</p>
          </div>
          <div class="col-2">
            <a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#jobModal4">Know More</a>
          </div>
        </div>
      </div>

      <div class="latest-list border-bottom">
        <div class="row">
          <div class="col-5">
            <h4>Manager / Senior Manager – Fundraising</h4>
          </div>
          <div class="col-3">
            <p>Mumbai</p>
          </div>
          <div class="col-2">
            <p>Full Time</p>
          </div>
          <div class="col-2">
            <a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#jobModal5">Know More</a>
          </div>
        </div>
      </div>

      <!--<div class="more-btn text-center">
        <a href="#" class="btn">Load More</a>
      </div>-->

      <?php endif; ?>

    </div>
  </div><!--Location & More-->

  <?php if ($cmsJobs): ?>
    <?php foreach ($cmsJobs as $cmsJob): ?>
      <div class="modal fade" id="cmsJobModal<?= (int) $cmsJob['id'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><?= htmlspecialchars($cmsJob['title'], ENT_QUOTES, 'UTF-8') ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-text" style="padding: 30px;">
              <?= $cmsJob['description'] ?? '' ?>
              <?= $cmsJob['benefits'] ?? '' ?>
              <?= $cmsJob['requirements'] ?? '' ?>
              <?php if (!empty($cmsJob['experience'])): ?><p><strong>Experience:</strong> <?= htmlspecialchars($cmsJob['experience'], ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
              <p><strong>Employment type:</strong> <?= htmlspecialchars(ucwords(str_replace('-', ' ', $cmsJob['type'] ?: 'full-time')), ENT_QUOTES, 'UTF-8') ?></p>
            </div>
            <div style="text-align:center; margin: 15px 0;">
              <a href="mailto:careers@swadesfoundation.org?subject=Application: <?= rawurlencode($cmsJob['title']) ?>" class="apply-btn">Apply Now</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>


  <div class="celebrating-section">
    <div class="container">
      <div class="heading-hd">
        <h2><span>Celebrating Our People</span></h2>
      </div>

      <div class="gridlayer3 mobile-scroll">
        <div class="effort-box rewards-werap">
          <div class="owl-carouselowl-theme">
            <div class="effort-img">
              <img src="./assets/images/careers/Rewards.svg" alt="">
            </div>
            <!-- <div class="effort-img">
              <img src="./assets/images/careers/Rewards.svg" alt="">
            </div>
            <div class="effort-img">
              <img src="./assets/images/careers/Rewards.svg" alt="">
            </div>-->
          </div><!---CSRslider-->

          <div class="effort-cnt">
            <h5><span>Rewards and Recognition</span></h5>
            <p>Swades’ annual cultural celebration is a lively tradition that combines recognition with
              celebration—honouring exceptional work through awards and showcasing team spirit through spirited
              performances.
            </p>
          </div>
        </div><!----rewards-werap-->

        <div class="effort-box rewards-werap">
          <div class="owl-carouselowl-theme">
            <div class="effort-img">
              <img src="./assets/images/careers/Sports.svg" alt="">
            </div>
            <!-- <div class="effort-img">
              <img src="./assets/images/careers/Sports.svg" alt="">
            </div>
            <div class="effort-img">
              <img src="./assets/images/careers/Sports.svg" alt="">
            </div>-->
          </div><!---CSRslider-->

          <div class="effort-cnt">
            <h5><span>Swades Sports Day</span></h5>
            <p>Our annual Sports Day is a fun-filled celebration of team spirit and friendly competition, featuring
              games like cricket, volleyball, sprints, and classic races—all about showing up, cheering loud, and
              enjoying the game.
            </p>
          </div>
        </div><!----rewards-werap-->


        <div class="effort-box rewards-werap">
          <div class="owl-carouselowl-theme">
            <div class="effort-img">
              <img src="./assets/images/careers/careers-page.png" alt="">
            </div>
            <!--<div class="effort-img">
              <img src="./assets/images/careers/festive-spirits.svg" alt="">
            </div>
            <div class="effort-img">
              <img src="./assets/images/careers/festive-spirits.svg" alt="">
            </div>-->
          </div><!---CSRslider-->

          <div class="effort-cnt">
            <h5><span>Festive Spirits</span></h5>
            <p>At Swades, we celebrate festivals with joy—honouring traditions while bringing colour, culture, and cheer
              to the workplace.
            </p>
          </div>
        </div><!----rewards-werap-->

      </div>
    </div>
  </div><!---celebrating-section-->

  <div class="thriving-section">
    <div class="container">
      <div class="immediate-bg overly desktop" style="background-image: url('./assets/images/careers/SWADES.png');">
        <div class="titlewrap" id="career-donate">
          <h3>Light Up <br /> Rural Classrooms</h3>
          <p>Bring solar power to schools for joyful, uninterrupted learning</p>
          <a href="Donate" class="btn desktop">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div>
      <div class="immediate-bg overly mobile" style="background-image: url('./assets/images/careers/Careers.jpg');">
        <div class="titlewrap" id="career-donate">
          <h3>Light Up <br /> Rural Classrooms</h3>
          <p>Bring solar power to schools for joyful, uninterrupted learning</p>
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
  <?php include 'include/footer.php'; ?> <!-- Footer -->
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>
  <!-- Job Details Modal -->
  <div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="jobModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="jobModalLabel">Coordinator / Sr. Coordinator – 360 Degree Department</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body modal-text" style="padding: 30px;">
          <p>Swades Foundation is not for profit organization founded by Ronnie and Zarina Screwvala, It operates with
            the single-minded focus of empowering rural India. Our vision is rural empowerment through best practices,
            modern technology and values. More information can be found at</p>
          <a href="https://swadesfoundation.org/careers/">www.swadesfoundation.org</a>
          <p>We seeking to hire <b>Coordinator/Sr. Coordinator</b> in our <b>360 Degree department.</b></p>
          <p><b>Reporting to:</b>Trainee Assistant Manager/Manager- 360 Degree</p>

          <h4>A) Roles & Responsibilities</h4>
          <ul>
            <li>Help the team to successfully accomplish the Mission and Vision of the Foundation
              <ul>
                <li>Create Awareness about Swades through group meetings.</li>
                <li>Build connect and generate interest among villagers/community to align with Swades Mission.</li>
                <li>Create Gram Vikas Samiti and make Village Development Plan with community with 2 to 3 years roadmap.
                </li>
              </ul>
            </li>

            <li>Knowing the community and the existing eco-system
              <ul>
                <li>Conduct surveys/HH profiling of high priority HH for water, irrigation, employment, dairy, health
                  etc.</li>
                <li>Village profiling at least once in six months.</li>
              </ul>
            </li>

            <li>Enhancing income levels of HH and Villages through sustainable activities
              <ul>
                <li>Water for irrigation, livelihood, enterprise development, orchards, animal husbandry etc.</li>
              </ul>
            </li>

            <li>Identify Health interventions and implement programs</li>

            <li>Education interventions
              <ul>
                <li>Identify schools requiring interventions.</li>
                <li>Visit schools and Anganwadis.</li>
                <li>Coordinate with partners and carry out assessments.</li>
              </ul>
            </li>

            <li>Water, Sanitation & Green Initiatives
              <ul>
                <li>Identify drinking Water, Sanitation & Green Initiatives needs.</li>
                <li>Implement schemes with Gram Vikas Samiti.</li>
              </ul>
            </li>

            <li>Creating sustainable community institutions through VDC
              <ul>
                <li>Engage and manage village-level stakeholders.</li>
                <li>Develop groups: SHGs, Farmers Groups, Youth groups etc.</li>
                <li>Capacity building for groups.</li>
                <li>Attend Gram Sabha.</li>
              </ul>
            </li>

            <li>Coordination with Swades technical team, partners, vendors, officials.</li>

            <li>Government Linkages
              <ul>
                <li>Coordinate with Sarpanch, Sevak, Talathi, Medical Officer, ASHA, ANM, Teachers etc.</li>
              </ul>
            </li>

            <li>Knowledge Management & Learnings
              <ul>
                <li>Share insights, successes, failures.</li>
                <li>Conduct exposure visits.</li>
                <li>Write case studies.</li>
              </ul>
            </li>

            <li>Execution
              <ul>
                <li>Implement strategies as per standards & timelines.</li>
                <li>Regular monitoring.</li>
                <li>Support Manager in identifying challenges.</li>
              </ul>
            </li>

            <li>MIS
              <ul>
                <li>Collate all program information.</li>
                <li>Track progress against goals.</li>
                <li>Maintain accurate records.</li>
              </ul>
            </li>
          </ul>

          <h4>B) Additional Skills</h4>
          <ul>
            <li>Communication & Public Speaking</li>
            <li>Problem Solving</li>
            <li>Basic Computer Skills</li>
            <li>Public Engagement</li>
            <li>Community Mobilization</li>
            <li>Strong rural community knowledge</li>
          </ul>

          <h4>C) Eligibility</h4>
          <ul>
            <li>Any Graduate or Post Graduate</li>
            <li>3+ years experience in Social Sector</li>
          </ul>

          <h4>D) Location</h4>
          <p>Raigad</p>

        </div>
        <div style="text-align:center; margin-top: 15px;margin-bottom: 10px; position: relative;">
          <a href="mailto:careers@swadesfoundation.org" class="apply-btn">Apply Now</a>
        </div>
        <div class="modal-footer">
          <!--<button class="btn btn-danger">Apply Now</button>-->
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
  <!-- Job-2 Details Modal -->
  <div class="modal fade" id="jobModal2" tabindex="-1" aria-labelledby="jobModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="jobModal2Label">Supervisor – 360 Degree</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body modal-text" style="padding: 30px;">
          <p>Swades Foundation is not for profit organization founded by Ronnie and Zarina Screwvala, It operates with
            the single-minded focus of empowering rural India. Our vision is rural empowerment through best practices,
            modern technology and values. More information can be found at</p>
          <a href="https://swadesfoundation.org/careers/">www.swadesfoundation.org</a>
          <p>We seeking to hire <b>Coordinator/Sr. Coordinator</b> in our <b>360 Degree department.</b></p>
          <p><b>Reporting to:</b>Trainee Assistant Manager/Manager- 360 Degree</p>

          <h4>A) Roles & Responsibilities</h4>
          <ul>
            <li>Help the team to successfully accomplish the Mission and Vision of the Foundation
              <ul>
                <li>Create Awareness about Swades through group meetings.</li>
                <li>Build connect and generate interest among villagers/community to align with Swades Mission.</li>
                <li>Create Gram Vikas Samiti and make Village Development Plan with community with 2 to 3 years roadmap.
                </li>
              </ul>
            </li>

            <li>Knowing the community and the existing eco-system
              <ul>
                <li>Conduct surveys/HH profiling of high priority HH for water, irrigation, employment, dairy, health
                  etc.</li>
                <li>Village profiling at least once in six months.</li>
              </ul>
            </li>

            <li>Enhancing income levels of HH and Villages through sustainable activities
              <ul>
                <li>Water for irrigation, livelihood, enterprise development, orchards, animal husbandry etc.</li>
              </ul>
            </li>

            <li>Identify Health interventions and implement programs</li>

            <li>Education interventions
              <ul>
                <li>Identify schools requiring interventions.</li>
                <li>Visit schools and Anganwadis.</li>
                <li>Coordinate with partners and carry out assessments.</li>
              </ul>
            </li>

            <li>Water, Sanitation & Green Initiatives
              <ul>
                <li>Identify drinking Water, Sanitation & Green Initiatives needs.</li>
                <li>Implement schemes with Gram Vikas Samiti.</li>
              </ul>
            </li>

            <li>Creating sustainable community institutions through VDC
              <ul>
                <li>Engage and manage village-level stakeholders.</li>
                <li>Develop groups: SHGs, Farmers Groups, Youth groups etc.</li>
                <li>Capacity building for groups.</li>
                <li>Attend Gram Sabha.</li>
              </ul>
            </li>

            <li>Coordination with Swades technical team, partners, vendors, officials.</li>

            <li>Government Linkages
              <ul>
                <li>Coordinate with Sarpanch, Sevak, Talathi, Medical Officer, ASHA, ANM, Teachers etc.</li>
              </ul>
            </li>

            <li>Knowledge Management & Learnings
              <ul>
                <li>Share insights, successes, failures.</li>
                <li>Conduct exposure visits.</li>
                <li>Write case studies.</li>
              </ul>
            </li>

            <li>Execution
              <ul>
                <li>Implement strategies as per standards & timelines.</li>
                <li>Regular monitoring.</li>
                <li>Support Manager in identifying challenges.</li>
              </ul>
            </li>

            <li>MIS
              <ul>
                <li>Collate all program information.</li>
                <li>Track progress against goals.</li>
                <li>Maintain accurate records.</li>
              </ul>
            </li>
          </ul>

          <h4>B) Additional Skills</h4>
          <ul>
            <li>Communication & Public Speaking</li>
            <li>Problem Solving</li>
            <li>Basic Computer Skills</li>
            <li>Public Engagement</li>
            <li>Community Mobilization</li>
            <li>Strong rural community knowledge</li>
          </ul>

          <h4>C) Eligibility</h4>
          <ul>
            <li>Any Graduate or Post Graduate</li>
            <li>3+ years experience in Social Sector</li>
          </ul>

          <h4>D) Location</h4>
          <p>Nashik, Raigad or any rural areas of Maharashtra.</p>

        </div>
        <div style="text-align:center; margin-top: 15px;margin-bottom: 10px; position: relative;">
          <a href="mailto:careers@swadesfoundation.org" class="apply-btn">Apply Now</a>
        </div>
        <div class="modal-footer">
          <!--<button class="btn btn-danger">Apply Now</button>-->
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
  <!-- Job-3 Details Modal -->
  <div class="modal fade" id="jobModal3" tabindex="-1" aria-labelledby="jobModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="jobModal3Label">Assistant Manager – Donor Engagement</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body modal-text" style="padding: 30px;">
          <p>Swades Foundation is not for profit organization founded by Ronnie and Zarina Screwvala, It operates with
            the single-minded focus of empowering rural India. Our vision is rural empowerment through best practices,
            modern technology and values. More information can be found at</p>
          <a href="https://swadesfoundation.org/careers/">www.swadesfoundation.org</a>
          <p>We seeking to hire <b>Coordinator/Sr. Coordinator</b> in our <b>360 Degree department.</b></p>
          <p><b>Reporting to:</b>Trainee Assistant Manager/Manager- 360 Degree</p>

          <h4>A) Roles & Responsibilities</h4>
          <ul>
            <li>Help the team to successfully accomplish the Mission and Vision of the Foundation
              <ul>
                <li>Create Awareness about Swades through group meetings.</li>
                <li>Build connect and generate interest among villagers/community to align with Swades Mission.</li>
                <li>Create Gram Vikas Samiti and make Village Development Plan with community with 2 to 3 years roadmap.
                </li>
              </ul>
            </li>

            <li>Knowing the community and the existing eco-system
              <ul>
                <li>Conduct surveys/HH profiling of high priority HH for water, irrigation, employment, dairy, health
                  etc.</li>
                <li>Village profiling at least once in six months.</li>
              </ul>
            </li>

            <li>Enhancing income levels of HH and Villages through sustainable activities
              <ul>
                <li>Water for irrigation, livelihood, enterprise development, orchards, animal husbandry etc.</li>
              </ul>
            </li>

            <li>Identify Health interventions and implement programs</li>

            <li>Education interventions
              <ul>
                <li>Identify schools requiring interventions.</li>
                <li>Visit schools and Anganwadis.</li>
                <li>Coordinate with partners and carry out assessments.</li>
              </ul>
            </li>

            <li>Water, Sanitation & Green Initiatives
              <ul>
                <li>Identify drinking Water, Sanitation & Green Initiatives needs.</li>
                <li>Implement schemes with Gram Vikas Samiti.</li>
              </ul>
            </li>

            <li>Creating sustainable community institutions through VDC
              <ul>
                <li>Engage and manage village-level stakeholders.</li>
                <li>Develop groups: SHGs, Farmers Groups, Youth groups etc.</li>
                <li>Capacity building for groups.</li>
                <li>Attend Gram Sabha.</li>
              </ul>
            </li>

            <li>Coordination with Swades technical team, partners, vendors, officials.</li>

            <li>Government Linkages
              <ul>
                <li>Coordinate with Sarpanch, Sevak, Talathi, Medical Officer, ASHA, ANM, Teachers etc.</li>
              </ul>
            </li>

            <li>Knowledge Management & Learnings
              <ul>
                <li>Share insights, successes, failures.</li>
                <li>Conduct exposure visits.</li>
                <li>Write case studies.</li>
              </ul>
            </li>

            <li>Execution
              <ul>
                <li>Implement strategies as per standards & timelines.</li>
                <li>Regular monitoring.</li>
                <li>Support Manager in identifying challenges.</li>
              </ul>
            </li>

            <li>MIS
              <ul>
                <li>Collate all program information.</li>
                <li>Track progress against goals.</li>
                <li>Maintain accurate records.</li>
              </ul>
            </li>
          </ul>

          <h4>B) Additional Skills</h4>
          <ul>
            <li>Communication & Public Speaking</li>
            <li>Problem Solving</li>
            <li>Basic Computer Skills</li>
            <li>Public Engagement</li>
            <li>Community Mobilization</li>
            <li>Strong rural community knowledge</li>
          </ul>

          <h4>C) Eligibility</h4>
          <ul>
            <li>Any Graduate or Post Graduate</li>
            <li>3+ years experience in Social Sector</li>
          </ul>

          <h4>D) Location</h4>
          <p>Mumbai</p>

        </div>
        <div style="text-align:center; margin-top: 15px;margin-bottom: 10px; position: relative;">
          <a href="mailto:careers@swadesfoundation.org" class="apply-btn">Apply Now</a>
        </div>
        <div class="modal-footer">
          <!--<button class="btn btn-danger">Apply Now</button>-->
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
  <!-- Job-4 Details Modal -->
  <div class="modal fade" id="jobModal4" tabindex="-1" aria-labelledby="jobModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="jobModal4Label">Sr. Coordinator/ Assistant Manager– Fundraising</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body modal-text" style="padding: 30px;">
          <p>Swades Foundation is not for profit organization founded by Ronnie and Zarina Screwvala, It operates with
            the single-minded focus of empowering rural India. Our vision is rural empowerment through best practices,
            modern technology and values. More information can be found at</p>
          <a href="https://swadesfoundation.org/careers/">www.swadesfoundation.org</a>
          <p>We seeking to hire <b>Coordinator/Sr. Coordinator</b> in our <b>360 Degree department.</b></p>
          <p><b>Reporting to:</b>Trainee Assistant Manager/Manager- 360 Degree</p>

          <h4>A) Roles & Responsibilities</h4>
          <ul>
            <li>Help the team to successfully accomplish the Mission and Vision of the Foundation
              <ul>
                <li>Create Awareness about Swades through group meetings.</li>
                <li>Build connect and generate interest among villagers/community to align with Swades Mission.</li>
                <li>Create Gram Vikas Samiti and make Village Development Plan with community with 2 to 3 years roadmap.
                </li>
              </ul>
            </li>

            <li>Knowing the community and the existing eco-system
              <ul>
                <li>Conduct surveys/HH profiling of high priority HH for water, irrigation, employment, dairy, health
                  etc.</li>
                <li>Village profiling at least once in six months.</li>
              </ul>
            </li>

            <li>Enhancing income levels of HH and Villages through sustainable activities
              <ul>
                <li>Water for irrigation, livelihood, enterprise development, orchards, animal husbandry etc.</li>
              </ul>
            </li>

            <li>Identify Health interventions and implement programs</li>

            <li>Education interventions
              <ul>
                <li>Identify schools requiring interventions.</li>
                <li>Visit schools and Anganwadis.</li>
                <li>Coordinate with partners and carry out assessments.</li>
              </ul>
            </li>

            <li>Water, Sanitation & Green Initiatives
              <ul>
                <li>Identify drinking Water, Sanitation & Green Initiatives needs.</li>
                <li>Implement schemes with Gram Vikas Samiti.</li>
              </ul>
            </li>

            <li>Creating sustainable community institutions through VDC
              <ul>
                <li>Engage and manage village-level stakeholders.</li>
                <li>Develop groups: SHGs, Farmers Groups, Youth groups etc.</li>
                <li>Capacity building for groups.</li>
                <li>Attend Gram Sabha.</li>
              </ul>
            </li>

            <li>Coordination with Swades technical team, partners, vendors, officials.</li>

            <li>Government Linkages
              <ul>
                <li>Coordinate with Sarpanch, Sevak, Talathi, Medical Officer, ASHA, ANM, Teachers etc.</li>
              </ul>
            </li>

            <li>Knowledge Management & Learnings
              <ul>
                <li>Share insights, successes, failures.</li>
                <li>Conduct exposure visits.</li>
                <li>Write case studies.</li>
              </ul>
            </li>

            <li>Execution
              <ul>
                <li>Implement strategies as per standards & timelines.</li>
                <li>Regular monitoring.</li>
                <li>Support Manager in identifying challenges.</li>
              </ul>
            </li>

            <li>MIS
              <ul>
                <li>Collate all program information.</li>
                <li>Track progress against goals.</li>
                <li>Maintain accurate records.</li>
              </ul>
            </li>
          </ul>

          <h4>B) Additional Skills</h4>
          <ul>
            <li>Communication & Public Speaking</li>
            <li>Problem Solving</li>
            <li>Basic Computer Skills</li>
            <li>Public Engagement</li>
            <li>Community Mobilization</li>
            <li>Strong rural community knowledge</li>
          </ul>

          <h4>C) Eligibility</h4>
          <ul>
            <li>Any Graduate or Post Graduate</li>
            <li>3+ years experience in Social Sector</li>
          </ul>

          <h4>D) Location</h4>
          <p>Mumbai</p>

        </div>
        <div style="text-align:center; margin-top: 15px;margin-bottom: 10px; position: relative;">
          <a href="mailto:careers@swadesfoundation.org" class="apply-btn">Apply Now</a>
        </div>
        <div class="modal-footer">
          <!--<button class="btn btn-danger">Apply Now</button>-->
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
  <!-- Job-5 Details Modal -->
  <div class="modal fade" id="jobModal5" tabindex="-1" aria-labelledby="jobModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="jobModal5Label">Manager / Senior Manager – Fundraising</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body modal-text" style="padding: 30px;">
          <p>Swades Foundation is not for profit organization founded by Ronnie and Zarina Screwvala, It operates with
            the single-minded focus of empowering rural India. Our vision is rural empowerment through best practices,
            modern technology and values. More information can be found at</p>
          <a href="https://swadesfoundation.org/careers/">www.swadesfoundation.org</a>
          <p>We seeking to hire <b>Coordinator/Sr. Coordinator</b> in our <b>360 Degree department.</b></p>
          <p><b>Reporting to:</b>Trainee Assistant Manager/Manager- 360 Degree</p>

          <h4>A) Roles & Responsibilities</h4>
          <ul>
            <li>Help the team to successfully accomplish the Mission and Vision of the Foundation
              <ul>
                <li>Create Awareness about Swades through group meetings.</li>
                <li>Build connect and generate interest among villagers/community to align with Swades Mission.</li>
                <li>Create Gram Vikas Samiti and make Village Development Plan with community with 2 to 3 years roadmap.
                </li>
              </ul>
            </li>

            <li>Knowing the community and the existing eco-system
              <ul>
                <li>Conduct surveys/HH profiling of high priority HH for water, irrigation, employment, dairy, health
                  etc.</li>
                <li>Village profiling at least once in six months.</li>
              </ul>
            </li>

            <li>Enhancing income levels of HH and Villages through sustainable activities
              <ul>
                <li>Water for irrigation, livelihood, enterprise development, orchards, animal husbandry etc.</li>
              </ul>
            </li>

            <li>Identify Health interventions and implement programs</li>

            <li>Education interventions
              <ul>
                <li>Identify schools requiring interventions.</li>
                <li>Visit schools and Anganwadis.</li>
                <li>Coordinate with partners and carry out assessments.</li>
              </ul>
            </li>

            <li>Water, Sanitation & Green Initiatives
              <ul>
                <li>Identify drinking Water, Sanitation & Green Initiatives needs.</li>
                <li>Implement schemes with Gram Vikas Samiti.</li>
              </ul>
            </li>

            <li>Creating sustainable community institutions through VDC
              <ul>
                <li>Engage and manage village-level stakeholders.</li>
                <li>Develop groups: SHGs, Farmers Groups, Youth groups etc.</li>
                <li>Capacity building for groups.</li>
                <li>Attend Gram Sabha.</li>
              </ul>
            </li>

            <li>Coordination with Swades technical team, partners, vendors, officials.</li>

            <li>Government Linkages
              <ul>
                <li>Coordinate with Sarpanch, Sevak, Talathi, Medical Officer, ASHA, ANM, Teachers etc.</li>
              </ul>
            </li>

            <li>Knowledge Management & Learnings
              <ul>
                <li>Share insights, successes, failures.</li>
                <li>Conduct exposure visits.</li>
                <li>Write case studies.</li>
              </ul>
            </li>

            <li>Execution
              <ul>
                <li>Implement strategies as per standards & timelines.</li>
                <li>Regular monitoring.</li>
                <li>Support Manager in identifying challenges.</li>
              </ul>
            </li>

            <li>MIS
              <ul>
                <li>Collate all program information.</li>
                <li>Track progress against goals.</li>
                <li>Maintain accurate records.</li>
              </ul>
            </li>
          </ul>

          <h4>B) Additional Skills</h4>
          <ul>
            <li>Communication & Public Speaking</li>
            <li>Problem Solving</li>
            <li>Basic Computer Skills</li>
            <li>Public Engagement</li>
            <li>Community Mobilization</li>
            <li>Strong rural community knowledge</li>
          </ul>

          <h4>C) Eligibility</h4>
          <ul>
            <li>Any Graduate or Post Graduate</li>
            <li>3+ years experience in Social Sector</li>
          </ul>

          <h4>D) Location</h4>
          <p>Mumbai</p>

        </div>
        <div style="text-align:center; margin-top: 15px;margin-bottom: 10px; position: relative;">
          <a href="mailto:careers@swadesfoundation.org" class="apply-btn">Apply Now</a>
        </div>
        <div class="modal-footer">
          <!--<button class="btn btn-danger">Apply Now</button>-->
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

</body>

</html>
