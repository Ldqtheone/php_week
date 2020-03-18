<h2>Story 8</h2>
<div class="story">
    <h3>Decimal to Hexadecimal :</h3>
    <form id="formStory8" method="POST" action="#">
        <label for="hexadecimalNumber">Enter a number : </label>
        <input type="number" name="hexadecimalNumber" placeholder="Number">
        <input type="submit" name="submitStory8" value="Send">
    </form>
    <p>
        <?php
            if (isset($_POST["submitStory8"]))
            {
                $algorithmie->convertDecimalToHexadecimal($_POST['hexadecimalNumber']);
            }
        ?>
    </p>
</div>