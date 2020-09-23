<?php

final class PrestacaoServico extends Contrato implements Registro

{
    private $prestador;
    private $contratante;

    public function __construct($testemunhas,$tipo,$dataEmissao,$dataRegistro,$prestador,$contratante)
    {
        parent::__construct($testemunhas,$tipo,$dataEmissao,$dataRegistro);
        $this->prestador = $prestador;
        $this->contratante = $contratante;

    }

    public function getPrestador()
    {
        return $this->prestador;
    }


    public function setPrestador($prestador)
    {
        $this->prestador = $prestador;
    }


    public function getContratante()
    {
        return $this->contratante;
    }


    public function setContratante($contratante)
    {
        $this->contratante = $contratante;

    }

    public function emitirContrato()
    {
        echo 'contrato de prestação de serviços emitido';
    }
    public function registrar($tabeliao,$cartorio,$numeroRegistro)
    {
        return $tabeliao.'' .$cartorio.' '.$numeroRegistro;
        echo 'contrato de prestação de serviço registrado';
      
    }
}