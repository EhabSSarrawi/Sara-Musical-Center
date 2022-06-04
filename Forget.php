
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forget Password</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body{

            background: white;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        button {
            border-radius: 20px;
            border: 1px solid black;
            background-color: black;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }
        button:active {
            transform: scale(0.95);
        }
        button:focus {
            outline: none;
        }
        button:hover{
            background-color: white;
            color: black;
            cursor: pointer;
            border-color: #333333;
        }
        .h1{
            color:black;
        }
        .sign-in-container {
            left: 0;
            width: 100%;
            z-index: 2;
        }
        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 50%;
        }
        input[type=email]:focus {
            border: 2px solid black;
            background-color: white;
            color: black;
        }
        form {
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 50px 50px;
            height: 100%;
            text-align: center;
        }
        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 120px;
            height: 120px;
            margin: 76px 0 0 -76px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #222222;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from { bottom:-100px; opacity:0 }
            to { bottom:0px; opacity:1 }
        }

        @keyframes animatebottom {
            from{ bottom:-100px; opacity:0 }
            to{ bottom:0; opacity:1 }
        }

        #myDiv {
            display: none;
            text-align: center;
        }

    </style>
</head>

<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
    <form action="ForgetPassword.php" method="post" id="form">
        <h1 class="h1">Forget Password</h1>
        <p class="h1">Please enter your email address below and we will send you information to change your password.</p>
        <input type="email" name="email" placeholder="Email" id="email" required>
        <span id="error" style="color: red; font-size: 15px"></span>
        <br><br>
        <button type="submit" name="Reset" id="Reset">Reset</button><br><br><br><br>
    </form>
</div>

<script>
    let myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#form").submit(function(){
            var email = $("#email").val();

            $.ajax({
                url:"ForgetPassword.php",
                method:'post',
                data:$(this).serialize(),

                success:function(data){
                    alert(data);
                    var msg="";
                    if($.trim(data) === "Message has been sent"){
                        window.location.href="https://accounts.google.com/signin/v2/identifier?service=mail&lp=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin";
                    }else{
                        msg="Invalid Email!";
                    }
                    $("#error").html(msg);
                }
            });

            return false;
        });
    });
</script></body>
</html>