<?php

final class Obito extends Certidao implements Registro
{
    private $dataFalecimento;
    
    public function __construct($nome,$sobrenome,$declarante,$tipo,$dataEmissao,$dataFalecimento)
    {

        parent::__construct($nome,$sobrenome,$declarante,$tipo,$dataEmissao);
        $this->dataFalecimento = $dataFalecimento;
    }

  
    public function getDataFalecimento()
    {
        return $this->dataFalecimento;
    }


    public function setDataFalecimento($dataFalecimento)
    {
        $this->dataFalecimento = $dataFalecimento;

    }

    public function emitirCertidao()
    {
        echo 'certidão de obito emitida';
    }

    public function registrar($tabeliao,$cartorio,$numeroRegistro)
    {
        return $tabeliao.'' .$cartorio.' '.$numeroRegistro;
        echo 'certidão de óbito registrada';
      
    }
}