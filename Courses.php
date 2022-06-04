<?php
session_start();
require ("manger-header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Creating Dynamic Data Graph using PHP and Chart.js</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

</body>
</html>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Courses</title>
    <link rel="stylesheet" href="CSS/style3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

<button onclick="topFunction()" id="myBtn" title="Go to top">top</button>

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
                <div class="project-item">
                    <div class="hovereffect">
                        <img class="img-responsive" src="img/guitar.jpg" alt="">
                        <div class="overlay">

                        </div>
                    </div>
                </div>
            </div>

            <div class="project-item">

                <div class="project-info">

                    <h1>Violin</h1>
                 <p>The violin is a string instrument which has four strings and is played with a bow. The strings are usually tuned to the notes G, D, A, and E. It is held between the left collar bone (near the shoulder) and the chin. Different notes are made by fingering (pressing on the strings) with the left hand while bowing with the right. Unlike guitar, it has no frets or other markers on the fingerboard.</p>
                </div>

                <div class="project-item">
                    <div class="hovereffect">
                        <img class="img-responsive" src="img/violin.jpg" alt="">
                        <div class="overlay">

                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Piano</h1>
                    <p>Piano, also called pianoforte, French piano or pianoforte, German Klavier, a keyboard musical instrument having wire strings that sound when struck by felt-covered hammers operated from a keyboard. The standard modern piano contains 88 keys and has a compass of seven full octaves plus a few keys.</p>
                </div>
                <div class="project-item">
                    <div class="hovereffect">
                        <img class="img-responsive"  src="img/piano.jpg" alt="">
                        <div>
                            <input type="file" name="image">

                        </div>

                        <div class="overlay">
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Oud</h1>
                    <p>In the Arab origin, Oud is considered to be “the king of instruments”. It is assumed that the name al-oud is derived from the Arabic for “the wood” and came to Europe through North Africa. There will be nothing wrong to say that in Arab, the oud is considered to be the oldest musical instruments. In fact, it is the most central instrument in the Middle Eastern music tradition. Some others believe that it is the ancestor of the Pharaohnic Egyptian Nefer, whereas, some others say that this instrument is the forebear of the ancient Persian barbat. Beside this, oud is also known as the ancestor of the European lute.</p>
                </div>
                <div class="project-item">
                    <div class="hovereffect">
                        <img class="img-responsive" src="img/oud.jpg" alt="">
                        <div class="overlay">
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Tabla</h1>
                    <p>Darbuka instrument is a percussion instrument that has a goblet shape. It narrows in the middle and widens back at the other end. The head of the instrument is wider than the other end. The traditional darbuka instrument have sheep, goat and fish skin for the good quality sound although contemporary ones have chemical skin called “glass skin”. This prevents the darbuka from popping or tearing so that it has a longer life. The body of the traditional darbukas used be made of wrought copper but nowadays, casting technique is used for a better sound. Nacre coating can be used for ornamentation on some types.</p>
                </div>
                <div class="project-item">
                    <div class="hovereffect">
                        <img class="img-responsive" src="img/tabla.jpg" alt="">
                        <div class="overlay">
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Qanun</h1>
                    <p>The Qanun is a traditional Middle Eastern stringed instrument with 74 strings on it. It has a long history, possibly descended from the ancient Egyptian harp, and is related to the psaltery, dulcimer and zither.</p>
                </div>
                <div class="project-item">
                    <div class="hovereffect">
                        <img class="img-responsive" src="img/qanon.png" alt="">
                        <div class="overlay">
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>Voice</h1>
                    <p>Singing is the act of producing musical sounds with the voice. A person who sings is called a singer or vocalist Singers perform music that can be sung with or without accompaniment by musical instruments. Singing is often done in an ensemble of musicians, such as a choir of singers or a band of instrumentalists.</p>
                </div>
                <div class="project-item">
                    <div class="hovereffect">
                        <img class="img-responsive" src="img/voice.jpg" alt="">
                        <div class="overlay">
                        </div>
                    </div>

                </div>


            </div>

        </div>

    </div>

</section>
<?php
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'testdb');


@$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
    die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = "SELECT *  FROM `student` WHERE `Instrument`='Violin'";
$query1 = "SELECT *  FROM `student` WHERE `Instrument`='Piano'";
$query2 = "SELECT *  FROM `student` WHERE `Instrument`='Oud'";
$query3 = "SELECT *  FROM `student` WHERE `Instrument`='Qanun'";
$query4 = "SELECT *  FROM `student` WHERE `Instrument`='Guitar'";
$query5 = "SELECT *  FROM `student` WHERE `Instrument`='Tabla'";
$query6 = "SELECT *  FROM `student` WHERE `Instrument`='Voice'";

$result = array();
$result[0] = $mysqli->query($query);
$result[1] = $mysqli->query($query1);
$result[2] = $mysqli->query($query2);
$result[3] = $mysqli->query($query3);
$result[4] = $mysqli->query($query4);
$result[5] = $mysqli->query($query5);
$result[6] = $mysqli->query($query6);
$i=0;
$data = array();
for ($i=0;$i<=6;$i++) {
    $data[$i] = $result[$i]->num_rows;
}
?>
<div style="width: 800px;height: 800px; left: 20%; top: 50%; align-items: center; margin-left: 25%;">
    <canvas id="myChart"></canvas>
</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Violin', 'Piano', 'Oud', 'Qanun', 'Guitar', 'Tabla', 'Voice'],
            datasets: [{
                label: '# of Votes',
                data:<?php print json_encode($data);?>
                ,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>



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