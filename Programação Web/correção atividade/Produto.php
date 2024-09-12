<?php

class Produto
{
    private string $codBarra;
    private string $nome;
    private string $preco;

    public function __construct(string $codBarra, string $nome, string $preco)
    {
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->setCodBarra($codBarra);
    }
    public function setCodBarra(string $codigo)
    {
        $this->codBarra = $codigo;
    }
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function setPreco(string $preco)
    {
        $this->preco = $preco;
    }
    public function getCodBarra()
    {
        return $this->codBarra;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getPreco()
    {
        return $this->preco;
    }
}
