<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
require_once __DIR__ . '/include/cms.php';
$cmsDocuments = cms_get_documents();
$reportCategories = [
    'annual_report' => 'Annual Reports',
    'audited' => 'Audited Statements',
    'fc6' => 'FCRA reports FC6',
    'fc4' => 'FCRA reports FC4',
];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Swades Foundation Media Publications</title>
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
<style>
  .legacy-reports { display: none !important; }
</style>
</head>
<body>
  <header id="header" class="home-header inner-contact">
    <div class="container">
      <div class="header-menu">

        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="index.php">
            <img src="./assets/images/inner-page-logo.svg" alt="">
          </a>

          <div class="nav-container collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav navmenu innermenu mx-auto">

              <li class="nav-item"><a href="#"><span> Who we are </span>
                  <i class="fas fa-angle-down toggle-dropdown rotate"></i></a>
                <ul class="dropdown">
                  <li><a href="about-us.php">Our Story</a></li>
                  <li><a href="our-team.php">Our Team</a></li>
                  <li><a href="awards-recognition.php">Awards and Recognition</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="impact.php">Our Impact</a></li>

              <li class="nav-item"><a href="#"><span> Our Work </span>
                  <i class="fas fa-angle-down toggle-dropdown rotate"></i></a>
                <ul class="dropdown">
                  <li><a href="water-sanitation.php">Water, Sanitation & Green Initiatives</a></li>
                  <li><a href="work-health.php">Health</a></li>
                  <li><a href="work-education.php">Education</a></li>
                  <li><a href="Work-economic-Development.php">Economic Development</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="dream-village.php">Swades Dream Village</a></li>

              <li class="nav-item"><a href="media-publications.php">Media & Publication</a><!--<span> Resource Centre </span>
                  <i class="fas fa-angle-down toggle-dropdown rotate"></i></a>
                <ul class="dropdown">
                  <li><a href="#">Our Story</a></li>
                  <li><a href="#">Our Story</a></li>
                </ul>-->
              </li>

              <li class="nav-item"><a href="#"><span> Get Involved </span>
                  <i class="fas fa-angle-down toggle-dropdown rotate"></i></a>
                <ul class="dropdown">
                  <li><a href="CSR.php">CSR</a></li>
                  <li><a href="volunteers.php">Volunteer</a></li>
                  <li><a href="careers.php">Careers</a></li>
                  <li><a href="Donate.php">Donate</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="NSE-SSE.php">NSE | SSE</a></li>
            </ul>

            <div class="donate-button innerbtn desktop">
              <a href="Donate.php" class="btn">Donate <i class="fa-solid fa-heart"></i></a>
            </div>

          </div>

          <div class="naviconmobile">
            <div class="donate-button mobile">
              <a href="Donate.php" class="btn">Donate <img src="./assets/images/heart.svg" alt=""></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <div class="menu-icon">
                <span class="navicon"></span>
              </div>
            </button>
          </div>
        </nav>

      </div>
    </div>
  </header><!----home-header-->


  <div class="impact-section blogs-pages" id="blogs">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>Blogs</h2>
      </div><!--heading-hd-->

      <!--<div class="custom-tabs">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link " id="pills-Sanitation-tab" data-bs-toggle="pill" data-bs-target="#pills-Sanitation"
              type="button" role="tab" aria-controls="pills-Sanitation" aria-selected="true">Water, Sanitation & Green Initiatives</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-Health-tab" data-bs-toggle="pill" data-bs-target="#pills-Health"
              type="button" role="tab" aria-controls="pills-Health" aria-selected="false">Health & Nutrition</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Education-tab" data-bs-toggle="pill" data-bs-target="#pills-Education"
              type="button" role="tab" aria-controls="pills-Education" aria-selected="false">Education</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Economic-tab" data-bs-toggle="pill" data-bs-target="#pills-Economic"
              type="button" role="tab" aria-controls="pills-Economic" aria-selected="false">Economic
              Development</button>
          </li>
         <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Climate-tab" data-bs-toggle="pill" data-bs-target="#pills-Climate"
              type="button" role="tab" aria-controls="pills-Climate" aria-selected="false">Climate Action</button>
          </li>
        </ul>
      </div>-->


      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade" id="pills-Sanitation" role="tabpanel" aria-labelledby="pills-Sanitation-tab">
          <div class="blog-werap">
            <div class="gridlayer3">
              <div class="blog-card">
                <div class="blog-img">
                  <img src="./assets/images/Blogs/gyanmitra.svg" alt="">
                  <!--<span class="category education">Education</span>-->
                </div>
                <div class="blog-content">
                  <small>27/6/2024</small>
                  <h4>A health champion making lasting impact
                  </h4>
                  <a href="aarti-sudhir-pawar.php" class="read-more">Read Blog <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>

              <div class="blog-card">
                <div class="blog-img">
                  <img src="./assets/images/home/health.png" alt="">
                  <!--<span class="category economic">Economic Development</span>-->
                </div>
                <div class="blog-content">
                  <small>07/3/2024</small>
                  <h4>How a young farmer has transformed his familes paddy fields into thriving farms</h4>
                  <a href="sweet-homecoming.php" class="read-more">Read Blog <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>

              <div class="blog-card">
                <div class="blog-img">
                  <img src="./assets/images/home/ed.png" alt="">
                  <!--<span class="category health">Health & Nutrition</span>-->
                </div>
                <div class="blog-content">
                  <small>11/1/2024</small>
                  <h4>What's in name (plate)?</h4>
                  <a href="what-is-name-plate.php" class="read-more">Read Blog <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>


            </div>
          </div>

          <!--<div class="more-btn text-center">
            <a href="#" class="btn">Load More</a>
          </div>-->
        </div>

        <div class="tab-pane fade show active" id="pills-Health" role="tabpanel" aria-labelledby="pills-Health-tab">
          <div class="blog-werap">
            <div class="gridlayer3">
              <div class="blog-card">
                <div class="blog-img">
                  <img src="./assets/images/home/health.png" alt="">
                  <!--<span class="category education">Education</span>-->
                </div>
                <div class="blog-content">
                  <small>27/6/2024</small>
                  <h4>A health champion making lasting impact</h4>
                  <a href="aarti-sudhir-pawar.php" class="read-more">Read Blog <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>

              <div class="blog-card">
                <div class="blog-img">
                  <img src="./assets/images/home/ed.png" alt="">
                  <!--<span class="category economic">Economic Development</span>-->
                </div>
                <div class="blog-content">
                  <small>07/3/2024</small>
                  <h4>Sweet homecoming</h4>
                  <a href="sweet-homecoming.php" class="read-more">Read Blog <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>

              <div class="blog-card">
                <div class="blog-img">
                  <img src="./assets/images/Blogs/Cancer.svg" alt="">
                  <!--<span class="category health">Health & Nutrition</span>-->
                </div>
                <div class="blog-content">
                  <small>11/1/2024</small>
                  <h4>What's in name (plate)?</h4>
                  <a href="what-is-name-plate.php" class="read-more">Read Blog <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>


            </div>
          </div>

          <!--<div class="more-btn text-center">
            <a href="#" class="btn">Load More</a>
          </div>--><!---more-btn-->

        </div><!--pills-Health-tab-->


        <div class="tab-pane fade" id="pills-Education" role="tabpanel" aria-labelledby="pills-Education-tab">
          .Education..</div>

        <div class="tab-pane fade" id="pills-Economic" role="tabpanel" aria-labelledby="pills-Economic-tab">.Economic..
        </div>

        <div class="tab-pane fade" id="pills-Climate" role="tabpanel" aria-labelledby="pills-Climate-tab">.Climate
          Action..</div>
      </div>
    </div>
  </div><!---impact-section-->

  <div class="media-section" id="newsmedia">
    <div class="container">
      <!--<div class="heading-hd text-center">
        <h2>News and Media</h2>
      </div>--><!--heading-hd-->

      <!--<div class="media-werap">
        <div class="row">
          <div class="col-md-6">
            <div class="featured-card">
              <div class="blog-img">
                <img src="./assets/images/Blogs/dream-village1.svg" alt="">
                <span class="tag">Education</span>
              </div>
              <div class="blog-content">
                <small>27/6/2024</small>
                <h5>FE Lifestyle</h5>
                <p>Swades Foundation’s 75 dream villages project nears completion, aims on building 750 more dream
                  villages across rural Maharashtra</p>
                <a href="#" class="read-more">Read Blog <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="featured-card">
              <div class="blog-img">
                <img src="./assets/images/Blogs/dream-village2.svg" alt="">
                <span class="tag">Education</span>
              </div>
              <div class="blog-content">
                <small>27/6/2024</small>
                <h5>The Logical Indian</h5>
                <p>
                  This Nonprofit Celebrates 75 Dream Villages To Mark India's 75th Year Of Independence</p>
                <a href="#" class="read-more">Read Blog <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>--><!--media-werap-->

      <div class="coverage-section">
        <div class="heading-hd mb-3">
          <h2>All Coverage</h2>
        </div><!--heading-hd-->

        <div class="custom-tabs">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-Electronic-tab" data-bs-toggle="pill"
                data-bs-target="#pills-Electronic" type="button" role="tab" aria-controls="pills-Electronic"
                aria-selected="true">Digital</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-Print-tab" data-bs-toggle="pill" data-bs-target="#pills-Print"
                type="button" role="tab" aria-controls="pills-Print" aria-selected="false">Print Coverage</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-Videos-tab" data-bs-toggle="pill" data-bs-target="#pills-Videos"
                type="button" role="tab" aria-controls="pills-Videos" aria-selected="false">Videos</button>
            </li>
          </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-Electronic" role="tabpanel"
            aria-labelledby="pills-Electronic-tab">
            <div class="gridlayer3">
              <div class="featured-card">
                <div class="blog-img">
                  <img src="./assets/images/Blogs/Is-this-heading-grammatically-correct-properly-punctuated-and-suitable-for-that-news-article-AAP-Labels-PM-Modi-Amit-Shah-Rahul-Gandhi-As-Dishonest-In-Scathing-Attack-On-Opposition-Leaders-2-1.jpg" alt="">
                </div>
                <div class="blog-content">
                  <small>11/06/2025</small>
                  <h5>CSR Journal</h5>
                  <p>CSR News: U Mumba and Swades Foundation Light up Rural Homes in Maharashtra with Solar Power</p>
                  <br />
                  <a href="https://thecsrjournal.in/csr-news-swades-foundation-light-rural-homes-maharashtra-solar-power/" class="read-more" target="_blank">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>

              <div class="featured-card">
                <div class="blog-img">
                  <img src="./assets/images/Blogs/bloombergquint_2024-07_7ce2792d-05a9-4534-ae3a-deed785b70ee_nse.jpg" alt="">
                </div>
                <div class="blog-content">
                  <small>11/06/2025</small>
                  <h5>CSR Universe</h5>
                  <p>Swades Foundation And U Mumba Light Up Rural Homes With Solar Power</p>
                  <br />
                  <a href="https://thecsruniverse.com/articles/swades-foundation-and-u-mumba-light-up-rural-homes-with-solar-power" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                      alt=""></a>
                </div>
              </div>
              
              <div class="featured-card">
                <div class="blog-img">
                  <img src="./assets/images/Blogs/photo.png" alt="">
                </div>
                <div class="blog-content">
                  <small>11/06/2025</small>
                  <h5>CSR Universe</h5>
                  <p>How Swades Foundation helps rural girls step into the healthcare workforce</p>
                  <br />
                  <a href="https://timesofindia.indiatimes.com/city/mumbai/social-stock-exchange-ngos-raise-funds-through-innovative-platform/articleshow/112207201.cms" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                      alt=""></a>
                </div>
              </div>

              

            </div>

            

          </div>



          <div class="tab-pane fade" id="pills-Print" role="tabpanel" aria-labelledby="pills-Print-tab">
              <div class="gridlayer3">
              <div class="featured-card">
                <div class="blog-img">
                  <img src="./assets/images/Blogs/swades2-1749044223213 (1).png" alt="">
                </div>
                <div class="blog-content">
                  <small>05/06/2025</small>
                  <h5>Your Story / Social Story</h5>
                  <p>How Swades Foundation helps rural girls step into the healthcare workforce</p>
                  <br />
                  <a href="./assets/images/Blogs/18Nov_SP_TimesTechies_Bangalore-1.pdf" class="read-more" target="_blank">Read Article <img src="./assets/images/Blogs/right-arrow.svg" alt=""></a>
                </div>
              </div>

              <div class="featured-card">
                <div class="blog-img">
                  <img src="./assets/images/Blogs/171022_MD_20-2.jpg" alt="">
                </div>
                <div class="blog-content">
                  <small>October 2022</small>
                  <h5>Your Story / Social Story</h5>
                  <p>THE actor interacts with people with humility, warmth and compassion, shares his time and genuine encouragement.</p>
                  <br />
                  <a href="https://yourstory.com/socialstory/2025/06/swades-foundation-rural-girls-raigad-vision-technicians" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                      alt=""></a>
                </div>
              </div>
              
              <div class="featured-card">
                <div class="blog-img">
                  <img src="./assets/images/Blogs/1pdf.png" alt="">
                </div>
                <div class="blog-content">
                  <small>June 2022</small>
                  <!--<h5>CSR Journal</h5>-->
                  <p>Emporweing Rural Women for Holistic Rural Development</p>
                  <br />
                  <a href="./assets/images/Blogs/CSR-Mandate-Vol-VI-Issue-IV-1-57-63.pdf" target="_blank" class="read-more">Read Article <img src="./assets/images/Blogs/right-arrow.svg"
                      alt=""></a>
                </div>
              </div>

              

            </div>
          </div>
          
          <div class="tab-pane fade" id="pills-Videos" role="tabpanel" aria-labelledby="pills-Videos-tab">
             
             <div class="gridlayer3">
              <div class="featured-card">
                <div class="blog-img">
                  <img src="./assets/images/Blogs/y-1.jpg" alt="">
                  <div class="thumbnail">
                    <a href="https://www.youtube.com/watch?v=3ZyrL-OOgik&t=100s - CNBC" target="_blank"><img src="./assets/images/Blogs/youtube.svg" alt=""></a>
                  </div>
                </div>
              </div>
               <div class="featured-card">
                <div class="blog-img">
                  <img src="./assets/images/Blogs/y-2.jpg" alt="">
                  <div class="thumbnail">
                    <a href="https://www.youtube.com/watch?v=3Yu5R0KKgS8" target="_blank"><img src="./assets/images/Blogs/youtube.svg" alt=""></a>
                  </div>
                </div>
              </div>
             </div>
          </div>
        </div>
      </div><!---coverage-section-->

    </div>
  </div><!---media-section-->


  <?php if ($cmsDocuments): ?>
  <div class="reports-section" id="financials">
    <div class="container">
      <div class="heading-hd text-center"><h2>Reports and Financials</h2></div>
      <div class="custom-tabs">
        <ul class="nav nav-pills mb-3" role="tablist">
          <?php $firstReportTab = true; foreach ($reportCategories as $category => $label): ?>
            <?php if (!empty(array_filter($cmsDocuments, fn ($document) => $document['category'] === $category))): ?>
              <li class="nav-item" role="presentation"><button class="nav-link <?= $firstReportTab ? 'active' : '' ?>" data-bs-toggle="pill" data-bs-target="#cms-<?= $category ?>" type="button" role="tab"><?= htmlspecialchars($label) ?></button></li>
              <?php $firstReportTab = false; ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="tab-content">
        <?php $firstReportTab = true; foreach ($reportCategories as $category => $label): ?>
          <?php $categoryDocuments = array_values(array_filter($cmsDocuments, fn ($document) => $document['category'] === $category)); ?>
          <?php if ($categoryDocuments): ?>
            <div class="tab-pane fade <?= $firstReportTab ? 'show active' : '' ?>" id="cms-<?= $category ?>" role="tabpanel">
              <div class="Allreports"><h4><?= htmlspecialchars($label) ?></h4><ul class="report-list">
                <?php foreach ($categoryDocuments as $document): ?>
                  <li class="report-item">
                    <span class="report-title"><?= htmlspecialchars($document['label']) ?></span>
                    <a href="<?= htmlspecialchars($document['file_url']) ?>" target="_blank" class="download-link">Download PDF <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span></a>
                  </li>
                <?php endforeach; ?>
              </ul></div>
            </div>
            <?php $firstReportTab = false; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="reports-section<?= $cmsDocuments ? ' legacy-reports' : '' ?>" id="legacy-financials">
    <div class="container">
      <div class="heading-hd text-center">
        <h2>Reports and Financials</h2>
      </div><!--heading-hd-->
      <div class="custom-tabs">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <!--<button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
              type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>-->
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-Annual-tab" data-bs-toggle="pill" data-bs-target="#pills-Annual"
              type="button" role="tab" aria-controls="pills-Annual" aria-selected="false">Annual Reports</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Audited-tab" data-bs-toggle="pill" data-bs-target="#pills-Audited"
              type="button" role="tab" aria-controls="pills-Audited" aria-selected="false">Audited Statements</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-FC6-tab" data-bs-toggle="pill" data-bs-target="#pills-FC6" type="button"
              role="tab" aria-controls="pills-FC6" aria-selected="false"> FCRA reports FC6</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-FC4-tab" data-bs-toggle="pill" data-bs-target="#pills-FC4" type="button"
              role="tab" aria-controls="pills-FC4" aria-selected="false">FCRA reports FC4</button>
          </li>

        </ul>
      </div>

      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">..All.
        </div>

        <div class="tab-pane fade show active" id="pills-Annual" role="tabpanel" aria-labelledby="pills-Annual-tab">
          <div class="Allreports">
            <h4>Annual Reports</h4>
            <ul class="report-list">
              <li class="report-item">
                <span class="report-title">Annual Report 2024–25</span>

                <a href="https://swadesfoundation.org/annualreportpdf/AR-2024-25revised.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2023–24</span>

                <a href="https://swadesfoundation.org/annualreportpdf/Swades%20Foundation_Annual%20Report%202023-24.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2022–23</span>

                <a href="https://swadesfoundation.org/annualreportpdf/AR%20-%202022-23.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2021–22</span>

                <a href="https://swadesfoundation.org/annualreportpdf/Swades-AR-2021-22-C2C_060123-low-res.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2020–21</span>

                <a href="https://swadesfoundation.org/annualreportpdf/Swades-Final-Annual-Report-20-21_compressed.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2019–20</span>

                <a href="https://swadesfoundation.org/annualreportpdf/SwadesFoundation_DigitalFinal_compressed.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2018–19</span>

                <a href="https://swadesfoundation.org/annualreportpdf/AnnualReport-2019.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2017–18</span>

                <a href="https://swadesfoundation.org/annualreportpdf/AnnualReport-2018.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2016–17</span>

                <a href="https://swadesfoundation.org/annualreportpdf/annualreport2018_01.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Annual Report 2014–15</span>

                <a href="https://swadesfoundation.org/annualreportpdf/Annual-Report-2014-15.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
            </ul>
<!--            <div class="more-btn text-center">
              <a href="#" class="btn">Load More</a>
            </div>-->

          </div><!--Allreports-->
        </div>

        <div class="tab-pane fade" id="pills-Audited" role="tabpanel" aria-labelledby="pills-Audited-tab">
            <div class="Allreports">
            <h4>Audited Statements</h4>
            <ul class="report-list">
              <li class="report-item">
                <span class="report-title">Audited Financials 2024–25</span>

                <a href="https://swadesfoundation.org/auditsubmitted/Audited Financials 24-25.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2023–24</span>

                <a href="https://swadesfoundation.org/auditsubmitted/Audit-Report23-24.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2022-23</span>

                <a href="https://swadesfoundation.org/auditsubmitted/Audit-Report22-23.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2021-22</span>

                <a href="https://swadesfoundation.org/auditsubmitted/Audit-Report21-22.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2020-21</span>

                <a href="https://swadesfoundation.org/auditsubmitted/Swades-Financial-Audit-report-20-21.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2019-20</span>

                <a href="https://swadesfoundation.org/auditsubmitted/Swades-Financials-Audit-report-for-Mar-20.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2018-19</span>

                <a href="https://swadesfoundation.org/auditsubmitted/Swades-Financial-March-2019.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2017-18</span>

                <a href="https://swadesfoundation.org/auditsubmitted/Audited Financials FY 17-18.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2016-17</span>

                <a href="https://swadesfoundation.org/auditsubmitted/Audited Financials FY 16-17.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">Audited Financials 2015-16</span>

                <a href="https://swadesfoundation.org/auditsubmitted/Audited Financials FY 15-16.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>              
            </ul>
<!--            <div class="more-btn text-center">
              <a href="#" class="btn">Load More</a>
            </div>-->

          </div>
        </div>

        <div class="tab-pane fade" id="pills-FC6" role="tabpanel" aria-labelledby="pills-FC6-tab">
            <div class="Allreports">
            <h4>FCRA Reports FC6</h4>
            <ul class="report-list">

              <li class="report-item">
                <span class="report-title">FC6 Q1 2023-24</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 23-24.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2023-24</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 23-24.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2023-24</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 23-24.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2022-23</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 22-23.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2022-23</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 22-23.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2022-23</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 22-23.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2022-23</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 22-23.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2021-22</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 21-22.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2021-22</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 21-22.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2021-22</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 21-22.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2021-22</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 21-22.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2020-21</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 20-21.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2020-21</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 20-21.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2020-21</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 20-21.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2020-21</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 20-21.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2019-20</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 19-20.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2019-20</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 19-20.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2019-20</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 19-20.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2019-20</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 19-20.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2018-19</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 18-19.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2018-19</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 18-19.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2018-19</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 18-19.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2018-19</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 18-19.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2017-18</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 17-18.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2017-18</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 17-18.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2017-18</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 17-18.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2017-18</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 17-18.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>

              <li class="report-item">
                <span class="report-title">FC6 Q1 2016-17</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q1 16-17.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q2 2016-17</span>
                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q2 16-17.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q3 2016-17</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q3 16-17.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC6 Q4 2016-17</span>

                <a href="https://swadesfoundation.org/fc6/FC6 RETRUN FOR Q4 16-17.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li> 
            </ul>
<!--            <div class="more-btn text-center">
              <a href="#" class="btn">Load More</a>
            </div>-->

          </div>
        </div>

        <div class="tab-pane fade" id="pills-FC4" role="tabpanel" aria-labelledby="pills-FC4-tab">
            <div class="Allreports">
            <h4>FCRA Reports FC4</h4>
            <ul class="report-list">
              <li class="report-item">
                <span class="report-title">FC4 FY 2023–24</span>

                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2023-24.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2022-23</span>

                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2022-23.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2021-22</span>

                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2021-22.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2020-21</span>

                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2020-21.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2019-20</span>

                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2019-20.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2018-19</span>

                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2018-19.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2017-18</span>

                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2017-18.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2016-17</span>

                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2016-17.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
              <li class="report-item">
                <span class="report-title">FC4 FY 2015-16</span>

                <a href="https://swadesfoundation.org/fc4/FC4%20SHARE%20FY%2015-16.pdf" target="_blank" class="download-link">Download PDF
                  <span class="download-icon"><img src="./assets/images/Blogs/PDF.svg" alt=""></span>
                </a>
              </li>
            </ul>
<!--            <div class="more-btn text-center">
              <a href="#" class="btn">Load More</a>
            </div>-->

          </div>
        </div>
      </div>
    </div>
  </div><!---reports-section-->

  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>

  <?php include 'include/footer.php'; ?> <!-- Footer -->

</body>


</html>
