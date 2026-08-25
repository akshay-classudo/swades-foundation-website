<?php
require_once 'vendor/autoload.php';

$clientID     = "574265450561-thnm6msqba9r5q65adkveggpi15l5jqa.apps.googleusercontent.com";
$clientSecret = "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";
$redirectUri  = "https://nexgenclassy.in/swadesnew/google-callback.php";

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");