<?php
include('config.php');

// Ensure user is logged in and session contains user information
include('checklogin.php');
// Fetch contact lines from the database
$query = "SELECT contact_type, contact_number FROM ContactLines";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Site Metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>CONTACT THE HEALTH CENTER </title>

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

<div class="container mt-4" style="padding-bottom:80px;">
    <h2 class="text-center">Contact Medical Practitioners</h2>
    <div class="row">
        <div class="col-md-6">
            <h4>Contact Numbers</h4>
            <ul class="list-group">
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <li class="list-group-item">
                            <strong><?php echo htmlspecialchars($row['contact_type']); ?>:</strong>
                            <a href="tel:<?php echo htmlspecialchars($row['contact_number']); ?>">
                                <?php echo htmlspecialchars($row['contact_number']); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php else: ?>
                    <li class="list-group-item">No contact numbers available.</li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="col-md-6">
            <h4>Health Center Location</h4>
            <!-- Map Embed -->
            <div id="map" style="width: 90%; height: 250px;" style="padding-bottom:50px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.8297392437016!2d5.5861871859156675!3d7.167788728900191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1047af2f09bf161d%3A0xdfb26d3cd30abb8b!2sTrinity%20Hall!5e0!3m2!1sen!2sng!4v1727442493309!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
           <p class="pt-4">
             <a href="https://maps.app.goo.gl/mt4wKKXvF1nh2mfr6">NEED DIRECTIONS, CHECK THIS OUT </a>
           </p>
        </div>
    </div>
</div>


<script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
