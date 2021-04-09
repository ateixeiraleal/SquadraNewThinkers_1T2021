<?php
require 'Business/CozinhaBO.php';
require 'Business/FuncionarioBO.php';
require 'Business/IngredienteBO.php';

try {
    $cozinhaBO = new CozinhaBO();
    $ingredienteBO = new IngredienteBO();
    $funcionarioBO = new FuncionarioBO();

    $cozMin = $cozinhaBO->criar(
        "Mineira",
        10,
        4,
        30,
        14 ,
        20,
        "Feijoada"
    );

    // Ingredientes da cozinha Mineira.
    $ingredienteBO->inserir($cozMin, $ingredienteBO->cadastrar("Feijão", new DateTime("2022-02-10")));
    $ingredienteBO->inserir($cozMin, $ingredienteBO->cadastrar("Farinha", new DateTime("2021-12-03")));
    $ingredienteBO->inserir($cozMin, $ingredienteBO->cadastrar("Arroz", new DateTime("2022-07-21")));
    $ingredienteBO->inserir($cozMin, $ingredienteBO->cadastrar("Carne de Porco", new DateTime("2021-04-09")));
    $ingredienteBO->inserir($cozMin, $ingredienteBO->cadastrar("Linguiça", new DateTime("2021-04-25")));

    // Funcionários da cozinha Mineira.
    $cozinhaBO->contratar($cozMin, $funcionarioBO->cadastrar("José das Couves", "Chefe", 6));
    $cozinhaBO->contratar($cozMin, $funcionarioBO->cadastrar("Felícia da Benevolência", "Cozinheira",2));
    $cozinhaBO->contratar($cozMin, $funcionarioBO->cadastrar("Maria da Dores", "Garçonete",3));
    $cozinhaBO->contratar($cozMin, $funcionarioBO->cadastrar("Celisvaldo dos Santos", "Metri",5));

    $cozIt = $cozinhaBO->criar(
        "Italiana",
        12,
        6,
        20,
        13,
        22,
        "Pizza"
    );

    // Ingredientes da cozinha Italiana.
    $ingredienteBO->inserir($cozIt, $ingredienteBO->cadastrar("Presunto", new DateTime("2021-06-17")));
    $ingredienteBO->inserir($cozIt, $ingredienteBO->cadastrar("Mussarela", new DateTime("2021-04-09")));
    $ingredienteBO->inserir($cozIt, $ingredienteBO->cadastrar("Palmito", new DateTime("2022-06-25")));

    // Funcionários da cozinha Italiana.
    $cozinhaBO->contratar($cozIt, $funcionarioBO->cadastrar("Maria Bastarda Dequem", "Cozinheira",2));
    $cozinhaBO->contratar($cozIt, $funcionarioBO->cadastrar("Sextavado Obtusângulo Reto", "Atendente",2));

    $cozChi = $cozinhaBO->criar(
        "Chinesa",
        15,
        8,
        45,
        13,
        22,
        "Chinesa"
    );

    // Ingredientes da cozinha Chinesa.
    $ingredienteBO->inserir($cozChi, $ingredienteBO->cadastrar("Champignon", new DateTime("2021-04-10")));
    $ingredienteBO->inserir($cozChi, $ingredienteBO->cadastrar("Brócolis", new DateTime("2021-04-11")));
    $ingredienteBO->inserir($cozChi, $ingredienteBO->cadastrar("Macarrão", new DateTime("2022-01-11")));
    $ingredienteBO->inserir($cozChi, $ingredienteBO->cadastrar("Carne", new DateTime("2021-05-13")));

    // Funcionários da cozinha Chinesa.
    $cozinhaBO->contratar($cozChi, $funcionarioBO->cadastrar("Carabino Tiro Certo", "Garçon",3));
    $cozinhaBO->contratar($cozChi, $funcionarioBO->cadastrar("Ácido Acético Etílico da Silvas", "Cozinheiro",4));
    $cozinhaBO->contratar($cozChi, $funcionarioBO->cadastrar("Manoel Sovaco de Gamba", "Caixa",3));

    echo "<pre>";
    print_r($cozMin);
    print_r($cozIt);
    print_r($cozChi);

} catch(Exception $n){
    echo $n->getMessage();
}

/*
    // Imprimindo os funcionários de uma determinada cozinha.
    echo "<h3>Cozinha Mineira - Funcionarios</h3><br>";
    $funcionarios = $cozMin->getFuncionarios();
    foreach ($funcionarios as $func){
        echo $func->getNome() ."<br>";
    }
*/