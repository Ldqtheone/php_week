<h2>Story 11</h2>
<div class="story">
    <h3>Tri du tableau :</h3>
    <form id="formStory11" method="POST" action="">
        <?php
            $tools->createInput("text", "namesArray", "Enter names with ',' separator : ", "Name 1, Name 2, ...", null, true);

            $tools->createInput("submit", "submitStory11", null, null, "Send");
        ?>
    </form>
    <p>
        <?php
        if (isset($_POST['submitStory11']))
        {
            $algorithmie->mySort($_POST['namesArray']);
        }
        ?>
    </p>
</div>