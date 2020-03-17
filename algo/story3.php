<?php

function isPrime($number)
{
    //boucle de 2 au nombre à tester
    for ($i = 2; $i < $number; $i++) {
        //test du quotien de la division
        if ($number % $i == 0) {
            return FALSE;
        }
    }
    return true;
}

function printPrime($number){

    //Aucun diviseur trouvé, c'est un nombre permier
    echo "Les nombres premiers de 0 à " . $number . " sont : ";
    for ($i = 3; $i < $number; $i++) {
        if(isPrime($i))
            echo $i . ' ';
    }
}

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
        if (isset($_POST['prems']))
            printPrime($_POST['prems']);
        ?></p>
</div>