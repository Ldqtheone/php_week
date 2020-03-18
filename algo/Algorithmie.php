<?php


class Algorithmie
{
    /**
     * Algorithmie constructor.
     */
    public function __construct()
    {
    }

    /**
     * Function associate with story 3
     * @param $number
     */
    public function getPrimaryNumber($number)
    {
        echo "Jusqu'à " . $number . " les nombres premiers sont : ";
        for ($i = 3; $i < $number; $i++)
        {
            if($this->isPrime($i))
            {
                echo $i . ' ; ';
            }
        }
    }

    /**
     * Function associate with story 3
     * @param $number
     * @return bool
     */
    private function isPrime($number)
    {
        // boucle de 2 au nombre à tester
        for ($i = 2; $i < $number; $i++)
        {
            //test du quotient de la division
            if ($number % $i === 0)
            {
                return false;
            }
        }
        return true;
    }

    /**
     * Function associate with story 4
     * @param $timestamp
     * @throws Exception
     */
    public function dateToCheck($timestamp)
    {
        echo 'L\'évènement à eu lieu le : ' . date('d/m/Y', (new DateTime())->getTimestamp() - $timestamp);
    }


    /**
     * Function associate with story 5
     * @param $numberOne
     * @param $numberTwo
     * @param $numberThree
     * @return string
     */
    public function getMin($numberOne, $numberTwo, $numberThree)
    {
        if ($numberOne < $numberTwo && $numberOne < $numberThree)
        {
             echo "Le nombre le plus  petit est " . $numberOne . ' ';
        }
        elseif ($numberTwo < $numberOne && $numberTwo < $numberThree)
        {
            echo "Le nombre le plus  petit est " . $numberTwo . ' ';
        }
        elseif ($numberThree < $numberOne && $numberThree < $numberTwo)
        {
            echo "Le nombre le plus  petit est " . $numberThree . ' ';
        }
        else
        {
            echo "il y a une égalité";
        }
    }

    /**
     * Function associate with story 6
     * @param $number
     * @return string
     */
    public function converterRomanNumber($number)
    {
        /*if ($number < 5000 && $number > 0)
        {
            $T_unit = ["", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"];
            $T_diz = ["", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"];
            $T_cent = ["", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM"];
            $T_mil = ["", "M", "MM", "MMM", "MMMM"];

            $num = str_split($number);
            $unit = $num[count($num) - 1];
            $romain = $T_unit[$unit];
            if ($number >= 10)
            {
                $diz = $num[count($num) - 2];
                $romain = $T_diz[$diz] . $T_unit[$unit];
            }
            if ($number >= 100)
            {
                $cent = $num[count($num) - 3];
                $romain = $T_cent[$cent] . $T_diz[$diz] . $T_unit[$unit];
            }
            if ($number >= 1000)
            {
                $mil = $num[count($num) - 4];
                $romain = $T_mil[$mil] . $T_cent[$cent] . $T_diz[$diz] . $T_unit[$unit];
            }
            echo "L'équivalent en nombre romain est  : " . $romain . ' ';
        }
        else
        {
            echo "Votre nombre n'est pas compris dans la plage ]0;5000[";
        }*/

        if ($number > 0 && $number < 5000)
        {
            $alphabet = [
                ["", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"],
                ["", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"],
                ["", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM"],
                ["", "M", "MM", "MMM", "MMMM"]
            ];

            $chars = str_split($number);
            $result = "";
            for ($i = 0; $i < sizeof($chars); $i++)
            {
                $result = $result . $alphabet[sizeof($chars) - 1 - $i][intval($chars[$i])];
            }
            echo "L'équivalent de " . $number . " en nombre romain est  : " . $result . ' ';
        }
        else
        {
            echo "Votre nombre n'est pas compris dans la plage ]0;5000[";
        }
    }

    /**
     * Function associate with story 7
     * @param $nbr
     */
    public function factorial($nbr)
    {
        $fact = 1;
        for ($i = 1; $i <= $nbr; $i++)
        {
            $fact *= $i;
        }
        echo "La factorielle de " . $nbr . " est " . $fact;
    }

    /**
     * Function associate with story 8
     * @param $decimal
     * @return string
     */
    function convertDecimalToHexadecimal($decimal)
    {
        $decimal = abs($decimal);
        $add = $decimal % 16;
        $rem = $add;
        switch ($add)
        {
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
        if ($decimal <= 1)
        {
            return (string)$decimal;
        }
        else
        {
            return (string)$this->convertDecimalToHexadecimal(($decimal - $rem) / 16) . (string)$add;
        }
    }

    /**
     * Function associate with story 9
     * @param $decimal
     * @return string
     */
    function convertDecimalToBinary($decimal)
    {
        $decimal = abs($decimal);
        $add = $decimal % 2;
        $rem = $add;

        if ($decimal <= 1)
        {
            return (string)$decimal;
        }
        else
        {
            return (string)$this->convertDecimalToBinary(($decimal - $rem) / 2) . (string)$add;
        }
    }

    /**
     * Function associate with story 10
     * @param $mail
     * @param $date
     */
    public function checkValues($mail, $date)
    {
        if (strlen($mail) > 3)
        {
            if (!preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $mail))
            {
                echo 'L\'adresse n\'est pas valide';
            }
            else
            {
                if (preg_match(" /^[0-9]{1,4}\-[0-9]{1,2}\-[0-9]{2}$/ ", $date))
                {
                    echo "La date et l'email sont valides";
                }
                else
                {
                    echo "La date doit être au format DD/MM/YYYY";
                }
            }
        }
        else
        {
            echo 'L\'adresse email doit contenir plus de 3 caractères';
        }
    }

    /**
     * Function associate with story 11
     * @param $names
     */
    public function mySort($names)
    {
        $newTab = explode(",", $names);

        usort($newTab,
            function ($left, $right)
            {
                $left = $left[1] . $left[2];
                $right = $right[1] . $right[2];
                return strcmp($left, $right);
            });

        echo implode(",", $newTab);
    }
}

?>
