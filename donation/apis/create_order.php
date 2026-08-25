<?php
session_start();
include('../db.php');
$curl = curl_init();  
if ($_POST['amount']) {
    $amount = $_POST['amount'];
	$name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pan = $_POST['pan'];
    $donar_age = $_POST['age'];
    $donar_city = $_POST['city'];
    $donar_hear = $_POST['donar_hear'];	
	$referrer_url = str_replace("'","",urldecode($_POST['referrer_url']));
	$ip_address = $_POST['ip_address'];
    $payment_status = "pending";
	if(isset($_POST['sub_id']) && $_POST['sub_id'] !="")
	{
	$donation_type = "Monthly";
	}
	else
	{
	$donation_type = "One-Time";
	}
	if($donar_age  == 'undefined' && $donar_city == 'undefined' && $donar_hear == 'undefined'){
      $donar_age = "N/A";
      $donar_city = "N/A";
      $donar_hear = "N/A";   
    }
	$sub_id = isset($_POST['sub_id']) ? $_POST['sub_id'] : "N/A";	
    $page = isset($_POST['page']) ? $_POST['page'] : "N/A"; 
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://rzp_live_81kJM09YvTAHgb:vqhy90j96WEvdPln7Hf7CLZP@api.razorpay.com/v1/orders",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "amount=" . $amount * 100 . "&currency=INR",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded",
            "postman-token: 67d92778-3ca8-ffb4-9680-c384d115f95a"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $data = json_decode($response);

        $od_id = $data->id;

    }
	
	$query = "INSERT INTO `donations_scholarship` (`name`, `email`, `phone`, `pan`, `amount`, `status`, `age`, `city`, `hear_about_us`,`referrer_url`,`ip_address`,`page`,`donation_type`) VALUES ('$name','$email','$phone','$pan', '$amount', '$payment_status', '$donar_age', '$donar_city', '$donar_hear','$referrer_url','$ip_address','$page','$donation_type')";
    mysqli_query($con, $query);
    $id = mysqli_insert_id($con);
    $sheetData = array(
    "name" => $name,
    "email" => $email,
    "phone" => $phone,
    "pan" => $pan,
    "payment_id" => $od_id,
    "amount" => $amount,
    "status" => $payment_status,
    "age" => $donar_age,
    "city" => $donar_city,
    "hear_about_us" => $donar_hear,
    "referrer_url" => $referrer_url,
    "ip_address" => $ip_address,
    "page" => $page,
    "donation_type" => $donation_type
);

$sheetUrl = "https://script.google.com/macros/s/AKfycbx63UEe2xfes_4gWswHlFdyn6a2W11O4kXnPzl3MwNVpNucgD_Q3B8nYqLBbFP99Tfwlw/exec";

$ch = curl_init($sheetUrl);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($sheetData));

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'
));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

$error = curl_error($ch);

curl_close($ch);
	$_SESSION['id'] = $id;
}

?>