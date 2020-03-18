<h2>Story 7</h2>
<div class="story">
    <h3>Factorial :</h3>
    <form id="formStory7" method="POST" action="#">
        <?php
            $tools->createInput("number", "factorialNumber", "Enter a number : ", "Number", null, true);
            $tools->createInput("submit", "submitStory7", null, null, "Send");
        ?>
    </form>
    <p>
        <?php
        if (isset($_POST["submitStory7"]))
        {
            $algorithmie->factorial($_POST['factorialNumber']);
        }
        ?>
    </p>
</div>