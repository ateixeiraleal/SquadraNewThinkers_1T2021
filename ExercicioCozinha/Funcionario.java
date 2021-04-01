package SquadraNewThinkers_1T2021.ExercicioCozinha;

public class Funcionario {
    private String nome;
    private String atividade;

    public Funcionario(String nome, String atividade) {
        this.nome = nome;
        this.atividade = atividade;
    }

    public String getNome(){
        return nome;
    }

    public String getAtividade(){
        return atividade;
    }

    public String toString() {
        return "\nNome: " + getNome() + "\nAtividade: " + getAtividade();
    }
}