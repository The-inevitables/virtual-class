<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('548493974250-vgfnm803fdoq2hq1pvupvfpiroseig9e.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('jjj1tX4IsZVRe-Shyk_8JfrZ');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://vclass.herokuapp.com/dashboard/indexteachergoogle.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>
