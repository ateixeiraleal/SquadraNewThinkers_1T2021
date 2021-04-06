<?php
require "classes/Cozinha.php";

$cozMin = new Cozinha("Mineira", 10, 4, 30, 14 , 20, "Feijoada");
$ingM1 = new Ingrediente("Feijão", new DateTime("2022-02-10"));
$ingM2 = new Ingrediente("Farinha", new DateTime("2021-12-03"));
$ingM3 = new Ingrediente("Arroz", new DateTime("2022-07-21"));
$ingM4 = new Ingrediente("Carne de Porco", new DateTime("2021-04-27"));
$ingM5 = new Ingrediente("Linguiça", new DateTime("2021-04-25"));
$cozMin->setIngredientes($ingM1);
$cozMin->setIngredientes($ingM2);
$cozMin->setIngredientes($ingM3);
$cozMin->setIngredientes($ingM4);
$cozMin->setIngredientes($ingM5);
$funcM1 = new Funcionario("José das Couves", "Chefe");
$funcM2 = new Funcionario("Felícia da Benevolência", "Cozinheira");
$funcM3 = new Funcionario("Maria da Dores", "Garçonete");
$funcM4 = new Funcionario("Celisvaldo dos Santos", "Metri");
$cozMin->setFuncionarios($funcM1);
$cozMin->setFuncionarios($funcM2);
$cozMin->setFuncionarios($funcM3);
$cozMin->setFuncionarios($funcM4);

$cozIt = new Cozinha("Italiana", 12, 6, 20, 13, 22, "Pizza");
$ingI1 = new Ingrediente("Presunto", new DateTime("2021-06-17"));
$ingI2 = new Ingrediente("Mussarela", new DateTime("2021-01-13"));
$ingI3 = new Ingrediente("Palmito", new DateTime("2022-06-25"));
$cozIt->setIngredientes($ingI1);
$cozIt->setIngredientes($ingI2);
$cozIt->setIngredientes($ingI3);
$funcI1 = new Funcionario("Maria Bastarda Dequem", "Cozinheira");
$funcI2 = new Funcionario("Sextavado Obtusângulo Reto", "Atendente");
$cozIt->setFuncionarios($funcI1);
$cozIt->setFuncionarios($funcI2);

$cozChi = new Cozinha("Chinesa", 15, 8, 45, 13, 22, "Yakissoba");
$ingC1 = new Ingrediente("Champignon", new DateTime("2021-04-01"));
$ingC2 = new Ingrediente("Brócolis", new DateTime("2021-04-06"));
$ingC3 = new Ingrediente("Macarrão", new DateTime("2022-01-11"));
$ingC4 = new Ingrediente("Carne", new DateTime("2021-05-13"));
$cozChi->setIngredientes($ingC1);
$cozChi->setIngredientes($ingC2);
$cozChi->setIngredientes($ingC3);
$cozChi->setIngredientes($ingC4);
$funcC1 = new Funcionario("Carabino Tiro Certo", "Garçon");
$funcC2 = new Funcionario("Ácido Acético Etílico da Silvas", "Cozinheiro");
$funcC3 = new Funcionario("Manoel Sovaco de Gamba", "Caixa");
$cozChi->setFuncionarios($funcC1);
$cozChi->setFuncionarios($funcC2);
$cozChi->setFuncionarios($funcC3);

echo "<pre>";
print_r($cozMin);
print_r($cozIt);
print_r($cozChi);