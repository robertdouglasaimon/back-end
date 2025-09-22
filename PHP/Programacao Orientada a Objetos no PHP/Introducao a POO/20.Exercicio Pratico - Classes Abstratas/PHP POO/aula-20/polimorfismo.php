<?php

abstract class Animal {
    public $nome;
    abstract public function emitirSom();
}

class Cachorro extends Animal {
    public $nome = 'cachorro';
    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function emitirSom() {
        return 'Au Au Au';
    }
}

class Gato extends Animal {
    public $nome = 'gato';
    public function emitirSom() {
        return 'miau miau';
    }
}

class Peixe extends Animal {
    public $nome = 'peixe';

    public function emitirSom() {
        return null;
    }
}

function fazerOAnimalEmitirSom(Animal $animal) {
    echo 'O animal '.$animal-> nome.' faz: '.$animal-> emitirSom().
    '<br><br>';
}

// $cachorro = new Cachorro();
// $gato = new Gato();
// $peixe = new Peixe();

// Mostrando que o metodo abstrato impede que sejam criados objetos da classe Animal:
// $animal = new Animal();

// $animais = [$cachorro, $gato, $peixe];
// foreach ($animais as $animal) {
//     fazerOAnimalEmitirSom($animal);
// }


class FilaBrasileiro extends Cachorro {
    // public $nome = 'fila brasileiro';
    public $meses = 7;

    public function __construct($nome) {
        parent::__construct($nome);
    }

    public function emitirSom() {       
        if($this->meses > 6) {                
            return 'Ruff Ruff';
        } else {
            return parent::emitirSom();
        }
    }
}

$fila = new FilaBrasileiro('Rex - O Fila Brasileiro');
fazerOAnimalEmitirSom($fila);

?>