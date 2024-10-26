<?php
include('config.php');
include('checklogin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
     
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
  
    <!-- Stylesheets -->
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
</head>
<body>

<?php include("header.php"); ?>

<div class="container mt-4">
    <h2 class="text-center">Notifications</h2>
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">
            <i class="fa fa-bell"></i> You have a new appointment scheduled for tomorrow at 10 AM.
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <i class="fa fa-bell"></i> Your counseling request has been received.
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <i class="fa fa-bell"></i> Reminder: Please fill out your health survey.
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <i class="fa fa-bell"></i> Don't forget to check your test results!
        </a>
    </div>
</div>

<script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
