<?php

class Aula{
    public string $disciplina;
    public string $professor;
    public float $duracao;
    public int $numeroSala;
    public int $bloco;

    public function exibirInformacao(){
        echo "<p>Disciplina: ". $this->disciplina."</p>";
        echo "<p>Professor: ". $this->professor."</p>";
        echo "<p>Duração: ". $this->duracao."hora</p>";
        echo "<p>Numero da sala: ". $this->numeroSala. "</p>";
        echo "<p>Bloco: ". $this->bloco. "</p>";
    }
    public function trocarProfessor($novoProfessor){
        $this->professor=$novoProfessor;
        echo "<p>Novo professor: ". $this->professor."</p>";
    }
    public function alterarLocal($n_sala, $bloco){
        $this->numeroSala=$n_sala;
        $this->bloco=$bloco;
        echo "<p>O novo número da sala é: ". $this->numeroSala. "e o novo bloco é: ". $this->bloco."</p>";
    }
}

$aula1= new Aula();

$aula1->disciplina='Biologia';
$aula1->professor='Pido';
$aula1->duracao=1;
$aula1->numeroSala=2;
$aula1->bloco=1;

echo "<p>Disciplina: ".$aula1->disciplina."</p>";
echo "Professor: ". $aula1->professor."</p>";
echo "Duração: ".$aula1->duracao."</p>";
echo "Numero da sala: ". $aula1->numeroSala."</p>";
echo "Bloco: ". $aula1->bloco."</p>";