<?php

abstract class Contrato 
{

    protected $testemunhas;
    protected $tipo;
    protected $dataEmissao;
    protected $dataRegistro;

    public function __construct($testemunhas,$tipo,$dataEmissao,$dataRegistro)
    {
        $this->testemunhas = $testemunhas;
        $this->tipo = $tipo;
        $this->dataEmissao = $dataEmissao;
        $this->dataRegistro = $dataRegistro;
    }
 

    public function getTestemunhas()
    {
        return $this->testemunhas;
    }


    final public function setTestemunhas(Testemunhas $testemunhas)
    {
        $this->testemunhas[] = $testemunhas;

    }
    

    abstract public function emitirContrato();


    public function getTipo()
    {
        return $this->tipo;
    }


    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }


    public function getDataRegistro()
    {
        return $this->dataRegistro;
    }


    public function setDataRegistro($dataRegistro)
    {
        $this->dataRegistro = $dataRegistro;

    }
}