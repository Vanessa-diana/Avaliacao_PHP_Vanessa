<?php

abstract class Certidao 
{

    protected $nome;
    protected $sobrenome;
    protected $declarante;
    protected $tipo;
    protected $dataEmissao;


    public function __construct($nome,$sobrenome,$declarante,$tipo,$dataEmissao)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->declarante = $declarante;
        $this->tipo = $tipo;
        $this->dataEmissao = $dataEmissao;

    }

    final public function obterNomeCompleto()
    {
        return $this->nome.' '.$this->sobrenome;
    }

    abstract public function emitirCertidao();
    


    public function getDeclarante()
    {
        return $this->declarante;
    }


    public function setDeclarante($declarante)
    {
        $this->declarante = $declarante;

    }
}