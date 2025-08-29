<?php
// Ultilizando a biblioteca filesystem do PHP -----
// Comandos para ler arquivos:
// fopen() - Abre um arquivo para leitura
// fread() - Lê um arquivo
// fclose() - Fecha um arquivo
// feof() - Verifica se um arquivo chegou ao fim
// fwrite() - Escreve em um arquivo
// Resources - Recursos são ponteiros para arquivos.

// Exemplo:
// Comando fopen()
// Chama um arquivo para leitura e retorna um recurso, por isso precisa ser armazenado em uma variável e é escrito:
// fopen("arquivo.txt", "r"); 

// Comando fread()
// Lê um arquivo e retorna o conteúdo. Ao lado da váriavel temos a quantidade de bytes. Por isso precisa ser armazenado em uma variável e é escrito:
// $conteudo = fread($arquivo, 30);

// Comando fclose()
// Fecha um arquivo aberto.
// fclose($arquivo);

// Comando feof()
// Verifica se um arquivo chegou ao fim.
// feof($arquivo);

/*-----------------------------------------------*/
// Praticando:

// filesize() - Retorna o tamanho total de um arquivo.

// fgets() - Lê uma linha de um arquivo.

// eof() - Verifica se um arquivo chegou ao fim.

// r - Abre o arquivo para leitura/posiciona o cursor no inicio/gera um erro se o arquivo nao existir.

// r+ - Abre o arquivo para leitura e escrita/posiciona o cursor no inicio/gera um erro se o arquivo nao existir.

// w - Cria o arquivo se ele nao existir/Apaga o conteudo do arquivo antigo.

// w+ - Cria o arquivo se ele nao existir/Apaga o conteudo do arquivo antigo/posiciona o cursor no inicio.

// a - Adicionar/Cria o arquivo se ele nao existir/ posiciona o cursor no final do arquivo.

// c - Abre o arquivo para leitura /posiciona o cursor no inicio/gera um erro se o arquivo ja existir.

// x - Cria o arquivo se ele nao existir/gera um erro se o arquivo ja existir.

// realpath() - Retorna o caminho real de um arquivo.

$relativePath = "dados/nomes.txt";
$absolutePath = realpath($relativePath);

if (file_exists($absolutePath)) {
    echo "O arquivo existe: $absolutePath";
}
?>