<?php

    class Funcionario
    {

        
        private $experiencia;
        private $nivel;
        private $genero;
        const GENEROS= array('M'=>'Masculino','F'=>'Feminino'); 
        private $matricula;
        private static $contador; 


        public function __construct($experiencia,$nivel,$genero){
            
            self::$contador++;

            $this->experiencia = $experiencia;
            $this->nivel = $nivel;
            $this->genero = $genero;
            $this->matricula = self::$contador;

        }

 
        public function getExperiencia()
        {
            return $this->experiencia;
        }
 
        public function setExperiencia($experiencia)
        {
            $this->experiencia = $experiencia;
               
        }
        
        
        public function getNivel()
        {
            return $this->nivel;
        }

        public function setNivel($nivel)
        {
            $this->nivel = $nivel;
              
        }
 
        public function getNomeGenero()
        {
            return self::GENEROS[$this->genero];
        }


        public static function getContador() {
            return self::$contador;
        }

    }       

?>