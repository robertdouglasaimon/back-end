<?php

function processarPagamento(MetodoDePagamento $formaDePagamento, float $valorPagamento) {
    echo 'Processando pagamento via ' .$formaDePagamento->getName(). ' com valor de R$ ' . $valorPagamento;
    if ($formaDePagamento -> pagar($valorPagamento)) {
        echo '<br> Pagamento realizado com sucesso!';
    } else {
        echo "Falha ao processar o pagamento.";
    }

}


?>