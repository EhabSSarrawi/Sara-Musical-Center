<?php

$connect=new mysqli("localhost","root","","testdb");
if(isset($_POST['Email'])) {
    if (isset($_POST['Add'])) {
        $target="img/".basename($_FILES['image']['name']);
        $email = $_POST['Email'];
        $sql = "SELECT * FROM `student` WHERE `Email`='" . $email . "' LIMIT 1";
        $res = $connect->query($sql);
        if ($res->num_rows > 0) {
            echo "Success";
            exit;
        } else {
            echo "Failed";
            exit;
        }

    }
}


?>