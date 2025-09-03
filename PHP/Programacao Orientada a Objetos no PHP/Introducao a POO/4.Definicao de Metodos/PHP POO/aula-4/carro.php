<?php

// Classe no PHP ---------------------------------
// As classes são utilizadas para agrupar o código em um conjunto de métodos e propriedades.
// Nesse exemplo, criaremos uma classe para representar um carro e suas características.

// Os atributos são as propriedades da classe.
// Os métodos são as funções da classe.



class Carro {

// Atributos
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $ano;

// Métodos
    public function acelerar() {
       echo 'O carro está acelerando...'; 
    }

    public function freiar() {
        echo 'O carro está freiando';
    }

}


$carro1 = new Carro();
$carro1->marca = "Toyota";
$carro1->modelo = "Corolla";
$carro1->cor = "Prata";
$carro1->ano = 2022;


$carro2 = new Carro();
$carro2->marca = "Honda";
$carro2->modelo = "Civic";
$carro2->cor = "Azul";
$carro2->ano = 2025;

// Definindo a ação dos métodos:
echo 'Carro 1: <br>';
$carro1 -> acelerar();
var_dump($carro1);

echo '<br>';
echo '<br>';

echo 'Carro 2:<br>';
$carro2 -> acelerar();
var_dump($carro2);

?>