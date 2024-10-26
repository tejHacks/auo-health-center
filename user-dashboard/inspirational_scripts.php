<?php
session_start();
include('config.php');
// Ensure user is logged in and session contains user information
include('checklogin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Site Metas and Stylesheets -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspirational Scriptures</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<?php include("header.php"); ?>

<div class="container my-4">
    <h1>Inspirational Scriptures</h1>
    <p>Here are some uplifting scriptures to encourage you in your journey:</p>
    
    <div class="jumbotron">
        <h2>Mini Man Plan</h2>
        <blockquote>"So whether you eat or drink or whatever you do, do it all for the glory of God." - 1 Corinthians 10:31</blockquote>
    </div>
    
    <div class="jumbotron">
        <h2>Study Snack Pack</h2>
        <blockquote>"He provides food for those who fear him; he remembers his covenant forever." - Psalm 111:5</blockquote>
    </div>
    
    <div class="jumbotron">
        <h2>Sleep Hygiene Tips</h2>
        <blockquote>"In peace I will lie down and sleep, for you alone, Lord, make me dwell in safety." - Psalm 4:8</blockquote>
    </div>
    
    <div class="jumbotron">
        <h2>Mental Health Tips</h2>
        <blockquote>"Cast all your anxiety on him because he cares for you." - 1 Peter 5:7</blockquote>
    </div>
    
    <div class="jumbotron">
        <h2>Fitness Challenges</h2>
        <blockquote>"I can do all this through him who gives me strength." - Philippians 4:13</blockquote>
    </div>
    
    <div class="jumbotron">
        <h2>Weekly Goals</h2>
        <blockquote>"Commit to the Lord whatever you do, and he will establish your plans." - Proverbs 16:3</blockquote>
    </div>
    
    <div class="jumbotron">
        <h2>Quick Recipes</h2>
        <blockquote>"For I know the plans I have for you, declares the Lord, plans to prosper you and not to harm you, plans to give you hope and a future." - Jeremiah 29:11</blockquote>
    </div>
</div>

<?php include("footer.php"); ?>
</body>
</html>
