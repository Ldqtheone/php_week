<h2>Story 4</h2>
<div class="story">
    <h3>Past Event :</h3>
    <form id="formStory4" method="POST" action="#">
        <?php
            $tools->createInput("number", "time", "Time in seconds : ", "Seconds", null, true);
            $tools->createInput("submit", "submitStory4", null, null, "Send");
        ?>
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