package SquadraNewThinkers_1T2021.ExercicioCozinha;

public class Main {
   public static void main(String[] args){
       Cozinha cozMin = new Cozinha("Mineira", 10, 4, 30, 14 , 20, "Feijoada");
       Ingrediente ingM1 = new Ingrediente("Feijão", "10/02/2022");
       Ingrediente ingM2 = new Ingrediente("Farinha", "03/12/2021");
       Ingrediente ingM3 = new Ingrediente("Arroz", "21/07/2022");
       Ingrediente ingM4 = new Ingrediente("Carne de Porco", "27/04/2021");
       Ingrediente ingM5 = new Ingrediente("Linguiça", "25/04/2021");
       cozMin.adicionarIngrediente(ingM1);
       cozMin.adicionarIngrediente(ingM2);
       cozMin.adicionarIngrediente(ingM3);
       cozMin.adicionarIngrediente(ingM4);
       cozMin.adicionarIngrediente(ingM5);
       Funcionario funcM1 = new Funcionario("José das Couves", "Chefe");
       Funcionario funcM2 = new Funcionario("Felícia da Benevolência", "Cozinheira");
       Funcionario funcM3 = new Funcionario("Maria da Dores", "Garçonete");
       Funcionario funcM4 = new Funcionario("Celisvaldo dos Santos", "Metri");
       cozMin.adicionarFuncionarios(funcM1);
       cozMin.adicionarFuncionarios(funcM2);
       cozMin.adicionarFuncionarios(funcM3);
       cozMin.adicionarFuncionarios(funcM4);
       
       Cozinha cozIt = new Cozinha("Italiana", 12, 6, 20, 13, 22, "Pizza");
       Ingrediente ingI1 = new Ingrediente("Presunto", "05/04/2022");
       Ingrediente ingI2 = new Ingrediente("Mussarela", "13/01/2021");
       Ingrediente ingI3 = new Ingrediente("Palmito", "25/06/2022");
       cozIt.adicionarIngrediente(ingI1);
       cozIt.adicionarIngrediente(ingI2);
       cozIt.adicionarIngrediente(ingI3);
       Funcionario funcI1 = new Funcionario("Maria Bastarda Dequem", "Cozinheira");
       Funcionario funcI2 = new Funcionario("Sextavado Obtusângulo Reto", "Atendente");
       cozIt.adicionarFuncionarios(funcI1);
       cozIt.adicionarFuncionarios(funcI2);

       Cozinha cozChi = new Cozinha("Chinesa", 15, 8, 45, 13, 22, "Yakissoba");
       Ingrediente ingC1 = new Ingrediente("Champignon", "01/04/2021");
       Ingrediente ingC2 = new Ingrediente("Brócolis", "06/04/2021");
       Ingrediente ingC3 = new Ingrediente("Macarrão", "11/01/2022");
       Ingrediente ingC4 = new Ingrediente("Carne", "15/04/201");
       cozChi.adicionarIngrediente(ingC1);
       cozChi.adicionarIngrediente(ingC2);
       cozChi.adicionarIngrediente(ingC3);
       cozChi.adicionarIngrediente(ingC4);
       Funcionario funcC1 = new Funcionario("Carabino Tiro Certo", "Garçon");
       Funcionario funcC2 = new Funcionario("Ácido Acético Etílico da Silvas", "Cozinheiro");
       Funcionario funcC3 = new Funcionario("Manoel Sovaco de Gamba", "Caixa");
       cozChi.adicionarFuncionarios(funcC1);
       cozChi.adicionarFuncionarios(funcC2);
       cozChi.adicionarFuncionarios(funcC3);

       cozMin.imprimirDadosCozinha();
       cozIt.imprimirDadosCozinha();
       cozChi.imprimirDadosCozinha();
   }
}
