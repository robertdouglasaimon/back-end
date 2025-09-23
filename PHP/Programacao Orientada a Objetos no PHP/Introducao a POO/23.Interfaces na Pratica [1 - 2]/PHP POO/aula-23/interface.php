<?php
// Nosso sistema de Interface (Como eu quero que funcione):

//Eu quero:
// 1. Criar uma instância de pagamento.
// 2. O usuário escolhe o método de pagamento.
// 3. O sistema vai chamar o método de pagamento escolhido (O sistema vai chamar o método "Pagar" daquele método de pagamento).

class Paypal {
    public function pagar($valor) {
        echo 'Pagando via Paypal no valor de: ' . $valor . ' <br>';
        return true;
    }
}


// Nosso sistema tem que ser imutável, ou seja, ele não pode ser alterado!
$pagamento = new Paypal();
$pagamento -> pagar(100);

// Vamos criar uma nova classe de pagamento:
class CreditCard {
    public function pagar($valor) {
        echo 'Pagando via Cartão de Crédito no valor de: ' . $valor . ' <br>';
        return 'Sucesso';
    }
}

$pagamento = new CreditCard();
$pagamento -> pagar(100);

?>