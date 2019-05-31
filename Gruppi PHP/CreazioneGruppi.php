<?php

    main();
    
    function main(){
        $students = [];
        loadStudents($students);
        shuffle($students);

        $studentsGroupsNumberMax = 5;
        $studentsGroupsNumberMin = 1;
        $allStudents = count($students);
        $lonelyStudents = 0;

        if(checkGroupComposition($studentsGroupsNumberMax, $studentsGroupsNumberMin, $lonelyStudents, $allStudents)){

            echo("\n");
            generateGroups($students, $lonelyStudents, $studentsGroupsNumberMin, $studentsGroupsNumberMax, $allStudents);
        }
        else{
            
            echo("Invalid group composition");
        }
    }

    function checkGroupComposition($studentsGroupsNumberMax, $studentsGroupsNumberMin, &$lonelyStudents, $allStudents) : bool
    {
        if(
            $studentsGroupsNumberMax > $allStudents || 
            $studentsGroupsNumberMin > $allStudents || 
            $studentsGroupsNumberMax + $studentsGroupsNumberMin > $allStudents
            )
            return false;
        else
            return getAllPoss($allStudents, $studentsGroupsNumberMax, $studentsGroupsNumberMin, $lonelyStudents);
    }

    function getAllPoss($allStudents, $studentsGroupsNumberMax, $studentsGroupsNumberMin, &$lonelyStudents) : bool
    {
        $lonelyStudents = $allStudents % $studentsGroupsNumberMax;

        while($lonelyStudents <= $allStudents){

            if($lonelyStudents % $studentsGroupsNumberMin != 0)
                $lonelyStudents += $studentsGroupsNumberMax;
            else
                return true;
        }

        return false;
    }

    function generateGroups($students, $lonelyStudents, $studentsGroupsNumberMin, $studentsGroupsNumberMax, $allStudents)
    {
        for($i = 0; $i < $lonelyStudents; $i++){
            $msg = $students[$i];
            echo($msg . "\n");
            if(($i + 1) % $studentsGroupsNumberMin == 0)
                echo("\n");
        }

        for($i = $lonelyStudents; $i < $allStudents; $i++){
            $msg = $students[$i];
            echo($msg . "\n");
            if(($i + $lonelyStudents) % $studentsGroupsNumberMax == 0)
                echo("\n");
        }
    }

    function loadStudents(&$students){

        array_push($students, "Bert Lorenzo");
        array_push($students, "Buscema Antonio");
        array_push($students, "Carbonati Davide");
        array_push($students, "Cella Marco");
        array_push($students, "D'Augelli Mario");
        array_push($students, "Dumitru Adrian");
        array_push($students, "Faoro Claudio");
        array_push($students, "Ferrero-Merlino Leonardo");
        array_push($students, "Fornaro Roberto");
        array_push($students, "Gomes Anielle");
        array_push($students, "Gregoricchio Matteo");
        array_push($students, "Iacobelli Sara");
        array_push($students, "Laurenti Diana");
        array_push($students, "Linari Matteo");
        array_push($students, "Pietropertosa Fabio");
        array_push($students, "Presutti Edoardo");
        array_push($students, "Reale Andrea");
        array_push($students, "Revelli Ruben");
        array_push($students, "Sacchet Gabriele");
        array_push($students, "Sartori Alessandro");
        array_push($students, "Sinatra Gianpaolo");
        array_push($students, "Soncin Erika");
        array_push($students, "Vellano Marco");
        array_push($students, "Velocci Giuseppe");
        array_push($students, "Schutt Daniele");
        array_push($students, "Lo Presti Ilaria");
        array_push($students, "Morales Yusdel");
        array_push($students, "Mason Alessandro");
    }