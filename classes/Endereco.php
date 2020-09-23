<?php

final class Endereco
{
    private $rua;
    private $bairro;
    private $numero;
    private $cep;
    private $cidade;



    public function __construct($rua,$bairro,$numero,$cep,$cidade)
    {

        $this->$rua = $rua;
        $this->bairro = $bairro;
        $this->numero = $numero;
        $this->cep = $cep;
        $this->cidade = $cidade;

    }

    public function enderecoCompleto()
    {
        return $this->rua.' '.$this->numero.' '.$this->bairro.' '.$this->cidade;
    }




}   