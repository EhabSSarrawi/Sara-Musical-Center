<?php
session_start();
@$conn =new mysqli('localhost', 'root', '', 'music_center');
if(!$conn){
    die("Connection failed: " . $conn->error);
}

if (isset($_SESSION['LogEmail'])){
    try{
    $email=$_SESSION['LogEmail'];
    $sql=$conn->query("SELECT `Instrument` From `student` where `Email`='".$email."'");
    if ($sql->num_rows>0) {
    $row=$sql->fetch_assoc();
    $_SESSION['Instrument']=$row['Instrument'];
    $r=$_SESSION['Instrument'];
    echo $_SESSION['Instrument'];
    echo "<script>console.log($r);</script>";
    }}
    catch (Exception $e){
        echo $e;
    }
}



