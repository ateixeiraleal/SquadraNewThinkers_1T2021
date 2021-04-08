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

    public function contratar($cozinha, $candidato): void
    {
        $this->validarExperiencia($candidato);
        $cozinha->setFuncionarios($candidato);
    }

    public function validarExperiencia($candidato): void
    {
        if($candidato->getExperiencia() < 2){
            throw new Exception(
                "Candidato(a) " . strtoupper($candidato->getNome())
                . " não possui tempo de experiência necessário para o cargo."
            );
        }
    }
}