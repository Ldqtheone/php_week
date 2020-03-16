<?php
include 'PremiumNumberClass.php';
?>

<div class="premiumNumber">
    <h2> Nombre premier : </h2>
    <form method="POST" action="">
        <input type="number" name="prems" placeholder="Entrez un nombre premier">
        <input type="submit" name="Envoyer">
    </form>
    <p>
        <?php

        $premiumNumber = new PremiumNumberClass();

        if (isset($_POST['prems']))
            $premiumNumber->printPrime($_POST['prems']);
        ?></p>
</div>