<?php
session_start();
include('config.php');


if (!empty($_SESSION['matric']) && !empty($_SESSION['password'])) {
    $matric = $_SESSION['matric'];
    $password = $_SESSION['password'];
 
    $stmt = $conn->prepare("SELECT * FROM `Student` WHERE `MatricNumber` = ? ");
 $stmt->bind_param("s",$matric);
 $stmt->execute();
 $result = $stmt->get_result();

 if($result->num_rows >0){
    $row = $result->fetch_assoc();
    $fullName = $row["Fullname"];
    $email = $row["Email"];
    $matricNumber = $row["MatricNumber"];
    $mobile = $row["Phonenumber"];
    $id = $row["Student_ID"];
    $level = $row["Level"];
    $course = $row["Course"];
    $gender = $row["Gender"];
 }

}
 else {
    header("location:../login.php");
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
    <title>ACHIEVERS UNIVERSITY HEALTH CENTER MANAGEMENT SYSTEM,AUO HCMS | REGISTRATION PAGE FOR STUDENTS</title>

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

    <style>
     

        /* Container Styles */
        .content-box {
            border-radius: 10px;
            background-color: #f8f9fa;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .content-box:hover {
            transform: translateY(-5px);
            background-color: #f1f1f1;
        }


        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateX(-50px);
            animation: fadeIn 0.5s ease forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>

<?php include("header.php"); ?>

<!-- Dark Mode Toggle Button -->
<!-- <button id="darkModeToggle" title="Toggle dark mode">
    <i class="fa fa-moon-o"></i>
</button> -->

<div class="container my-4" style="padding-bottom:120px;">
    <h5 class="fw-bold fade-in" style="font-size:18px;">Hi, <?php echo htmlspecialchars($fullName); ?> </h5>
    <?php include("greet.php"); ?>
    <hr>

    <div class="row fade-in">
        <div class="col-md-6 py-3">
            <div class="content-box">
                <h5>Wanna meet the doctor? <i class="fa fa-user text-success"></i></h5>
                <p>Feeling tired or showing symptoms? We prioritize your health.</p>
                <a class="btn btn-outline-dark" href="appointment-create.php">Book an appointment</a>
            </div>
        </div>

        <div class="col-md-6 py-3">
            <div class="content-box">
                <h5>Need a health plan? <i class="fa fa-heart text-danger"></i></h5>
                <p>Explore our health plans. A healthy mind is a wealthy mind!</p>
                <a class="btn btn-outline-dark" href="health-plans.php">Health Plans</a>
            </div>
        </div>


        <div class="col-md-6 py-3">
        <div class="content-box">
    <h5>See your medical history? <i class="fa fa-book text-primary"> </i></h5> 
    <p>Need comprehensive information about your health?</p> 
    <a class="btn btn-small btn-outline-dark" type="button" href="medical-history.php"> 
        View my medical history
    </a> 
</div>
   </div>

   <div class="col-md-6 py-3">
   <div class="content-box">
    <h5>Need help reaching the health center immediately? <i class="fa fa-phone text-success"> </i></h5> 
    <p>Reach the health center now.</p> 
    <a class="btn btn-small btn-outline-dark" type="button" href="calls.php"> 
        See the Call Lines
    </a> 
</div>
   </div>

   <div class="col-md-6 py-3">
            <div class="content-box">
    <h5>Make a quick complaint? <i class="fa fa-book text-success"> </i></h5> 
    <p>Can't visit the health center? Submit a complaint from wherever you are.</p> 
    <a class="btn btn-small btn-outline-dark" type="button" href="complaints.php"> 
        Make a complaint right now
    </a> 
</div>
   </div>

   <div class="col-md-6 py-3">
   <div class="content-box">
    <h5>Need counseling? We are here to help you out. <i class="fa fa-users text-primary"> </i></h5> 
    <p>Professional counselors are available on campus. Need help? Reach out to us. </p> 
    <a class="btn btn-small btn-outline-dark" type="button" href="counseling.php"> 
        Request Counseling
    </a> 
</div>
   </div>

   <div class="col-md-6 py-3">
            <div class="content-box">
    <h5>Read a quote on health. <i class="fa fa-users text-success"> </i></h5> 
    <p> Read some random quotes on health and safety.</p> 
    <a class="btn btn-small btn-outline-dark" type="button" href="health-quotes.php"> 
        Read Quotes
    </a> 
</div>
   </div>

   

   <div class="col-md-6 py-3">
   <div class="content-box">
    <h5>First Aid Procedures <i class="fa fa-users text-primary"> </i></h5> 
    <p> See some first aid procedures</p> 
    <a class="btn btn-small btn-outline-dark" type="button" href="first-aid.php"> 
    See them
    </a> 
</div>
   </div>




</div>


</body>
<script>
    // Dark Mode Toggle Script
    const toggleButton = document.getElementById('darkModeToggle');
    toggleButton.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });
</script>
</html>
