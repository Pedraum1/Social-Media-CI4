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
    $mes = substr($stringDate, 5, 2);
    $mesExtenso = numToMonth($stringDate);
    $dia = substr($stringDate, 8, 2);
    $hora = substr($stringDate, 11, 2);
    $min = substr($stringDate, 14, 2);

    return ($dia.'/'.$mesExtenso.'/'.$ano);
}
#0123456789
#2024-09-03 21:28:04
function timeDiffFormat($date1,$date2){
    $data1 = [
        'ano'     => (integer)substr($date1,0,4),
        'mes'     => (integer)substr($date1,5,2),
        'dia'     => (integer)substr($date1,8,2),
        'hora'    => (integer)substr($date1,11,2),
        'minuto'  => (integer)substr($date1,14,2),
        'segundo' => (integer)substr($date1,17,2),
    ];

    $data2 = [
        'ano'     => (integer)substr($date2,0,4),
        'mes'     => (integer)substr($date2,5,2),
        'dia'     => (integer)substr($date2,8,2),
        'hora'    => (integer)substr($date2,11,2),
        'minuto'  => (integer)substr($date2,14,2),
        'segundo' => (integer)substr($date2,17,2),
    ];

    $yearDiff = $data1['ano'] - $data2['ano'];
    $monthDiff = $data1['mes'] - $data2['mes'];
    $dayDiff = $data1['dia'] - $data2['dia'];
    $hourDiff = $data1['hora'] - $data2['hora'];
    $minutesDiff = $data1['minuto'] - $data2['minuto'];
    $secondsDiff = $data1['segundo'] - $data2['segundo'];

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
    return timeDiffFormat(Time::now(),$date);
}

?>