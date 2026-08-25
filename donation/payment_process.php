<?php
session_start();
include('db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// IMPORTANT: Correct path for your structure
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // SMTP server configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'krishnachaurasia700@gmail.com';   // Your Gmail
    $mail->Password   = 'ltrk xlze igtv sqwy';         // Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    // SENDER + RECEIVER
    // $mail->setFrom('krishnachaurasia700@gmail.com', 'Swades Foundation');

    // Set sender and recipient
    // $mail->setFrom('no-reply@swadesfoundation.org', 'Swades Foundation'); // Custom sender email

    // Email content
    $mail->isHTML(true);
    if (
        isset($_POST['amt']) && isset($_POST['name']) &&
        isset($_POST['phone']) && isset($_POST['email']) &&
        isset($_POST['pan'])
    ) {

        $payment_id = $_POST['payment_id'];

        $amt = $_POST['amt'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pan = $_POST['pan'];
        $donar_age = $_POST['age'];
        $donar_city = $_POST['city'];
        $donar_hear = $_POST['donar_hear'];

        // EMAIL SETUP ---------------------------
        $mail->setFrom("no-reply@swadesfoundation.org", "Swades Foundation");
        $mail->addAddress($email, $name);
        $mail->Subject = "Thank You for Your Generous Support!";
        
        // EMAIL CONTENT -------------------------
        $mail->MsgHTML("
            Dear $name,<br><br>
            
            We are deeply grateful for your contribution of <strong>₹ $amt</strong> to <strong>Swades Foundation</strong>. 
            Your support is empowering rural communities and helping us create a sustainable future through initiatives 
            in education, health, livelihoods, and water.<br><br>
            
            <strong>Your Donation Details:</strong><br>
            Donation Amount: ₹ $amt<br>
            Transaction ID: $payment_id<br>
            Date: $date<br><br>
            
            Thanks to donors like you, we are one step closer to achieving our mission of rural empowerment. 
            Together, we are building a better tomorrow for countless families.<br><br>
            
            If you'd like to stay updated on the impact of your contribution, follow us on 
            <a href='$social_link'>our social media</a> or visit our website at 
            <a href='$website_link'>$website_link</a>.<br><br>
            
            Should you have any questions or need assistance, feel free to reach out at 
            <a href='mailto:$contact_email'>$contact_email</a> or call $contact_phone.<br><br>
            
            Once again, thank you for your invaluable support!<br><br>
            
            Warm regards,<br>
            <strong>The Swades Foundation Team</strong>
            ");


        // SEND MAIL -----------------------------
        if ($mail->send()) {
            echo "Email sent successfully";
        } else {
            echo "Email not sent";
        }
    }

} catch (Exception $e) {
    echo "<b>Email Error:</b> " . $mail->ErrorInfo;
}