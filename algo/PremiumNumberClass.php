<?php

class PremiumNumberClass
{
    public function isPrime($number)
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

    public function printPrime($number){

        //Aucun diviseur trouvé, c'est un nombre permier
        echo "Les nombres premiers de 0 à " . $number . " sont : ";
        for ($i = 3; $i < $number; $i++) {
            if(isPrime($i))
                echo $i . ' ';
        }
    }
}