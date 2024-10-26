<?php
session_start();
include('config.php');
include('checklogin.php');
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
    <title>HEALTH PLAN FOR STUDENTS </title>

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

    <style>
        
        body {
            background-color: #f8f9fa;
            padding-bottom: 80px;
        }
        .jumbotron {
            background-color: #4CAF50; /* Green */
            color: white;
        }
        .jumbotron h2 {
            color: #FFD700; /* Yellow */
        }
        .card {
            border: none;
            border-radius: 8px;
        }
        .card-header {
            background-color: #6A5ACD; /* Purple */
            color: white;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            padding: 1rem;
            background-color: #6A5ACD; /* Purple */
            color: white;
        }
    </style>

</head>

<body>

<?php include("header.php"); ?>

<div class="container my-4">
    <div class="jumbotron text-center">
        <h1>Student Health Plans</h1>
        <p>Explore simple health plans that resonate with students and encourage healthy habits!</p>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">Mini Man Plan</div>
                <div class="card-body">
                    <ul>
                        <li><strong>Take evening walks:</strong> Aim for a brisk 20-30 minute walk to unwind after your classes.</li>
                        <li><strong>Stay hydrated:</strong> Challenge yourself to drink at least 1 liter of water every day. Try carrying a water bottle with you.</li>
                        <li><strong>Smart snacking:</strong> Instead of chips, reach for snacks like apple slices with peanut butter, mixed nuts, or yogurt with granola.</li>
                        <li><strong>Stretch it out:</strong> Take 5-minute stretching breaks during study sessions to relieve tension and boost focus.</li>
                        <li><strong>Mindfulness moments:</strong> Set aside a few minutes for deep breathing or meditation every couple of hours to recharge.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">Study Snack Pack</div>
                <div class="card-body">
                    <p>Fuel your study sessions with these healthy snacks:</p>
                    <ul>
                        <li>Carrot sticks and hummus</li>
                        <li>Greek yogurt with honey and berries</li>
                        <li>Whole grain crackers with cheese</li>
                        <li>Sliced cucumbers with ranch dip</li>
                        <li>Trail mix with nuts and dried fruits</li>
                    </ul>
                    <p>Keep these snacks handy to maintain energy levels while you study!</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">Sleep Hygiene Tips</div>
                <div class="card-body">
                    <p>Improve your sleep quality with these tips:</p>
                    <ul>
                        <li>Establish a calming bedtime routine.</li>
                        <li>Limit screen time at least an hour before bed.</li>
                        <li>Keep your room dark and quiet to promote restful sleep.</li>
                        <li>Avoid heavy meals and caffeine close to bedtime.</li>
                        <li>Try reading a book or listening to calming music to wind down.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">Mental Health Tips</div>
                <div class="card-body">
                    <p>Take care of your mental well-being with these activities:</p>
                    <ul>
                        <li>Start a journaling practice to express your thoughts and feelings.</li>
                        <li>Engage in yoga or stretching to relieve stress.</li>
                        <li>Spend time with friends and connect through activities you enjoy.</li>
                        <li>Consider joining a club or group that interests you to make new connections.</li>
                       <p> Promote social connections by encouraging students to spend time with friends or join clubs.</p>
    <p>For more encouragement, check out our <a href="health-quotes.php">Quotes Page</a>.</p>
</ul>
            </div>

                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">Fitness Challenges</div>
                    <div class="card-body">
                        <p>Participate in fun fitness challenges to stay active:</p>
                        <ul>
                            <li>Join a "30-day plank challenge" and track your progress.</li>
                            <li>Set a daily step goal and aim to beat it with friends.</li>
                        <li>Try a new sport or activity to keep things interesting.</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">Weekly Goals</div>
                <div class="card-body">
                    <p>Set personal health goals each week, like:</p>
                    <ul>
                        <li>Trying a new healthy recipe.</li>
                        <li>Practicing a relaxation technique like meditation or deep breathing.</li>
                        <li>Incorporating a new physical activity into your routine.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header">Quick Recipes</div>
                <div class="card-body">
                    <p>Whip up these easy and healthy recipes:</p>
                    <ul>
                        <li><strong>Vegetable stir-fry:</strong> Toss your favorite vegetables in a pan with a splash of soy sauce for a quick meal.</li>
                        <li><strong>Banana oatmeal pancakes:</strong> Blend 1 banana, 1 egg, and a pinch of oats for a quick breakfast.</li>
                        <li><strong>Chickpea salad:</strong> Mix canned chickpeas, diced cucumber, tomatoes, and a drizzle of olive oil.</li>
                        <li><strong>Microwave mug omelet:</strong> Beat two eggs in a mug, add veggies, and microwave for a quick meal.</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

</div>

   
       
  

<div class="footer">
    <p>If you have any questions or need more information, feel free to <a href="mailto:healthcenter@au.edu" style="color: white;">contact us</a>.</p>
</div>

<script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js" defer></script>

<?php include("footer.php"); ?>

</body>
</html>
