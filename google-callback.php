<?php
session_start();
require_once 'config.php'; // jisme tumne client id/secret/redirect URI rakha hai

if (isset($_GET['code'])) {
    // Google se token le aao
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if (!isset($token['error'])) {
        $client->setAccessToken($token['access_token']);

        // Google user info service
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();

        $email   = $google_account_info->email;
        $name    = $google_account_info->name;
        $id      = $google_account_info->id;
        $picture = $google_account_info->picture;

        // Session me user store karo
        $_SESSION['user'] = [
            'id'      => $id,
            'name'    => $name,
            'email'   => $email,
            'picture' => $picture
        ];

        // Redirect user to welcome page
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Error fetching token";
    }
} else {
    echo "No code found in callback!";
}
