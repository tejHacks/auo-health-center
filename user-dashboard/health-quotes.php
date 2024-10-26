<?php
session_start();
include('config.php');
include('checklogin.php');

// Sample quotes (Add your 200 quotes and scriptures here)
$quotes = [
    "For I know the plans I have for you, declares the Lord. - Jeremiah 29:11",
    "I can do all things through Christ who strengthens me. - Philippians 4:13",
    "Trust in the Lord with all your heart. - Proverbs 3:5",
    "The only way to do great work is to love what you do. - Steve Jobs",
    "Your time is limited, so don’t waste it living someone else’s life. - Steve Jobs",
    "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
    "It's fine to celebrate success, but it is more important to heed the lessons of failure. - Bill Gates",
    "The greatest glory in living lies not in never falling, but in rising every time we fall. - Nelson Mandela",
    "Do not wait to strike till the iron is hot, but make it hot by striking. - William Butler Yeats",
    "Discipline is the bridge between goals and accomplishment. - Jim Rohn",
    "Money never changes people, it just unmasks them. - Dave Ramsey",
    "Creativity is intelligence having fun. - Albert Einstein",
    "The way to get started is to quit talking and begin doing. - Walt Disney",
    "Believe you can and you're halfway there. - Theodore Roosevelt",
    "The only limit to our realization of tomorrow will be our doubts of today. - Franklin D. Roosevelt",
    "Success usually comes to those who are too busy to be looking for it. - Henry David Thoreau",
    "You miss 100% of the shots you don’t take. - Wayne Gretzky",
    "What lies behind us and what lies before us are tiny matters compared to what lies within us. - Ralph Waldo Emerson",
    "I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison",
    "In the middle of every difficulty lies opportunity. - Albert Einstein",
    "Success is how high you bounce when you hit bottom. - George S. Patton",
    "The future belongs to those who believe in the beauty of their dreams. - Eleanor Roosevelt",
    "It does not matter how slowly you go as long as you do not stop. - Confucius",
    "If you want to lift yourself up, lift up someone else. - Booker T. Washington",
    "Your limitation—it’s only your imagination. - Anonymous",
    "Push yourself, because no one else is going to do it for you. - Anonymous",
    "Great things never come from comfort zones. - Anonymous",
    "Dream it. Wish it. Do it. - Anonymous",
    "Success doesn’t just find you. You have to go out and get it. - Anonymous",
    "The harder you work for something, the greater you’ll feel when you achieve it. - Anonymous",
    "Dream bigger. Do bigger. - Anonymous",
    "Don’t stop when you’re tired. Stop when you’re done. - Anonymous",
    "Wake up with determination. Go to bed with satisfaction. - Anonymous",
    "Do something today that your future self will thank you for. - Anonymous",
    "Little things make big days. - Anonymous",
    "It’s going to be hard, but hard does not mean impossible. - Anonymous",
    "The key to success is to focus on goals, not obstacles. - Anonymous",
    "Dream it. Believe it. Build it. - Anonymous",
    "When you want something, all the universe conspires in helping you to achieve it. - Paulo Coelho",
    "What you think, you become. What you feel, you attract. What you imagine, you create. - Buddha",
    "Don't count the days, make the days count. - Muhammad Ali",
    "The best way to predict your future is to create it. - Abraham Lincoln",
    "Faith is taking the first step even when you don’t see the whole staircase. - Martin Luther King Jr.",
    "Your past does not equal your future. - Tony Robbins",
    "The only place where success comes before work is in the dictionary. - Vidal Sassoon",
    "You are never too old to set another goal or to dream a new dream. - C.S. Lewis",
    "There are no limits to what you can accomplish, except the limits you place on your own thinking. - Brian Tracy",
    "Act as if what you do makes a difference. It does. - William James",
    "Don't watch the clock; do what it does. Keep going. - Sam Levenson",
    "Everything you’ve ever wanted is on the other side of fear. - George Addair",
    "The future depends on what you do today. - Mahatma Gandhi",
    "Success is not how high you have climbed, but how you make a positive difference to the world. - Roy T. Bennett",
    "Do what you can, with what you have, where you are. - Theodore Roosevelt",
    "Perseverance is not a long race; it is many short races one after the other. - Walter Elliot",
    "I am not a product of my circumstances. I am a product of my decisions. - Stephen R. Covey",
    "The only way to achieve the impossible is to believe it is possible. - Charles Kingsleigh (Alice in Wonderland)",
    "Success is walking from failure to failure with no loss of enthusiasm. - Winston Churchill",
    "The only limit to our realization of tomorrow is our doubts of today. - Franklin D. Roosevelt",
    "Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle. - Christian D. Larson",
    "He who has a why to live can bear almost any how. - Friedrich Nietzsche",
    "You can’t use up creativity. The more you use, the more you have. - Maya Angelou",
    "In the end, we only regret the chances we didn’t take. - Lewis Carroll",
    "To succeed in life, you need three things: a wishbone, a backbone, and a funny bone. - Reba McEntire",
    "What we fear doing most is usually what we most need to do. - Tim Ferriss",
    "Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi",
    "Success is the sum of small efforts, repeated day in and day out. - Robert Collier",
    "You are braver than you believe, stronger than you seem, and smarter than you think. - A.A. Milne",
    "Discipline is the foundation upon which all success is built. - Jim Rohn",
    "Do not wait to strike till the iron is hot, but make it hot by striking. - William Butler Yeats",
    "I can’t change the direction of the wind, but I can adjust my sails to always reach my destination. - Jimmy Dean",
];


$randomQuote = $quotes[array_rand($quotes)];

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
    <title>HEALTH AND INSPIRATIONAL QUOTES FOR STUDENTS </title>

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
.jumbotron {
    margin-bottom: 50px; /* Space between jumbotron and footer */
    padding: 80px; /* Increase padding for more height */
}

.quote-container {
    margin-bottom: 50px; /* Extra space below the quote section */
}

footer {
    padding: 30px; /* Increase footer padding if needed */
}
.jumbotron {
    transition: background-color 0.3s ease, padding 0.3s ease;
}

#quoteDisplay {
    opacity: 0;
    animation: fadeIn 1s ease-in-out forwards;
}

@keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

button:hover {
    transform: scale(1.1);
    transition: 0.2s ease;
}


body.dark-mode {
            background-color: #121212;
            color: #ffffff;
        }

        .jumbotron {
            background-color: purple;
            color: white;
            border-radius: 10px;
            padding: 4rem;
            width: 80%;
            margin: auto;
            transition: background-color 0.3s ease, padding 0.3s ease;
        }

        .dark-mode .jumbotron {
            background-color: #333;
        }

        .quote-container {
            margin-bottom: 50px;
        }

        footer {
            padding: 30px;
        }

        #quoteDisplay {
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        button:hover {
            transform: scale(1.1);
            transition: 0.2s ease;
        }

        /* Dark mode toggle button */
        #darkModeToggle {
            position: fixed;
            bottom: 120px;
            right: 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .dark-mode #darkModeToggle {
            background-color: #fff;
            color: #333;
        }
        </style>

</head>
<body>

<?php include("header.php"); ?>

<div class="container my-4">
    <div class="jumbotron text-center" id="quote-container">
        <h2 class="display-5">Inspirational Quotes</h2>
        <p class="lead" id="quote"><?php echo $randomQuote; ?></p>
        <button class="btn btn-light" id="next-quote">Next Quote</button>
        <div class="social-share mt-3">
            <a href="https://wa.me/?text=<?php echo urlencode($randomQuote); ?>" target="_blank" class="btn btn-outline-light btn-sm"><i class="fa fa-whatsapp"></i></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('http://yourquotespage.com'); ?>" target="_blank" class="btn btn-outline-light btn-sm"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($randomQuote); ?>" target="_blank" class="btn btn-outline-light btn-sm"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/?url=<?php echo urlencode('http://yourquotespage.com'); ?>" target="_blank" class="btn btn-outline-light btn-sm"><i class="fa fa-instagram"></i></a>
        </div>
    </div>

    <!-- Dark mode toggle -->
    <button id="darkModeToggle" class="btn"><i class="fa fa-moon-o"></i></button>

</div>

<script>
  const quotes = <?php echo json_encode($quotes); ?>;

document.getElementById('next-quote').addEventListener('click', function() {
    const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
    document.getElementById('quote').innerText = randomQuote;
    document.getElementById('quote').style.opacity = 0;
    setTimeout(function() {
        document.getElementById('quote').style.opacity = 1;
    }, 200);
});

    document.getElementById("darkModeToggle").addEventListener("click", function() {
    document.body.classList.toggle("dark-mode");
});

</script>


</body>
</html>
