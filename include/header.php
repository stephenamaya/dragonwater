<?php
session_start();
require "include/connect.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Dragon Water</title>

<link rel="stylesheet" type="text/css" href="main.css" />
<link href="https://fonts.googleapis.com/css?family=Capriola&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Heebo:100,300&display=swap" rel="stylesheet">
</head>

<body>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="store.php">Store</a></li>
    <?php if(!isset($_SESSION['username'])): ?>
    <li><a href="login.php">Login</a></li>
    <li style="float:right"><a href="signup.php">Sign up</a></li>
    <?php else:?>
    <li><a href="profile.php">Profile</a></li>
    <li style="float:right"><a href="logout.php">Logout</a></li>
    <?php endif; ?>

  </ul>
