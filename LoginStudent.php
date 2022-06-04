<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/Login%20Student.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<div class="container" id="container">
    <div class="form-container sign-up-container">

        <form id="form2" action="Signup.php" method="post">
            <h1>Create Account</h1>
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <span id="email_error_message" style="margin-right:-70%;color: red "></span>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <span id="password_error_message" style="margin-right:-70%;color: red "></span>
            <input type="password" name="Con-password" id="ConPassword" placeholder="Confirm password" required>
            <span id="retype_password_error_message" style="margin-right:-70%;color: red"></span>
            <input type="date" name="date" id="date" required>
            <div class="radio-container" id="radio">
                <input type="radio" id="Male" name="os" value="Male" required/>
                <label for="Male">Male</label>
                <input type="radio" id="Female" name="os" value="Female" required/>
                <label for="Female">Female</label>
            </div>
            <select  name="Instrument" id="Instrument"  >
                <option name="Guitar1" value="Guitar">Guitar</option>
                <option value="Violin">Violin</option>
                <option value="Piano">Piano</option>
                <option value="Tabla">Tabla</option>
                <option value="Qanun">Qanun </option>
                <option value="Oud">Oud</option>
                <option value="Voice">Voice</option>
            </select>
            <input type="text" name="address" id="address" placeholder="Address" required>
            <input type="tel" name="tel" id="tel" placeholder="Phone number: 059/6-1234657" pattern="[0-9]{10}" required>
            <br>
            <button id="Sign up" name="submit">SignUp</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form id="form1" action="Login.php" method="post">
            <h1>Sign In</h1>
            <input type="email" name="LogEmail" placeholder="Email" id="LogEmail">
            <span id="error1" style="color: red; font-size: 10px"></span><span id="error_email" style="color: red; font-size: 10px"></span>

            <input type="password" name="LogPassword" placeholder="Password" id="myInput" >
            <span id="simg"><img src="img/eye.png" id="eye"  onclick="myFunction()"></span>
            <input type="checkbox" onclick="RememberMe()" id="Cremember"><span id="Remember">Remember me</span>
            <span id="error" style="color: red; font-size: 13px"></span>
            <br><br>
            <a href="javascript: void(0)" onclick="window.open('Forget.php','Warning','width=450, height=450, top=180%, left=550%')">Forgot Your Password?</a>

            <button id="submit1" name="submit1">Sign In</button>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <div class="brand">
                    <a href="#hero"><h1><span>W</span>elcome <span>B</span>ack</h1></a>
                </div>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <div class="brand">
                    <a href="#hero"><h1><span>S</span>ara <span>M</span>usical <span>C</span>enter</h1></a>
                </div>
                <p>Enter your details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>
<script src="JavaScript/Login%20Student.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#form1").submit(function(){

                $.ajax({
                    url:"Login.php",
                    method:'post',
                    data:$(this).serialize(),
                    success:function(data){
                       var msg="";
                        if($.trim(data) === "Success"){
                            window.location="Homepage_Student.php";



                        }
                        if($.trim(data) === "good"){
                            window.location="Web.php";


                        }
                        else if($.trim(data) === "Failed"){
                            msg="Invalid Email/Password!";


                        }

                        $("#error").html(msg);
                    }
                });

           return false;
        });
    });
</script type="text/javascript">

<script>
    $(document).ready(function(){
        $("#form2").submit(function(){
            var msg2="";


            $.ajax({
                url:"Signup.php",
                method:'post',
                data:$(this).serialize(),

                success:function(data){
                    var msg="";

                    if($.trim(data) === "Success"){

                    alert("Successfully Registered.");

                    }
                    if($.trim(data) === "check"){
      msg2="Password Doesn't Match";
                        $("#retype_password_error_message").html(msg2);

                    }
                    if($.trim(data) === "check1"){
                        alert("Successfully Registered.");

                    }

                    else if($.trim(data)==="Failed"){
                        alert("Someone already Registers using this email!.");

                    }


                    $("#error").html(msg);
                }
            });

            return false;
        });
    });
</script>
</body>
</html>