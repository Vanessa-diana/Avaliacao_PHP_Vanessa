<?php

class Cartorio
{
    private $certidoes;
    private $contratos;


    public function adicionarCertidoes(Registro $certidao)
    {
        $this->certidoes[] = $certidao;
    }

    public function somarCertidoes()
    {
        $total = 0;
        foreach($this->certidoes as $certidao)
        {
            $total+=$certidao->registrar();
        }
        return $total;
    }

    public function adicionarContratos(Registro $contrato)
    {
        $this->contratos[] = $contratos;
    }

    public function somarContratos()
    {
        $total = 0;
        foreach($this->contratos as $contrato)
        {
            $total+= $contrato->registrar();
        }
        return $total;
    }

}