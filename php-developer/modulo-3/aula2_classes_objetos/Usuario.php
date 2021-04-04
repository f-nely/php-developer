<?php


class Usuario
{
    public $nome;
    public $email;

    public function getDadosUser($nome, $email)
    {
        return "O usuário {$nome} tem o e-mail {$email}";
    }
}