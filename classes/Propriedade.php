<?php

final class Propriedade extends Certidao implements Registro

{
    private $imovel;
   

    public function __construct($nome,$sobrenome,$declarante,$tipo,$dataEmissao,$imovel)
    {
        parent::__construct($nome,$sobrenome,$declarante,$tipo,$dataEmissao);
        $this->imovel = $imovel;

    }

    public function getImovel()
    {
        return $this->imovel;
    }

    public function setImovel(Imovel $imovel)
    {
        $this->imovel = $imovel;

    }

    public function emitirCertidao()
    {
        echo 'certidao de propriedade emitida';
    }

    public function registrar($tabeliao,$cartorio,$numeroRegistro)
    {
        return $tabeliao.'' .$cartorio.' '.$numeroRegistro;
        echo 'contrato de propriedade registrado';
      
    }
}