<?php
// Ultilizando a biblioteca filesystem do PHP -----
// Comandos para ler arquivos:
// fopen() - Abre um arquivo para leitura
// fread() - Lê um arquivo
// fclose() - Fecha um arquivo
// Resources - Recursos são ponteiros para arquivos.

// Exemplo:
// Comando fopen()
// fopen("arquivo.txt", "r"); 

// Comando fread()
// $conteudo = fread($arquivo, 30);

// Comando fclose()
// fclose($arquivo);

/*-----------------------------------------------*/
// Praticando:

$arquivo = fopen("nomes.txt", "r");
if ($arquivo) {
    echo "Arquivo aberto com sucesso!";
    fclose($arquivo);
} else {
    echo "Arquivo não encontrado ou não pode ser aberto.";
}
echo '<br>';
print_r($arquivo);



?>