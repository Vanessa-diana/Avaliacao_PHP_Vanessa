<?php

final class Nascimento extends Certidao implements Registro

{
    private $filiacao;
    private $horaNascimento;
    private $dataNascimento;

    public function __construct($nome,$sobrenome,$declarante,$tipo,$dataEmissao,$filiacao,$horaNascimento,$dataNascimento)
    {
        parent::__construct($nome,$sobrenome,$declarante,$tipo,$dataEmissao);
        $this->filiacao = $filiacao;
        $this->horaNascimento = $horaNascimento;
        $this->dataNascimento = $dataNascimento;
    }

    public function getFiliacao()
    {
        return $this->filiacao;
    }

 
    public function setFiliacao($filiacao)
    {
        $this->filiacao = $filiacao;

        return $this;
    }


    public function getHoraNascimento()
    {
        return $this->horaNascimento;
    }


    public function setHoraNascimento($horaNascimento)
    {
        $this->horaNascimento = $horaNascimento;

        return $this;
    }


    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    public function emitirCertidao()
    {
        echo 'certidao de nascimento emitida com sucesso';
    }

    public function registrar($tabeliao,$cartorio,$numeroRegistro)
    {
        return $tabeliao.'' .$cartorio.' '.$numeroRegistro;
        echo 'certidao de nascimento registrada';
      
    }
}