<?php
session_start();

    if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['password']) &&
        isset($_POST['Con-password']) && isset($_POST['date']) &&isset($_POST['os']) &&
        isset($_POST['Instrument']) && isset($_POST['address']) &&isset($_POST['tel'])) {
        $_SESSION['email']=$_POST['email'];

        $Name=$_POST['name'];
        $Email=$_POST['email'];
        $Password=$_POST['password'];
        $ConPassword=$_POST['Con-password'];
        $Date=$_POST['date'];
        $Gender=$_POST['os'];
        $Instrument=$_POST['Instrument'];
        $Address=$_POST['address'];
        $Phone=$_POST['tel'];
        $UserLevel="1";

        try{

        $conn = new mysqli('localhost', 'root', '', 'testdb');
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }

            else {
            if($Email=='hamdsadouq@hotmail.com'||$Email=='EhabSarrawi@hotmail.com'){

                echo "Failed";
                exit;
            }
                if($Password!=$ConPassword){
                    echo "check";
                    exit;
                }
            $Select = "SELECT `Email` FROM `student` WHERE `Email` = ? LIMIT 1";
            $Insert = "INSERT INTO `student`(`Name`, `Email`, `Password`, `ConPassword`, `Date`, `Gender`, `Instrument`, `Address`, `PhoneNumber`, `UserLever`) VALUES (?,?,?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $Email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;


            if ($rnum == 0)  {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssssssss", $Name, $Email, $Password, $ConPassword, $Date, $Gender, $Instrument, $Address, $Phone, $UserLevel );
                if ($stmt->execute()) {
                    echo "Success";
                    exit;

                } else {
                    echo $stmt->error;
                    exit;
                }
            } else {
                echo "Failed";
                exit;
            }
            $stmt->close();
            $conn->close();
        }}
        catch (Exception $e){
            echo $e;
        }
    } else {
        echo "All field are required.";
        die();
    }

