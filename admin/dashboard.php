<?php

include('checkadminlogin.php');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEAT SYSTEM| DASHBOARD</title>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="sidebar.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="icon" href="../assets/school.png" type="image/png">
</head>

<body>
<?php include('header.php'); ?>


<div id="page-content-wrapper" class="flex-grow-1">
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