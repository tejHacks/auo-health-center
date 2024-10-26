<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    
    <style>
        /* Full-height layout with sidebar */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            display: flex;
            font-family: Arial, sans-serif;
        }

        #sidebar-wrapper {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: #ffffff;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
        }

        .sidebar-heading {
            font-size: 1.5rem;
            color: #ffffff;
            padding: 1rem;
            text-align: center;
        }

        .list-group-item {
            color: #ffffff;
            padding: 10px 20px;
            transition: background-color 0.2s;
            font-size: 1.1rem;
        }

        .list-group-item:hover {
            background-color: #333;
        }

        .dropdown-toggle::after {
            margin-left: auto;
        }

        /* Dropdown Menu Styles */
        .dropdown-menu {
            background-color: #343a40; /* Dark background for dropdown */
        }

        .dropdown-item {
            color: #ffffff; /* White text for dropdown items */
        }

        .dropdown-item:hover {
            background-color: #495057; /* Darker background on hover */
            color: #ffffff; /* Keep text white on hover */
        }

        /* Page content beside sidebar */
        #page-content-wrapper {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }

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

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark border-end text-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold border-bottom">
            <i class="fa fa-medkit me-2"></i>Health Center Admin
        </div>
        <div class="list-group list-group-flush my-3">
            <a href="dashboard.php" class="list-group-item list-group-item-action bg-primary text-light">
                <i class="fa fa-dashboard me-2"></i>Dashboard
            </a>
            <div class="dropdown">
                <a class="list-group-item list-group-item-action bg-primary text-light dropdown-toggle" id="managePatientsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-users me-2"></i>Manage Patients <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="managePatientsDropdown">
                    <li><a class="dropdown-item" href="patient_records.php">Manage Patients</a></li>
                    <li><a class="dropdown-item" href="register_patient.php">Register New Patient</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="list-group-item list-group-item-action bg-primary text-light dropdown-toggle" id="staffManagementDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user-md me-2"></i>Staff Management <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="staffManagementDropdown">
                    <li><a class="dropdown-item" href="staff_management.php">Manage Staff</a></li>
                    <li><a class="dropdown-item" href="register_staff.php">Register New Staff</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="list-group-item list-group-item-action bg-primary text-light dropdown-toggle" id="appointmentsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-calendar-check-o me-2"></i>Appointments <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="appointmentsDropdown">
                    <li><a class="dropdown-item" href="appointments.php">Manage Appointments</a></li>
                    <li><a class="dropdown-item" href="create_appointment.php">Create New Appointment</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="list-group-item list-group-item-action bg-primary text-light dropdown-toggle" id="contactManagementDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-phone me-2"></i>Contact Management <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="contactManagementDropdown">
                    <li><a class="dropdown-item" href="contact_lines.php">Manage Contact List</a></li>
                    <li><a class="dropdown-item" href="register_contact.php">Register New Contact</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="list-group-item list-group-item-action bg-primary text-light dropdown-toggle" id="newsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-newspaper-o me-2"></i>News <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="newsDropdown">
                    <li><a class="dropdown-item" href="add_news.php">Add News</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="list-group-item list-group-item-action bg-primary text-light dropdown-toggle" id="adminsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user-secret me-2"></i>Admins <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="adminsDropdown">
                    <li><a class="dropdown-item" href="admin_management.php">Manage Admins</a></li>
                    <li><a class="dropdown-item" href="add_admin.php">Add New Admin</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="list-group-item list-group-item-action bg-primary text-light dropdown-toggle" id="studentRecordsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-graduation-cap me-2"></i>Student Records <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="studentRecordsDropdown">
                    <li><a class="dropdown-item" href="student_records.php">Manage Student Records</a></li>
                </ul>
            </div>
            <a href="logout.php" class="list-group-item list-group-item-action bg-primary text-light">
                <i class="fa fa-sign-out me-2"></i>Logout
            </a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

</div>

<script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
