<?php
include 'TimestampClass.php'
?>
<h2>Story 4</h2>
<div class="timestampDate">
    <h3> Evenements passés : </h3>
    <form method="POST" action="">
        <input type="number" name="time" placeholder="Entrez un nombre de secondes">
        <input type="submit" name="Envoyer">
    </form>
    <p>
        <?php

        $dateToCheck =  new TimestampClass();
        if (isset($_POST['time']))
            $dateToCheck->dateToCheck($_POST['time']);
        ?></p>
</div>