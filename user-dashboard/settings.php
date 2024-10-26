<?php
include('config.php');
include('checklogin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings </title>
    
    <meta name="keywords" content="CodeCamp,Coding academy camp">
    <meta name="theme-color" content="green">
    <meta name="application-name" content="Achievers Health Center Management System">
    <meta name="robots" content="all">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="green">
    <meta name="description" content="A web application for managing and providing digital services that are required by an Healthcare Organizatio of the Achievers University,Owo.">
    <meta name="author" content="Olamide Olateju Emmanuel">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Achievers University Health Center Manaagement System,AUO HCMS, Achievers University Health Center">
    
    <meta name="theme-color" content="#7952b3">
  
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/docs.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="icon" href="../assets/school.png" type="image/png">

<!-- few scripts -->
    <script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js" defer></script>
  
    <!-- other sylesheets -->
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.css">
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>

<?php include("header.php"); ?>

<div class="container mt-4">
    <h2 class="text-center">Settings</h2>
    <div class="list-group">
        <a href="edit-profile.php" class="list-group-item list-group-item-action">
            <i class="fa fa-user"></i> Edit Profile
        </a>
        <a href="notifications.php" class="list-group-item list-group-item-action">
            <i class="fa fa-bell"></i> Check Notifications
        </a>
        <a href="reset_password.php" class="list-group-item list-group-item-action">
            <i class="fa fa-lock"></i> Change Password
        </a>
       
        <a href="appointments.php" class="list-group-item list-group-item-action">
            <i class="fa fa-calendar-check"></i> Manage Appointments
        </a>
        <a href="manage_counseling.php" class="list-group-item list-group-item-action">
            <i class="fa fa-comments"></i> Manage Counseling Requests
        </a>
        <a href="logout.php" class="list-group-item list-group-item-action text-danger">
            <i class="fa fa-sign-out-alt"></i> Logout
        </a>
    </div>
</div>

<script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
