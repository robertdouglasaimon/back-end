<?php
class Conta {
    // Atributos

    private int $saldo = 0;

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


    // Para ver a função privada é necessário criar um método para ela ser executada. Exemplo:
    public function verSaldo() {
        return $this -> saldo;
    }

}

$conta1 = new Conta(1000);
$conta2 = new Conta(500);


// Fazendo operações na conta:
echo 'Saldo Inicial: '. $conta2 -> verSaldo() . '<br>';
$conta2 -> depositar(100) . '<br>';
$conta2 -> sacar(500) . '<br>';

// Tentando acessar uma propriedade privada como se fosse alguém mal intencionado:
// $conta1 -> saldo = 500;

echo '<br>';
echo '<br>';


// EXERCICIO---------------------------------------
echo '<p>EXERCICIO---------------------------------<p>';
echo ' 1. Crie uma regra onde a pessoa só pode depositar valores até 100 R$, não pode depositar 101 ou mais.';

// Resolvendo o exericio:';
echo '<br>';

class contaExercicio {
    // Atributos
    private int $saldo = 0;

    // Metodos
    public function __construct(int $saldo) {
        $this -> saldo = $saldo;
    }

    public function sacar(int $valor) {
        if ($valor > $this->saldo) {
            echo 'Você não tem saldo suficiente para sacar esse valor! <br>'; 
            return;
        }
        $this->saldo -= $valor;
        echo 'Você sacou: ' . $valor . '<br>';
    }


    public function depositar(int $valor) {
        if ($valor > 100) {
            echo 'Você não pode depositar esse valor! <br>';
            return;
        }
        $this->saldo += $valor;
        echo 'Você depositou o valor de: ' . $valor . '<br>';
    }


    public function verValorSaldo() {
        return $this -> saldo;
    }
}

$contaExercicio = new ContaExercicio(0);

// echo '<br>';
// echo 'Seu saldo atual: ' . $contaExercicio -> verValorSaldo() . '<br>';

echo '<br>';

// Tentando depositar um valor maior que 100 para testar se a condição do exercício funciona:
echo 'Valor bancário atual: ' . $contaExercicio ->verValorSaldo() . '<br>';

$contaExercicio -> depositar(102);


// 2. A pessoa só pode sacar valores se ela tiver saldo na conta, caso contrário diga que ela nao tem saldo suficiente.

// Resolvendo o exericio:

// Tentando sacar um valor maior que 0 para testar se a condição do exercício funciona:
$contaExercicio -> sacar(100);

?>