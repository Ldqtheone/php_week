<h2>Story 9</h2>
<div class="story">
    <h3>Decimal to Binary :</h3>
    <form id="formStory9" method="POST" action="#">
        <?php
            $tools->createInput("number", "binaryNumber", "Enter a number : ", "Number", null, true);
            $tools->createInput("submit", "submitStory9", null, null, "Send");
        ?>
    </form>
    <p>
        <?php
        if (isset($_POST["submitStory9"]))
        {
            $result = $algorithmie->convertDecimalToBinary($_POST['binaryNumber']);
            echo "The equivalent hexadecimal of " . $_POST['binaryNumber'] . " is " . $result;
        }
        ?>
    </p>
</div>