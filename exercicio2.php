<?php

class contaBancaria{
    public string $titular;
    public int $numero;
    public float $saldo;
    public string $tipo;

    public function depositar($valor){
        $this->saldo+=$valor;
        echo "<p> Saldo da conta: R$ ". number_format($this->saldo, 2, ',', "."). "<br></p>";
    }
    public function sacar($valor){
        if ($valor>$this->saldo){
            echo "<p>Não é possível sacar este valor!<br></p>";
        }
        else{
            $valor-=$this->saldo;
            echo "<p>Saque realizado!</p>";
        }
    }
    public function consultarSaldo(){
        echo "<p>O saldo atual é: R$". number_format($this->saldo, 2, ",", "."). "<br></p>";
    }
}

$pessoa1= new contaBancaria();

$pessoa1->titular='Mateus';
$pessoa1->numero='123';
$pessoa1->saldo='2000';
$pessoa1->tipo= 'poupança';

echo "<p>Titular ". $pessoa1->titular. "<br></p>";
echo "<p>Numero da conta: ". $pessoa1->numero. "<br></p>";
echo "<p>Saldo: R$". number_format($pessoa1->saldo, 2, ',', '.'). "<br></p>";
echo "<p>Tipo da conta: ". $pessoa1->tipo. "<br></p>";

$pessoa1->depositar(20);
$pessoa1->sacar(10);
$pessoa1->consultarSaldo();

echo "<hr>";

$pessoa2= new contaBancaria();

$pessoa2->titular='Dudinha';
$pessoa2->numero='123';
$pessoa2->saldo='2000';
$pessoa2->tipo= 'poupança';

echo "<p>Titular ". $pessoa2->titular. "<br></p>";
echo "<p>Numero da conta: ". $pessoa2->numero. "<br></p>";
echo "<p>Saldo: R$". number_format($pessoa2->saldo, 2, ',', '.'). "<br></p>";
echo "<p>Tipo da conta: ". $pessoa2->tipo. "<br></p>";

$pessoa2->depositar(20);
$pessoa2->sacar(10);
$pessoa2->consultarSaldo();


