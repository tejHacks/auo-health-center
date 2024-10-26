<?php
// start the session
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health-center";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    // Sanitize and assign values to the variables
    $fullname = htmlspecialchars($_POST['Fullname']);
    $email = htmlspecialchars($_POST['Email']);
    $phone = htmlspecialchars($_POST['mobileNumber']);
    $matric = htmlspecialchars($_POST['matricNumber']);
    $gender = htmlspecialchars($_POST['gender']);
    $level = htmlspecialchars($_POST['level']);
    $course = htmlspecialchars($_POST['course']);
    $user_password = htmlspecialchars($_POST["password"]); // Corrected variable name
    $status=1;
    // Hash the user password for security 
    $Password = password_hash($user_password, PASSWORD_BCRYPT); // Use $user_password here

    // Prepare and execute the parameterized query
    $stmt = $conn->prepare("INSERT INTO `Student` (`Fullname`, Email, Phonenumber, MatricNumber, Gender, `Level`, Course, `Password`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $fullname, $email, $phone, $matric, $gender, $level, $course, $Password);

    if ($stmt->execute()) {
        $_SESSION['matric'] = $matric;
        $_SESSION["password"] = $user_password;
        header("location:user-dashboard/dashboard-home.php");
        exit();
    } else {
        // Handle errors and log them or display any error messages
        echo "Error registering you: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!-- THE HTML PAGE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Site Metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Achievers University Health Center Management System">
    <meta name="theme-color" content="green">
    <meta name="application-name" content="Achievers Health Center Management System">
    <meta name="robots" content="all">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="green">
    <meta name="description" content="A web application for managing and providing digital services that are required by an Healthcare Organizatio of the Achievers University,Owo.">
    <meta name="author" content="Olamide Olateju Emmanuel">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Achievers University Health Center Management System,AUO HCMS, Achievers University Health Center">
    
    <meta name="theme-color" content="#19B10E">
    <title>ACHIEVERS UNIVERSITY HEALTH CENTER MANAGEMENT SYSTEM,AUO HCMS | REGISTRATION PAGE FOR STUDENTS</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="assets/school.png" type="image/png">

</head>

<body class="text-center">
  

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 col-sm-8">

                <a href="index.html">

                    <img src="assets/school.png" class="text-center" width="100">
                </a>
                <h4 class="text-dark text-center text-uppercase fw-bold">ACHIEVERS UNIVERSITY HEALTH CENTER
                </h4>
                <h4 class="text-dark text-center ">Fill in your Details in the Field Below</h4>

                <form method="POST" enctype="application/x-www-form-urlencoded" action="index.php"
                    class="text-center my-3 p-4 rounded border border-success" accept-charset="UTF-8" autocomplete="off"
                    id="registrationForm">

                    <div class=" form-group text-left">
                        <label class="text-left" for="firsname">Full name</label>
                        <input type="text" class="form-control" name="Fullname" id="fullname"
                            placeholder="Enter your full name here.." required oninput="Validate()">
                    </div>

                    <div class="form-group text-left">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" onBlur="userAvailability()" name="Email" id="email"
                            placeholder="email@example.com" autocomplete="off" required>
                        <span id="user-availability-status1" style="font-size:12px;color:red;float:left;"></span>
                    </div><br>




                    <div class="form-group text-left">
                        <label for="mobile">Mobile Number</label>
                        <input type="text" class="form-control" name="mobileNumber" id="mobile"
                            placeholder="+2348086976247" required oninput="ValidateNumber()">
                    </div>

                    <div class="form-group text-left">
                        <label for="matricNumber">Matric Number</label>
                        <input type="text" class="form-control" oninput="userMatric()" id="matricNumber"
                            name="matricNumber" required placeholder="AU24CC5099" required>
                        <span id="matricNumber-error"></span>
                       
                    </div>

                    <div class="form-group">
                        <label for="gender" class="control-label text-center">Gender</label>
                        <select class="form-control" name="gender" id="gender" required>
                            <option value="" selected="selected">- Select -</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female </option>
                            <option value="I'd rather not say">I'd rather not say</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="level" class="control-label text-center">Level</label>
                        <select class="form-control" name="level" id="level" required> 
                            <option value="" selected="selected">- Select -</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                            <option value="500">500</option>
                            <option value="600">600</option>
                        </select>
                    </div>

                    <div class="form-group text-left">
                        <label for="course">Course of Study</label>
                        <input type="text" class="form-control" name="course" id="course"
                            placeholder="Computer Science" required>
                    </div>


                    <div class="form-group text-left">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" onBlur="checkPasswordLength();" name="password"
                            id="Password" placeholder="Type desired password" required> 
                        <span id="user-password" style="font-size:12px;color:red;float:left;"></span>
                    </div>
                    <script type="text/javascript">
                    function lock() {
                        $('#submit').prop('disabled', true);
                    }

                    function unlock() {
                        $('#submit').prop('disabled', false);
                    }

                    function checkPasswordLength() {
                        let passwordCheck = document.getElementById('Password');
                        password = document.getElementById('Password');
                        out = document.getElementById('user-password');
                        if (password.value.length < 6) {
                            out.style.color = "red";
                            out.innerHTML = "Please enter at least 6 characters";
                            lock();
                            passwordCheck.classList.add('is-invalid');
                        } else if (password.value.length >= 6) {
                            out.style.color = "green";
                            out.innerHTML = "Cool! Make sure it is something you also remember!";
                            passwordCheck.classList.remove('is-invalid');
                            passwordCheck.classList.add('is-valid');
                            unlock();
                        }
                    }
                    </script>
                    <div class="col-6 text-left">
                        <p id="checkpassword"><input type="checkbox" id="checkPwd" onclick="showPassword()"> Show
                            Password </p>
                    </div>

                    

                    <button class="w-100 btn btn-lg btn-primary" type="submit" id="submit" name="submit">Submit
                        <i class="fa fa-arrow-circle-right"></i>
                    </button>


                </form>



            </div>
        </div>
    </div>



    <div class="form-actions">  
        <p>
            Already have an account?
            <a style="text-decoration: none;" class="link-success" href="login.php">
                Login Here
                 <!-- <i class="fa fa-arrow-circle-right"></i> -->
            </a>
        </p>
        <p>
            I forgot my password
            <a style="text-decoration: none;" class="link-primary" href="reset-password.php">
                Reset Here
                <!-- <i class="fa fa-arrow-circle-right"></i> -->
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


<!-- scripts in the page -->
<script src="assets/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/modernizr/modernizr.js"></script>
<script src="assets/vendor/jquery-cookie/jquery.cookie.js"></script>
<script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/vendor/jquery-validation/jquery.validate.js"></script>
<script src="assets/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/vendor/switchery/switchery.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/login.js"></script>


<!-- Ajax Scripts in JQuery -->

<script>
jQuery(document).ready(function() {
    Main.init();
    Login.init();
});

// check if the user email has been registered or not

function userAvailability() {
    $("#loaderIcon").show();
    jQuery.ajax({
        url: "check_availability.php",
        data: 'Email=' + $("#email").val(),
        type: "POST",
        success: function(data) {
            $("#user-availability-status1").html(data);
            $("#loaderIcon").hide();
        },
        error: function() {
            console.error("AJAX Error:", textStatus, errorThrown);
        }
    });
}

// validate the user matric number too  and check if not registered.

function userMatric() {
    $("#loaderIcon").show();
    jQuery.ajax({
        url: "check_matric.php",
        data: 'matricNumber=' + $("#matricNumber").val(),
        type: "POST",
        success: function(data) {
            $("#matricNumber-error").html(data);
            $("#loaderIcon").hide();
        },
        error: function() {
            console.error("AJAX Error:", textStatus, errorThrown);
        }
    });
}


// show and hide password
let password = document.getElementById("Password");

function showPassword() {
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password"
    }
}

// validate the other data on the frontend
let name = document.getElementById('fullname');
let mobile = document.getElementById('mobile');

function Validate(){
    
    if(name.value.length == 0 || name.value.length == ''){
        lock();
        name.classList.remove('is-valid');
        name.classList.add('is-invalid');
    }else if(name.value.length > 0 || name.value.length !== '')
    {
        unlock();
        name.classList.remove('is-invalid');
        name.classList.add('is-valid');
    }
}
</script>


</html>