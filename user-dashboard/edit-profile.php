<?php
session_start();
include('config.php');
include('checklogin.php');

$message = '';
$messageType = '';

// Update profile logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $matricNumber = $_POST['matricNumber'];
    $gender = $_POST['gender'];
    $level = $_POST['level'];
    $course = $_POST['course'];

    // Handle photo upload
    $profilePhoto = $_FILES['profile_photo'];
    $uploadDir = 'uploads/'; // Make sure this is the correct path
    $uploadedPhoto = '';

    if ($profilePhoto['error'] == 0) {
        // Ensure the file is an image and move it to the uploads folder
        $uploadedPhoto = basename($profilePhoto['name']);
        $uploadFile = $uploadDir . $uploadedPhoto;

        if (move_uploaded_file($profilePhoto['tmp_name'], $uploadFile)) {
            $uploadedPhoto = $uploadFile; // Full path for DB
        } else {
            $message = "Failed to upload the image.";
            $messageType = 'danger';
        }
    } else {
        // If there was an error with the file, keep the old photo
        $uploadedPhoto = $profilePhotoOld; // Use old photo if upload fails
    }

    // Update query
    $currentDate = date('Y-m-d H:i:s'); // Current date and time
    $updateQuery = "UPDATE Student SET 
        Fullname='$fullName', 
        Email='$email', 
        Phonenumber='$mobile', 
        MatricNumber='$matricNumber', 
        Gender='$gender', 
        Level='$level', 
        Course='$course', 
        profile_photo='$uploadedPhoto', 
        updationDate='$currentDate' 
        WHERE Student_ID='$userId'";

    if (mysqli_query($conn, $updateQuery)) {
        $message = "Profile updated successfully!";
        $messageType = 'success';
    } else {
        $message = "Error updating profile: " . mysqli_error($conn);
        $messageType = 'danger';
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

<div class="container my-4" style="padding-bottom: 70px;">
<h2>Edit Profile</h2>
<h5 class="py-3">Hello, <?php echo htmlspecialchars($fullName); ?>!</h5>
<hr>

<?php if ($message): ?>
        <div class="alert alert-<?php echo $messageType; ?>" role="alert">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>


    <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="profile_photo" class="form-label">Profile Photo</label>
        <p>Only JPG, JPEG, PNG, and GIF are allowed</p>
            <input type="file" class="form-control" id="profile_photo" name="profile_photo" accept="image/*" onchange="previewImage(event)">
              <img id="imagePreview" src="<?php echo htmlspecialchars($profilePhoto); ?>" alt="Current Profile Photo" class="img-thumbnail" style="width:150px; height:150px;">
        </div>

        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" value="<?php echo htmlspecialchars($fullName); ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo htmlspecialchars($mobile); ?>" required>
        </div>
        <div class="mb-3">
            <label for="matricNumber" class="form-label">Matric Number</label>
            <input type="text" class="form-control" id="matricNumber" name="matricNumber" value="<?php echo htmlspecialchars($matricNumber); ?>" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender" required>
                <option value="Male" <?php echo $gender == 'Male' ? 'selected' : ''; ?>>Male</option>
                <option value="Female" <?php echo $gender == 'Female' ? 'selected' : ''; ?>>Female</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <input type="text" class="form-control" id="level" name="level" value="<?php echo htmlspecialchars($level); ?>" required>
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">Course</label>
            <input type="text" class="form-control" id="course" name="course" value="<?php echo htmlspecialchars($course); ?>" required>
        </div>
       
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>

    <hr>

</div>    

<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const output = document.getElementById('imagePreview');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>

</body>
</html>