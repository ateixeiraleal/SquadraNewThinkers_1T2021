package SquadraNewThinkers_1T2021.ExercicioCozinha;

public class Main {
   public static void main(String[] args){
       Cozinha cozMin = new Cozinha("Mineira", 10, 5, 30, 10 , 22, "Feijoada");
       Ingrediente ing1 = new Ingrediente("Feijão", "10/02/2022");
       Ingrediente ing2 = new Ingrediente("Focinho", "27/07/2021");
       Ingrediente ing3 = new Ingrediente("Calabreza", "25/06/2021");
       cozMin.adicionarIngrediente(ing1);
       cozMin.adicionarIngrediente(ing2);
       cozMin.adicionarIngrediente(ing3);
       
       Cozinha cozIt = new Cozinha("Italiana", 12, 6, 20, 11, 23, "Pizza");
       Ingrediente ing4 = new Ingrediente("Disco", "05/04/2022");
       Ingrediente ing5 = new Ingrediente("Mussarela", "13/01/2021");
       Ingrediente ing6 = new Ingrediente("Palmito", "25/06/2022");
       cozIt.adicionarIngrediente(ing4);
       cozIt.adicionarIngrediente(ing5);
       cozIt.adicionarIngrediente(ing6);

       Cozinha cozMex = new Cozinha("Mexicana", 15, 8, 45, 11, 24, "Guacamole");
       Ingrediente ing7 = new Ingrediente("Abacate", "01/04/2021");
       Ingrediente ing8 = new Ingrediente("Azeite", "14/12/2023");
       Ingrediente ing9 = new Ingrediente("Pimenta da reino", "11/01/2022");
       cozMex.adicionarIngrediente(ing7);
       cozMex.adicionarIngrediente(ing8);
       cozMex.adicionarIngrediente(ing9);

       cozMin.imprimirDados();
       cozIt.imprimirDados();
       cozMex.imprimirDados();
   }
}
