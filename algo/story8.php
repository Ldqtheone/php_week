<?php

if (isset($_POST['nombre']))
{

    $number = $_POST['nombre'];

    $nombre = convert($number, 16);

    if ($number < 0)
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