<?php

class Testemunha
{
    private $nome;
    private $rg;
    private $cpf;

    public function __construct($nome,$rg,$cpf)
    {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->cpf = $cpf;
    }


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;

    }

    public function getCpf()
    {
        return $this->cpf;
    }


    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

    }
}