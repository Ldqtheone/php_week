<?php
if (isset($_POST['nombreBinaire'])) {
    $numberBinaire = $_POST['nombreBinaire'];
    function isNeg($numberBinaire){
        return $numberBinaire<0;
    }
    function convert($a, $b)
    {
        $a=abs($a);
        $add = $a % $b;
        $rem = $add;

        if ($a <= 1) {
            return (string)$a;
        } else {
            return (string)convert(($a - $rem) / $b, $b) . (string)$add;
        }
    }
    $nombreBinaire = convert($numberBinaire, 2);
    if(isNeg($numberBinaire))
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