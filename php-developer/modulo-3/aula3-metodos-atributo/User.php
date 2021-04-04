<?php


class User
{
    public $nome;
    public $email;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return "Nome: {$this->nome}";
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }
}