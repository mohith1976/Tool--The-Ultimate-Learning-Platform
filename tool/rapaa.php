<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Pagination Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .question {
            display: none;
            margin: 1rem;
        }

        .question.active {
            display: block;
        }

        .pagination {
            text-align: center;
            margin-top: 2rem;
        }

        .pagination button {
            padding: 0.5rem 1rem;
            margin: 0 0.5rem;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .pagination button.green {
            background-color: #2ecc71;
        }

        .pagination button.active {
            background-color: #2ecc71;
        }

        .pagination button.red {
            background-color: #e74c3c;
        }

        .pagination button.yellow {
            background-color: #f1c40f;
        }

        .pagination button.blue {
            background-color: #3498db;
        }

        .pagination button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tool";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch questions and options from the database
    $sql = "SELECT * FROM question";
    $result = $conn->query($sql);

    $questions = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $questions[] = $row;
        }
    }
    ?>

    <div class="questions-container">
        <?php foreach ($questions as $question) { ?>
            <div class="question" data-question-id="<?php echo $question['id']; ?>">
                <p><?php echo $question['question']; ?></p>
                <label>
                    <input type="radio" name="q<?php echo $question['id']; ?>" value="option1" onchange="updatePaginationStatus()"> <?php echo $question['option_1']; ?>
                </label>
                <label>
                    <input type="radio" name="q<?php echo $question['id']; ?>" value="option2" onchange="updatePaginationStatus()"> <?php echo $question['option_2']; ?>
                </label>
                <label>
                    <input type="radio" name="q<?php echo $question['id']; ?>" value="option3" onchange="updatePaginationStatus()"> <?php echo $question['option_3']; ?>
                </label>
                <label>
                    <input type="radio" name="q<?php echo $question['id']; ?>" value="option4" onchange="updatePaginationStatus()"> <?php echo $question['option_4']; ?>
                </label>
                <!-- Add more options as needed -->
                <button onclick="markForReview(<?php echo $question['id']; ?>)">Mark for Review</button>
            </div>
        <?php } ?>
    </div>

    <!-- Number Pagination -->
    <div class="pagination">
	
    </div>

     <script>
        let currentQuestionId = 1;
        const questionStatus = {};
        const markedForReview = {};

        function showQuestion(questionId) {
            const questions = document.querySelectorAll('.question');
            questions.forEach(question => question.classList.remove('active'));

            const activeQuestion = document.querySelector(`[data-question-id="${questionId}"]`);
            activeQuestion.classList.add('active');
            currentQuestionId = questionId;
            updatePaginationButtons();
        }

        function updatePaginationButtons() {
            const buttons = document.querySelectorAll('.pagination button');
            buttons.forEach(button => button.classList.remove('active', 'green', 'red', 'yellow', 'blue'));

            for (let i = 1; i <= buttons.length; i++) {
                if (questionStatus[i] === 'answered') {
                    if (markedForReview[i]) {
                        buttons[i - 1].classList.add('active', 'blue');
                    } else {
                        buttons[i - 1].classList.add('active', 'green');
                    }
                } else if (markedForReview[i]) {
                    buttons[i - 1].classList.add('active', 'yellow');
                } else if (i === currentQuestionId) {
                    buttons[i - 1].classList.add('active', 'red');
                } else {
                    buttons[i - 1].classList.add('red');
                }
            }
        }

        function updatePaginationStatus() {
            const questionOptions = document.querySelectorAll(`.question.active input[type="radio"]`);
            const selectedOption = Array.from(questionOptions).find(option => option.checked);

            if (selectedOption) {
                questionStatus[currentQuestionId] = 'answered';
            } else {
                questionStatus[currentQuestionId] = 'not-answered';
            }

            updatePaginationButtons();
        }

        function markForReview(questionId) {
            markedForReview[questionId] = !markedForReview[questionId];
            updatePaginationButtons();
        }

        // Show the first question on page load
        showQuestion(currentQuestionId);
    </script>
</body>
</html>
