<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Create a Quiz</title>
    <script>
        function addQuestion() {
            var questionsContainer = document.getElementById('questions_container');
            var questionIndex = questionsContainer.children.length;
            
            var newQuestion = document.createElement('div');
            newQuestion.className = 'question';
            newQuestion.innerHTML = `
                <label for="q${questionIndex + 1}_title">Question:</label>
                <input type="text" id="q${questionIndex + 1}_title" name="questions[${questionIndex}][title]" required><br><br>
                <label for="q${questionIndex + 1}_answer">Answer:</label>
                <input type="text" id="q${questionIndex + 1}_answer" name="questions[${questionIndex}][answer]" required><br><br>
                <label for="q${questionIndex + 1}_choice_a">Choice A:</label>
                <input type="text" id="q${questionIndex + 1}_choice_a" name="questions[${questionIndex}][choice_a]" required><br><br>
                <label for="q${questionIndex + 1}_choice_b">Choice B:</label>
                <input type="text" id="q${questionIndex + 1}_choice_b" name="questions[${questionIndex}][choice_b]" required><br><br>
                <label for="q${questionIndex + 1}_choice_c">Choice C:</label>
                <input type="text" id="q${questionIndex + 1}_choice_c" name="questions[${questionIndex}][choice_c]"><br><br>
                <label for="q${questionIndex + 1}_choice_d">Choice D:</label>
                <input type="text" id="q${questionIndex + 1}_choice_d" name="questions[${questionIndex}][choice_d]"><br><br>
            `;
            questionsContainer.appendChild(newQuestion);
        }
    </script>
</head>
<body>
    <?php
        include 'header.php';
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
        include 'db_conn.php';
    ?>
    <div id="content">
    <center>
    <h1>Create Quiz</h1>
    <div id="question">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="quiz_title">Quiz Title:</label>
            <input type="text" id="quiz_title" name="Title" required>
            <br><br>

            <!-- Questions -->
            <div id="questions_container">
                <div class="question">
                    <label for="q1_title">Question:</label>
                    <input type="text" id="q1_title" name="questions[0][title]" required><br><br>

                    <label for="q1_answer">Answer:</label>
                    <input type="text" id="q1_answer" name="questions[0][answer]" required><br><br>

                    <label for="q1_choice_a">Choice A:</label>
                    <input type="text" id="q1_choice_a" name="questions[0][choice_a]" required><br><br>

                    <label for="q1_choice_b">Choice B:</label>
                    <input type="text" id="q1_choice_b" name="questions[0][choice_b]" required><br><br>

                    <label for="q1_choice_c">Choice C:</label>
                    <input type="text" id="q1_choice_c" name="questions[0][choice_c]"><br><br>

                    <label for="q1_choice_d">Choice D:</label>
                    <input type="text" id="q1_choice_d" name="questions[0][choice_d]"><br><br>
                </div>
            </div>
            <button type="button" onclick="addQuestion()" class="add_question-btn">Add Question</button>
            <input type="submit" name="Submit" value="Create Quiz" class="submit-btn">
            <input type="button" onclick="window.location.href='manage_quiz.php'" value="Back" class="back-btn">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $title = $_POST['Title'];
                $questions = $_POST['questions'];
                $admin_id = $_SESSION['admin_id'];

                $sql = "INSERT INTO `quiz` (`Title`, `AdminID`) VALUES ('$title', $admin_id)";
                if ($conn->query($sql) === TRUE) {
                    $quiz_id = $conn->insert_id;
                    foreach ($questions as $question) {
                        $question_title = $question['title'];
                        $answer = $question['answer'];
                        $choice_a = $question['choice_a'];
                        $choice_b = $question['choice_b'];
                        $choice_c = $question['choice_c'];
                        $choice_d = $question['choice_d'];

                        $sql = "INSERT INTO `question` (`Title`, `Answer`, `Choice_A`, `Choice_B`, `Choice_C`, `Choice_D`, `QuizID`) VALUES ('$question_title', '$answer', '$choice_a', '$choice_b', '$choice_c', '$choice_d', $quiz_id)";
                        if ($conn->query($sql) !== TRUE) {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
                    echo "<script>alert('The quiz has been successfully created.');
                        window.location.href='manage_quiz.php';</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        ?>
    </div>
    </center>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>
