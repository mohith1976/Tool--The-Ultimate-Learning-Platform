<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exam</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Online Exam</a>
        <!-- Add user authentication options or user profile here -->
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-4">
    <div class="row">
        <!-- Question Section -->
        <div class="col-md-8 offset-md-2">
            <!-- Question 1 -->
            <div class="card mb-3 question" id="question1">
                <div class="card-body">
                    <h5 class="card-title">Question 1</h5>
                    <p class="card-text">What is the capital of France?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1OptionA" value="optionA">
                        <label class="form-check-label" for="q1OptionA">Option A</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1OptionB" value="optionB">
                        <label class="form-check-label" for="q1OptionB">Option B</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1OptionC" value="optionC">
                        <label class="form-check-label" for="q1OptionC">Option C</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1OptionD" value="optionD">
                        <label class="form-check-label" for="q1OptionD">Option D</label>
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="card mb-3 question" id="question2">
                <div class="card-body">
                    <h5 class="card-title">Question 2</h5>
                    <p class="card-text">What is the capital of Spain?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2OptionA" value="optionA">
                        <label class="form-check-label" for="q2OptionA">Option A</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2OptionB" value="optionB">
                        <label class="form-check-label" for="q2OptionB">Option B</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2OptionC" value="optionC">
                        <label class="form-check-label" for="q2OptionC">Option C</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2OptionD" value="optionD">
                        <label class="form-check-label" for="q2OptionD">Option D</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Question Pagination with Numbers -->
    <div class="row mt-4">
        <div class="col-md-4 offset-md-4">
            <ul class="pagination justify-content-center" id="questionPagination">
                <!-- Pagination numbers will be added dynamically here -->
            </ul>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="row mt-4">
        <div class="col-md-4 offset-md-4">
            <button type="button" class="btn btn-primary btn-block">Submit Answers</button>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Optional, for certain components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Handle question pagination
    document.addEventListener("DOMContentLoaded", function () {
        const questions = document.querySelectorAll(".question");
        const pagination = document.getElementById("questionPagination");

        // Generate pagination with numbers for each question
        for (let i = 0; i < questions.length; i++) {
            const pageNumber = i + 1;
            const listItem = document.createElement("li");
            listItem.classList.add("page-item");
            listItem.innerHTML = '<a class="page-link" href="#" data-target="question' + pageNumber + '">' + pageNumber + '</a>';
            pagination.appendChild(listItem);
        }

        // Show the first question by default
        questions[0].style.display = "block";

        // Add click event to each pagination number to show respective question
        const paginationLinks = document.querySelectorAll("#questionPagination .page-link");
        paginationLinks.forEach(link => {
            link.addEventListener("click", function (event) {
                event.preventDefault();
                const targetQuestion = this.getAttribute("data-target");
                questions.forEach(question => {
                    if (question.id === targetQuestion) {
                        question.style.display = "block";
                    } else {
                        question.style.display = "none";
                    }
                });
            });
        });
    });
</script>
</body>
</html>
