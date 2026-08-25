<?php
session_start();
include('../db.php');
$curl = curl_init();
if ($_POST['plan_id']) {
    $plan_id = $_POST['plan_id'];
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
	$donation_type = "Monthly";		
	if($donar_age  == 'undefined' && $donar_city == 'undefined' && $donar_hear == 'undefined'){
      $donar_age = "N/A";
      $donar_city = "N/A";
      $donar_hear = "N/A";   
    }	
    $page = isset($_POST['page']) ? $_POST['page'] : "N/A"; 
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://rzp_live_81kJM09YvTAHgb:vqhy90j96WEvdPln7Hf7CLZP@api.razorpay.com/v1/subscriptions",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "plan_id=" . $plan_id . "&total_count=12&customer_notify=1",
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

        $sub_id = $data->id;
        echo $sub_id;
    }
		$query = "INSERT INTO `donations_scholarship` (`name`, `email`, `phone`, `pan`, `amount`, `status`, `age`, `city`, `hear_about_us`,`referrer_url`,`ip_address`,`page`,`donation_type`) VALUES ('$name','$email','$phone','$pan', '$amount', '$payment_status', '$donar_age', '$donar_city', '$donar_hear','$referrer_url','$ip_address','$page','$donation_type')";
    mysqli_query($con, $query);
    $id = mysqli_insert_id($con);
	$_SESSION['id'] = $id;
}
