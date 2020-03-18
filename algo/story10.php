<h2>Story 10</h2>
<div class="story">
    <h3>Email and Birth :</h3>
    <form id="formStory10" method="POST" action="">
        <?php
            $tools->createInput("mail", "email", "Enter your email : ", "email", null, true);
            $tools->createInput("date", "birthDate", "Enter your birth date : ", null, null, true);

            $tools->createInput("submit", "submitStory10", null, null, "Send");
        ?>
    </form>
    <p>
        <?php
        if (isset($_POST['submitStory10']))
        {
            $algorithmie->checkValues($_POST['email'], $_POST['birthDate']);
        }
        ?>
    </p>
</div>