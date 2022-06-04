<?php
session_start();
$inst=$_SESSION['Instrument'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/SCourses.css">
    <title>Courses</title>
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
<body onload="M()">
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
                    <li><a href="#hero" data-after="Courses" id="Online">Courses</a></li>
                    <li><a href="Apply.php" data-after="Quiz">Quiz</a></li>

                    <li><a href="Entertainments.php" data-after="Entertainments">Entertainments</a></li>
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

<!-- Guitar -->
<div id="Guitar" style="display: none">
<section id="projects">
    <div class="projects container">
        <div class="projects-header">
            <h1 class="section-title"><span>Courses</span></h1>
        </div>
        <div class="all-projects">
            <div class="project-item">
                <div class="project-img">
                    <img src="img/guitar.jpg" alt="img">
                </div>
            </div>
         <div class="Info">
             <p><span id="Goal1">Guitar: </span> is a one-semester course covering the basics of the instrument and an application of essential music fundamentals.  Students will learn the basics of playing guitar at a beginning level through studying music notation, chord symbols, and peer modeling.  A brief history of the guitar along with a study of its respective musical styles will also be covered in this course.

                 The main objective of this course is to create an enhanced appreciation for music through playing the guitar.  Students will learn how to read music notation, chord symbols, and tablature.  Students will also gain a better understanding of many different musical genres including classical, flamenco, blues, jazz, rock, and pop music.
             </p><br><br>
             <P>
                 <span id="Goal">GOALS AND EXPECTATIONS</span><br>

                 <p>1) Students will learn the basics of how to play the guitar in a supportive group setting and will gain a deeper understanding of the impact of the instrument on music throughout its history.</p>

                <p>2) Students will increase their musical knowledge by reading music notation and chord symbols on a daily basis along with learning common scales and beginning improvisational techniques.</p>

                 <p>3) Students will perform music in small groups and as a large guitar ensemble.  A cumulative final concert will be scheduled outside of school near the end of the semester to showcase the achievements of the students.</p></P>
         </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="contact container">
        <div><h1 class="section-title">Courses Time <span>info</span></h1></div>
        <br><br><br><br><br><br><br>
        <div class="contact-items">
            <div class="contact-item">
                <div class="icon"><img src="img/time.png"/></div>
                <div class="contact-info">
                    <h1>Start</h1>
                    <h2>10:00 am</h2>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon"><img src="img/end.png"/></div>
                <div class="contact-info">
                    <h1>Due</h1>
                    <h2>11:00 pm</h2>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon"><img src="img/Calenar.png"/></div>
                <div class="contact-info">
                    <h1>Days</h1>
                    <h2>Monday , Tuesday</h2>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- End Guitar -->
<!-- Piano -->
<div id="Piano" style="display: none">
    <section id="projects1">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title"><span>Courses</span></h1>
            </div>
            <div class="all-projects">
                <div class="project-item">
                    <div class="project-img">
                        <img src="img/piano.jpg" alt="img">
                    </div>
                </div>
                <div class="Info">
                    <p><span id="PGoal1">Piano: </span> This is a perfect introduction to piano and music for those who have little to no experience or need a review of the very basics.   You will learn how to read music, find notes on the piano and other essentials so you can begin playing pieces.
                    </p><br><br>
                    <P>
                        <span id="PGoal">GOALS AND EXPECTATIONS</span><br>

                    <p>1) Find notes on the keyboard.</p>

                    <p>2) How to read music.</p>

                    <p>3) Play simple rhythms.</p>

                    <p>4) Play simple songs.</p>

                    <p>5) Play with simple dynamics.</p>

                    <p>6) Find music to play.</p>

                    </P>
                </div>
            </div>
        </div>
    </section>
    <section id="contact1">
        <div class="contact container">
            <div><h1 class="section-title">Courses Time <span>info</span></h1></div>
            <br><br><br><br><br><br><br>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="img/time.png"/></div>
                    <div class="contact-info">
                        <h1>Start</h1>
                        <h2>10:00 am</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="img/end.png"/></div>
                    <div class="contact-info">
                        <h1>Due</h1>
                        <h2>11:00 pm</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="img/Calenar.png"/></div>
                    <div class="contact-info">
                        <h1>Days</h1>
                        <h2>Saturday , Sunday</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- End Piano -->
<!-- Oud -->
<div id="Oud" style="display: none">
    <section id="projects2">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title"><span>Courses</span></h1>
            </div>
            <div class="all-projects">
                <div class="project-item">
                    <div class="project-img">
                        <img src="img/oud.jpg" alt="img">
                    </div>
                </div>
                <div class="Info">
                    <p><span id="OGoal1">Oud: </span> Learn how to play one of the most traditional and cherished instruments in Arabic music: the Oud. This instrument, the precursor to the guitar, is revered throughout the Arab world for its beautiful sound and its historical significance.
                    </p><br><br>
                    <P>
                        <span id="OGoal">GOALS AND EXPECTATIONS</span><br>

                    <p>1) Hold the Oud properly and produce sound from it.</p>

                    <p>2) Read music notation including the oriental quarter tone.</p>

                    <p>3) Play the basic Arabic Maqams and Scales.</p>

                    <p>4) Play popular Arabic songs using these Maqams/Scales.</p>
                    </P>
                </div>
            </div>
        </div>
    </section>
    <section id="contact2">
        <div class="contact container">
            <div><h1 class="section-title">Courses Time <span>info</span></h1></div>
            <br><br><br><br><br><br><br>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="img/time.png"/></div>
                    <div class="contact-info">
                        <h1>Start</h1>
                        <h2>12:00 pm</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="img/end.png"/></div>
                    <div class="contact-info">
                        <h1>Due</h1>
                        <h2>1:00 pm</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="img/Calenar.png"/></div>
                    <div class="contact-info">
                        <h1>Days</h1>
                        <h2>Saturday , Sunday</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Oud -->
<!-- Violin -->
<div id="Violin" style="display: none">
    <section id="projects3">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title"><span>Courses</span></h1>
            </div>
            <div class="all-projects">
                <div class="project-item">
                    <div class="project-img">
                        <img src="img/violin.jpg" alt="img">
                    </div>
                </div>
                <div class="Info">
                    <p><span id="VGoal1">Violin: </span> It's a string instrument . it's usually usually with four strings tuned in perfect fifth. Violins are also known as fiddle. Indeed, they are the smallest, highest-pitched member of the violin family of string instruments. They include the viola, the cello, and the double bass.
                    </p><br><br>
                    <P>
                        <span id="VGoal">GOALS AND EXPECTATIONS</span><br>

                    <p>1) Have an indepth understanding on how to play the violin from scratch.</p>

                    <p>2) Learn how to hold bow, how to hold the violin, how to use your shoulder rest and rosin.</p>

                    <p>3) Bowing Techniques and Tuning the Violin.</p>

                    <p>4) Prescale exercises and scales.</p>

                    <p>5) You will be able to learn how to self study and continue on with your playing after taking this course.</p>
                    </P>
                </div>
            </div>
        </div>
    </section>
    <section id="contact3">
        <div class="contact container">
            <div><h1 class="section-title">Courses Time <span>info</span></h1></div>
            <br><br><br><br><br><br><br>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="img/time.png"/></div>
                    <div class="contact-info">
                        <h1>Start</h1>
                        <h2>12:00 pm</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="img/end.png"/></div>
                    <div class="contact-info">
                        <h1>Due</h1>
                        <h2>1:00 pm</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="img/Calenar.png"/></div>
                    <div class="contact-info">
                        <h1>Days</h1>
                        <h2>Monday , Tuesday</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Violin -->

<!-- Qanun -->
<div id="Qanun" style="display: none">
    <section id="projects4">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title"><span>Courses</span></h1>
            </div>
            <div class="all-projects">
                <div class="project-item">
                    <div class="project-img">
                        <img src="img/qanon.png" alt="img">
                    </div>
                </div>
                <div class="Info">
                    <p><span id="QGoal1">Qanun: </span> The Qanun (kanun, ganoun or kanoon) is a string instrument played either solo, or more often as part of an
                        ensemble, in much of the Middle East, Moroco, West Africa and Turkey. The name derives from the Arabic word
                        qanun, meaning "rule, law, norm, principle".
                    </p><br><br>
                    <P>
                        <span id="QGoal">GOALS AND EXPECTATIONS</span><br>

                    <p>1) Have an indepth understanding on how to play the Qanun from scratch.</p>

                    <p>2) Learn how to hold Risheh (ريشة), how to hold the Qanun.</p>

                    <p>3) Risheh(ريشة) Techniques and Tuning the Qanun.</p>

                    <p>4) Prescale exercises and scales.</p>

                    <p>5) You will be able to learn how to self study and continue on with your playing after taking this course.</p>
                    </P>
                </div>
            </div>
        </div>
    </section>
    <section id="contact4">
        <div class="contact container">
            <div><h1 class="section-title">Courses Time <span>info</span></h1></div>
            <br><br><br><br><br><br><br>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="img/time.png"/></div>
                    <div class="contact-info">
                        <h1>Start</h1>
                        <h2>12:00 pm</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="img/end.png"/></div>
                    <div class="contact-info">
                        <h1>Due</h1>
                        <h2>1:00 pm</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="img/Calenar.png"/></div>
                    <div class="contact-info">
                        <h1>Days</h1>
                        <h2>Monday , Tuesday</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Qanun -->

<!-- Tabla -->
<div id="Tabla" style="display: none">
    <section id="projects5">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title"><span>Courses</span></h1>
            </div>
            <div class="all-projects">
                <div class="project-item">
                    <div class="project-img">
                        <img src="img/tabla.jpg" alt="img">
                    </div>
                </div>
                <div class="Info">
                    <p><span id="TGoal1">Tabla: </span> Darbuka instrument is a percussion instrument that has a goblet shape. It narrows in the middle and widens back at the other end.
                    </p><br><br>
                    <P>
                        <span id="TGoal">GOALS AND EXPECTATIONS</span><br>

                    <p>1) Have an indepth understanding on how to play the Tabla from scratch.</p>

                    <p>2) Learn how to hold Tabla and play on it using your fingers.</p>

                    <p>3) Learning the required techniques to improve the quality of the sound while playing.</p>

                    <p>4) Prescale exercises for rhythms.</p>

                    <p>5) You will be able to learn how to self study and continue on with your playing after taking this course.</p>
                    </P>
                </div>
            </div>
        </div>
    </section>
    <section id="contact5">
        <div class="contact container">
            <div><h1 class="section-title">Courses Time <span>info</span></h1></div>
            <br><br><br><br><br><br><br>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="img/time.png"/></div>
                    <div class="contact-info">
                        <h1>Start</h1>
                        <h2>12:00 pm</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="img/end.png"/></div>
                    <div class="contact-info">
                        <h1>Due</h1>
                        <h2>1:00 pm</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="img/Calenar.png"/></div>
                    <div class="contact-info">
                        <h1>Days</h1>
                        <h2>Monday , Tuesday</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Tabla -->
<!-- Tabla -->
<div id="Voice" style="display: none">
    <section id="projects6">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title"><span>Courses</span></h1>
            </div>
            <div class="all-projects">
                <div class="project-item">
                    <div class="project-img">
                        <img src="img/voice.jpg" alt="img">
                    </div>
                </div>
                <div class="Info">
                    <p><span id="IGoal1">Voice/Singing: </span> Singing is the act of producing musical sounds with the voice
                    </p><br><br>
                    <P>
                        <span id="IGoal">GOALS AND EXPECTATIONS</span><br>

                    <p>1) Have an indepth understanding on how Sing.</p>

                    <p>2) Learn how to Sing.</p>

                    <p>3) Vocalise Exercises to improve your sound.</p>

                    <p>4) Learn the arabic scales and that's to sing using the Technique.</p>

                    <p>5) You will be able to learn how to self study and continue on with your playing after taking this course.</p>
                    </P>
                </div>
            </div>
        </div>
    </section>
    <section id="contact6">
        <div class="contact container">
            <div><h1 class="section-title">Courses Time <span>info</span></h1></div>
            <br><br><br><br><br><br><br>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="img/time.png"/></div>
                    <div class="contact-info">
                        <h1>Start</h1>
                        <h2>12:00 pm</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="img/end.png"/></div>
                    <div class="contact-info">
                        <h1>Due</h1>
                        <h2>1:00 pm</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="img/Calenar.png"/></div>
                    <div class="contact-info">
                        <h1>Days</h1>
                        <h2>Monday , Tuesday</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Tabla -->
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
<script type="text/javascript">
    document.getElementById('Online').style.color= 'crimson';
</script>
<script type="text/javascript">
    function M() {
        var inst ='<?=$inst?>';
        if(inst=="Oud") {
            document.getElementById("Oud").style.display = "block";
        }
        else if(inst=="Tabla"){
            document.getElementById("Tabla").style.display = "block";
        }
        else if(inst=="Violin"){
            document.getElementById("Violin").style.display = "block";
        }
        else if(inst=="Guitar"){
            document.getElementById("Guitar").style.display = "block";
        }
        else if(inst=="Voice"){
            document.getElementById("Voice").style.display = "block";
        }
        else if(inst=="Qanun"){
            document.getElementById("Qanun").style.display = "block";
        }else if(inst=="Piano"){
            document.getElementById("Piano").style.display = "block";

        }
    }
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