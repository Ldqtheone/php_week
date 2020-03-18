<h2>Story 9</h2>
<div class="story">
    <h3>Decimal to Binary :</h3>
    <form id="formStory9" method="POST" action="">
        <label for="binaryNumber">Enter a number : </label>
        <input type="number" name="binaryNumber" placeholder="Number">
        <input type="submit" name="submitStory9" value="Send">
    </form>
    <p>
        <?php
        if (isset($_POST["submitStory9"]))
        {
            $algorithmie->convertDecimalToBinary($_POST['binaryNumber']);
        }
        ?>
    </p>
</div>