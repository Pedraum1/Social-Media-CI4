<?php

function format($number)
{
    if($number >= 1000){
        $number = (string)number_format($number/1000,1).'K';
        return $number;
    } elseif($number >= 1000000){
        $number = (string)number_format($number/1000000,1).'M';
        return $number;
    } else {
        return (string)$number;
    }

}

?>