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
  private ArrayList<Funcionario> funcionarios;

  public Cozinha(String tipo, int numPratos, int numCozinheiros,int tempoPreparo,
  int hAbertura, int hFechamento, String pratoPrincipal){
    this.tipo = tipo;
    this.numeroPratos = numPratos;
    this.numeroCozinheiros = numCozinheiros;
    this.tempoPreparo = tempoPreparo;
    this.horaAbertura = hAbertura;
    this.horaFechamento = hFechamento;
    this.pratoPrincipal = pratoPrincipal;
    ingredientes = new ArrayList<Ingrediente>();
    funcionarios = new ArrayList<Funcionario>();
  }
  
  public void adicionarIngrediente(Ingrediente i){
    ingredientes.add(i);
  }

  public void adicionarFuncionarios(Funcionario f){
    funcionarios.add(f);
  }
  
  public void imprimirDadosCozinha() {
    System.out.println("\nRestaurante Cozinha: " + tipo + "\nNúmero de Pratos: " + numeroPratos + 
    "\nNúmero de Cozinheiros: " + numeroCozinheiros + "\nTempo de Preparo: " +
    tempoPreparo + "min\nHora de Abertura: " + horaAbertura + "h\nHora de Fechamento: " +
    horaFechamento + "h\nPrato Principal: " + pratoPrincipal);
    imprimirIngredientes();
    imprimirFuncionarios();
    System.out.println("\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=");
  }

  public void imprimirIngredientes(){
    System.out.println("\n>>> Ingredientes <<<");
    for(Ingrediente i: ingredientes) {
      System.out.println(i);
    }
  }

  public void imprimirFuncionarios(){
    System.out.println("\n>>> Funcionarios <<<");
    for(Funcionario f: funcionarios){
      System.out.println(f);
    }
  }
}