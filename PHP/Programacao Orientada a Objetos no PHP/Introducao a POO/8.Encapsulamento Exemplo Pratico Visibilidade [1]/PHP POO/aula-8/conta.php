<?php
class Conta {
    // Atributos

    public int $saldo = 0;

    // Metodos
    public function __construct(int $saldo) {
        $this -> saldo = $saldo;
    }

    public function sacar(int $valor) {
        echo 'Você sacou: ' . $valor. '<br>';
         $this -> saldo -= $valor;
    }

    public function depositar(int $valor) {
        echo 'Você depositou o valor de: ' . $valor . '<br>';   
        $this -> saldo += $valor;
    }
}

$conta1 = new Conta(1000);
$conta2 = new Conta(500);


// Fazendo operações na conta:
echo 'Saldo Inicial: '. $conta2 -> saldo . '<br>';
$conta2 -> depositar(100) . '<br>';

echo 'Saldo Atual: '. $conta2 -> saldo . '<br>';



?>