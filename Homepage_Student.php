<?php
session_start();
$Rim=$_SESSION['name1'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/HStudent.css">
    <title>My Website</title>
    <style>
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: crimson;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 100px;
        }

        #myBtn:hover {
            background-color: darkturquoise;
        }

        @keyframes bounce-in-bottom {
            0% {
                transform: translateY(500px);
                animation-timing-function: ease-in;
                opacity: 0;
            }
            38% {
                transform: translateY(0);
                animation-timing-function: ease-out;
                opacity: 1;
            }
            55% {
                transform: translateY(65px);
                animation-timing-function: ease-in;
            }
            72% {
                transform: translateY(0);
                animation-timing-function: ease-out;
            }
            81% {
                transform: translateY(28px);
                animation-timing-function: ease-in;
            }
            90% {
                transform: translateY(0);
                animation-timing-function: ease-out;
            }
            95% {
                transform: translateY(8px);
                animation-timing-function: ease-in;
            }
            100% {
                transform: translateY(0);
                animation-timing-function: ease-out;
            }
        }
    </style>
</head>
<body>
<!-- Header -->
<section id="header">
    <div class="header container">
        <div class="nav-bar">
            <div class="brand">
                <a href="#hero"><h1><span>S</span>ara <span>M</span>usical <span>C</span>enter</h1></a>
            </div>
            <div class="nav-list">
                <div class="hamburger"><div class="bar"></div></div>
                <ul>
                    <li><a href="Homepage_Student.php" data-after="Home">Home</a></li>
                    <li><a href="SCourses.php" data-after="Courses">Courses</a></li>
                    <li><a href="Apply.php" data-after="Quiz">Quiz</a></li>
                    <li><a href="Entertainments.php" data-after="Entertainments">Entertainments</a></li>
                    <li><a href="website.php" data-after="LogOut">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Header -->
<button onclick="topFunction()" id="myBtn" title="Go to top">top</button>

<form action="LoginStudent.php" method="post">

<section id="hero">
    <div class="hero container">
        <div>
            <h1>Hello, <?php echo $Rim;?> <span></span></h1>
            <h1>Welcome to our <span></span></h1>
            <h1>Family<span></span></h1>
        </div>
    </div>
</section>
</form>

<!-- End Hero Section  -->
<!-- About Section -->
<section id="about">
    <div class="about container">
        <div class="col-left">
            <div class="about-img">
                <img src="img/ce.jpg" alt="img">
            </div>
        </div>
        <div class="col-right">
            <h1 class="section-title">About <span>me</span></h1>
            <p style="font-size: 1.5rem;">This center has been established in 2018 and it aims to teach music for those who has a musician talent.
                The owner of this center (Saddouq's family) were grow up playing music since their father is a musician and a music lecturer at Al-Najah University.
                He had the chance to take the advantage of teaching music to his family.
                <br/>
                Khalid Saddouq and Rana Al-Barq, the founders of Sara Musical Center Achieved their dream of establishing their dream center, to teach people the classical music.
                This center teaches how to profession any instrument such as Violin, Oud, Tabla, Qanun, Guitar, Piano and also it teaches Singing.
                This center teaches to profession reading notes.
                Also this center teaches the importance of music and how music share happiness between the families and friends.
                </br>
                Teachers of this center :
                Khaled Saddouq - Oud, Piano and Guitar teacher.
                Ahmad Saddouq - Violin & Oud teacher.
                Mohammad Saddouq - Qanun teacher.
            </p>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Contact Section -->
<section id="contact">
    <div class="contact container">
        <div><h1 class="section-title">Contact <span>info</span></h1></div>
        <div class="contact-items">
            <div class="contact-item">
                <div class="icon"><img src="img/phone.png"/></div>
                <div class="contact-info">
                    <h1>Phone</h1>
                    <h2>+970 599 350 872</h2>
                    <h2>+970 599 350 876</h2>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon"><img src="img/new-post.png"/></div>
                <div class="contact-info">
                    <h1>Email</h1>
                    <h2>sara.musical@gmail.com</h2>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon"><img src="img/map-marker.png"/></div>
                <div class="contact-info">
                    <h1>Address</h1>
                    <h2>Al-Adel St., Nablus, Palestine</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->


<!-- Footer -->
<section id="footer">
    <div class="footer container">
        <div class="brand"><h1><span>S</span>ara <span>M</span>usical <span>C</span>enter</h1></div>
        <h2>Your Complete Web Solution</h2>
        <div class="social-icon">
            <div class="social-item">
                <a href="https://www.facebook.com/ranab1976/" target="_blank"><img src="img/facebook-new.png"/></a>
            </div>
        </div>
        <p>Copyright © 2021 Sara Musical Center. All rights reserved</p>
    </div>
</section>
<!-- End Footer -->
<script src="JavaScript/JS.js"></script>
<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
            mybutton.style.animation="bounce-in-bottom 1s both";
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>