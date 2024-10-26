<?php
session_start();
include('config.php');
// Ensure user is logged in and session contains user information
include('checklogin.php');

$submissionSuccess = false; // Variable to track submission status

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and retrieve form data
    $request_reason = htmlspecialchars(trim($_POST['request_reason']));


    
    // Prepare and execute the SQL statement to insert data
    $stmt = $conn->prepare("INSERT INTO counseling_requests (student_id, fullname, matric_number, course, request_reason) VALUES (?, ?, ?, ?, ?)");
    
    if ($stmt) {
        // Assuming $userId is defined and represents the ID of the logged-in student
        $stmt->bind_param("issss", $userId, $fullName, $matric, $course, $request_reason);
        
        if ($stmt->execute()) {
            $submissionSuccess = true; // Set to true on successful submission
        } else {
            $errorMsg = "Error submitting request: " . htmlspecialchars($stmt->error);
        }

        $stmt->close();
    } else {
        $errorMsg = "Error preparing statement: " . htmlspecialchars($conn->error);
    }
}
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
    <meta name="description" content="A web application for managing and providing digital services that are required by an Healthcare Organization of the Achievers University,Owo.">
    <meta name="author" content="Olamide Olateju Emmanuel">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Achievers University Health Center Management System,AUO HCMS, Achievers University Health Center">
    
    <meta name="theme-color" content="#7952b3">
    <title>REQUEST COUNSELING PAGE | HEALTH CENTER </title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/docs.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="icon" href="../assets/school.png" type="image/png">

    <!-- Scripts -->
    <script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js" defer></script>
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.css">
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.min.css">
    <script>
        function showAlertAndHideForm() {
            // Show alert and hide form
            document.getElementById('alert').style.display = 'block';
            document.getElementById('counselingForm').style.display = 'none';
        }
    </script>
</head>

<body>

<?php include("header.php"); ?>

<div class="container mt-4">
    <h2 class="text-center">Counseling Request Form</h2>
    
    <?php if ($submissionSuccess): ?>
        <div class="alert alert-success" id="alert" style="display: none;">Counseling request submitted successfully!</div>
        <script>showAlertAndHideForm();</script>
    <?php elseif (isset($errorMsg)): ?>
        <div class="alert alert-danger" id="alert" style="display: none;"><?php echo $errorMsg; ?></div>
        <script>showAlertAndHideForm();</script>
    <?php endif; ?>

    <form method="POST" id="counselingForm">
        <div class="row mb-3">
            <div class="col">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo htmlspecialchars($fullName); ?>" readonly>
            </div>
            <div class="col">
                <label for="matric_number" class="form-label">Matric Number</label>
                <input type="text" class="form-control" id="matric_number" name="matric_number" value="<?php echo htmlspecialchars($matric); ?>" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="course" class="form-label">Course</label>
                <input type="text" class="form-control" id="course" name="course" value="<?php echo htmlspecialchars($course); ?>" readonly>
            </div>
            <div class="col">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" value="<?php echo htmlspecialchars($gender); ?>" readonly>
            </div>
        </div>
        <div class="mb-3">
            <label for="request_reason" class="form-label">Reason for Counseling</label>
            <textarea class="form-control" id="request_reason" name="request_reason" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Request</button>
    </form>
</div>

<script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
