
<?php
session_start();
include('config.php');

// Ensure the ticket ID and matric number are passed
if (isset($_GET['ticket_id']) && isset($_GET['matric'])) {
    $ticketId = $_GET['ticket_id'];
    $matricNumber = $_GET['matric'];

    // Fetch the appointment details
    $stmt = $conn->prepare("SELECT * FROM appointments WHERE ticket_id = ? AND matric_number = ?");
    $stmt->bind_param("ss", $ticketId, $matricNumber);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $appointmentDetails = $result->fetch_assoc();
    } else {
        echo "No details found for this appointment.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
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
    <title>ACHIEVERS UNIVERSITY HEALTH CENTER MANAGEMENT SYSTEM,AUO HCMS | SEE YOUR APPOINTMENTS</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.min.css">

    <script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js" defer></script>
    
    <!-- jsPDF for PDF generation -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" defer></script>

</head>

<body>

<?php include("header.php"); ?>

<div class="container my-3 py-6" id="appointmentDetails">
    <h1>Appointment Details</h1>
    <h5>Details for Ticket ID: <?php echo htmlspecialchars($appointmentDetails['ticket_id']); ?></h5>
    <button id="printBtn" class="btn btn-primary mb-2">Print Appointment</button>
    <button id="downloadBtn" class="btn btn-success mb-2">Download as PDF</button>
    <table class="table table-bordered">
        <tr>
            <th>Full Name</th>
            <td><?php echo htmlspecialchars($appointmentDetails['full_name']); ?></td>
        </tr>
        <tr>
            <th>Matric Number</th>
            <td><?php echo htmlspecialchars($appointmentDetails['matric_number']); ?></td>
        </tr>
        <tr>
            <th>Mobile Number</th>
            <td><?php echo htmlspecialchars($appointmentDetails['mobile_number']); ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo htmlspecialchars($appointmentDetails['email']); ?></td>
        </tr>
        <tr>
            <th>Symptoms</th>
            <td><?php echo htmlspecialchars($appointmentDetails['symptoms']); ?></td>
        </tr>
        <tr>
            <th>Appointment Date</th>
            <td><?php echo htmlspecialchars($appointmentDetails['registered']); ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?php echo htmlspecialchars($appointmentDetails['status']); ?></td>
        </tr>
    </table>

   
</div>

<script>


    // download the pdf
   
    // Function to print the appointment details
    document.getElementById('printBtn').addEventListener('click', function() {
        window.print();
    });

    // Function to download appointment details as PDF
    document.getElementById('downloadBtn').addEventListener('click', function() {
        const element = document.getElementById('appointmentDetails');
        html2pdf()
            .from(element)
            .save('appointment-details.pdf');
    });

</script>

</body>
</html>




