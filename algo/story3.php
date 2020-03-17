<?php
include 'PremiumNumberClass.php'
?>

<h2>Story 3</h2>
<div class="premiumNumber">
    <h3> Nombre premier : </h3>
    <form method="POST" action="">
        <input type="number" name="prems" placeholder="Entrez un nombre premier">
        <input type="submit" name="Envoyer">
    </form>
    <p>
        <?php
        $printPrime = new PremiumNumberClass();
        if (isset($_POST['prems']))
            $printPrime->printPrime($_POST['prems']);
        ?></p>
</div>