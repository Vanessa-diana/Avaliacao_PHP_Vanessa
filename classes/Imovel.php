<?php

class Imovel 
    {

        private $tipo;
        private $descricao;
        private $tamanho;
        private $endereco;
      
     
        public function __construct($tipo,$descricao,$tamanho) 
        {
            $this->tipo = $tipo;
            $this->descricao = $descricao;
            $this->tamanho = $tamanho;
        }


        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }

        public function getTipo()
        {
            return $this->tipo;
        }

        public function setDescricao($descricao)
        {
            $this->descricao = $descricao;
        }

        public function getDescricao()
        {
            return $this->descricao;
        }


        public function getTamanho()
        {
            return $this->tamanho;
        }

       
        public function setTamanho($tamanho)
        {
            $this->tamanho = $tamanho;
        }

             
        public function getEndereco()
        {
                return $this->endereco;
        }

        public function setEndereco(Endereco $endereco)
        {
            $this->endereco = $endereco;

            
        }
    }

?>