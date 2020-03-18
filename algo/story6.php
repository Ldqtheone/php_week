<h2>Story 6</h2>
<div class="story">
    <h3>Roman Number :</h3>
    <form id="formStory6" method="POST" action="#">
       <!-- <label for="romanNumber">Enter a number : </label>
        <input type="number" name="romanNumber" placeholder="Number">
        <input type="submit" name="submitStory6" value="Send">-->
        <?php
            $tools->createInput("number", "romanNumber", "Enter a number : ", "Number", null, true);
            $tools->createInput("submit", "submitStory6", null, null, "Send");
        ?>
    </form>
    <p>
        <?php
        if (isset($_POST["submitStory6"]))
            {
                $algorithmie->converterRomanNumber($_POST["romanNumber"]);
            }
        ?>
    </p>
</div>