<?php

function dateToCheck($timestamp)
{
    $date = new DateTime();
    $currentDate = $date->getTimeStamp();
    $checked = $currentDate - $timestamp;

    echo 'L\'évènement à eu lieu le : ' . date('d/m/Y', $checked);

}

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
        if (isset($_POST['time']))
            dateToCheck($_POST['time']);
        ?></p>
</div>