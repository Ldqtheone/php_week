<?php


class TimestampClass
{
    public function dateToCheck($timestamp)
    {
        $date = new DateTime();
        $currentDate = $date->getTimeStamp();
        $checked = $currentDate - $timestamp;

        echo 'L\'évènement à eu lieu le : ' . date('d/m/Y', $checked);

        return true;
    }
}