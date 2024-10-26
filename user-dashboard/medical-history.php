<?php
session_start();
include('config.php');
include('checklogin.php');

// load user data from the medical history's page and show it to the page too::
$stmt = $conn->prepare("SELECT * FROM `medicalhistory` WHERE matric_number = ?");
$stmt->bind_param("s", $matric);
$stmt->execute();
$medicalHistory = $stmt->get_result();
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
    <title>ACHIEVERS UNIVERSITY HEALTH CENTER MANAGEMENT SYSTEM,AUO HCMS | MEDICAL HISTORY</title>

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
    <script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="../assets/font-awesome/" defer></script>
    <!-- other sylesheets -->
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.css">
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.min.css">

</head>

<body>

<?php include("header.php"); ?>
<div class="container my-4 border border-1" style="padding-bottom: 90px;"> <!-- Increased bottom padding -->
     <div class="row mb-4">
        <h2 class="text-center">MEDICAL HISTORY <i class="fa fa-stethoscope"></i></h2><hr>
        <div class="col-md-3">
            <img src="<?php echo htmlspecialchars($profilePhoto); ?>" alt="Profile Photo" class="img-thumbnail" style="width:150px; height:150px;">
        </div>
        <div class="col-md-9">

        <?php if ($medicalHistory->num_rows > 0): ?>
            <table class="table table-bordered">
                <tbody>
                <?php while ($showHistory = $medicalHistory->fetch_assoc()): ?>
                
                <tr>
                        <th>Fullname:</th>
                        <td><?php echo htmlspecialchars($fullName); ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?php echo htmlspecialchars($email); ?></td>
                    </tr>
                    <tr>
                        <th>Matric Number:</th>
                        <td><?php echo htmlspecialchars($matricNumber); ?></td>
                    </tr>
                    <tr>
                        <th>Mobile:</th>
                        <td><?php echo htmlspecialchars($mobile); ?></td>
                    </tr>
                    <tr>
                        <th>Level:</th>
                        <td><?php echo htmlspecialchars($level); ?></td>
                    </tr>
                    <tr>
                        <th>Course:</th>
                        <td><?php echo htmlspecialchars($course); ?></td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td><?php echo htmlspecialchars($gender); ?></td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td><?php echo htmlspecialchars($showHistory['Fullname']); ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php else: ?>
        <p>Your medical history is empty.</p>
        <a href="medicalhistory_enter.php">Provide entries here. </a>
    <?php endif; ?>
        </div>
    </div>
    <!-- <a href="edit-profile.php" class="btn btn-primary">Edit ThiProfile</a> -->
    <button onclick="window.print()" class="btn btn-primary">Print Page</button>
    <!-- <a href="password-change.php" class=" text-light btn btn-success">Change Password</a> -->
</div>


</body>

</html>