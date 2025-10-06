<?php
// Conceito de herança no PHP
// Herança significa que uma classe herda os atributos e métodos de outra classe. No exemplo abaixo, criaremos uma classe Carro e uma classe Moto. A classe Moto herda os atributos e métodos da classe Carro. As classes Carro e Moto podem ser usadas independentemente, mas elas herdam os atributos e métodos da classe Veiculo.


class Veiculo {
    public $marca;
    public $modelo;

    function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function mover() {
        echo 'O veículo está se movendo... <br>';
    }

    public function freiar() {
        echo 'O veículo está freiando... <br>';
    }

}

// A função "extends" significa que a classe Carro herda os atributos e métodos da classe Veiculo. As classes Carro e Moto podem ser usadas independentemente, mas elas herdam os atributos e métodos da classe Veiculo.

class Carro extends Veiculo {

    public $qntdPortas;

    function __construct($marca, $modelo, $qntdPortas) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->qntdPortas = $qntdPortas;
    }

    public function abrirPortas() {
        echo 'O carro está abrindo as portas... <br>'.
        $this->qntdPortas. ' portas abertas <br>';
    }
        
}
echo 'Carro: <br>';
$carro = new Carro('Toyota', 'Corolla', 4);
$carro->mover();
$carro->freiar();
$carro->abrirPortas();  

echo '<hr>';

class Moto extends Veiculo {
    public $guidaoMoto;

    function __construct($marca, $modelo, $guidaoMoto) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->guidaoMoto = $guidaoMoto; 
    }

    public function guidaoMoto() {
        $this->guidaoMoto = 'guidão de harley';

        echo 'Essa moto possui um guidão '.$this->guidaoMoto. ' e está pronta para rodar.. <br>';   

    }


    public function empinar() {
        echo 'A moto está empinando... <br>';
    }

}
echo 'Moto: <br>';
$moto = new Moto('Honda', 'CBR', 'Guidão de harley');
$moto->guidaoMoto();
$moto->mover();
$moto->empinar();
$moto->freiar();

echo '<hr>';
echo '<br>';


// Exericio: Criar uma classe PAI chamada "Animal" e extender ela para as demais classes de animais. Nesse caso, usaremos só dois tipos de categoria que são os Mamíferos e as Aves. Cada uma dessas classes terá seus atributos e métodos.

echo 'Exercicio: <br>';
echo '<br>';
echo 'Os animais Mamíferos: ';
class Animal {
    public $respira;
    public $alimenta;
    public $locomove;


    function __construct($respira, $locomove, $alimenta) {
        $this -> respira = $respira;
        $this -> alimenta = $alimenta;        
        $this -> locomove = $locomove;
    }

    public function respirar() {
        echo 'O animal respira... <br>';
    } 

    public function alimentar() {
        echo 'O animal se alimenta... <br>';
    }

    public function locomover() {
        echo 'O animal já crescido, se locomove a procura de um novo lar e comida para seguir seu caminho. <br>';
    }
}

echo '<br>';
echo '<br>';

class Mamifero extends Animal {
    public $amamenta;
    public $pelos;
    public $diafragma;

    function __construct($respira, $alimenta, $amamenta, $pelos, $diafragma, $locomove) {
        $this -> respira = $respira;
        $this -> alimenta = $alimenta;
        $this -> amamenta = $amamenta;
        $this -> pelos = $pelos;
        $this -> diafragma = $diafragma;
        $this -> locomove = $locomove;         
    }

    private function amamentarCachorro() {
        $this -> amamenta = true;
        echo 'O filhotinho de cachorro nasce e a mãe amamenta os seus filhotes... <br>';
    }

    private function amamentarGatos() {
        $this -> amamenta = true;
        echo 'O filhotinho de gato nasce e a mãe amamenta os seus filhotes... <br>';
    }

    public function amamentarPublicamenteCaes() {
        $this -> amamentarCachorro();
    }

    public function amamentarPublicamenteGatos() {
        $this -> amamentarGatos();
    }

    private function pelos() {
        $this -> pelos = true;
        echo 'Após crescer, a maioria desenvolve pelos.<br>';
    }

    public function pelosMamifero() {
        $this -> pelos();
    }

    private function diafragma() {
        $this -> diafragma = true;
        echo 'E com o de decorrer da vida, eles que possuem um diafragma para melhorar sua capacidade de correr, melhoram a respiração e desenvolvem sua capacidade de caçar na natureza. <br>';
    }

    public function mamiferoDiafragma() {
        $this -> diafragma();
    }

    private function garras() {
        echo 'Os felinos possuem garras que podem ou não ser retrateis... <br>';
    }

    public function garrasMamifero() {
        $this -> garras();
    }

}

$cachorro = new Mamifero('respirar', 'alimenta', 'amamentar', 'pelos', 'diafragma','locomove');
$cachorro ->respirar();
$cachorro -> amamentarPublicamenteCaes();
$cachorro ->alimentar();
$cachorro -> pelosMamifero();
$cachorro -> mamiferoDiafragma();
$cachorro -> locomover();


echo '<br>';
echo '<br>';

$gato = new Mamifero('respirar', 'alimenta', 'amamentar', 'pelos', 'diafragma','locomove');
$gato ->respirar();
$gato -> amamentarPublicamenteGatos();
$gato ->alimentar();
$gato -> pelosMamifero();
$gato -> garrasMamifero();
$gato -> mamiferoDiafragma();
$gato -> locomover();



echo '<hr>';

echo 'Os animais Voadores: <br>';
echo '<br>';
class Aves extends Animal {
    public $voar;
    public $garra;
    public $bico;
    public $penas;
    public $alimenta;
    public $locomove;

    function __construct($respira, $bico, $penas, $alimenta, $voar, $garra, $locomove) {
        $this -> respira = $respira;
        $this -> bico = $bico;
        $this -> penas = $penas;
        $this -> voar = $voar;
        $this -> garra = $garra;
        $this -> alimenta = $alimenta;
        $this -> locomove = $locomove;
    }


    private function bico() {
        echo 'O animal possui um bico... <br>';
    }

    public function bicoPublicamente() {
        $this -> bico();
    }

    private function garras() {
        echo 'O animal possui garras... <br>';
    }

    public function garrasAves() {
        $this -> garras();
    }

    private function penas() {
        echo 'O animal possui penas... <br>';
    }

    public function penasAves() {
        $this -> penas();
    }

    private function voar() {
        echo 'O animal voa... <br>';
    }

    public function voarPublicamente() {
        $this -> voar();
    }

    public function alimentar() {
        echo 'O animal se alimenta... <br>';
    }

    public function locomover() {
        echo 'O animal ja crescido, se locomove a procura de um novo lar e comida para seguir seu caminho. <br>';
    }

}

$passaro = new Aves('respirar', 'bica', 'alimenta', 'voar', 'agarra', 'locomove', 'penas');
$passaro -> respirar();
$passaro -> alimentar();
$passaro -> bicoPublicamente();
$passaro -> garrasAves();
$passaro -> penasAves();
$passaro -> voarPublicamente();
$passaro -> locomover();

?>