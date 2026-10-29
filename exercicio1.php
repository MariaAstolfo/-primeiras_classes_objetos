<?php

class  Celular{
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $bateria;
    public bool $ligado;

    public function ligar(){
        $this->ligado=True;
        echo "<p>O celular foi ligado <br></p>";
    }
    public function desligar(){
        if ($this->ligado==True){
            $this->ligado=False;
            echo "<p>O celular foi desligado <br></p>";
        }
        }
    public function user($consumo){
        $this->bateria=$this->bateria-$consumo;
        if ($this->bateria<0){
            $this->bateria=0;
        }
        echo "<p>Bateria restante:". $this->bateria. "% <br></p>";
    }
    public function carregar($carga){
        $this->bateria=$this->bateria+$carga;
        if($this->bateria>=100){
            $this->bateria=100;
        }
        echo "<p>Carga: ". $this->bateria. "% <br></p>";
    }
    
}

$celular1= new Celular();

$celular1->marca='Xiaomi';
$celular1->modelo='Redmi note 10';
$celular1->cor='Cinza';
$celular1->bateria=100;
$celular1->ligado=True;

echo "<p> Marca do celular: ". $celular1->marca. "<br></p>";
echo "<p>Modelo do celular: ". $celular1->modelo."<br></p>";
echo "<p>Cor do celular: ". $celular1->cor."<br></p>";
echo "<p> A bateria do celular: ". $celular1->bateria. "<br></p>";
echo "<p>Status do celular: ".($celular1->ligado ? 'Ligado': 'Desligado')."<br></p>";

$celular1->ligar();
$celular1->desligar();
$celular1->user(10);
$celular1->carregar(10);

echo "<hr>";

$celular2= new Celular();

$celular2->marca='Samsung';
$celular2->modelo='A023';
$celular2->cor='Cinza';
$celular2->bateria=100;
$celular2->ligado=True;

echo "<p> Marca do celular: ". $celular2->marca. "<br></p>";
echo "<p>Modelo do celular: ". $celular2->modelo."<br></p>";
echo "<p>Cor do celular: ". $celular2->cor."<br></p>";
echo "<p> A bateria do celular: ". $celular2->bateria. "<br></p>";
echo "<p>Status do celular: ".($celular2->ligado ? 'Ligado': 'Desligado')."<br></p>";

$celular2->ligar();
$celular2->desligar();
$celular2->user(10);
$celular2->carregar(10);

