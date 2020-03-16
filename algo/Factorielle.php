<?php


class Factorielle
{
    public function fact($nbr) {
        $fact = 1;
        for($i = 1; $i <= $nbr; $i++) {
            $fact = $i * $fact;
        }
        echo "le factorielle de " . $nbr . " est " . $fact ;
    }
}