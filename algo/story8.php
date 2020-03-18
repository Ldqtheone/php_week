<h2>Story 8</h2>
<div class="story">
    <h3>Decimal to Hexadecimal :</h3>
    <form id="formStory8" method="POST" action="#">
        <?php
            $tools->createInput("number", "hexadecimalNumber", "Enter a number : ", "Number", null, true);
            $tools->createInput("submit", "submitStory8", null, null, "Send");
        ?>
    </form>
    <p>
        <?php
            if (isset($_POST["submitStory8"]))
            {
                $result = $algorithmie->convertDecimalToHexadecimal($_POST['hexadecimalNumber']);
                echo "The equivalent hexadecimal of " . $_POST['hexadecimalNumber'] . " is " . $result;
            }
        ?>
    </p>
</div>