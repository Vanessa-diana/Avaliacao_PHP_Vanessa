<?php

final class Casamento extends Certidao implements Registro
{
    private $dataCasamento;
    private $conjuge;
    private $regime;
    

    public function __construct($nome,$sobrenome,$declarante,$tipo,$dataEmissao,$dataCasamento,$comjuge,$regime)
    {
        parent::__construct($nome,$sobrenome,$declarante,$tipo,$dataEmissao);
        $this->dataCasamento = $dataCasamento;
        $this->conjuge = $conjuge;
        $this->regime =$regime;
    }


    public function getDataCasamento()
    {
        return $this->dataCasamento;
    }

 
    public function setDataCasamento($dataCasamento)
    {
        $this->dataCasamento = $dataCasamento;

    }


    public function getConjuge()
    {
        return $this->conjuge;
    }

 
    public function setConjuge($conjuge)
    {
        $this->conjuge = $conjuge;

    }


    public function getRegime()
    {
        return $this->regime;
    }


    public function setRegime($regime)
    {
        $this->regime = $regime;

    }

    public function emitirCertidao()
    {
        echo 'certidão de casamento emitida';
    }

    public function registrar($tabeliao,$cartorio,$numeroRegistro)
    {
        return $tabeliao.'' .$cartorio.' '.$numeroRegistro;
        echo 'certidao de casamento registrada';
      
    }
}