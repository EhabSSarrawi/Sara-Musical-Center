<?php
session_start();
$Name=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="WebC.css">
    <title>My Website</title>
</head>
<body>
<!-- Header -->

<section id="header">

    <div class="header container">
        <div class="nav-bar">
            <div class="brand"><a href="#hero"><h1><span>S</span>ara <span>M</span>usical <span>C</span>enter</h1></a>
            </div>
            <div class="nav-list">2
                <div class="hamburger"><div class="bar"></div></div>
                <ul>
                    <li><a href="#hero" data-after="Home">Home</a>
                    </li>
                    <li><a href="Courses.php" data-after="Courses">Courses</a></li>
                    <li><a href="quiz-create.php"  data-after="About">Make a Quiz</a></li>
                    <li><a href="website.php" data-after="LogOut">Log Out</a></li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Header -->
<form action="LoginStudent.php" method="post">
    <section id="hero">
    <div class="hero container">
        <div>
            <h1>Hello, <span></span></h1>
           <?php echo"<h1>$Name<span></span></h1>";?>
                <span></span></h1>


        </div>
    </div>
</section>
</form>
<!-- End Hero Section  -->

<!-- Footer -->
<section id="footer">
    <div class="footer container">
        <div class="brand"><h1><span>S</span>ara <span>M</span>usical <span>C</span>enter</h1></div>
        <h2>Your Complete Web Solution</h2>
        <div class="social-icon">
            <div class="social-item">
                <a href="https://www.facebook.com/ranab1976/" target="_blank"><img src="img/Img.png"/></a>
            </div>
        </div>
        <p>Copyright © 2021 Sara Musical Center. All rights reserved</p>
    </div>
</section>
<!-- End Footer -->
<script src="app.js"></script>
</body>
</html>