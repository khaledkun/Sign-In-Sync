<?php
require 'Router.php';
include 'Templates/SharedConfig.php';
include 'Templates/MetaTags.php';     

$router = new Router();

// Define routes for your views
$router->add('', $HomeView . 'HomePage.php');
$router->add('about-us', $HomeView . 'AboutUs.php');
$router->add('buy-now', $HomeView . 'BuyNow.php');
$router->add('company-vision', $HomeView . 'CompanyVision.php');
$router->add('credits', $HomeView . 'Credits.php');
$router->add('services', $HomeView . 'Services.php');
$router->add('terms', $HomeView . 'TermsConditions.php');
$router->add('email-verify', $RegestrationView . 'EmailVerify.php');
$router->add('forgot-password', $RegestrationView . 'ForgotPasswsord.php');
$router->add('login', $RegestrationView . 'login.php');
$router->add('new-password', $RegestrationView . 'NewPassword.php');
$router->add('sign-up', $RegestrationView . 'SignUp.php');

// Dispatch the request
$router->dispatch();
?>
