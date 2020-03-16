<?php
include 'TimestampClass.php' ?>

<div class="timestampDate">
    <h2> Evenements passés : </h2>
    <form method="POST" action="">
        <input type="number" name="time" placeholder="Entrez un nombre de secondes">
        <input type="submit" name="Envoyer">
    </form>
    <p>
        <?php

        $dateToCheck = new TimestampClass();

        if (isset($_POST['time']))
            $dateToCheck->dateToCheck($_POST['time']);
        ?></p>
</div>