<?php

    require "StudenteInterface.php";
    require "CorsiInterface.php";

    class studente2 implements StudenteInterface, CorsiInterface    
    {
        protected $name = "";
        protected $surname = "";
        protected $email = "";
        protected $bornDate = "";
        protected $marks = [];
        protected $courses = [];

        public function setNome(string $name): bool{
            $this -> nome = $name;
            return true;
        }

        public function getNome(): string{
            return $this -> nome;
        }

        public function setCognome(string $surname): bool{
            $this -> surname = $surname;
            return true;
        }

        public function getCognome(): string{
            return $this -> surname;
        }

        public function setEmail(string $email): bool{
            
            if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this -> email = $email;
                return true;
            }
            
            return false;
        }

        public function getEmail(): string{
            return $this -> email;
        }

        public function setDataDiNascita(int $giorno, int $mese, int $anno): bool{
            
            $date = $giorno . "-" . $mese . "-" . $anno;
            $differenceDate = strtotime($date) - strtotime(date("d-m-Y"));

            if(checkdate($mese, $giorno, $anno) && $differenceDate < 0){  
                $date = $giorno . "/" . $mese . "/" . $anno;
                $this -> bornDate = $date;
                return true;
            }
                
            return false;
        }

        public function getDataDiNascita(): string {
            return $this -> bornDate;
        }

        public function addVoto(string $corso, int $voto): bool{

            if($voto < 0 || $voto > 30)
                return false;

            $this -> marks[$corso] = $voto;
            return true;
        }

        public function addCorso(string $corso): bool{

            if(array_key_exists ($corso , $this -> marks))
                return false;

            array_push($this -> courses, $corso);
            return true;
        }

        public function getCorsi(): array{
            return $this -> courses;
        }

        public function getMediaCorsi(): float{
            if(count($this -> marks) == 0)
                return -1;
            else{
                $lenght = count($this -> marks);
                $numberOfMarks = 0;
                $sum;
                foreach ($this -> courses as $course){
                    if(isset($this -> marks[$course])){
                        $sum += $this -> marks[$course];
                        $numberOfMarks++;
                    }
                }

                if($numberOfMarks == 0)
                    return -1;

                return $sum / $numberOfMarks;
            }
        }
    }
    