<?php

use CodeIgniter\I18n\Time;

function numToMonth($stringDate){
    $value = substr($stringDate, 5, 2);
    switch($value){

        case '01':
            return 'Jan';
        break;
        case '02':
            return 'Fev';
        break;
        case '03':
            return 'Mar';
        break;
        case '04':
            return 'Abr';
        break;
        case '05':
            return 'Mai';
        break;
        case '06':
            return 'Jun';
        break;
        case '07':
            return 'Jul';
        break;
        case '08':
            return 'Ago';
        break;
        case '09':
            return 'Set';
        break;
        case '10':
            return 'Out';
        break;
        case '11':
            return 'Nov';
        break;
        case '12':
            return 'Dez';
        break;

        default:
            return False;
        break;
    }
}

function dataBR($stringDate){

    $ano = substr($stringDate, 0, 4);
    //$mes = substr($stringDate, 5, 2);
    $mesExtenso = numToMonth($stringDate);
    $dia = substr($stringDate, 8, 2);
    //$hora = substr($stringDate, 11, 2);
    //$min = substr($stringDate, 14, 2);
    
    return ($dia.'/'.$mesExtenso.'/'.$ano);
}

#2024-09-03 21:28:04
function timeDiffFormat($date1,$date2){
    
    $date1 = Time::parse($date1);
    $date2 = Time::parse($date2);

    
    $diferenca = $date1->difference($date2);
    
    $yearDiff    = $diferenca->getYears();
    $monthDiff   = $diferenca->getMonths();
    $dayDiff     = $diferenca->getDays();
    $hourDiff    = $diferenca->getHours();
    $minutesDiff = $diferenca->getMinutes();
    $secondsDiff = $diferenca->getSeconds();

    if($yearDiff > 0){
        return $yearDiff.' a';
    }
    if($monthDiff > 0){
        return $monthDiff.' m';
    }
    if($dayDiff > 0){
        return $dayDiff.' d';
    }
    if($hourDiff > 0){
        return $hourDiff.' h';
    }
    if($minutesDiff > 0){
        return $minutesDiff.' min';
    }
    if($secondsDiff > 0){
        return $secondsDiff.' s';
    }

    return False;
}

function nowTimeDiff($date){
    return timeDiffFormat($date,Time::now());
}

?>