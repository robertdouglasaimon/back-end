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


// Método construtor
// Nesse metodo ao invés de usar o construtor, podemos usar o __construct e passar os parâmetros da mesma forma que fizemos com o construtor. Esse construtor vai ser executado sempre que um objeto da classe for criado. Isso agiliza o trabalho do desenvolvedor. Exemplo:
    public function __construct(string $marca, string $modelo, string $cor, int $ano) {

        $this-> marca = $marca;
        $this-> modelo = $modelo;
        $this-> cor = $cor;
        $this-> ano = $ano;

        echo 'Construindo o Carro: '. $this -> modelo. '... <br>';
    }


// Métodos
    public function acelerar() {
       echo 'O carro está acelerando...'; 
    }

    public function freiar() {
        echo 'O carro está freiando';
    }


}


$carro1 = new Carro('Toyota', 'Corolla', 'Prata', 2022);

$carro2 = new Carro('Ford', 'Mustang', 'Vermelho', 2021);

echo '<br>';
var_dump($carro1);


?>