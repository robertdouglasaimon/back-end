<?php

class Animal {
    public $nome;
    public function emitirSom() {
        return null;
    }
}

class Cachorro extends Animal {
    public $nome = 'cachorro';
    public function emitirSom() {
        return 'au au au';
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
}

function fazerOAnimalEmitirSom(Animal $animal) {
    echo 'O animal '.$animal-> nome.' faz: '.$animal-> emitirSom().
    '<br><br>';
}

$cachorro = new Cachorro();
$gato = new Gato();
$peixe = new Peixe();


$animais = [$cachorro, $gato, $peixe];
foreach ($animais as $animal) {
    fazerOAnimalEmitirSom($animal);
}













?>