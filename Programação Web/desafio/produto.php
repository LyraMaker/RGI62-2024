<?php

class produto
{
    private string $codigo;
    private string $nome;
    private float $preco;
    private int $quantidade = 0; //Valor inicial definido como 0, pois não há como realizar soma em valores não definidos! 😁

    public function __construct(string $codigo, string $nome, float $preco, int $quantidade){
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->adicionarEstoque($quantidade);
    }
    public function getCodigo(): string
    {
        return $this->codigo;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getPreco(): string
    {
        return $this->preco;
    }
    public function getQuantidade(): string
    {
        return $this->quantidade;
    }
    public function setPreco(float $novoPreco)
    {
        $this->preco = $novoPreco;
    }
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setCodigo(string $codigo){
        $this->codigo = $codigo;
    }
    public function adicionarEstoque(int $quantidade)
    {
        $this->quantidade += $quantidade;
    }
    public function removerEstoque(int $quantidade)
    {
        $this->quantidade -= $quantidade;
    }
}