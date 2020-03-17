<?php
if (isset($_POST['nombreBinaire'])) {
    $numberBinaire = $_POST['nombreBinaire'];



    $nombreBinaire = convert($numberBinaire, 2);
    if ($numberBinaire < 0)
        $nombreBinaire= "-".$nombreBinaire;
}
?>

<h2>Story 9</h2>
<div class="premiumNumber">
    <h3> Nombre binaire : </h3>
    <form method="POST" action="">
        <input type="number" name="nombreBinaire" placeholder="Entrez un nombre ">
        <input type="submit" name="Envoyer">
    </form>
    <p>
        <?php
        if (isset($nombreBinaire)) {
            echo $nombreBinaire;
        }

        ?></p>
</div>