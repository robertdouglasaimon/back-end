<?php
// Super globais no PHP -----
// __DIR__ - Retorna o caminho do diretorio atual.
// __FILE__ - Retorna o caminho do arquivo atual.

/*-----------------------------------------------*/
/* Praticando: */

// echo __DIR__;
// echo __FILE__;

include ('./includes/include1.php');

echo '<hr>';
echo 'O retorno do include1 __DIR__ é o seguinte: ' . __DIR__;
echo '<br>';
echo 'O retorno do include1 __FILE__ é o seguinte: ' . __FILE__;
echo '<br>';
echo "O retorno de getcwd() em path é o seguinte: " . getcwd();

?>