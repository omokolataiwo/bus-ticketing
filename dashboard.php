<?php
session_start();
require_once __DIR__ . '/template/bootstrap.php';

if (!isset($_SESSION['isSignin']) || $_SESSION['isSignin'] != true) {
  header('location: /index.php');
}

echo $twig->render('dashboard.twig');

