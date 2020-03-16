<?php
include 'Factorielle.php';
?>

<div class="factorielle">
    <h2> Nombre premier : </h2>
    <form method="POST" action="">
        <input type="number" name="fact" placeholder="Entrez un nombre">
        <input type="submit" name="Envoyer">
    </form>
    <p>
        <?php

        $factorielleNumber = new Factorielle();

        if (isset($_POST['fact']))
            $factorielleNumber->fact($_POST['fact']);
        ?></p>
</div>