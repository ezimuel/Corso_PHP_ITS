<?php
    declare(strict_types=1);
    require "Studente2.php";

    main();

    function main(){

        $s = new Studente2();

        echo($s -> setNome("Giacomo") . "\n");
        echo($s -> setCognome("Landrini") . "\n");
        echo($s -> setEmail("sunni@yahoo.it") . "\n");
        echo($s -> setDataDiNascita(11, 7, 1989) . "\n");

        echo($s -> addCorso("PHP") . "\n");
        echo($s -> addCorso("C#") . "\n");
        echo($s -> addCorso("Java") . "\n");


        echo($s -> addVoto("PHP", 30) . "\n");
        echo($s -> addVoto("C#", 0) . "\n");

        echo($s -> getNome() . "\n");
        echo($s -> getCognome() . "\n");
        echo($s -> getEmail() . "\n");
        echo($s -> getDataDiNascita() . "\n");
        var_dump($s -> getCorsi());
        echo($s -> getMediaCorsi() . "\n");

    }