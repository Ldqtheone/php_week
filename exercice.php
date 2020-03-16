<?php

function isPrime($number)
{
//boucle de 2 au nombre à tester
    for ($i = 2; $i < $number; $i++) {
        //test du qutotien de la division
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

<div class="premiumNumber">
    <h2> Nombre premier : </h2>
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