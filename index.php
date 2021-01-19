<?php
require_once 'header.php';
// My array questions table

$myQuiz = ["What does HTML stand for?", "Choose the correct HTML tag for the largest heading", "What is the correct HTML tag for inserting a line break?", "How can you make a numbered list?"];


?>

<div class="container">
    <h1 class="text-center m-5 display-3">Web Development Quiz</h1>

    <form action="result.php" method="post">
        <!--  
        <div class="form-group">
            <label class="diplay-1"></label>
            <select class="form-control" name="quiz_1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            -->

        <!-- quiz #1 -->

        <div class="form-group">
            <label for="exampleSelect2"><?php echo "<h2 class='text-danger'> $myQuiz[0] </h2>"; ?></label>
            <input type="hidden" value="Hyper Text Markup Language" name="rightAnswer1" />
            <select multiple="" class="form-control" name="quiz1">
                <option value="Hyperlinks and Text Markup Language">Hyperlinks and Text Markup Language</option>
                <option value="Hyper Text Markup Language">Hyper Text Markup Language</option>
                <option value="Home Tool Markup Language">Home Tool Markup Language</option>
                <option value="Home Trend Markup Language">Home Tool Markup Language</option>
            </select>
        </div>

        <!-- quiz #2 -->

        <div class="form-group">
            <label for="exampleSelect2"><?php echo "<h2 class='text-danger'> $myQuiz[1] </h2>"; ?></label>
            <input type="hidden" value="h1" name="rightAnswer2" />
            <select multiple="" class="form-control" name="quiz2">
                <option value="heading">heading</option>
                <option value="h6">h6</option>
                <option value="head">head</option>
                <option value="h1">h1</option>
            </select>
        </div>

        <!-- quiz #3 -->

        <div class="form-group">
            <label for="exampleSelect2"><?php echo  "<h2 class='text-danger'> $myQuiz[2] </h2>"; ?></label>
            <input type="hidden" value="br" name="rightAnswer3" />
            <select multiple="" class="form-control" name="quiz3">
                <option value="br">br</option>
                <option value="lb">lb</option>
                <option value="break">break</option>
                <option value="return">return</option>
            </select>
        </div>

        <!-- quiz #4 -->

        <div class="form-group">
            <label for="exampleSelect2"><?php echo "<h2 class='text-danger'> $myQuiz[3] </h2>"; ?></label>
            <input type="hidden" value="ol" name="rightAnswer4" />
            <select multiple="" class="form-control" name="quiz4">
                <option value="ol">ol</option>
                <option value="ul">dl</option>
                <option value="dl">dl</option>
                <option value="list">list</option>
            </select>
        </div>


        <button type="submit" class="btn btn-success mt-3">Envoyer</button>
    </form>


</div>