<?php
include 'Factorielle.php';
?>

<h2>Story 7</h2>
<div class="factorielle">
    <h3> Nombre premier : </h3>
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