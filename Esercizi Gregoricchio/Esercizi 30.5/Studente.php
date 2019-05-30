<?php

declare (strict_types=1);
include("..\\StudenteInterface.php");
include("..\\CorsiInterface.php");

class Studente implements StudenteInterface, CorsiInterface {

    private $nome;
    private $cognome;
    private $email;
    private $dataNascita;
    private $corsi = [];

    public function setNome(string $nome): bool{
        $this->nome = $nome;
        if ($nome = $this->nome){
            return true;
        } else {
            return false;
        }
    }
    public function getNome(): string{
        return $this->nome;
        
    }
    public function setCognome(string $cognome): bool{
        $this->cognome = $cognome;
        return true;
    }
    public function getCognome(): string{
        return $this->cognome;
    }
    public function setEmail(string $email): bool{
        $this->email = $email;
        return true;

    }
    public function getEmail(): string{
        return $this->$email;

    }
    public function setDataDiNascita(int $giorno, int $mese, int $anno): bool{
        $this->dataNascita = $giorno . "/" . $mese . "/" . $anno;
        return true;
    }
    public function getDataDiNascita(): string{
        return $this->dataNascita;
    } // nel formato "gg/mm/AAAA"

   
    public function addCorso(string $corso): bool{
        if (!isset($this->corsi[$corso])){
            $this->corsi[$corso] = 0;
            return true;
        } else {
            return false;
        }
    }

    public function getCorsi(): array{
        return $this->corsi;
    }
    public function addVoto(string $corso, int $voto): bool{

        if (isset($this->corsi[$corso]) && $voto > 0){
            $this->corsi[$corso] = $voto;
            return true;
        } else {
            return false;
        }
    }

    public function getMediaCorsi(): float{
        $corsiCount = 0.0;
        foreach($this->corsi as $key=>$value){
            $corsiCount += (float)$value;
        } 
        return $corsiCount/count($this->corsi);
    }

}

$st = new Studente();
$st->setNome("Marco");
$st->setCognome("cognome");
$st->setDataDiNascita(20, 05, 1992);
$st->setEmail("marcone@mail.com");
$st->addCorso("Php");
$st->addCorso("Mobile");
$st->addCorso("Mobile");

$st->addVoto("Php", 25);
print_r( $st->getCorsi());
echo $st->getMediaCorsi();