<?php
    include('../../connect.php');
    session_start();

    $module_id = $_GET['module_id'];
    
    if (isset($_POST['add-question-button'])) {
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $choice_a = $_POST['choice-A'];
        $choice_b = $_POST['choice-B'];
        $choice_c = $_POST['choice-C'];
        $choice_d = $_POST['choice-D'];

        sql("INSERT INTO modules_quizzes_questions (Module_ID, Question, Answer) VALUES ($module_id, '$question', '$answer')");
        $question_id_query = sql("SELECT Question_ID FROM modules_quizzes_questions WHERE Module_ID = $module_id AND Question = '$question' AND Answer = '$answer'");
        if ($question_id_query->num_rows == 1) {
            $question_id_row = $question_id_query->fetch_assoc();
            $question_id = $question_id_row["Question_ID"];
            sql("INSERT INTO modules_quizzes_choices (Question_ID, Choice) VALUES ($question_id, '$choice_a')");
            sql("INSERT INTO modules_quizzes_choices (Question_ID, Choice) VALUES ($question_id, '$choice_b')");
            sql("INSERT INTO modules_quizzes_choices (Question_ID, Choice) VALUES ($question_id, '$choice_c')");
            sql("INSERT INTO modules_quizzes_choices (Question_ID, Choice) VALUES ($question_id, '$choice_d')");
        }
    }

    if (isset($_POST['delete-question-button'])) {
        $question_id = $_POST['question-id'];
        $check_if_question_exists = sql("SELECT * FROM modules_quizzes_questions WHERE Question_ID = $question_id");
        if ($check_if_question_exists->num_rows == 1) {
            sql("DELETE FROM modules_quizzes_questions WHERE Question_ID = $question_id");
            sql("DELETE FROM modules_quizzes_choices WHERE Question_ID = $question_id");
        }
    }

    if(isset($_REQUEST["destination"])){
        header("Location: {$_REQUEST["destination"]}");
    }else if(isset($_SERVER["HTTP_REFERER"])){
        header("Location: {$_SERVER["HTTP_REFERER"]}");
    }else{
        header("Location: ../../courses/teacher/teacher_announcements.php");
    }
?>