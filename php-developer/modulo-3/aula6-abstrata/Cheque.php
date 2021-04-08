<?php


abstract class Cheque
{
    public $valor;
    public $tipo;

    public function __construct($valor, $tipo)
    {
        $this->valor = $valor;
        $this->tipo = $tipo;
    }

    public function verValor()
    {
        return "Valor do cheque {$this->tipo}: R$ {$this->real($this->valor)} <hr>";
    }

    public function real($valor)
    {
        return number_format($valor, '2', ',', '.');
    }
}