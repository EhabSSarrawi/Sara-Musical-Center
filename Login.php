<?php
session_start();

$connect=new mysqli("localhost","root","","testdb");
if (isset($_POST['LogEmail'])) {
    $email = $_POST['LogEmail'];
    $password = $_POST['LogPassword'];

    $sql = "SELECT * FROM `student` where `Email`='" . $email . "'AND `Password`='" . $password . "'";
    $res = $connect->query($sql);
    $sql2 = "SELECT `Name` FROM `manager` where `Email`='" . $email ."'";
    $sql3 = "SELECT `Name` FROM `student` where `Email`='" . $email ."'";
    $res3 = $connect->query($sql3);

    $res2 = $connect->query($sql2);
    if($res2->num_rows!=0){
        $row = $res2->fetch_assoc();
        $Name=$row['Name'];
        $_SESSION['name']=$Name;

    }

    if($res3->num_rows!=0){
        $row = $res3->fetch_assoc();
        $Rim=$row['Name'];
        $_SESSION['name1']=$Rim;
    }

    $sql1 = "SELECT * FROM `manager` where `Email`='" . $email . "'AND `Password`='" . $password . "'";
    $res1 = $connect->query($sql1);
    if ($res1->num_rows>0) {
        echo "good";
        exit;
    }
    if ($res->num_rows > 0) {
        $_SESSION['LogEmail']=$email;
        $row=$res->fetch_assoc();
        $_SESSION['Instrument']=$row['Instrument'];
        $inst=$_SESSION['Instrument'];

        echo "Success";
        exit;
    }

    else{
    echo "Failed";
    exit;
}




}

?>