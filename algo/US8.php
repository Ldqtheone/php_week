<?php
if (isset($_POST['nombre'])) {
    $number = $_POST['nombre'];
function isNeg($number){
    return $number<0;
}
    function convert($a, $b)
    {
        $a=abs($a);
        $add = $a % $b;
        $rem = $add;
        switch ($add) {
            case 10 :
                $add = "A";
                break;
            case 11 :
                $add = "B";
                break;
            case 12 :
                $add = "C";
                break;
            case 13 :
                $add = "D";
                break;
            case 14 :
                $add = "E";
                break;
            case 15 :
                $add = "F";
                break;
            default :
                break;
        }
        if ($a <= 1) {
            return (string)$a;
        } else {
            return (string)convert(($a - $rem) / $b, $b) . (string)$add;
        }
    }
    $nombre = convert($number, 16);
if(isNeg($number))
    $nombre= "-".$nombre;
}
?>

<h2>Story 8</h2>
<div class="premiumNumber">
    <h3> Nombre hexa : </h3>
    <form method="POST" action="">
        <input type="number" name="nombre" placeholder="Entrez un nombre ">
        <input type="submit" name="Envoyer">
    </form>
    <p>
        <?php
        if (isset($nombre)) {
                echo $nombre;
        }

        ?></p>
</div>