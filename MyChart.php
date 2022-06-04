<?php
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'chart');


@$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
    die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = "SELECT *  FROM `student` WHERE `Instrument`='Violin'";
$query1 = "SELECT *  FROM `student` WHERE `Instrument`='Piano'";
$query2 = "SELECT *  FROM `student` WHERE `Instrument`='Oud'";
$query3 = "SELECT *  FROM `student` WHERE `Instrument`='Qanon'";
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

//now print the data

?>
<!DOCTYPE html>
<html>
<head>
    <title>Creating Dynamic Data Graph using PHP and Chart.js</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div style="width: 800px;height: 800px">
    <canvas id="myChart"></canvas>
</div>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Violin', 'Piano', 'Oud', 'Qanon', 'Guitar', 'Tabla', 'Voice'],
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

</body>
</html>