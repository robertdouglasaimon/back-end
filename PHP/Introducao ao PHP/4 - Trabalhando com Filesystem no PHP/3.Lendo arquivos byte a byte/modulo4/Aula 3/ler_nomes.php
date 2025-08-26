<?php
// Ultilizando a biblioteca filesystem do PHP -----
// Comandos para ler arquivos:
// fopen() - Abre um arquivo para leitura
// fread() - Lê um arquivo
// fclose() - Fecha um arquivo
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

/*-----------------------------------------------*/
// Praticando:

$arquivo = fopen("nomes.txt", "r");

$nome = fread($arquivo, 1);
$nome1 = fread($arquivo, 5);
$nome2 = fread($arquivo, 5);

$nome3 = fread($arquivo, 10); // Vazando propositalmente para mostrar que o PHP conta com o ponteiro a quantidade de caracteres, inclusive a quebra de linha. Se a quantidade for maior que o que foi lido, ele vai para a próxima linha.

echo "Nomes: $nome $nome2 <br>";
echo "Nomes: ". $nome. "<br>";
echo "Nomes: ". $nome1. "<br>";
echo "Nomes: ". $nome2. "<br>";

echo "Nomes: ". $nome3. "<br>";

fclose($arquivo);



?>