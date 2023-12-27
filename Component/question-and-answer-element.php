<?php
function generateQuestionComponent($questionText, $answerText)
{
    ?>

    <div class="question">
        <div class="question-header">
            <p class="question-header-text"> <?php echo $questionText; ?> </p>
            <img class="question-header-image" src="../Universal/more.png"/>
        </div>
        <p class="question-answer"> <?php echo $answerText; ?> </p>
    </div>

    <script>
const controller = new QuestionAndAnswer ();
console.log(controller.root)
    </script>
<?php } ?>