<h2>Story 7</h2>
<div>
    <h3>Factorial :</h3>
    <form id="formStory7" method="POST" action="#">
        <label for="factorialNumber">Enter a number : </label>
        <input type="number" name="factorialNumber" placeholder="Number">
        <input type="submit" name="submitStory7" value="Send">
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