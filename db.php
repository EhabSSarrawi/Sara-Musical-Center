<?php
if (isset($_POST['submit']))
{
    if (isset($_POST['txtFQuizName']) && isset($_POST['txtFQuizId'])){



        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "testdb";

        $quize_name = $_POST['txtFQuizName'];
        $quize_id = $_POST['txtFQuizId'];
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT quize_id FROM quiz WHERE quize_id = ? LIMIT 1";
            $Insert = "INSERT INTO quiz(quize_name,quize_id) values (?,?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $quize_id);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ss",$quize_name, $quize_id);
                if ($stmt->execute()) {
                    echo "Quiz Created Successfully";


                }

                    else {
                    echo $stmt->error;
                }
            }
            else {
                echo "This Id already exist.";
                 }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>