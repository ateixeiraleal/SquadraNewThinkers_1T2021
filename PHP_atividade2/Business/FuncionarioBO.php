<?php
require_once 'Model/Funcionario.php';

class FuncionarioBO
{
    public function __construct()
    {
    }

    public function cadastrar($nome, $funcao, $experiencia)
    {
        $candidato = new Funcionario($nome, $funcao, $experiencia);
        $this->validarCamposCadastro($candidato);
        return $candidato;
    }

    public function validarCamposCadastro($candidato): void
    {
        if(empty($candidato->getNome())
            || empty($candidato->getFuncao())
            || empty($candidato->getExperiencia())) {
            throw new Exception(
                "Está faltando algum parâmetro obrigatório do(a) funcionário(a) " . strtoupper($candidato->getNome()) . "!"
            );
        }
    }
}