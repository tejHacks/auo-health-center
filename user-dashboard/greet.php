<?php

//set the default timezone below and enable the user to know the date accordin to their time zone and locale time
// date_default_timezone_set("Africa/Lagos");
//  $today = date("l");
// function greetUser() {
//    global $today;
//     switch($today)
//     {
//         case "Monday":
//             echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//   <strong>Yay!Its Monday</strong> Enjoy the new week.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
//             break;
//         case "Tuesday":
//             echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//   <strong>Holy guacamole!</strong> You should check in on some of those fields below.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';

//             break;
//         case "Wednesday":
//             echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//   <strong>Holy guacamole!</strong> You should check in on some of those fields below.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
//             break;
//         case "Thursday":
//             echo "How are you today,the weekend is almost here";
//             break;
//         case "Friday":
//             echo "The weekend is almost here";
//             break;
//         case "Saturday":
//             echo "The weekend os jhere";
//             break;
//         case "Sunday":
//             echo "Happy SUnday,enjoy the new week bro";
//             break;
//         default:
//             echo "Have a nice day";
//             break;
    
//     }

// }



// Set the default timezone and show the current day in the user's locale
date_default_timezone_set("Africa/Lagos");
$today = date("l");

function greetUser() {
    global $today;

    // Define messages for each day of the week
    $messages = [
        "Monday" => [
            "icon" => "fa-smile-beam",
            "message" => "<strong>Yay! It's Monday!</strong> Enjoy the new week."
        ],
        "Tuesday" => [
            "icon" => "fa-tasks",
            "message" => "<strong>Keep going!</strong> Make sure to check on your tasks."
        ],
        "Wednesday" => [
            "icon" => "fa-sun-o",
            "message" => "<strong>Halfway to the weekend!</strong> Stay productive and have a good day."
        ],
        "Thursday" => [
            "icon" => "fa-coffee",
            "message" => "<strong>Almost there!</strong> The weekend is within reach!"
        ],
        "Friday" => [
            "icon" => "fa-glass-cheers",
            "message" => "<strong>Happy Friday!</strong> The weekend is just around the corner."
        ],
        "Saturday" => [
            "icon" => "fa-sun",
            "message" => "<strong>It's Saturday!</strong> Time to relax and enjoy your weekend."
        ],
        "Sunday" => [
            "icon" => "fa-church",
            "message" => "<strong>Happy Sunday!</strong> Rest well and get ready for a new week."
        ]
    ];

    // Default message if for some reason the day doesn't match
    $defaultMessage = [
        "icon" => "fa-calendar-alt",
        "message" => "<strong>Have a great day!</strong> Make the most out of today."
    ];

    // Fetch the current day's message or fall back to default
    $currentMessage = $messages[$today] ?? $defaultMessage;

    // Output a styled Bootstrap alert with Font Awesome icon
    echo '
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="fa ' . $currentMessage["icon"] . '"></i> ' . $currentMessage["message"] . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}

// Call the function to greet the user
greetUser();

?>

