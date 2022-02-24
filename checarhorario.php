<!-- Domingo - 16h00 a 08h00
Domingo - 8h a 16h00

Sábado - 08h a 08h

Sexta - 18h30 a 08h00
Sexta - 12h45 a 18h30
Sexta - 8h a 12h45

Quinta - 18h30 a 08h00
Quinta - 12h45 a 18h30
Quinta - 08h00 a 12h45

Quarta - 18h30 a 08h00
Quarta - 12h45 a 18h30
Quarta - 8h a 12h45
Terça - 18h30 a 08h00
Terça - 12h45 a 18h00
Terça - 8h a 12h45

Segunda - 18h30 a 08h00
Segunda - 12h45 a 18h30
Segunda - 8h a 12h45 -->

<?php

date_default_timezone_set('Etc/GMT+6');

function checarHorario()
{
    $timeNow = date("H:i:sa");
    $dayNow = date('w');
    $weekDay = ['Domingo', "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabado"];
    $shifts = ["08:00:00", "12:45:00", "18:30:00"];

    for ($i = 0; $i < 7; $i++) {
        if ($i == $dayNow) {
            $dayNow = $weekDay[$i];
        }
    }
    echo $dayNow;
    echo $timeNow;
    if ($dayNow == 'Sabado') {
        if ($timeNow > strtotime($shifts[0]) && $timeNow < strtotime("20:00:00")) {
            echo "Sabado entre 08:00 e 20:00";
        }
    } 
    if ($dayNow == 'Domingo') {
        if ($timeNow > strtotime($shifts[0]) && $timeNow < strtotime("16:00:00")) {
            echo "Domingo entre 08:00 e 16:00";
        } else {
            echo "Domingo entre 16:00 e 08:00";
        }
    } 
    if ($dayNow == 'Segunda') {
        if ($timeNow > $shifts[0] && $timeNow < $shifts[1]) {
            echo $dayNow . " " . "Entre 08:00 e 12:45";
        } else if ($timeNow > $shifts[1] && $timeNow < $shifts[2]) {
            echo $dayNow . " " ."entre 12:45 e 18:30";
        } else {
            echo $dayNow . " " . "Entre 18:30 e 08:00";
        }
    }
    if ($dayNow == 'Terça') {
        if ($timeNow > $shifts[0] && $timeNow < $shifts[1]) {
            echo $dayNow . " " . "Entre 08:00 e 12:45";
        } else if ($timeNow > $shifts[1] && $timeNow < $shifts[2]) {
            echo $dayNow . " " ."entre 12:45 e 18:30";
        } else {
            echo $dayNow . " " . "Entre 18:30 e 08:00";
        }
    }
    if ($dayNow == 'Quarta') {
        if ($timeNow > $shifts[0] && $timeNow < $shifts[1]) {
            echo $dayNow . " " . "Entre 08:00 e 12:45";
        } else if ($timeNow > $shifts[1] && $timeNow < $shifts[2]) {
            echo $dayNow . " " ."entre 12:45 e 18:30";
        } else {
            echo $dayNow . " " . "Entre 18:30 e 08:00";
        }
    }
    if ($dayNow == 'Quinta') {
        if ($timeNow > $shifts[0] && $timeNow < $shifts[1]) {
            echo $dayNow . " " . "Entre 08:00 e 12:45";
        } else if ($timeNow > $shifts[1] && $timeNow < $shifts[2]) {
            echo $dayNow . " " ."entre 12:45 e 18:30";
        } else {
            echo $dayNow . " " . "Entre 18:30 e 08:00";
        }
    }
    if ($dayNow == 'Sexta') {
        if ($timeNow > $shifts[0] && $timeNow < $shifts[1]) {
            echo $dayNow . " " . "Entre 08:00 e 12:45";
        } else if ($timeNow > $shifts[1] && $timeNow < $shifts[2]) {
            echo $dayNow . " " ."entre 12:45 e 18:30";
        } else {
            echo $dayNow . " " . "Entre 18:30 e 08:00";
        }
    }
}
checarHorario();