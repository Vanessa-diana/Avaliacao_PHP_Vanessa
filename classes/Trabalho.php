<?php

final class Trabalho extends Contrato implements Registro
{
    private $funcionario;
    private $empregador;
    private $salario;
    private $cargo;


    public function __construct($testemunhas,$tipo,$dataEmissao,$dataRegistro,$funcionario,$empregador,$salario,$cargo)
    {
        parent::construct($testemunhas,$tipo,$dataEmissao,$dataRegistro);
        $this->funcionario = $funcionario;
        $this->empregador = $empregador;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }


    public function emitirContrato()
    {
        echo 'contrato de trabalho emitido';
    }

    public function registrar($tabeliao,$cartorio,$numeroRegistro)
    {
        return $tabeliao.'' .$cartorio.' '.$numeroRegistro;
        echo 'contrato de trabalho registrado';
      
    }


    public function getFuncionario()
    {
        return $this->funcionario;
    }

    public function setFuncionario(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;

    }
}