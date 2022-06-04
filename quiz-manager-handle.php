
<?php
session_start();
if(isset($_POST['txtFQuizName']) && isset($_POST['txtFQuizId'])) {

    if (isset($_POST['qDescription1'])) {

        @$dataBase = new mysqli('localhost', 'root', '', 'testdb');
        if ($dataBase->connect_errno) {
            echo "<script>alert('Could not connect to DB');";
            echo "history.go(-1); </script>";
        }


        $numberOfQuestions = $_POST['numberOfQuestions'];
        $email = "hamdsadouq@hotmail.com";
        $quizName = $_POST['txtFQuizName'];
        $quizId = $_POST['txtFQuizId'];

        $queryAddNewQuiz = $dataBase->prepare("INSERT INTO `quiz` (`quize_id`,`quize_name`) values(?,?)");
        $queryAddNewQuiz->bind_param("is", $quizId, $quizName);
        $r = $queryAddNewQuiz->execute();
        if(!$r) {
            echo "What!";
            exit;
        }

            for ($i = 1; $i <= $numberOfQuestions; $i++) {

                $questionText = $_POST['qDescription' . $i];
                $question_answer1 = $_POST['answerA' . $i];
                $question_answer2 = $_POST['answerB' . $i];
                $question_answer3 = $_POST['answerC' . $i];
                $question_answer4 = $_POST['answerD' . $i];
                $correct_answer = $_POST['optionRadio' . $i];
                $questionId = $quizId . $i;
                $queryAddNewQuestion = $dataBase->prepare("INSERT INTO `question` (`question_id`, `quize_id`,`question_text`, `question_answer1`, `question_answer2`, `question_answer3`, `question_answer4`, `correct_answer`) values(?,?,?,?,?,?,?,?)");
                $queryAddNewQuestion->bind_param("sissssss", $questionId, $quizId, $questionText, $question_answer1, $question_answer2, $question_answer3, $question_answer4, $correct_answer);
                $r = $queryAddNewQuestion->execute();
                //echo $r.'<br>';
            }
            $dataBase->close();

            echo "Success";
        }

    else {
        echo "Failed";
    }
}


?>

