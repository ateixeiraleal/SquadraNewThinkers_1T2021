package SquadraNewThinkers_1T2021.ExercicioCozinha;

//import java.util.Date;

public class Ingrediente {
   private String nome;
   private String validade;

   public Ingrediente(String nome, String validade){
       this.nome = nome;
       this.validade = validade;
   }

   public String getNome(){
       return nome;
   }

   public String getValidade(){
       return validade;
   }

    public String toString() {
        return "\nNome: " + getNome() + "\nData de Validade: " + getValidade();
    }
}
