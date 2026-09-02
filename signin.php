<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
include 'db';
/*require_once 'config';
$login_url = $client->createAuthUrl();*/
?>
<!DOCTYPE html>
<html>
<head>
  <title>Swades Foundation signin</title>
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
<?php
if (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT id, name, email, password FROM signup WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row && $password === $row['password']) {
        // regenerate session id for security
        session_regenerate_id(true);

        // store id and username in session
        $_SESSION['user_id'] = (int)$row['id'];
        $_SESSION['username'] = $row['name'];
        $_SESSION['email'] = $row['email'];

        header("Location: dashboard");
        exit();
    } else {
        echo "Invalid email or password!";
    }
}
?>


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
              <h4>Sign In to your account</h4>
              <form action="" method="POST">
                <div class="row">
                  <div class="col-md-12 group-from">
                   <a href="<?php echo htmlspecialchars($login_url); ?>" class="google-btn">
                      <img src="./assets/images/Google.svg" alt="Google"> Continue with Google
                    </a>
                  </div>

                  <div class="col-md-12 group-from">
                    <div class="divider">Or</div>
                  </div>

                  <div class="col-md-12 group-from">
                    <label>Email </label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="kara.wahi@swadesh/com"
                      required="" />
                    <span id="emailError" class="arrow">Email is Required</span>
                  </div>

                <div class="col-md-12 group-from">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control Password"
                      placeholder="Enter your password">
                    <button type="button" class="eyeslash" onclick="togglePassword('password', 'toggleIcon')">
                      <i id="toggleIcon" class="fas fa-eye-slash"></i>
                    </button>
                  </div>


                  <div class="col-md-12 group-from">
                    <button type="submit" name="login" class="btn" onclick="validateForm()">Sign-in</button>
                    <a href="reset-password" class="forgot">Forgot Password?</a>
                  </div>
                </div>
              </form>

              <div class="policyterms mt-4">
                <p class="login-link"> New to Swades? <a href="create-account">Sign up now.</a></p>
                <br />
                <p class="login-link"> Donate Now? <a href="Donate">Donate</a></p>
              </div>
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
