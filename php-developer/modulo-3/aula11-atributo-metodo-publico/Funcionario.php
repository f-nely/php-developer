<?php

class Funcionario
{
    public string $nome;
    public $salario;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function verSalario()
    {
        $this->salario = $this->validarSalario($this->salario);
        return "O funcionário {$this->nome} tem o salário de R$ {$this->salario}";
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function validarSalario($salario)
    {
        if (is_numeric($salario) && ($salario > 0)) {
            return $this->salario = number_format($salario, 2, ',', '.');
        } else {
            die('Salário inválido');
        }
    }
}