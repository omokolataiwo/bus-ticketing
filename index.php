<?php
session_start();
require_once(__DIR__.'/template/bootstrap.php');

$signinError = '';

if (isset($_SESSION['signinError']) && $_SESSION['signinError'] == true) {
  $signinError = 'Invalid Username or Password';
  session_destroy();
}


echo $twig->render('index.twig', ['signin_error' => $signinError]);
