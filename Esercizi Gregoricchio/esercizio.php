<?php

$students = ["Bert Lorenzo","Buscema Antonio","Carbonati Davide","Cella Marco","D'Augelli Mario","Dumitru Adrian",
"Faoro Claudio","Ferrero-Merlino Leonardo","Fornaro Roberto","Gomes Anielle","Gregoricchio Matteo","Iacobelli Sara",
"Laurenti Diana","Linari Matteo","Pietropertosa Fabio","Presutti Edoardo","Reale Andrea","Revelli Ruben",
"Sacchet Gabriele","Sartori Alessandro","Sinatra Gianpaolo","Soncin Erika","Vellano Marco",
"Velocci Giuseppe","Schutt Daniele","Lo Presti Ilaria","Morales Yusdel","Mason Alessandro"];

function HolyTrinityGroup(array $students){

    $c = count($students);
    for ($s=0; $s<$c && count($students)!=0; $s++){
        $int = 0;
        $group = "";
        for($i = 0; $i<3; $i++){
            if ($students == NULL){
                break;
            } else {
            $int =  array_rand($students);
            ($i != 2) ? $group .= $students[$int] . ", " : $group .= $students[$int] . ".";
            unset($students[$int]);
            }
        }
        echo (var_dump($group));
    }
}

function BinaryGroup(array $students){

    $c = count($students);
    for ($s=0; $s<$c && count($students)!=0; $s++){
        $int = 0;
        $group = "";
        for($i = 0; $i<2; $i++){
            if ($students == NULL){
                break;
            } else {
            $int =  array_rand($students);
            ($i != 1) ? $group .= $students[$int] . ", " : $group .= $students[$int] . ".";
            unset($students[$int]);
            }
        }
        echo (var_dump($group));
    }
}

HolyTrinityGroup($students);
echo ("\r\n");
BinaryGroup($students);