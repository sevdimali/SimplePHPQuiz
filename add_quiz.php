<?php
include('includes/header.php');

?>
<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h1>Add Quiz</h1>
        <form action="process_quizAdd.php" method="post">
            <div class="form-group">
                <label for="question">Ask Question</label>
                <input type="text" class="form-control" id="question" name="question" placeholder="Enter your question here">
            </div>
            <div class="form-group">
                <label for="correct_answer">Correct answer</label>
                <input type="text" class="form-control" id="correct_answer" name="correct_answer" placeholder="Enter the correct answer here">
            </div>
            <div class="form-group">
                <label for="wrong_answer1">Wrong Answers</label>
                <input type="text" class="form-control" id="wrong_answer1" name="wrong_answer1" placeholder="Wrong answer 1">
            </div>
            <div class="form-group">
                <label class="sr-only" for="wrong_answer2">Wrong Answers 2</label>
                <input type="text" class="form-control" id="wrong_answer2" name="wrong_answer2" placeholder="Wrong answer 2">
            </div>
            <div class="form-group">
                <label class="sr-only" for="wrong_answer3">Wrong Answers 2</label>
                <input type="text" class="form-control" id="wrong_answer3" name="wrong_answer3" placeholder="Wrong answer 3">
            </div>
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="submit">+ Add Question</button>

        </form>
    </div>
     </div>
    <?php include('includes/footer.php') ?>
