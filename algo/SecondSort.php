<?php


class SecondSort
{
    function getNames($names){
        $newTab =  explode(",", $names);

        usort($newTab, function ($left, $right){
            $left = $left[1].$left[2];
            $right = $right[1].$right[2];

            return strcmp($left, $right);
        });

        echo implode(",", $newTab);
    }
}