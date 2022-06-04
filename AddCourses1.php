<?php
session_start();
$connect=new mysqli("localhost","root","","testdb");

    $email = $_POST['Email'];
    $sql = "SELECT * FROM `student` WHERE `Email`='" . $email . "' LIMIT 1";
    $res = $connect->query($sql);
    if ($res->num_rows>0) {
        exit;
    }

    else{
        exit;
    }








?>