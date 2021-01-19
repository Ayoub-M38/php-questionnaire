<div class="container">
    <?php
    require_once 'header.php';

    // My array questions table

    $myQuiz = ["What does HTML stand for?", "Choose the correct HTML tag for the largest heading", "What is the correct HTML tag for inserting a line break?", "What is the correct HTML for creating a hyperlink?"];

    // Get the right answers 

    $rightAnswer1 = $_POST['rightAnswer1'];
    $rightAnswer2 = $_POST['rightAnswer2'];
    $rightAnswer3 = $_POST['rightAnswer3'];
    $rightAnswer4 = $_POST['rightAnswer4'];

    // Get the questions

    $quiz1 = $_POST['quiz1'];
    $quiz2 = $_POST['quiz2'];
    $quiz3 = $_POST['quiz3'];
    $quiz4 = $_POST['quiz4'];
    // print infos 

    echo "<h1> Question #1 :  $myQuiz[0]  </h1>";




    // Echo true or false 

    if ($quiz1 == $rightAnswer1) {
        echo "<h2 class='alert alert-dismissible alert-success'>TRUE well done</h2>";
        echo "<h3 class='text-success'> The answer are :  $rightAnswer1</h3>";
    } else {
        echo "<h2 class='alert alert-dismissible alert-danger'>False Try next time</h2>";
        echo "<h3 class='text-success'> The answer are : $rightAnswer1<h3>";
    }

    // Quiz #2
    echo "<h1> Question #2 :  $myQuiz[1]  </h1>";

    if ($quiz2 == $rightAnswer2) {
        echo "<h2 class='alert alert-dismissible alert-success'>TRUE well done</h2>";
        echo "<h3 class='text-success'> The answer are :  $rightAnswer2</h3>";
    } else {
        echo "<h2 class='alert alert-dismissible alert-danger'>False Try next time</h2>";
        echo "<h3 class='text-success'> The answer are : $rightAnswer2<h3>";
    }

    // Quiz #3

    echo "<h1> Question #3 :  $myQuiz[2]  </h1>";

    if ($quiz3 == $rightAnswer3) {
        echo "<h2 class='alert alert-dismissible alert-success'>TRUE well done</h2>";
        echo "<h3 class='text-success'> The answer are :  $rightAnswer3</h3>";
    } else {
        echo "<h2 class='alert alert-dismissible alert-danger'>False Try next time</h2>";
        echo "<h3 class='text-success'> The answer are : $rightAnswer3<h3>";
    }

    // Quiz #4

    echo "<h1> Question #3 :  $myQuiz[3]  </h1>";

    if ($quiz4 == $rightAnswer4) {
        echo "<h2 class='alert alert-dismissible alert-success'>TRUE well done</h2>";
        echo "<h3 class='text-success'> The answer are :  $rightAnswer4</h3>";
    } else {
        echo "<h2 class='alert alert-dismissible alert-danger'>False Try next time</h2>";
        echo "<h3 class='text-success'> The answer are : $rightAnswer4<h3>";
    }

    ?>

    <a href="index.php" class="btn btn-warning btn-lg">Retour</a>

</div>