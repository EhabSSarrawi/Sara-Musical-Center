<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Entertainments.css">
    <title>Entertainments</title>
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
        .hovereffect {
            width: 100%;
            height: 100%;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            margin-inline-end: 50px;
            margin-bottom: 40px;
            cursor: default;


        }

        .hovereffect .overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            overflow: hidden;
            top: 0;
            left: 0;
            background-color: rgba(0,0,0,0.6);
            opacity: 0;
            cursor: pointer;
            filter: alpha(opacity=0);
            -webkit-transform: translate(460px, -100px) rotate(180deg);
            -ms-transform: translate(460px, -100px) rotate(180deg);
            transform: translate(460px, -100px) rotate(180deg);
            -webkit-transition: all 0.2s 0.4s ease-in-out;
            transition: all 0.2s 0.4s ease-in-out;
        }

        .hovereffect img {
            display: block;
            position: relative;
            -webkit-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;

        }

        .hovereffect h2 {
            text-transform: uppercase;
            color: #fff;
            text-align: center;
            position: relative;
            font-size: 17px;
            padding: 10px;
            margin-top: 20px;
            background: rgba(0, 0, 0, 0.6);
        }
        .hovereffect span {
            text-transform: uppercase;
            color: crimson;
            text-align: center;
            position: relative;
            font-size: 17px;
            background: rgba(0, 0, 0, 0.6);
        }

        .hovereffect a.info {
            display: inline-block;
            text-decoration: none;
            padding: 14px 50px;
            text-transform: uppercase;
            color: #fff;
            font-size: 18px;
            border: 1px solid crimson;
            margin: 200px 0 0 0;
            background-color: transparent;
            -webkit-transform: translateY(-200px);
            -ms-transform: translateY(-200px);
            transform: translateY(-200px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .hovereffect a.info:hover {
            box-shadow: 0 0 5px crimson;
            background-color: crimson;
        }
        .hovereffect img:hover{
            transform: scale(1.4);
        }

        .hovereffect:hover .overlay {
            opacity: 1;
            filter: alpha(opacity=100);
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
            -webkit-transform: translate(0px, 0px);
            -ms-transform: translate(0px, 0px);
            transform: translate(0px, 0px);
        }

        .hovereffect:hover h2 {
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
            -webkit-transition-delay: 0.5s;
            transition-delay: 0.5s;
        }

        .hovereffect:hover a.info {
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
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
                    <li><a href="SCourses.php" data-after="Courses" >Courses</a></li>
                    <li><a href="Apply.php" data-after="Quiz">Quiz</a></li>
                    <li><a href="#entertainments" data-after="Entertainments" id="Online">Entertainments</a></li>
                    <li><a href="website.php" data-after="LogOut">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Header -->

<!-- Hero Section  -->
<section id="hero">
    <div class="hero container">
        <div>
            <h1>Hello, <span></span></h1>
            <h1>Welcome to our <span></span></h1>
            <h1>Family<span></span></h1>
        </div>
    </div>
</section>
<!-- End Hero Section  -->
<button onclick="topFunction()" id="myBtn" title="Go to top">top</button>

<!-- Cards Section -->
<section id="Cards">
    <div class="Cards container">
        <div class="Cards-top">
            <h1 class="section-title">GA<span>M</span>es</h1>
        </div>
        <div class="Cards-bottom">
            <div class="hovereffect" style="height:400px; width: 320px">
                <img class="img-responsive" src="img/XO.PNG" alt="">
                <div class="overlay">
                    <h2><span>T</span>ic <span>T</span>ac <span>T</span>oe</h2>
                    <a class="info" href="XO_GAME.html">Start</a>
                </div>
            </div>

            <div class="hovereffect" style="height:400px; width: 320px">
                <img class="img-responsive" src="img/Memory.PNG" alt="">
                <div class="overlay">
                    <h2><span>M</span>emory <span>G</span>ame</h2>
                    <a class="info" href="Memory_Game.html">Start</a>
                </div>
            </div>

            <div class="hovereffect" style="height:400px; width: 320px">
                <img class="img-responsive" src="img/piano_game.PNG" alt="">
                <div class="overlay">
                    <h2><span>P</span>iano <span>G</span>ame</h2>
                    <a class="info" href="Piano_Game.html" target="_self">Start</a>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- End Cards Section -->
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
<script src="app.js"></script>
<script type="text/javascript">
    document.getElementById('Online').style.color= 'crimson';
</script>
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