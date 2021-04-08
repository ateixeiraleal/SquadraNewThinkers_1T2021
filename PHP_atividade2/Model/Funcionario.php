<?php

class Funcionario
{
    private String $nome;
    private String $funcao;
    private int $experiência;

    public function __construct(string $nome, string $funcao, int $experiencia)
    {
        $this->nome = $nome;
        $this->funcao = $funcao;
        $this->experiência = $experiencia;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getFuncao()
    {
        return $this->funcao;
    }

    public function getExperiencia(): int
    {
        return $this->experiência;
    }

}