<?php
include ('functions.php');
// Nosso sistema de Interface (Como eu quero que funcione):

//Eu quero:
// 1. Criar uma instância de pagamento.
// 2. O usuário escolhe o método de pagamento.
// 3. O sistema vai chamar o método de pagamento escolhido (O sistema vai chamar o método "Pagar" daquele método de pagamento).



interface MetodoDePagamento {
    public function getName(): string;
    public function pagar(float $valor);
}


class Paypal implements MetodoDePagamento {

    public function getName(): string {
        return 'Paypal';    
    }

    public function pagar($valor): bool {
        echo '<br> Pagamento via Paypal no valor de: ' . $valor . ' <br>';
        return true;
    }
}


// Nosso sistema tem que ser imutável, ou seja, ele não pode ser alterado!
$pagamento = new Paypal();
if ($pagamento -> pagar(100) === true) {
    echo 'Pagamento aprovado! Liberando o produto... <br>';
} else {
    echo 'Falha no pagamento! <br>';
}   

// Vamos criar uma nova classe de pagamento:
class CreditCard implements MetodoDePagamento {

    public function getName(): string {
        return 'Cartão de Crédito';
    }

    public function pagar($valor) {
        echo 'Pagando via Cartão de Crédito no valor de: ' . $valor . ' <br>';
        return 'Sucesso';
    }
}

$pagamento = new CreditCard();
$pagamento -> pagar(100);

class Pix implements MetodoDePagamento {

    public function getName(): string {
        return 'Pix';
    }

    public function gerarQRCode(float $valor): string {
        echo 'Gerando QR Code para o valor de R$ ' . $valor . ' via Pix... <br>';
        return true;
    }

    public function pagar($valor) {
        $qrCode = $this -> gerarQRCode($valor);
        echo ' Pagando via Pix no valor de: ' . $valor . ' <br>';
        echo 'QR Code gerado: ' . $qrCode . ' <br>';
        return true;
    }
}

processarPagamento(new CreditCard(), 100);


?>