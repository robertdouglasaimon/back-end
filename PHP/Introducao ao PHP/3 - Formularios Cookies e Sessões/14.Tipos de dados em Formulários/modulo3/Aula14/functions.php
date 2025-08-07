<?php
function exibirMensagem($tipo = 'erro') {
    if ($tipo === 'sucesso') {
        return '<div class="alert alert-success">Formulário enviado com sucesso!</div>';
    } else {
        return '<div class="alert alert-danger">Erro ao enviar o formulário.</div>';
    }
}
?>

