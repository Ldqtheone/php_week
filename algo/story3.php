<h2>Story 3</h2>
<div class="story">
    <h3>Primary Number :</h3>
    <form id="formStory3" method="POST" action="#">
        <label for="primaryNumber">Enter a number :</label>
        <input type="number" name="primaryNumber" placeholder="Number">
        <input type="submit" name="submitStory3" value="Send">
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
