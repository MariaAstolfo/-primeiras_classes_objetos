<?php

class pedido{
    public int $numero;
    public string $cliente;
    public float $valor;
    public string $status; 

    public function __construct($numero, $cliente, $valor, $status){
        $this->numero=$numero;
        $this->cliente=$cliente;
        $this->valor=$valor;
        $this->status=$status;
    }

    public function adicionarItem($valor){
        $this->valor+=$valor;
        
    }

    public function cancelar(){
        $this->status='Cancelado';
    }
    public function finalizar(){
        $this->status='Finalizado';
    }
    public function exibirResumo(){
        echo "Nome do cliente: ".$this->cliente."<br>";
        echo "Número do pedido: ".$this->numero."<br>";
        echo "Valor total dos pedidos:R$ ". number_format($this->valor, 2, ',', "."). "<br>";
        echo "Status do pedido: ".$this->status."<br>";
    }
}

echo "<h2> Pedido 1</h2>";
$pedido1= new pedido(10, 'maria', 20, 'aguardando');
echo "Pedido 1 - Estado inicial <br>";
$pedido1->exibirResumo();
echo "<br>";
$pedido1->adicionarItem(20);
echo "Pedido 1 - Adicionando item <br>";
$pedido1->exibirResumo();
echo "<br>";
$pedido1->finalizar();
echo "Pedido 1 - Após finalizar <br>";
$pedido1->exibirResumo();


echo "<h2> Pedido 2</h2>";
$pedido2= new pedido(10, 'maria', 20, 'aguardando');
echo "Pedido 2 - Estado inicial <br>";
$pedido2->exibirResumo();
echo "<br>";
$pedido2->adicionarItem(50);
echo "Pedido 2 -Adicionando item <br>";
$pedido2->exibirResumo();
echo "<br>";
$pedido2->finalizar();
echo "Pedido 2 - Após finalizar <br>";
$pedido2->exibirResumo();
echo "<br>";
