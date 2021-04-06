<?php

class Funcionario
{
    private String $nome;
    private String $atividade;

    public function __construct(string $nome, string $atividade)
    {
        $this->nome = $nome;
        $this->atividade = $atividade;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getAtividade()
    {
        return $this->atividade;
    }
}