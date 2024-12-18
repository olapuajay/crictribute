<?php
    session_start();
    ob_start();
    if(!isset($_SESSION["user"])) {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CricTribute</title>
    <link rel="stylesheet" type="text/css" href="CSS/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body{
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) ,url('utils/img/lords.webp');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">CricTribute</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <form class="d-flex" id="searchForm">
                    <input class="form-control me-2 search-box" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
                    <button class="btn btn-outline-warning" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" id="Videos">Moments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" id="Register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="logout.php" id="Logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>

    <div class="welcome">
        <center>
            <span class="text-warning" style="font-family: Georgia, serif;">Welcome, Cricket Enthusiasts!</span><br>
        </center>
    </div>
    <div id="intro">
        This platform is a heartfelt homage to the captivating world of cricket,
        where every swing of the bat, breathtaking moment, and legendary player weave the extraordinary tapestry of the sport.
        With a profound love for the game, I embark on a journey to celebrate its rich history,<br>
        iconic moments, and the indomitable spirit of the players who have left an everlasting mark.<br>
        This webpage invites you to delve into the enchanting stories and remarkable feats<br> that define cricket's allure. 
        From the classic battles on the field to the untold narratives<br>
        behind the scenes, let's together uncover the magic that unites us all as cricket enthusiasts.<br>
    </div>
    
    <!-- Player Cards -->
    <div class="card-container">
        <!-- Virat Kohli -->
        <div class="card">
            <img src="https://cdn.britannica.com/48/252748-050-C514EFDB/Virat-Kohli-India-celebrates-50th-century-Cricket-November-15-2023.jpg" alt="">
            <div class="card-content">
                <h1>Virat Kohli</h1>
                <p>Indian Cricketer</p>
                <button id="vk-page" class="card-button">Read More</button>
            </div>
        </div>
        <!-- Sachin Tendulkar -->
        <div class="card">
            <img src="https://w0.peakpx.com/wallpaper/180/607/HD-wallpaper-sachin-tendulkar-sports-cricket-sachin-tendulkar.jpg" alt="">
            <div class="card-content">
                <h1>Sachin Tendulkar</h1>
                <p>Indian Cricketer</p>
                <button id="sachin-page" class="card-button">Read More</button>
            </div>
        </div>
        <!-- MS Dhoni -->
        <div class="card">
            <img src="https://e0.365dm.com/19/07/2048x1152/skysports-ms-dhoni-india-cricket_4714557.jpg?20200116114034" alt="">
            <div class="card-content">
                <h1>MS Dhoni</h1>
                <p>Indian Cricketer</p>
                <button id="MSD-page" class="card-button">Read More</button>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="container py-5">
        <div class="row text-center text-darkblue">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-6 text-warning">About Us</h1>
                <p class="lead mb-0" style="font-family: serif; font-size: x-larger; color: #F8F8F8;">
                    CricTribute was born out of a shared passion for cricket and a desire to create a 
                    dedicated platform for fans worldwide. With a team of cricket aficionados, 
                    web developers, and content creators, we set out to build a space where enthusiasts 
                    can connect, engage, and celebrate the sport they love.<br><br>

                    Our mission is to provide comprehensive coverage of cricketing events, from 
                    international clashes to grassroots tournaments, while fostering a sense of 
                    community among fans. Whether you're here to discover player profiles, relive 
                    classic moments, or engage in spirited discussions, CricTribute 
                    aims to be your go-to destination for all things cricket.<br><br>
                    We're committed to delivering accurate, timely, and engaging content, fueled by our 
                    love for the game and dedication to our users. Join us on this exciting journey as 
                    we continue to grow and evolve, united by our shared love for cricket.<br><br>
                </p>
            </div>
        </div>
    </div>

    <!-- Our Team Section -->
    <h4 class="display-6 text-center mb-5 text-warning">Our Team</h4>
    <div class="container mt-3">
        <div class="row text-center justify-content-center">
            <?php
            // PHP array for dynamic team members
            $team = [
                ["name" => "MITCHELL", "role" => "CEO - Founder", "img" => "utils/img/OI2.jpg"],
                ["name" => "VIRAT KOHLI", "role" => "Brand Ambassador", "img" => "utils/img/vk.jpg"],
                ["name" => "AJAY", "role" => "Developer", "img" => "utils/img/dev_1.jpg"],
                ["name" => "CHRISTINA", "role" => "Content Manager", "img" => "utils/img/OI1.jpg"]
            ];

            // Loop to dynamically generate team members
            foreach ($team as $member) {
                echo "
                <div class='col-xl-3 col-sm-6 mb-5 team-card'>
                    <div class='bg-white rounded shadow-sm py-5 px-4'>
                        <img src='{$member['img']}' alt='' width='150' class='img-fluid rounded-circle mb-3 img-thumbnail shadow-lg'>
                        <h5 class='mb-0'>{$member['name']}</h5>
                        <span class='small text-uppercase text-muted'>{$member['role']}</span>
                        <ul class='social mb-0 list-inline mt-3'>
                            <li class='list-inline-item'><a href='#' class='social-link'><i class='fa-brands fa-facebook'></i></a></li>
                            <li class='list-inline-item'><a href='#' class='social-link'><i class='fa-brands fa-twitter'></i></a></li>
                            <li class='list-inline-item'><a href='#' class='social-link'><i class='fa-brands fa-instagram'></i></a></li>
                            <li class='list-inline-item'><a href='#' class='social-link'><i class='fa-brands fa-linkedin'></i></a></li>
                        </ul>
                    </div>
                </div>
                ";
            }
            ?>
        </div>
    </div>

    <!-- Contact Section -->
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $contact_name = $_POST['contact_name'];
            $contact_email = $_POST['contact_email'];
            $contact_subject = $_POST['contact_subject'];
            $contact_message = $_POST['contact_message'];

            $contact_mailheader = "From: " . $contact_name . "<" . $contact_email . ">\r\n";
            $contact_mailheader .= "Reply-To: " . $contact_email . "\r\n";

            $recipient = "ajju6533@gmail.com";
            
            // Attempt to send the email and check for success
            if (mail($recipient, $contact_subject, $contact_message, $contact_mailheader)) {
                // Show a JavaScript alert on successful mail send
                echo "<script>
                        alert('Thank you for contacting us. We will get back to you soon.');
                        window.location.href = 'index.php';
                    </script>";
            } else {
                // Show an error alert if mail failed
                echo "<script>
                        alert('Error! Message not sent. Please try again.');
                        window.location.href = 'index.php';
                    </script>";
            }
        }
        ?>
    <div class="footer">
        <h2 class="display-6 text-center mb-5 text-warning">Get in touch</h2>
        <div class="contact-container">
            <div class="contact-box">
                <div class="contact-box-left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109105.13533710531!2d75.55760671949895!3d31.288941901512754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5f5e9c489cf3%3A0x4049a5409d53c300!2sLovely%20Professional%20University!5e0!3m2!1sen!2sin!4v1713469144867!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact-box-right">
                    <form id="myForm" action="index.php" method="POST">
                        <h2>Contact Us</h2>
                        <input type="text" class="field" name="contact_name" id="name" placeholder="Name" required>

                        <input type="email" class="field" name="contact_email" id="email" placeholder="Email" required>

                        <input type="text" class="field" name="contact_subject" id="subject" placeholder="Subject" required>

                        <textarea class="field" name="contact_message" id="textMessage" placeholder="Message" required></textarea>

                        <button class="btn btn-warning w-100" type="submit" name="contact_submit" id="submitbtn">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <p class="text-center text-light">&copy CricTribute 2024. All rights reserved. developed by <a class="text-decoration-none" href="https://github.com/olapuajay">AJAY</a></p>
    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="JS/index.js"></script>
</body>
</html>

<?php ob_end_flush(); ?>