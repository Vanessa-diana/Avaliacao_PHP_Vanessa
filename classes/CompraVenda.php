<?php

final class CompraVenda extends Contrato implements Registro
{
    private $valorVenda;


    public function __construct($testemunhas,$tipo,$dataEmissao,$dataRegistro,$valorVenda)
    {
        parent::__construct($testemunhas,$tipo,$dataEmissao,$dataRegistro);
        $this->valorVenda = $valorVenda;
    }


    public function getValorVenda()
    {
        return $this->valorVenda;
    }

 
    public function setValorVenda($valorVenda)
    {
        $this->valorVenda = $valorVenda;

    }
    public function emitirContrato()
    {
        echo 'contrato de compra e venda emitido';
    }
    public function registrar($tabeliao,$cartorio,$numeroRegistro)
    {
        return $tabeliao.'' .$cartorio.' '.$numeroRegistro;
        echo 'contrato de compra e venda registrado';
      
    }
}