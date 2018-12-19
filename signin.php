<?php
session_start();
require_once(__DIR__.'/template/bootstrap.php');

use App\User as User;

$username = $_POST['username'];
$password = $_POST['password'];

$user = new User($username, $password);

if($user->signin()) {
  $_SESSION['isSignin'] = true;
  header('location: /dashboard.php');
  return;
}

$_SESSION['signinError'] = true;
header('location: /index.php');
