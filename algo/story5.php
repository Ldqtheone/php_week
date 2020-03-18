<h2>Story 5</h2>
<div class="story">
    <h3>Minimum Number :</h3>
    <form id="formStory5" method="POST" action="#">
        <?php
            $tools->createInput("number", "numberOne",   "Number 1 : ", "Number 1", null, true);
            $tools->createInput("number", "numberTwo",   "Number 2 : ", "Number 2", null, true);
            $tools->createInput("number", "numberThree", "Number 3 : ", "Number 3", null, true);
            $tools->createInput("submit", "submitStory5", null, null, "Send");
        ?>

    </form>
    <p>
        <?php
            if (isset($_POST["submitStory5"]))
            {
                $algorithmie->getMin($_POST["numberOne"], $_POST["numberTwo"], $_POST["numberThree"]);
            }
        ?>
    </p>
</div>