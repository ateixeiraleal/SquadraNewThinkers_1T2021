<?php
require_once 'Model/Ingrediente.php';

class IngredienteBO
{
    public function __construct()
    {
    }

    public function cadastrar($nome, $dataValidade)
    {
        $ingrediente = new Ingrediente($nome, $dataValidade);
        $this->validarCamposCadastro($ingrediente);
        return $ingrediente;
    }

    public function validarCamposCadastro($ingrediente): void
    {
        if(empty($ingrediente->getNome())
            || empty($ingrediente->getValidade())) {
            throw new Exception("Está faltando algum parâmetro obrigatório do ingrediente "
                . strtoupper($ingrediente->getNome()) . "!"
            );
        }
    }

    public function inserir($cozinha, $ingrediente): void
    {
        $this->validarDataVencimento($ingrediente);
        $cozinha->setIngredientes($ingrediente);
    }

    public function validarDataVencimento($ingrediente): void
    {
        $dataAtual = new DateTime();
        if($ingrediente->getValidade()->format("Y-m-d") < $dataAtual->format("Y-m-d")){
            throw new Exception(
                "Ingrediente " . strtoupper($ingrediente->getNome())
                . " está vencido."
            );
        }
    }
}