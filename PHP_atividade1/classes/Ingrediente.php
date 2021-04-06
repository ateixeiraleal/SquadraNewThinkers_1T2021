<?php

class Ingrediente
{
    private String $nome;
    private DateTime $validade;

    public function __construct(string $nome, DateTime $validade)
    {
        $this->nome = $nome;
        $this->validade = $validade;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getValidade(): DateTime
    {
        return $this->validade;
    }

    public function setValidade($validade): void
    {
        $this->validade = $validade;
    }
}