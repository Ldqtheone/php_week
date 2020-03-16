<?php
if(isset($_POST['prems']))
    $number = $_POST['prems'];

function isPrime($number)
{
//boucle de 2 au nombre à tester
    for ($i = 2; $i < $number; $i++) {
        //test du qutotien de la division
        if ($number % $i == 0) {
            return FALSE;
        }
    }
//Aucun diviseur trouvé, c'est un nombre permier
    return TRUE;
}

if(isset($number)) {
    $message = "";
    if (isPrime($number)) {
        for ($i = 3; $i < $number; $i++) {
            if (isPrime($i)) {
                $message = "Les nombres premiers de 0 à " . $number . " sont : " . $i . ' ';
            }
        }
    }
    else
        $message = " Ren pour le moment ";
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
            if(isset($message))
                echo $message;
        ?></p>
</div>