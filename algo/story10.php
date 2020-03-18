<h2>Story 10</h2>
<div class="story">
    <h3>Email and Birth :</h3>
    <form id="formStory10" method="POST" action="">
        <!--<label for="email">Enter your mail : </label>
        <input type="text" name="email" placeholder="email">

        <label for="birthDate">Enter your birth date : </label>
        <input type="date" name="birthDate">

        <input type="submit" name="submitStory10" value="Send">-->
        <?php
            $tools->createInput("mail", "mail", "Enter your email : ", "email", null, true);
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