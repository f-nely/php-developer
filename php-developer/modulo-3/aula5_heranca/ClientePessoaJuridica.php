<?php


class ClientePessoaJuridica extends Cliente
{
    public $nomeFantasia;
    public $cnpj;

    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function verEndereco()
    {
        return "<p>Endereço Pessoa Juridica. <br> Endereçp: {$this->endereco}<br> Bairro: {$this->bairro}<br> Nome Fantasia: {$this->nomeFantasia} <br> CNPJ: {$this->cnpj}<hr></p>";
    }
}