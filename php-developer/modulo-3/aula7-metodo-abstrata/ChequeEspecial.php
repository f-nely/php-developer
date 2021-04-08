<?php


class ChequeEspecial extends Cheque
{
    public function calcularJuros()
    {
        $this->valor = $this->valor * 1.10;
        $this->valor = parent::real($this->valor);
        return "Valor do cheque {$this->tipo}: R$ {$this->valor}";
    }
}