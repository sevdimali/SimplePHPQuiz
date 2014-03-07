<?php
/**
 * Created by PhpStorm.
 * User: Valentine
 * Date: 3/1/14
 * Time: 11:05 AM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);
$rightAnswer = 0;
$wrongAnswer = 0;

require_once('includes/header.html');
require_once('includes/functions_list.php');
require_once('quiz.php');

//Result message
//$message = array();


if (isset($_POST['submit'])){
  foreach($_POST['response'] as $key => $value){
      if($correctAnswerArray[$key] == $value){
          $rightAnswer++;
//          $message[] = "Correct Answer";
      } else {
          $wrongAnswer++;
//          $message[] = "Wrong Answer";
      }
  }
}
// else {
//    $message[] = "";
//}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!-- //Display result-->
    <?php
       if ($rightAnswer > 0){ ?>
           <h2><span class="label label-success">You have <?php echo $rightAnswer; ?> correct answers</span></h2>
           <?php }
        if ($wrongAnswer > 0) { ?>
           <h2><span class="label label-danger">You have <?php echo $wrongAnswer; ?> wrong answers</span></h2>
           <?php
        }
     ?>

<!--Display form-->

<form action="index.php" method="post">

    <?php
    foreach($questions as $id => $question) {
        echo "<div class=\"form-group\">";
        echo "<h4> $question</h4>"."<ol>";//display the question

        //Display multiple choices
        $randomChoices = $choices[$id];
        $randomChoices = shuffle_assoc($randomChoices);
        foreach ($randomChoices as $key => $values){
            echo '<li><input type="radio" name="response['.$id.'] id="'.$id.'" value="' .$values.'"/>';
        ?>
            <label for="question-<?php echo($id); ?>"><?php echo($values);?></label></li>
    <?php

        }
            echo("</ul>");
            echo("</div>");
        }
       ?>

    <input type="submit" name="submit" class="btn btn-primary" value="Submit Quiz" />
</form>


    <?php   include('includes/footer.html'); ?>


</body>
</html>