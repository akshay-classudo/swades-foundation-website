<?php

include(__DIR__ . '/../db.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

include(__DIR__ . '/../db.php');


$id = intval($_GET['id']);

$query = "SELECT * FROM donations_scholarship
WHERE id = '$id'
AND sheet_synced = 0
LIMIT 1";

$result = mysqli_query($con, $query);

$result = mysqli_query($con, $query);

if(!$result){
    die("MYSQL ERROR: " . mysqli_error($con));
}

$id = mysqli_insert_id($con);

echo "INSERTED ID: " . $id;

while($row = mysqli_fetch_assoc($result)){


    $data = array(
        "name" => $row['name'],
        "email" => $row['email'],
        "phone" => $row['phone'],
        "pan" => $row['pan'],
        "payment_id" =>$row['payment_id'],
        "amount" => $row['amount'],
        "status" => $row['status'],
        "age" => $row['age'],
        "city" => $row['city'],
        "hear_about_us" => $row['hear_about_us'],
        "referrer_url" => $row['referrer_url'],
        "ip_address" => $row['ip_address'],
        "page" => $row['page'],
        "donation_type" => $row['donation_type']
    );

    $url = "https://script.google.com/macros/s/AKfycbx63UEe2xfes_4gWswHlFdyn6a2W11O4kXnPzl3MwNVpNucgD_Q3B8nYqLBbFP99Tfwlw/exec";

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    

    $error = curl_error($ch);

    curl_close($ch);

    if(!$error){

        mysqli_query(
            $con,
            "UPDATE donations_scholarship
             SET sheet_synced = 1
             WHERE id = ".$row['id']
        );
    }
}
?>