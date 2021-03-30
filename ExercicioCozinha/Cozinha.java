package SquadraNewThinkers_1T2021.ExercicioCozinha;

import java.util.ArrayList;

public class Cozinha{
  private String tipo;
  private int numeroPratos;
  private int numeroCozinheiros;
  private int tempoPreparo;
  private int horaAbertura;
  private int horaFechamento;
  private String pratoPrincipal;
  private ArrayList<Ingrediente> ingredientes;

  public Cozinha(String tipo, int numPratos, int numCozinheiros,int tempoPreparo,
  int hAbertura, int hFechamento, String pratoPrincipal){
    this.tipo = tipo;
    this.numeroPratos = numPratos;
    this.numeroCozinheiros = numCozinheiros;
    this.tempoPreparo = tempoPreparo;
    this.horaAbertura = hAbertura;
    this.horaFechamento = hFechamento;
    this.pratoPrincipal = pratoPrincipal;
    this.ingredientes = new ArrayList<Ingrediente>();
  }
  
  public void adicionarIngrediente(Ingrediente i){
      ingredientes.add(i);
  }
  
  public void imprimirDados() {
        System.out.println("\nRestaurante Cozinha: " + tipo + "\nNúmero de Pratos: " + numeroPratos + 
        "\nNúmero de Cozinheiros: " + numeroCozinheiros + "\nTempo de Preparo: " +
        tempoPreparo + "min\nHora de Abertura: " + horaAbertura + "h\nHora de Fechamento: " +
        horaFechamento + "h\nPrato Principal: " + pratoPrincipal + "\n\n>>> Ingredientes<<<");
        for(Ingrediente i: ingredientes) {
            System.out.println(i);
        }
        System.out.println("\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=");
    }
}