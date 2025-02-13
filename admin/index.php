<?php
session_start();

// Include your database connection
include('includes/config.php'); 



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $StaffId = htmlspecialchars($_POST["staffID"]);
    $Staffpassword = htmlspecialchars($_POST["password"]);


    function validateStaffID($StaffId) {
        return preg_match("/^AU[0-9]{2}[A-Z]{2}[0-9]{4}/",$StaffId);
    }

    // Validate matric number
    if (!validateStaffID($StaffId)) {
        echo "<div class='alert alert-danger mt-3' role='alert'>Invalid staff ID / Number,please enter the registered Staff ID/Number
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        exit();
    }
    else{

    // Retrieve hashed password from the database
    $stmt = $conn->prepare("SELECT `Password` FROM `Admin` WHERE `StaffID` = ?");
    $stmt->bind_param("s", $StaffId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row["Password"];

        // Verify the password
        if (password_verify($Staffpassword, $stored_password)) {
            $_SESSION['staffID'] = $StaffId;
            header("location:dashboard.php");
            exit();
        } else {
            echo "<div class='alert alert-danger mt-3' role='alert'>Incorrect Password, please try again.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
    } else {
        echo "<div class='alert alert-danger mt-3' role='alert'>Your librarian id was not found.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }

    $stmt->close();
}

}
$conn->close();
?>



<!-- THE HTML PAGE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Site Metas -->
      <!-- Site Metas -->
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
    
    <meta name="theme-color" content="#19B10E">
    <title>ACHIEVERS UNIVERSITY LIBRARY | ADMIN LOGIN </title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/boxicons/css/boxicons.css">
    <link rel="stylesheet" type="text/css" href="../assets/boxicons/css/boxicons.min.css">
    

<!-- few scripts -->
    <script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js" defer></script>
    <script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="../assets/font-awesome/" defer></script>
    <!-- other sylesheets -->
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.css">
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.min.css">

    <link rel="stylesheet" href="../assets/style.css">
    <link rel="icon" href="../assets/school.png" type="image/png">
</head>

<body class="text-center">
  

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <a href="index.php">

                    <img src="../assets/school.png" class="text-center" width="100">
                </a>
                <h4 class="text-dark text-center text-uppercase fw-bold">WELCOME BACK ADMIN
                </h4>
                <p style="font-size:19px;font-weight:600;" class="text-dark fw-600 text-center text-uppercase">Login below</p>


                <form method="POST" enctype="application/x-www-form-urlencoded" class="text-center my-3 p-4 rounded border border-2 border-primary" accept-charset="UTF-8" autocomplete="off"
                    id="registrationForm">

                    <div class="form-group text-left">
                        <label for="adminId">Staff ID/Number</label>
                        <input type="text" class="form-control" name="staffID" id="adminId" placeholder="AU24CC5099">
                        <span id="user-availability-status1" style="font-size:12px;color:red;float:left;"></span>
                    </div><br>

                    <div class="form-group text-left">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="password" id="Password"
                            placeholder="1234#2023_5happyboys">
                        <span id="user-password" style="font-size:12px;color:red;float:left;"></span>
                    </div><br>
                    <div class="form-group text-left col-6" style="position:relative;top: -11px;right:50px;">
                        <p id="checkpassword"><input type="checkbox" id="checkPwd" onclick="showPassword()"> Show
                            Password </p>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login" id="submit">
                        LOGIN <i class="fa fa-user"></i>
                    </button>


                </form>


            </div>
        </div>
    </div>



    <div class="form-actions">

       
        <p>
            I forgot my password
            <a style="text-decoration: none;" class="link-danger" href="adminreset-password.php">
                Reset Here.
            </a>
        </p>

    </div>
    <footer class="row mt-5 align-items-center justify-content-center">
        <div class="col-12">

            <p class="mt-5 mb-3 text-muted">&copy;<span id="year"></span> ACHIEVERS UNIVERSITY OWO.All rights
                reserved
            </p>
        </div>
    </footer>
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

<script>
function loadwarn() {

    let warn = document.getElementById('warn-user');
    warn.innerHTML = 'Fill in the required data please';
}
</script>

<script>
let password = document.getElementById("Password");

function showPassword() {
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password"
    }
}
// get the year and load it out
// Get the year
let year = document.getElementById("year");
let dateYear = new Date().getFullYear();
year.innerHTML = dateYear;
</script>



</html>