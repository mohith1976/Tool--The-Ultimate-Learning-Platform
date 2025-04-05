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
    $servername = "your_database_server";
    $username = "your_database_username";
    $password = "your_database_password";
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch questions from the database
    $sql = "SELECT * FROM questions";
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
                    <input type="radio" name="q<?php echo $question['id']; ?>" value="option1" onchange="updatePaginationStatus()"> <?php echo $question['option1']; ?>
                </label>
                <label>
                    <input type="radio" name="q<?php echo $question['id']; ?>" value="option2" onchange="updatePaginationStatus()"> <?php echo $question['option2']; ?>
                </label>
                <!-- Add more options as needed -->
                <button onclick="markForReview(<?php echo $question['id']; ?>)">Mark for Review</button>
            </div>
        <?php } ?>
    </div>

    <!-- Number Pagination -->
    <div class="pagination">
        <!-- Add pagination buttons using JavaScript as shown in previous examples -->
    </div>

    <script>
        // Your JavaScript code here as shown in previous examples
    </script>
</body>
</html>
