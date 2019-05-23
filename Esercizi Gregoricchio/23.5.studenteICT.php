<?php

declare(strict_types=1);

include(".\\23.5.abstractStudenti.php");

use abstractStudenti\Studenti;


class StudenteICT extends Studenti {
    
    const MAIN_COURSES = [
        'Backend Developer'=> 'PHP, C#, Database Relazionali e No-SQL.',
        'FrontEnd Developer'=>'Javascript&CSS, Java for Android, Swift.',
        'Design'=>'Visual Design, UX Design, UI Design.',
        'Security Expert'=>'Linux, Penetration Testing, Sicurezza Informatica.'];
    private $percorsoSceltoICT;

    public function __construct(string $nome, string $cognome, string $email, $dataDiNascita, string $percorsoScelto){
        $this->percorsoSceltoICT = $percorsoScelto;
        parent::__construct($nome,$cognome,  $email, $dataDiNascita, "ICT");
    }

    public function getMainCourses() : void {
        $base = "I corsi principali sono: " . self::MAIN_COURSES[$this->percorsoSceltoICT];
        if (isset(self::MAIN_COURSES[$this->percorsoSceltoICT])){
            echo $base;
        } else {
            echo "Hai indicato un percorso non ancora presente al corso ITS ICT.";
        }
    }
}


$s = new StudenteICT("Alex", "Del Piero", "alex10delpiero@gmail.com", "09/11/1974", "FrontEnd Developer");
var_dump($s);
echo "<br />";
echo $s->indirizzoStudente("Via dei Campioni", 10, "Torino", 10100);
echo "<br />";
$s->getMainCourses();