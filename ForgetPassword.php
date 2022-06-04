<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$connect=new mysqli("localhost","root","","testdb");
if(isset($_POST['email'])){
    $email=$_POST['email'];
    $code =uniqid(true);
    $query= mysqli_query($connect,"INSERT INTO `resetpassword`(`code`, `email`) VALUES ( '".$code."','".$email."')");
    $mail = new PHPMailer(true);
    $sql = "SELECT * FROM `student` where `Email`='".$email ."' LIMIT 1";
    $res = $connect->query($sql);
    try {

        if($res->num_rows==1){
            //Server settings
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Username = 'saramusical.center@gmail.com';
            $mail->Password = 'musiccenter';
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );



            //Recipients
            $mail->setFrom('saramusical.center@gmail.com', 'Sara Musical Center');
            $mail->addAddress("$email");

            //Content
            $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/ResetPassword.php?code=$code";
            $mail->isHTML(true);
            $mail->Subject = 'Your password reset link';
            $mail->Body = "<h1>You requested a password reset</h1>
                       Click <a href='$url' target='_self'>this is link</a> to do so ";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo "Message has been sent";


        }else{
            echo "Failed";

        }
    }catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

    }
}


?>