<?php
session_start();
include('config.php');
// Ensure user is logged in and session contains user information
include('checklogin.php');

// Fetch the user's appointments
$stmt = $conn->prepare("SELECT * FROM appointments WHERE matric_number = ?");
$stmt->bind_param("s", $matric);
$stmt->execute();
$appointmentResult = $stmt->get_result();

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
    <title>ACHIEVERS UNIVERSITY HEALTH CENTER MANAGEMENT SYSTEM,AUO HCMS |SEE YOUR APPOINTMENTS</title>

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
<div class="container my-4">
    <h1>Your Appointments</h1>
    <h5>Hello, <?php echo htmlspecialchars($fullName); ?>!</h5>
    
    <?php if ($appointmentResult->num_rows > 0): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Ticket ID</th>
                    <th>Full Name</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Symptoms</th>
                    <th>Appointment Date</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($appointment = $appointmentResult->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($appointment['ticket_id']); ?></td>
                        <td><?php echo htmlspecialchars($appointment['full_name']); ?></td>
                        <td><?php echo htmlspecialchars($appointment['mobile_number']); ?></td>
                        <td><?php echo htmlspecialchars($appointment['email']); ?></td>
                        <td><?php echo htmlspecialchars($appointment['symptoms']); ?></td>
                        <td><?php echo htmlspecialchars($appointment['registered']); ?></td>
                        <td>
                            <a href="appointment_details.php?ticket_id=<?php echo urlencode($appointment['ticket_id']); ?>&matric=<?php echo urlencode($appointment['matric_number']); ?>" class="btn btn-primary btn-sm">See More</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>You have no appointments scheduled.</p>
    <?php endif; ?>
</div>

</body>
</html>