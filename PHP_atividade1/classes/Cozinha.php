<?php
require_once "Funcionario.php";
require_once "Ingrediente.php";

class Cozinha
{
    private string $tipo;
    private int $numeroPratos;
    private int $numeroCozinheiros;
    private int $tempoPreparo;
    private int $horaAbertura;
    private int $horaFechamento;
    private string $pratoPrincipal;
    private array $ingredientes = [];
    private array $funcionarios = [];

    public function __construct(string $tipo, int $numeroPratos, int $numeroCozinheiros, int $tempoPreparo, int $horaAbertura, int $horaFechamento, string $pratoPrincipal)
    {
        $this->tipo = $tipo;
        $this->numeroPratos = $numeroPratos;
        $this->numeroCozinheiros = $numeroCozinheiros;
        $this->tempoPreparo = $tempoPreparo;
        $this->horaAbertura = $horaAbertura;
        $this->horaFechamento = $horaFechamento;
        $this->pratoPrincipal = $pratoPrincipal;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function getNumeroPratos(): int
    {
        return $this->numeroPratos;
    }

    public function getNumeroCozinheiros(): int
    {
        return $this->numeroCozinheiros;
    }

    public function getTempoPreparo(): int
    {
        return $this->tempoPreparo;
    }

    public function getHoraAbertura(): int
    {
        return $this->horaAbertura;
    }

    public function getHoraFechamento(): int
    {
        return $this->horaFechamento;
    }

    public function getPratoPrincipal(): string
    {
        return $this->pratoPrincipal;
    }

    public function getIngredientes(): array
    {
        return $this->ingredientes;
    }

    public function setIngredientes(Ingrediente $ingrediente): void
    {
        array_push($this->ingredientes, $ingrediente);
    }

    public function getFuncionarios(): array
    {
        return $this->funcionarios;
    }

    public function setFuncionarios(Funcionario $funcionario): void
    {
        array_push($this->funcionarios, $funcionario);
    }
}