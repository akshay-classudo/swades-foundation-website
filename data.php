<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// IMPORTANT: Correct path for your structure
require 'donation/vendor/autoload.php';

$mail = new PHPMailer(true);
?>

<?php

if (isset($_POST['userName'])) {
    echo 'start';
    // 1. Database Connection
    $conn = new mysqli("localhost", "swadeepx_swades", "3%}DCR6?5D^K", "swadeepx_swades");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // 2. Sanitize and Collect Data
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
	$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $companyName = mysqli_real_escape_string($conn, $_POST['companyName']);
	$donationAmt = mysqli_real_escape_string($conn, $_POST['donationAmt']);
    // 3. Save to Database
    $sql = "INSERT INTO contact_submissions (userName,mobile, email, companyName,donationAmt)VALUES ('$userName','$mobile', '$email', '$companyName','$donationAmt')";
    
    if ($conn->query($sql) === TRUE) {
                echo 'inside email';
                $adminEmail = "info.sse@swadesfoundation.org";
                $subjectAdmin = "SSE Form Submission";
                $messageAdmin = "
                New enquiry received from:
                Name: $userName
                Email: $email
                Phone: $mobile
                Company Name: $companyName
                Donation Amt : $donationAmt
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
                Name: $userName
                Email: $email
                Phone: $mobile
                Company Name: $companyName
                Donation Amt : $donationAmt
                -------------------------------------
                
                Regards,
                Swades Foundation Team
                ";
                
                //echo $messageUser;
                //echo $messageAdmin;
                // =========================================================
                // 1️⃣ MAIL TO ADMIN - using Gmail SMTP
                // =========================================================
                $mail = new PHPMailer(true);
                try {
                    // SMTP CONFIG
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'swadesfoundation@gmail.com';   // Your Gmail
                    $mail->Password   = 'ichztndbwycbhnhy';         // Gmail App Password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 587;
                
                    // SENDER + RECEIVER
                    $mail->setFrom('info.sse@swadesfoundation.org', 'Swades Foundation');

 // only one receiver
                   // $mail->addAddress($adminEmail);
                  $mail->addAddress('info.sse@swadesfoundation.org');

foreach ($addresses as $address) {
    $mail->addAddress(trim($address)); // Use trim() to remove any extra whitespace
}

                    // CONTENT
                    $mail->Subject = $subjectAdmin;
                    $mail->Body    = $messageAdmin;
                    $mail->send();
                    echo 'Admin email sent1';
                
                    
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
                    $mail2->Username   = 'vishusonalisahu@gmail.com';
                    $mail2->Password   = 'saadaazwhfcsgzuh';
                    $mail2->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail2->Port       = 587;
                    //SENDER + RECEIVER
                    $mail2->setFrom('shivamsahu2396@gmail.com', 'Swades Foundation');
                    $mail2->addAddress($email);
                    // CONTENT
                    $mail2->Subject = $subjectUser;
                    $mail2->Body    = $messageUser;
                    $mail2->send();
                    echo 'User email sent'; 
                    echo json_encode([
        			'status'=>true,
        			'message'=>"Your form has been submitted successfully!"
        			]);
                } catch (Exception $e) {
                    echo "User mail not sent. Error: {$mail2->ErrorInfo}";
                }
              echo  $success = "Your form has been submitted successfully!";
            } else {
              echo json_encode([
        			'status'=>false,
        			'message'=>"Error: " . $sql . "<br>" . $conn->error
        			]);
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //$conn->close();
}
?>