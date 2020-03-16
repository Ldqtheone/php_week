<?php

class LearnRegex
{
    public function checkValues($mail, $date){

        if(strlen($mail) > 3)
        {
            if(!preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " ,$mail))
                echo 'L\'adresse n\'est pas valide';
            else {
                if(preg_match(" /^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/ " , $date))
                    echo "La date et l'email sont valides";
                else
                    echo "La date doit être au format DD/MM/YYYY";
            }
        }
        else
            echo 'L\'adresse email doit contenir plus de 3 caractères';
    }
}