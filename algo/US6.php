<?php
if (isset($_POST['nombre']))
    $number = $_POST['nombre'];

$T_unit = [" ", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"];
$T_diz = [" ", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"];
$T_cent = [" ", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM"];
$T_mil = [" ", "M", "MM", "MMM", "MMMM"];


if (isset($number)) {
    if ($number < 5000 && $number > 0) {
        $num = str_split($number);
        $romain = "";
        $unit = $num[count($num) - 1];
        $romain = $T_unit[$unit];
        if ($number >= 10) {
            $diz = $num[count($num) - 2];
            $romain = $T_diz[$diz] . $T_unit[$unit];
        }
        if ($number >= 100) {
            $cent = $num[count($num) - 3];
            $romain = $T_cent[$cent] . $T_diz[$diz] . $T_unit[$unit];
        }
        if ($number >= 1000) {
            $mil = $num[count($num) - 4];
            $romain = $T_mil[$mil] . $T_cent[$cent] . $T_diz[$diz] . $T_unit[$unit];
        }
        $message = "l'équivalent en nombre romain est  : " . $romain . ' ';
    } else {
        $message = "votre nombre n'est pas compris dans notre programme";
    }

}
?>

<h2>Story 6</h2>
<div class="premiumNumber">
    <h3> Nombre Romain : </h3>
    <form method="POST" action="">
        <input type="number" name="nombre" placeholder="Entrez un nombre maximum 4999">
        <input type="submit" name="Envoyer">
    </form>
    <p>
        <?php
        if (isset($message))
            echo $message;
        ?></p>
</div>