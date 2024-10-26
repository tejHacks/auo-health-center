<?php
session_start();
include('config.php');
// Ensure user is logged in and session contains user information
include('checklogin.php');

// Process form submission for appointment creation
if (isset($_POST["submit"])) {
    try {
        // Get form input securely
        $symptoms = htmlspecialchars(trim($_POST["symptoms"]));
        $symptoms_related = htmlspecialchars(trim($_POST["symptomrelated"]));
        $hall = htmlspecialchars(trim($_POST["hall"]));
        $transport = htmlspecialchars(trim($_POST["transport"]));

        // Generate a random ticket ID
        $randomDigits = strtoupper(bin2hex(random_bytes(3)));  // Generates random 6 hex digits
        $ticketId = $matricNumber . '-' . $randomDigits;

        // Prepare the SQL query for inserting the appointment
        $stmt = $conn->prepare("INSERT INTO appointments (ticket_id, full_name, matric_number, mobile_number, email, gender, level, course, symptoms, symptoms_relating, hall_of_residence, transport, registered) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");

        // Bind the parameters to the query
        $stmt->bind_param("ssssssssssss", 
            $ticketId,        // Ticket ID
            $fullName,        // Full name from session data
            $matricNumber,    // Matric number from session data
            $mobile,          // Mobile number from session data
            $email,           // Email from session data
            $gender,          // Gender from session data
            $level,           // Level from session data
            $course,          // Course from session data
            $symptoms,        // Symptoms from form
            $symptoms_related,// Symptoms related from form
            $hall,            // Hall of residence from form
            $transport        // Transport requirement from form
        );

        // Execute the query
      // Execute the query
      if ($stmt->execute()) {
        $showSuccessAlert = true;
        $message = "Appointment created successfully! Your ticket ID is " . htmlspecialchars($ticketId);
    } else {
        throw new Exception("Error creating appointment: " . $stmt->error);
    }

} catch (Exception $e) {
    // Handle any exceptions or errors
    $showErrorAlert = true;
    $message = "An error occurred: " . $e->getMessage();
}


    // Close the statement and connection
    $stmt->close();
}

$conn->close();
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
    <meta name="keywords" content="Achievers University Health Center Management System,AUO HCMS, Achievers University Health Center">
    
    <meta name="theme-color" content="#7952b3">
    <title>AUO HCMS | CREATE APPOINTMENTS </title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/docs.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="icon" href="../assets/school.png" type="image/png">

    <script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js" defer></script>
    
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.css">
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.min.css">

</head>

<body>
<?php include("header.php"); ?>

<div class="container-fluid h-100 w-100 mt-2 my-5 pt-4">
    <div class="row justify-content-center">
        <div class="col-md-6 border border-3 col-lg-4 col-sm-8">
            <img src="../assets/school.png" class="d-flex text-center" style="text-align:center;margin:0 auto;" width="100">
            <h5 class="text-dark text-center text-uppercase">Reach out to the Doctor.</h5>
            <p class="text-dark text-center text-uppercase">Please fill the form below with correct and accurate information</p>
            
            <h5 class="fw-bold text-dark" style="font-size:16px;">NAME: <?php echo htmlspecialchars($fullName); ?> </h5>  
            <h5 class="fw-bold text-dark" style="font-size:16px;">MATRIC NUMBER: <?php echo htmlspecialchars($matricNumber); ?> </h5>  
            <hr class="text-dark">

            <!-- Appointment Form -->
            <form method="POST" enctype="application/x-www-form-urlencoded" action="" class="text-center border-success" accept-charset="UTF-8" autocomplete="off" id="registrationForm">
                <div class="form-group text-left">
                    <label class="text-left fw-bold" for="reason">State some of the symptoms you feel here.</label>
                    <input type="text" class="form-control" name="symptoms" id="symptoms"
                        placeholder="Headache, cold, runny nose, tummy ache, etc." required>
                </div>

                <div class="form-group text-left">
                    <label class="text-left fw-bold" for="symptomrelated">Have you had any symptoms similar to this before?</label>
                    <input type="text" class="form-control" name="symptomrelated" id="symptomrelated"
                        placeholder="Yes or No" required>
                </div>

                <div class="form-group text-left">
                    <label class="text-left fw-bold" for="hall">Hall of Residence:</label>
                    <input type="text" class="form-control" name="hall" id="hall"
                        placeholder="Type in your hall of residence.." required>
                </div>

                <div class="form-group">
                    <label class="text-left fw-bold" for="transport">Do you require any means of transport to get to the Health Center at the moment?</label>
                    <select class="form-control" name="transport" id="transport" required>
                        <option value="" selected="selected">- Select -</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="py-3 my-3 form-group text-left">
                    <button class="w-100 btn btn-lg btn-success" type="submit" id="submit" name="submit">Submit
                        <i class="fa fa-arrow-circle-forward"></i>
                    </button>
                </div>
            </form>

            <!-- Bootstrap Alert for Success Message -->
 <?php if ($showSuccessAlert): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $message; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

    <!-- Bootstrap Alert for Error Message -->
    <?php if ($showErrorAlert): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo $message; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
        </div>
    </div>
</div>

<?php include("footer.php") ?>

 

</body>
</html>
