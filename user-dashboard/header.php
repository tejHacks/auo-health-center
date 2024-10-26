






<!-- NEW HEADER BUS -->


    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .main-content {
            padding-top: 50px; /* Reduced space for the fixed top navbar */
            padding-bottom: 25px; /* Space for the bottom navbar */
        }
        /* Top Navbar */
        .navbar-top {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333; /* Dark background */
            color: #fff;
            z-index: 1000;
            padding: 8px 20px; /* Reduced padding around the navbar */
            font-size: 14px; /* Reduced font size */
        }
        .navbar-top .navbar-brand {
            font-size: 15px; /* Font size for brand text */
            font-weight: 600; /* Font weight for brand text */
        }
        .navbar-top .navbar-nav .nav-link {
            color: #fff; /* White links */
            font-size: 14px; /* Reduced font size */
        }
        .navbar-top .navbar-nav .nav-link i {
            margin-right: 5px;
            color: #fff; /* Changed icons to white */
        }
        .google-translate {
            margin-left: auto;
            color: #fff;
        }
        .navbar-collapse {
            display: flex;
            justify-content: center;
        }
        /* Bottom Navbar */
        .navbar-bottom {
            display: flex; /* Flexbox for layout */
            justify-content: space-around;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #444; /* Darker background color */
            border-top: 1px solid #333; /* Slightly darker border */
            z-index: 1000;
            padding: 3.5px 0; /* Reduced padding for smaller height */
        }
        .navbar-bottom .nav-link {
            text-align: center;
            flex: 1;
        }
        .navbar-bottom .nav-link i {
            display: block;
            font-size: 18px; /* Adjusted icon size */
            margin-bottom: 3px;
            color: #fff; /* Changed icon color to white */
        }
        .navbar-bottom .nav-link span {
            display: block;
            font-size: 10px; /* Adjusted font size */
            color: #fff; /* Light color for text */
        }

        /* new one */
        .main-content {
    padding-top: 50px; /* Space for the fixed top navbar */
    padding-bottom: 20px; /* Adjusted space for the bottom navbar and potential footer */
}

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Health Center</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard-home.php"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php"><i class="fa fa-user"></i>My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="medical-history.php"><i class="fa fa-info"></i>My Records</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="appointments.php"><i class="fa fa-stethoscope"></i>My Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calls.php"><i class="fa fa-map"></i> Navigate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
                <div id="google_translate_element" class="google-translate"></div>
            </div>
        </div>
    </nav>

    <!-- Bottom Navbar (Unchanged) -->
    <nav class="navbar navbar-light navbar-bottom">
        <a class="nav-link" href="dashboard-home.php">
            <i class="fa fa-home"></i>
            <span>Home</span>
        </a>
        <a class="nav-link" href="appointments.php">
            <i class="fa fa-stethoscope"></i>
            <span>Appointments</span>
        </a>
        <a class="nav-link" href="health-plans.php">
        <i class="fa fa-heart"></i>
            <span>Health Plans</span>
        </a>
        <a class="nav-link" href="settings.php">
            <i class="fa fa-cog"></i>
            <span>Settings</span>
        </a>
    </nav>

    <div class="main-content">
        <!-- Main content goes here -->
    </div>

 
    <!-- other sylesheets -->
    <!-- <link rel="stylesheet" href="../assets/boxicons/css/boxicons.css">
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.min.css"> -->
    <!-- Google Translate API -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
