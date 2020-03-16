<?php
include 'LearnRegex.php' ?>

<h2>Story 10</h2>
<div class="emailAndBirth">
    <h3> Email and Birth : </h3>
    <form method="POST" action="">
        <input type="text" name="email" placeholder="Entrez votre email">
        <input type="text" name="birthDate">
        <input type="submit" name="Envoyer">
    </form>
    <p>
        <?php

        $checkValues = new LearnRegex();

        if (isset($_POST['email']) && isset($_POST['birthDate']))
            $checkValues->checkValues($_POST['email'], $_POST['birthDate']);
        ?>
    </p>
</div>