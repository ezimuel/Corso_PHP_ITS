<?php

declare(strict_types=1);
namespace abstractStudenti;

abstract class Studenti{

    public $nome;
    public $cognome;
    public $email;
    public $dataDiNascita;
    public $corsoITS;

    public function __construct(string $nome, string $cognome, string $email, $dataDiNascita, string $corsoITS){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->dataDiNascita = $dataDiNascita;
        $this->corsoITS = $corsoITS;
    }

    public function indirizzoStudente(string $via, int $civico, string $città, int $cap) : string{
        return "L'indirizzo dello studente è: " . $via . " " . (string)$civico . ", " . $città . ", " . (string)$cap . ".";
    }

}
