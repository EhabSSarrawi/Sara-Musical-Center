
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style1.css">
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
                    <li><a href="#hero" data-after="Home">Home</a></li>
                    <li><a href="#services" data-after="Service">Services</a></li>
                    <li><a href="#projects" data-after="Courses">Courses</a></li>
                    <li><a href="#about" data-after="About">About</a></li>
                    <li><a href="#contact" data-after="Contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Header -->

<section id="hero">
    <div class="hero container">
        <div>
            <h1>Hello,<span></span></h1>
            <h1>Welcome to our <span></span></h1>
            <h1>Family<span></span></h1>
            <a href="LoginStudent.php" type="button" class="cta">Register </a>

        </div>
    </div>
</section>
<!-- End Hero Section  -->
<button onclick="topFunction()" id="myBtn" title="Go to top">top</button>

<!-- Service Section -->
<section id="services">
    <div class="services container">
        <div class="service-top">
            <h1 class="section-title">Serv<span>i</span>ces</h1>
            <p>Our professional approach and continual development has led us to becoming the leading provider of professional music education. We combine innovative, fun and creative ways to teach music and engage with students to reach their full potential. Innovative music lessons and classes from beginner through advanced for children, teens, and adults. We are the best music school for you. We have programs to suit everyone’s needs. We are the only professional music school offering lessons for children, adults and seniors.</p>
        </div>
        <div class="service-bottom">
            <div class="service-item">
                <div class="icon"><img src="img/child.png"/></div>
                <h2>Kids</h2>
                <p>Our school is a solution for families who would like to expose their children to the world of music.</p>
            </div>
            <div class="service-item">
                <div class="icon"><img src="img/teen.png"/></div>
                <h2>Teens</h2>
                <p>Our classes help to develop the skills necessary for music learning and a lifelong enjoyment of music.</p>
            </div>
            <div class="service-item">
                <div class="icon"><img src="img/adult.png"/></div>
                <h2>Adults</h2>
                <p>We have programs for everyone. In addition to teaching music to children, we instruct adults and seniors.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Service Section -->

<!-- Projects Section -->
<section id="projects">
    <div class="projects container">
        <div class="projects-header">
            <h1 class="section-title">Our <span>Courses</span></h1>
        </div>
        <div class="all-projects">
            <div class="project-item">
                <div class="project-info">
                    <h1>Guitar</h1>
                    <p>The guitar is a fretted musical instrument that typically has six strings. It is held flat against the player's body and played by strumming or plucking the strings with the dominant hand, while simultaneously pressing the strings against frets with the fingers of the opposite hand. A plectrum or individual finger picks may be used to strike the strings. The sound of the guitar is projected either acoustically, by means of a resonant chamber on the instrument, or amplified by an electronic pickup and an amplifier.</p>

                </div>
                <div class="project-img">
                    <img src="img/guitar.jpg" alt="img">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Violin</h1>
                    <p>The violin is a string instrument which has four strings and is played with a bow. The strings are usually tuned to the notes G, D, A, and E. It is held between the left collar bone (near the shoulder) and the chin. Different notes are made by fingering (pressing on the strings) with the left hand while bowing with the right. Unlike guitar, it has no frets or other markers on the fingerboard.</p>

                </div>
                <div class="project-img">
                    <img src="img/violin.jpg" alt="img">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Piano</h1>
                    <p>Piano, also called pianoforte, French piano or pianoforte, German Klavier, a keyboard musical instrument having wire strings that sound when struck by felt-covered hammers operated from a keyboard. The standard modern piano contains 88 keys and has a compass of seven full octaves plus a few keys.</p>

                </div>
                <div class="project-img">
                    <img src="Img/piano.jpg" alt="img">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Oud</h1>
                    <p>In the Arab origin, Oud is considered to be “the king of instruments”. It is assumed that the name al-oud is derived from the Arabic for “the wood” and came to Europe through North Africa. There will be nothing wrong to say that in Arab, the oud is considered to be the oldest musical instruments. In fact, it is the most central instrument in the Middle Eastern music tradition. Some others believe that it is the ancestor of the Pharaohnic Egyptian Nefer, whereas, some others say that this instrument is the forebear of the ancient Persian barbat. Beside this, oud is also known as the ancestor of the European lute.</p>

                </div>
                <div class="project-img">
                    <img src="img/oud.jpg" alt="img">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Tabla</h1>
                    <p>Darbuka instrument is a percussion instrument that has a goblet shape. It narrows in the middle and widens back at the other end. The head of the instrument is wider than the other end. The traditional darbuka instrument have sheep, goat and fish skin for the good quality sound although contemporary ones have chemical skin called “glass skin”. This prevents the darbuka from popping or tearing so that it has a longer life. The body of the traditional darbukas used be made of wrought copper but nowadays, casting technique is used for a better sound. Nacre coating can be used for ornamentation on some types.</p>

                </div>
                <div class="project-img">
                    <img src="img/tabla.jpg" alt="img">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Qanun</h1>
                    <p>The Qanun is a traditional Middle Eastern stringed instrument with 74 strings on it. It has a long history, possibly descended from the ancient Egyptian harp, and is related to the psaltery, dulcimer and zither.</p>

                </div>
                <div class="project-img">
                    <img src="img/qanon.png" alt="img">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Voice</h1>
                    <p>Singing is the act of producing musical sounds with the voice. A person who sings is called a singer or vocalist Singers perform music that can be sung with or without accompaniment by musical instruments. Singing is often done in an ensemble of musicians, such as a choir of singers or a band of instrumentalists.</p>

                </div>
                <div class="project-img">
                    <img src="img/voice.jpg" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Projects Section -->

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
<script src="app.js"></script>
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