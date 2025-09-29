<?php
// O que são: Getters e Setters no PHP

// Getters (GET = Pegar/Ler)
// São funções que retornam o valor de uma propriedade privada

// Setters (SET = Escrita/Definir)
// São funções que alteram o valor de uma propriedade privada.

/*-----------------------------------------------*/

class Produto {
    private string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco) {
        $this -> nome = $nome;
        $this -> preco = $preco;
    }

    // Getters
    public function getNome(): string {
        return $this -> nome;
    }

    public function getPreco(): float {
        return $this -> preco;
    }


    // Setters
    public function setNome(string $nome) {
        $this -> nome = $nome;
    }

    public function setPreco(float $preco) {
        $this -> preco = $preco;
    }
}

$produto1 = new Produto('Cadeira', 500.00);


echo 'O produto é uma ' .$produto1 -> getNome(). ' e o valor dela é de '. $produto1 -> getPreco().' R$.';

// Fazendo isso nós criamos uma camada de segurança para o valor da propriedade privada, uma especie de capsula que protege essa informação. Nós "encapsulamos" essa informação em um getter e um setter. Qual é a vantagem disso?


?>