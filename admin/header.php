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

        /* Page content beside sidebar */
        #page-content-wrapper {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }
    </style>
</head>
<body>

<div id="sidebar-wrapper">
    <div class="sidebar-heading"><i class="fa fa-medkit me-2"></i>Health Center Admin</div>
    <div class="list-group list-group-flush">
        <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent text-white">
            <i class="fa fa-dashboard me-2"></i>Dashboard
        </a>
        <!-- Dropdowns for various sections -->
        <div class="dropdown">
            <a href="#" class="list-group-item list-group-item-action bg-transparent text-white dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-users me-2"></i>Manage Patients
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="patient_records.php">Manage Patients</a></li>
                <li><a class="dropdown-item" href="register_patient.php">Register New Patient</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a href="#" class="list-group-item list-group-item-action bg-transparent text-white dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-user-md me-2"></i>Staff Management
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="staff_management.php">Manage Staff</a></li>
                <li><a class="dropdown-item" href="register_staff.php">Register New Staff</a></li>
            </ul>
        </div>
        <!-- Add similar dropdowns for Appointments, Contact Management, Admins, Student Records -->
        <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger">
            <i class="fa fa-sign-out me-2"></i>Logout
        </a>
    </div>
</div>
<script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
