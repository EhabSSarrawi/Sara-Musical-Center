<?php
session_start();
require ("StudentHeader.php");

@$mysqli = new mysqli( "localhost","root","","testdb");
if($mysqli->connect_errno){
    echo "<script>alert('Could not connect to server') </script>";
    die();
}
?>
    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quizzes Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-5"></div>
        <form id="forma1" action="Quiz.php" method="post">
            <div class="col-sm-3"><label for="" ></label></div>

            <div class="col-sm-3"><label for="" style=" margin-bottom: -250%; transform: translateY(305%)translateX(-85%); color:crimson ; font-family: 'Ink Free'; font-size: 2rem;" >Paste the quiz ID here:</label></div>
            <div class="col-sm-2"><input  class="form-control" required="true" type="text" name="quizId" id="quizId" style="  margin: 35% 500%;" maxlength="5"></div>
            <div class="col-sm-2"><button type="submit" class="btn" style="background-color: crimson; color: white; margin: 35% 500%; ">attempt now!</button></div>
        </form>
    </div>
    <div class="row">
        <div class="col-sm-12"><pre style="visibility: hidden"> </pre></div>
    </div>
    <table class="table" style="color:white; background-color: rgba(0,0,0,0.5); transform: translateY(-60%); ">
        <thead>
        <tr>

            <td>Quiz name</td>
            <td>Quiz id</td>


        </tr>
        </thead>
        <tbody>
        <?php
        $q = "select * from `quiz`";
        $res=$mysqli->query($q);
        for($i=0;$i<$res->num_rows;$i++){
            $row = $res->fetch_assoc();
            $quizName = $row['quize_name'];
            $quizId = $row['quize_id'];
            echo "<tr>";
            echo "<td>".$quizName."</td>";
            echo "<td>".$quizId."</td>";



            echo "<tr>";
        }
        ?>
        </tbody>
    </table>

</div>

<script>
    $(document).ready(function(){
        $("#forma1").submit(function(){

            var trueorfalse = false;

            $.ajax({
                url:"Checkidd.php",
                method:'post',
                data:$(this).serialize(),
                async:false,

                success:function(data){
                    if($.trim(data) === "Failed") {

                        alert("This Quiz ID doesn't exist.");
                        return  trueorfalse;

                      return false;
                    }
                    else {
                        alert("All the Best.");
                        trueorfalse=true;
                        return trueorfalse;



                    }



                }
            });
            return trueorfalse;


        });
    });
</script>


</body>


    </html>

<?php
