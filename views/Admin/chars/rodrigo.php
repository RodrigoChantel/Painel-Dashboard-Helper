<?php
    
    class player{
        public function guerreiro(){
            $name = "Rodrigo";
            $nascimento = "1996/07/06";
            $year = date('y'); $month = date('m'); $day = date('d');
            $date = $day . "/" . $month . "/" . $year;
            $dano_fisico = 10;
            $defesa_fisica = 12;
            $dano_magico = 3;
            $defesa_magica = 5;
            return $name;
        }
    }

?>