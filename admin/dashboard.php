<?php
include('checkadminlogin.php');
// Adjust to match your database connection file

// Fetch total students
$total_students_query = "SELECT COUNT(*) AS total_students FROM Student";
$total_students_result = mysqli_query($conn, $total_students_query);
$total_students = mysqli_fetch_assoc($total_students_result)['total_students'];

// Fetch total patients
$total_patients_query = "SELECT COUNT(*) AS total_patients FROM Patients";
$total_patients_result = mysqli_query($conn, $total_patients_query);
$total_patients = mysqli_fetch_assoc($total_patients_result)['total_patients'];

// Fetch total appointments
$total_appointments_query = "SELECT COUNT(*) AS total_appointments FROM appointments";
$total_appointments_result = mysqli_query($conn, $total_appointments_query);
$total_appointments = mysqli_fetch_assoc($total_appointments_result)['total_appointments'];

// Fetch total counseling sessions
$total_counseling_query = "SELECT COUNT(*) AS total_counseling FROM counseling_requests";
$total_counseling_result = mysqli_query($conn, $total_counseling_query);
$total_counseling = mysqli_fetch_assoc($total_counseling_result)['total_counseling'];


/// Fetch the two most recent patients
$recent_patients_query = "SELECT date_registered, fullname, department FROM Patients ORDER BY date_registered DESC LIMIT 2";
$recent_patients = mysqli_query($conn, $recent_patients_query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACHIEVERS UNIVERSITY HEALTH CENTER | ADMIN DASHBOARD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Achievers University Library">
    <meta name="theme-color" content="green">
    <meta name="application-name" content="Achievers University Library">
    <meta name="robots" content="all">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="green">
    <meta name="description" content="A web application for connecting with Achievers University Library.">
    <meta name="author" content="Olamide Olateju Emmanuel">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Achievers University Library">
    

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/boxicons/css/boxicons.css">
    <link rel="stylesheet" type="text/css" href="../assets/boxicons/css/boxicons.min.css">
    

<!-- few scripts -->
  <style>

.card {
    height: 150px; /* Increase card height */
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem; /* Increase font size for card text */
}

.card-body {
    text-align: center;
}

  </style>
</head>

<body>
<?php include('header.php'); ?>


<div id="page-content-wrapper" class="flex-grow-1">
        <div class="container-fluid ">
            <h1 class="mt-4">Dashboard</h1>
            <div class="row text-uppercase">
                <div class="col-md-3 mb-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Students Registered</h5>
                            <p class="card-text"><?php echo $total_students; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Patients</h5>
                            <p class="card-text"><?php echo $total_patients; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card bg-warning text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Appointments</h5>
                            <p class="card-text"><?php echo $total_appointments; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Counseling Sessions</h5>
                            <p class="card-text"><?php echo $total_counseling; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="mt-4">Recent Activities</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Activity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($activity = mysqli_fetch_assoc($recent_activities)): ?>
                    <tr>
                        <td><?php echo $activity['created_at']; ?></td>
                        <td><?php echo $activity['description']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container-fluid">
    <h1 class="mt-4">Dashboard</h1>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Students Registered</h5>
                    <p class="card-text"><?php echo $total_students; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Patients</h5>
                    <p class="card-text"><?php echo $total_patients; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Appointments</h5>
                    <p class="card-text"><?php echo $total_appointments; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Counseling Sessions</h5>
                    <p class="card-text"><?php echo $total_counseling; ?></p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-4">Recently Registered Patients</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Date Registered</th>
            <th>Full Name</th>
            <th>Department</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($patient = mysqli_fetch_assoc($recent_patients)): ?>
        <tr>
            <td><?php echo $patient['date_registered']; ?></td>
            <td><?php echo $patient['fullname']; ?></td>
            <td><?php echo $patient['department']; ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</div>


</body>

<script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.min.js" defer></script>
<script src="../assets/vendor/jquery/jquery.min.js" defer></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.js" defer></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js" defer></script>
<script src="../assets/vendor/modernizr/modernizr.js" defer></script>
<script src="../assets/vendor/jquery-cookie/jquery.cookie.js" defer></script>
<script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js" defer></script>
<script src="../assets/vendor/jquery-validation/jquery.validate.js" defer></script>
<script src="../assets/vendor/jquery-validation/jquery.validate.min.js" defer></script>
<script src="../assets/vendor/switchery/switchery.min.js" defer></script>

</html>