<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>404 - Page Not Found | Swades Foundation</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="./assets/images/favicon.png">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

    <style>
        body{
            margin:0;
            background:#F47600;
            font-family:Arial, Helvetica, sans-serif;
        }

        .error-section{
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            text-align:center;
            padding:60px 20px;
        }

        .error-box{
            max-width:700px;
        }

        .error-box img{
            width:220px;
            margin-bottom:30px;
        }

        .error-code{
            font-size:120px;
            font-weight:700;
            color:#FFFFFF;
            line-height:1;
        }

        .error-title{
            font-size:42px;
            font-weight:700;
            margin:20px 0;
            color:#FFFFFF;
        }

        .error-text{
            font-size:18px;
            color:#FFFFFF;
            line-height:1.8;
            margin-bottom:35px;
        }

        .btn-orange{
            background:#F47600;
            color:#fff;
            padding:14px 35px;
            border-radius:40px;
            text-decoration:none;
            font-weight:600;
            transition:.3s;
            display:inline-block;
        }

        .btn-orange:hover{
            background:#d96500;
            color:#fff;
        }

        .btn-outline{
            border:2px solid #F47600;
            color:#F47600;
            padding:12px 35px;
            border-radius:40px;
            text-decoration:none;
            font-weight:600;
            margin-left:15px;
            transition:.3s;
            display:inline-block;
        }

        .btn-outline:hover{
            background:#F47600;
            color:#fff;
        }

        @media(max-width:768px){

            .error-code{
                font-size:80px;
            }

            .error-title{
                font-size:30px;
            }

            .error-text{
                font-size:16px;
            }

            .btn-orange,
            .btn-outline{
                display:block;
                width:100%;
                margin:10px 0;
            }

        }
    </style>

</head>

<body>

<?php include 'include/header.php'; ?>

<section class="error-section">

    <div class="error-box">

        <img src="./assets/images/sawades-logo.svg" alt="Swades Foundation">

        <div class="error-code">404</div>

        <h1 class="error-title">
            Oops! Page Not Found
        </h1>

        <p class="error-text">
            The page you are looking for may have been moved, deleted,
            or the URL may be incorrect.
            <br><br>
            Continue exploring Swades Foundation and learn more about
            our work towards creating thriving rural communities.
        </p>

        <a href="/" class="btn-orange">
            Back to Home
        </a>

        <a href="contact-us" class="btn-outline">
            Contact Us
        </a>

    </div>

</section>

<?php include 'include/footer.php'; ?>

<script src="./assets/js/jquery-3.6.3.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>