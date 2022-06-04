<?php
session_start();
$connect=new mysqli("localhost","root","","testdb");
if (isset($_POST['quizId'])) {
    $ID = $_POST['quizId'];



    $sql = "SELECT * FROM `quiz` where `quize_id`='" .$ID."'";
    $res = $connect->query($sql);
    if ($res->num_rows == 0) {

        echo "Failed";
        exit;
    }
    else{
        echo "Success";
        exit;
    }







}

?>