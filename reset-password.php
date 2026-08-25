<?php
include 'db';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Swades Foundation Reset Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.svg" type="image/x-icon">
  <link rel="icon" type="image/png" href="./assets/images/favicon.png">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom-animation.css">
  <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="./assets/css/login-custom.css">
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
  <div class="login-werrap">
    <div class="container">
      <div class="portal-werrap">
        <div class="row">
          <div class="col-md-6">
            <div class="portal-hd">
              <img src="./assets/images/logo.svg" alt="Swades Foundation">
              <h3>Welcome to <span>Swades Donation Portal </span></h3>
            </div>
          </div>

          <div class="col-md-6">
            <div class="get-form">
              <!--<h4>reset password</h4>-->
              <?php
                $msg = "";

                if (isset($_POST['reset'])) {
                    $email = trim($_POST['email'] ?? '');
                    $email = mysqli_real_escape_string($conn, $email);
                
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $msg = "❌ Invalid email format.";
                    } else {
                        $sql = "SELECT id FROM signup WHERE email='$email' LIMIT 1";
                        $res = mysqli_query($conn, $sql);
                
                        if (mysqli_num_rows($res) == 0) {
                            $msg = "❌ Email not found.";
                        } else {
                            $row = mysqli_fetch_assoc($res);
                            $id = $row['id'];
                
                            $hash = md5($email . "MY_SECRET_KEY");
                            $link = "https://nexgenclassy.in/swadesnew/reset-password-confirmation?id=$id&h=$hash";
                
                            $subject = "Password reset";
                            $message = "Click this link to reset your password:\n\n$link";
                            $headers = "From: kuldeep@classudo.com\r\n";
                
                            if (mail($email, $subject, $message, $headers)) {
                                $msg = "✅ Reset link sent to your email.";
                            } else {
                                $msg = "❌ Something went wrong while sending email.";
                            }
                        }
                    }
                }
              ?>
              <?php if ($msg != ""): ?>
                <h3 style="color:red;"><?= $msg ?></h3>
              <?php endif; ?>
              <form action="" method="POST">
                <div class="row">
                  <div class="col-md-12 group-from">
                    <label>Email</label>
                    <input type="text" id="email" name="email" class="form-control Password" placeholder="Enter Email"
                      required />
                  </div>
                  <div class="col-md-12 group-from">
                    <button type="submit" name="reset" class="btn">Submit</button>
                  </div>
                </div>
              </form>
            </div><!--get-form-->
          </div>
        </div>
      </div><!--portal-werrap-->
    </div>
  </div><!---dashboard-werrap-->
  
  
  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/login-custom.js"></script>
</body>
</html>