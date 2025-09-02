<?php

// Classe no PHP ---------------------------------
// As classes são utilizadas para agrupar o código em um conjunto de métodos e propriedades.
// Nesse exemplo, criaremos uma classe para representar um carro e suas características.

// Os atributos são as propriedades da classe.
// Os métodos são as funções da classe.

class Carro {
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $ano;
}

var_dump(Carro::class); // Quando uma classe é chamada no var_dump, ela mostra informações sobre ela. Mas ela precisa ser chamada no var_dump com a palavra reservada "class" para poder ser exibida. Caso tente chamar igual uma variável normal, ele irá dar erro.

echo "</br>";
echo "</br>";

// Agora que constatamos que a classe carro ta sendo chamada corretametne como uma string, vamos instanciar (criar) em um carro e atribuir a ele as propriedades. Ele deixará de ser uma classe (Uma receita de como fazer um carro) e passará a ser um objeto (Um carro de fato):
$carro = new Carro();
$carro->marca = "Toyota";
$carro->modelo = "Corolla";
$carro->cor = "Prata";
$carro->ano = 2022;

// E assim, agora temos um carro instanciado e com suas propriedades atribuidas. Como agora ele é um objeto, ele pode ser exibido no var_dump:
var_dump($carro);

echo "</br>";
echo "</br>";

//  Beleza, temos o carro. E se eu quiser inserir "propriedades" a ele, como por exemplo um adesivo colorido? Fazemos assim:

$carro->adesivo = 'Azul';
var_dump($carro);
// e assim, temos o carro com o adesivo colorido. :)


echo "</br>";
echo "</br>";

// Beleza, criamos um carro e inserimos um adesivo. Mas se eu quiser retirar o adesivo? Fazemos assim:
unset($carro->adesivo);
var_dump($carro);

echo "</br>";
echo "</br>";

// E por fim, criamos um carro. Show! Mas e se eu quiser criar outro carro usando aquela mesma classe, é possivel? Sim, como a "receita" de um carro é uma classe e ela não é fixa para um carro, podemos usar ela para criar um ou mais carros. Fazemos assim:

$carro2 = new Carro();
$carro2->marca = "Honda";
$carro2->modelo = "Civic";
$carro2->cor = "Azul";
$carro2->ano = 2025;

var_dump($carro2);

?>