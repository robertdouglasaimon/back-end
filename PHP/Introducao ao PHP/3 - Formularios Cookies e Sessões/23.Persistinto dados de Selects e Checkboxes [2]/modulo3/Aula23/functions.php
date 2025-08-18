<?php
function exibirMensagem($tipo = 'erro', $mensagemPersonalizada = '') {
    if ($tipo === 'sucesso') {
        return '<div class="alert alert-success">Formulário com email enviado com sucesso!</div>';
    } else {
        if ($mensagemPersonalizada !== '') {
            return '<div class="alert alert-danger">' . $mensagemPersonalizada . '</div>';
        } else {
            return '<div class="alert alert-danger">Erro ao enviar o formulário. Tipo de dado inválido ou campo vazio.</div>';
        }
    }
}
?>


