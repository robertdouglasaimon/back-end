<?php
    abstract class Forma {
       abstract public function calcularArea();
    }

    class Quadrado extends Forma {
        private $lado;

        public function __construct($lado) {
            $this -> lado = $lado;
        }

        public function calcularArea() {
            return $this -> lado * $this -> lado;
        }
    };

    class Retangulo extends Forma {
        private $base;
        private $altura;

        public function __construct($base, $altura) {
            $this->base = $base;
            $this->altura = $altura;
        }

        public function calcularArea() {
            return $this->base * $this->altura;
        }

        public function baseRetangulo() {
            return $this->base; // Getter para base
        }

        public function setBase($base) {
            $this->base = $base; // Setter para base
        }

        public function alturaRetangulo() {
            return $this -> altura;
        }

        public function setAltura($altura) {
            return $this -> altura = $altura;
        }
    }


    class Triangulo extends Forma {
        private $base;
        private $altura;

        public function __construct($base, $altura){
            $this -> base = $base;
            $this -> altura = $altura;
        }

        public function baseTriangulo() {
            return $this->base; // Getter para base
        }

        public function setTriangulo($base) {
            return $this -> base = $base;
        }

        public function alturaTriangulo() {
            return $this -> altura;
        }

        public function setAltura($altura) {
            return $this -> altura = $altura;
        }

        public function calcularArea() {
            return ($this -> base * $this -> altura) / 2;
        }
    };

echo 'Valores do Quadrado <br>';
$quadrado = new Quadrado(10);
echo 'Esse e o valor dos lados de um quadrado: '. $quadrado->calcularArea();

echo '<br>';
echo '<br>';

echo 'Valores do Retângulo <br>';
$retangulo = new Retangulo(30, 50);
echo 'A base do retangulo é '. $retangulo -> baseRetangulo().' e a altura é '. $retangulo -> alturaRetangulo(). '<br>';
echo 'O valor total desse retangulo é de: '. $retangulo -> calcularArea(); 

echo '<br>';
echo '<br>';

echo 'Valores do Triângulo <br>';
$triangulo = new Triangulo(60, 20);
echo 'A base do triangulo é '. $triangulo -> baseTriangulo(). ' e a altura é '. $triangulo -> alturaTriangulo(). '<br>';
echo 'O valor total desse triangulo é de: '. $triangulo -> calcularArea();



?>