<?php
// THIS - Se refere a instância da classe (Objeto).
// SELF - Se refere a classe em si (Calculadora).


class Calculadora {
    // Definir uma constante para PI:
    public const PI = 3.14;
    public const VERSION = '1.0.0';

// Constantes não podem ser usadas com 'this -> ' elas sempre serão usadas com 'self::'.

// --------------------------------------------------------------------------------------------------------------//
    // Métodos estáticos:
    public static function areaCirculo(float $raio) {
       // Formula da area de um circulo: 
       // Área = PI (3.14) * raio * raio:
        return self::PI * $raio * $raio;
    }
}

$calc = new Calculadora();


// Explicando o código abaixo:
$area =  $calc -> areaCirculo(10);
echo $area;
// Explicando o código: A váriavel $area recebe o retorno (Resultado, que no caso é o 10) da função areaCirculo.


echo '<br>';
echo '<br>';

// Agora vamos criar um novo objeto que não depende de escopo, que não dependa de dados da classe (E não depende do objeto). Uma função estatica seria assim:
$area1 = Calculadora::areaCirculo(15);
echo $area1;

$area = Calculadora::VERSION;
echo '<br>';
echo '<br>';
echo 'A calculadora está na versão: ' . $area;


?>