<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
require_once __DIR__ . '/include/cms.php';
$cmsSite = cms_get_site_settings();
$cmsContact = $cmsSite['contact'] ?? [];
$cmsSocial = $cmsSite['social'] ?? [];
$cmsContactPage = cms_get_page('contact');
cms_require_published_page('contact');
$cmsContactContent = cms_page_content($cmsContactPage);
$contactSuccess = null;
$contactError = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payload = [
        'name' => trim(($_POST['fname'] ?? '') . ' ' . ($_POST['lname'] ?? '')),
        'email' => trim($_POST['email'] ?? ''),
        'phone' => trim($_POST['phone'] ?? ''),
        'subject' => 'Website contact form',
        'message' => trim($_POST['msg'] ?? ''),
        'source' => 'frontend-contact-page',
    ];

    $response = cms_submit_contact($payload);
    if ($response && ($response['success'] ?? false)) {
        $contactSuccess = $response['message'] ?? 'Your form has been submitted successfully.';
    } else {
        $contactError = 'We could not submit your message right now. Please try again or email us directly.';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title><?= htmlspecialchars(cms_page_field($cmsContactPage, 'meta_title', 'Swades Foundation Contact'), ENT_QUOTES, 'UTF-8') ?></title>
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


  <div class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="getcontent">
            <?php if ($cmsContactContent !== ''): ?>
              <?= $cmsContactContent ?>
            <?php else: ?>
              <h2>Get in touch</h2>
              <p>Feel free to contact us with any inquiries. We are always happy to engage with new organisations.</p>
            <?php endif; ?>
            <ul>
              <?php if (!empty($cmsSocial['twitter_url'])): ?><li><a href="<?= htmlspecialchars($cmsSocial['twitter_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/X-icon.svg" alt="X"> </a></li><?php endif; ?>
              <?php if (!empty($cmsSocial['instagram_url'])): ?><li><a href="<?= htmlspecialchars($cmsSocial['instagram_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/instagram2.svg" alt="Instagram"> </a></li><?php endif; ?>
              <?php if (!empty($cmsSocial['youtube_url'])): ?><li><a href="<?= htmlspecialchars($cmsSocial['youtube_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><img src="./assets/images/youtube.svg" alt="YouTube"> </a></li><?php endif; ?>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-form">
            <?php if (false): ?>
            // When form is submitted
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $msg   = $_POST['msg'];
            
                // Save in DB
                $sql = "INSERT INTO contact_form (fname, lname, email, phone, msg)
                        VALUES ('$fname', '$lname', '$email', '$phone', '$msg')";
                mysqli_query($conn, $sql);
            
                $adminEmail = "contact.us@swadesfoundation.org";

                $subjectAdmin = "New Contact Form Submission";
                
                $messageAdmin = "
                New enquiry received from:
                
                Name: $fname $lname
                Email: $email
                Phone: $phone
                Message: $msg
                ";
                
                // ---------------------------
                // USER EMAIL
                // ---------------------------
                $subjectUser = "Thank you for contacting Swades Foundation";
                
                $messageUser = "
                Hello $fname,
                
                Thank you for contacting Swades Foundation.
                We have received your message and our team will get back to you shortly.
                
                Your submitted details:
                -------------------------------------
                Name: $fname $lname
                Email: $email
                Phone: $phone
                Message: $msg
                -------------------------------------
                
                Regards,
                Swades Foundation Team
                ";
                
                // =========================================================
                // 1️⃣ MAIL TO ADMIN - using Gmail SMTP
                // =========================================================
                $mail = new PHPMailer(true);
                
                try {
                    // SMTP CONFIG
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'krishnachaurasia700@gmail.com';   // Your Gmail
                    $mail->Password   = 'ltrk xlze igtv sqwy';         // Gmail App Password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 587;
                
                    // SENDER + RECEIVER
                    $mail->setFrom('krishnachaurasia700@gmail.com', 'Swades Foundation');
                   /* $mail->SetFrom("donor.service@swadesfoundation.org", "Swades Foundation");
                    $mail->isSMTP();
                    $mail->SMTPAuth = true;
                    $mail->Host = 'smtp.office365.com';       // Specify main and backup SMTP servers 
                    $mail->Username = 'no-reply@swadesfoundation.org';
                    $mail->Password = 'Sw@des$090705';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;
                    $mail->SMTPDebug = false;*/
                    $mail->addAddress($adminEmail);
                
                    // CONTENT
                    $mail->Subject = $subjectAdmin;
                    $mail->Body    = $messageAdmin;
                
                    $mail->send();
                } catch (Exception $e) {
                    echo "Admin mail not sent. Error: {$mail->ErrorInfo}";
                }
                
                // =========================================================
                // 2️⃣ MAIL TO USER - using Gmail SMTP
                // =========================================================
                $mail2 = new PHPMailer(true);
                
                try {
                    $mail2->isSMTP();
                    $mail2->Host       = 'smtp.gmail.com';
                    $mail2->SMTPAuth   = true;
                    $mail2->Username   = 'krishnachaurasia700@gmail.com';
                    $mail2->Password   = 'ltrk xlze igtv sqwy';
                    $mail2->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail2->Port       = 587;
                    
                    /*$mail2->isSMTP();
                    $mail2->SMTPAuth = true;
                    $mail2->Host = 'smtp.office365.com';       // Specify main and backup SMTP servers 
                    $mail2->Username = 'no-reply@swadesfoundation.org';
                    $mail2->Password = 'Sw@des$090705';
                    $mail2->SMTPSecure = 'tls';
                    $mail2->Port = 587;
                    $mail2->SMTPDebug = false;*/
                    
                    // SENDER + RECEIVER
                    $mail2->setFrom('krishnachaurasia700@gmail.com', 'Swades Foundation');
                    $mail2->addAddress($email);
                
                    // CONTENT
                    $mail2->Subject = $subjectUser;
                    $mail2->Body    = $messageUser;
                
                    $mail2->send();
                } catch (Exception $e) {
                    echo "User mail not sent. Error: {$mail2->ErrorInfo}";
                }
                
                $success = "Your form has been submitted successfully!";
            }
            ?>
            <?php endif; ?>

            <?php if ($contactSuccess): ?><p class="alert alert-success"><?= htmlspecialchars($contactSuccess, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
            <?php if ($contactError): ?><p class="alert alert-danger"><?= htmlspecialchars($contactError, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>


            <form method="POST">
              <div class="row">
                <div class="col-md-6 group-from">
                  <label for="">Your Name</label>
                  <input type="text" name="fname" class="form-control" placeholder="John Doe">
                </div>

                <div class="col-md-6 group-from">
                  <label for="">Last Name</label>
                  <input type="text" name="lname" class="form-control" placeholder="">
                </div>

                <div class="col-md-6 group-from">
                  <label for="">Email </label>
                  <input type="text" name="email" class="form-control" placeholder="Select">
                </div>

                <div class="col-md-6 group-from">
                  <label for="">Your Phone Number</label>
                  <input type="text" name="phone" class="form-control" placeholder="John Doe">
                </div>

                <div class="col-md-12 group-from">
                  <label for="">Message/ Comments</label>
                  <textarea class="form-control" name="msg" placeholder="Message"></textarea>
                </div>

                <div class="col-md-12">
                  <p>By sharing your details, you agree to receive stories and updates from Swades Foundation via
                    mobile, Whatsapp, landline, email, and post. If you’d like to change this, please send us an email
                    at contact.us@swadesfoundation.org.</p>
                </div>

                <div class="col-md-12 group-from">
                  <button type="submit" class="btn">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>



    </div>
  </div><!---contact-page-->


  <?php if (!empty($cmsContact['locations'])): ?>
  <div class="location-section">
    <div class="container">
      <h2>Our Locations</h2>
      <?php foreach ($cmsContact['locations'] as $cmsLocation): ?>
        <div class="latest-list">
          <div class="row">
            <div class="col-3"><h4><?= htmlspecialchars($cmsLocation['name'] ?? 'Office', ENT_QUOTES, 'UTF-8') ?></h4></div>
            <div class="col-4"><p><?= nl2br(htmlspecialchars($cmsLocation['address'] ?? '', ENT_QUOTES, 'UTF-8')) ?></p></div>
            <div class="col-3"><p><a href="mailto:<?= htmlspecialchars($cmsLocation['email'] ?? ($cmsContact['support_email'] ?? ''), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($cmsLocation['email'] ?? ($cmsContact['support_email'] ?? ''), ENT_QUOTES, 'UTF-8') ?></a></p></div>
            <div class="col-2"><p><a href="<?= htmlspecialchars($cmsLocation['map_url'] ?? '#', ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener">Google Maps</a></p></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php else: ?>
  <div class="location-section">
    <div class="container">
      <h2>Our Locations</h2>

      <div class="latest-list">
        <div class="row">
          <div class="col-3">
            <h4>Mumbai Office</h4>
          </div>
          <div class="col-4">
            <p>Swades Foundation
               Unit No. 401, 4th Floor, Ceejay House, Dr. Annie Besant Road, Worli, Mumbai, Maharashtra, India, 400018</p>
          </div>
          <div class="col-3">
            <p>contact.us<a href="contact.us@swadesfoundation.org">@swadesfoundation.org</a></p>
          </div>
          <div class="col-2">
            <p><span><a href="https://www.google.com/maps?q=Swades+Foundation,+Unit+No.+401,+4th+Floor,+Ceejay+House,+Dr.+Annie+Besant+Road,+Worli,+Mumbai,+Maharashtra,+India,+400018" target="_blank">Google Maps</a></span></p>
          </div>
        </div>
      </div>

      <div class="latest-list">
        <div class="row">
          <div class="col-3">
            <h4>Raigad Office</h4>
          </div>
          <div class="col-4">
            <p>Mumbai - Goa Hwy, behind Kartik Executive, Mangaon, Maharashtra 402104</p>
             
          </div>
          <div class="col-3">
            <p>contact.us<a href="contact.us@swadesfoundation.org">@swadesfoundation.org</a></p>
          </div>
          <div class="col-2">
            <p><span><a href="https://www.google.com/maps?q=Mumbai+-+Goa+Hwy,+behind+Kartik+Executive,+Mangaon,+Maharashtra+402104" target="_blank">Google Maps</a></span></p>
          </div>
        </div>
      </div>



      <div class="latest-list border-bottom">
        <div class="row">
          <div class="col-3">
            <h4>Nashik Office</h4>
          </div>
          <div class="col-4">
            <p> Dabhadkar Villa,
            2nd Floor, Dabhadkar Villa, New Ashwin Society, 
            Next to DRDO Transit Facility, Nashik - 422010
            </p>
          </div>
          <div class="col-3">
            <p>contact.us<a href="contact.us@swadesfoundation.org">@swadesfoundation.org</a></p>
          </div>
          <div class="col-2">
            <p><span><a href="https://www.google.com/maps?q=Dabhadkar+Villa,+2nd+Floor,+Dabhadkar+Villa,+New+Ashwin+Society,+Next+to+DRDO+Transit+Facility,+Nashik+-+422010" target="_blank">Google Maps</a></span></p>
          </div>
        </div>
      </div>


    </div>
  </div><!--Location & More-->
  <?php endif; ?>

  <script src="./assets/js/jquery-3.6.3.js"></script>
  <?php include 'include/footer.php'; ?> <!-- Footer -->
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="./assets/js/custom.js"></script>


</body>
</html>
