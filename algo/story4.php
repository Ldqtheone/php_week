<h2>Story 4</h2>
<div class="story">
    <h3>Past Event :</h3>
    <form id="formStory4" method="POST" action="#">
        <label for="time">Time in seconds : </label>
        <input type="number" name="time" placeholder="Seconds">
        <input type="submit" name="submitStory4" value="Send">
    </form>
    <p>
        <?php
            if (isset($_POST["submitStory4"]))
            {
                try
                {
                    $algorithmie->dateToCheck($_POST['time']);
                }
                catch (Exception $e)
                {
                    echo $e;
                }
            }
        ?>
    </p>
</div>