<?php
require_once __DIR__ . '/include/cms.php';

$blogSlug = trim((string) ($_GET['slug'] ?? ''));
$blogPost = $blogSlug !== '' ? cms_get_post($blogSlug) : null;

if (!$blogPost) {
  http_response_code(404);
}

$blogTitle = $blogPost['title'] ?? 'Blog not found';
$blogCategory = $blogPost['category'] ?? 'Blogs';
$blogDate = cms_format_date($blogPost['published_at'] ?? '', 'd/m/Y');
$blogImage = $blogPost ? cms_blog_image($blogPost) : './assets/images/Blogs/Intersect.jpg';
$blogShareUrl = cms_current_url();
$blogShareText = rawurlencode($blogTitle);
$blogShareLink = rawurlencode($blogShareUrl);
?>
<!DOCTYPE html>
<html>

<head>
  <title><?php echo htmlspecialchars($blogTitle . ' | Swades Foundation', ENT_QUOTES, 'UTF-8'); ?></title>
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

</head>

<body>


  <header id="header" class="home-header inner-contact">
    <div class="container">
      <div class="header-menu">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="index.php">
            <img src="./assets/images/inner-page-logo.svg" alt="" >
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
                  <li><a href="work-water-sanitation.php">Water, Sanitation & Green Initiatives</a></li>
                  <li><a href="work-health.php">Health</a></li>
                  <li><a href="work-education.php">Education</a></li>
                  <li><a href="Work-Ecomonic-Development.php">Economic Development</a></li>
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
            <div class="donate-button innerbtn mobile">
              <a href="Donate.php" class="btn">Donate <img src="./assets/images/heart.svg" alt=""></a>
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
      <?php if ($blogPost): ?>
        <div class="detail-hd">
          <span><?php echo htmlspecialchars($blogCategory, ENT_QUOTES, 'UTF-8'); ?></span>
          <h2><?php echo htmlspecialchars($blogTitle, ENT_QUOTES, 'UTF-8'); ?></h2>
          <p><?php echo htmlspecialchars($blogDate, ENT_QUOTES, 'UTF-8'); ?></p>
        </div>

        <div class="detail-werap">
          <?php if (!empty($blogPost['excerpt'])): ?>
            <div class="initiative">
              <h5><?php echo htmlspecialchars($blogTitle, ENT_QUOTES, 'UTF-8'); ?></h5>
              <p><?php echo htmlspecialchars($blogPost['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
          <?php endif; ?>

          <div class="blog-post">
            <img src="<?php echo htmlspecialchars($blogImage, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($blogTitle, ENT_QUOTES, 'UTF-8'); ?>">
          </div>

          <div class="initiative">
            <?php
              if (!empty($blogPost['content'])) {
                  echo $blogPost['content'];
              } elseif (!empty($blogPost['excerpt'])) {
                  echo '<p>' . htmlspecialchars($blogPost['excerpt'], ENT_QUOTES, 'UTF-8') . '</p>';
              } else {
                  echo '<p>This article does not have published content yet.</p>';
              }
            ?>
          </div>

          <div class="initiative6">
            <p class="mb-1">Share this article</p>
            <ul class="shareicon">
              <li><a href="https://twitter.com/intent/tweet?text=<?php echo $blogShareText; ?>&url=<?php echo $blogShareLink; ?>" target="_blank" rel="noopener"><img src="./assets/images/Blogs/X-icon.svg" alt=""></a></li>
              <li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $blogShareLink; ?>" target="_blank" rel="noopener"><img src="./assets/images/Blogs/linkedin2.svg" alt=""></a></li>
              <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $blogShareLink; ?>" target="_blank" rel="noopener"><img src="./assets/images/Blogs/Facebook2.svg" alt=""></a></li>
            </ul>
          </div>
        </div>
      <?php else: ?>
        <div class="detail-hd text-center">
          <span>Blogs</span>
          <h2>Blog post not found</h2>
          <p>We could not find a published article for this link.</p>
        </div>

        <div class="detail-werap text-center">
          <p>The post may have been unpublished or the URL may be incorrect.</p>
          <a href="blogs.php" class="btn btn-primary">Back to Blogs</a>
        </div>
      <?php endif; ?>
    </div>
  </div><!---impact-section-->

  <script src="./assets/js/jquery-3.6.3.js"></script>
  <?php include 'include/footer.php'; ?> <!-- Footer -->
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>


</body>

</html>
