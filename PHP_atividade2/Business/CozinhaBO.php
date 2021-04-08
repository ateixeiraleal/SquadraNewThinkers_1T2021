<?php
require_once 'Model/Cozinha.php';

class CozinhaBO
{
    public function __construct()
    {
    }

    public function criar($nome, $numeroPratos, $numeroCozinheiros, $tempoPreparo, $horaAbertura, $horaFechamento, $pratoPrincipal = null){
        $this->validarCamposObrigatorios($nome, $numeroPratos, $numeroCozinheiros, $tempoPreparo, $horaAbertura, $horaFechamento, $pratoPrincipal);
        $cozinha = new Cozinha($nome, $numeroPratos, $numeroCozinheiros, $tempoPreparo, $horaAbertura, $horaFechamento, $pratoPrincipal);
        return $cozinha;
    }

    public function validarCamposObrigatorios($nome, $numeroPratos, $numeroCozinheiros, $tempoPreparo, $horaAbertura, $horaFechamento, mixed $pratoPrincipal): void
    {
        if (empty($nome)
            || empty($numeroPratos)
            || empty($numeroCozinheiros)
            || empty($tempoPreparo)
            || empty($horaAbertura)
            || empty($horaFechamento)
            || empty($pratoPrincipal)) {
            throw new Exception(
                "Está faltando algum parâmetro obrigatório da COZINHA "
                . strtoupper($nome) . "!");
        }
    }

    public function contratarFuncionario()
    {

    }
}