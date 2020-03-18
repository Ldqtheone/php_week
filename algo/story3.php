<h2>Story 3</h2>
<div class="story">
    <h3>Primary Number :</h3>
    <form id="formStory3" method="POST" action="#">
        <?php
            $tools->createInput("number", "primaryNumber", "Enter a number : ", "Number", null, true);
            $tools->createInput("submit", "submitStory3", null, null, "Send");
        ?>
    </form>
    <p>
        <?php
        if (isset($_POST["submitStory3"]))
        {
            $algorithmie->getPrimaryNumber($_POST["primaryNumber"]);
        }
        ?>
    </p>
</div>
