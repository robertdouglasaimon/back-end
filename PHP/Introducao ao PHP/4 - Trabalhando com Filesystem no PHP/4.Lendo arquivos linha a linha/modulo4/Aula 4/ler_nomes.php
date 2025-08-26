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

// filesize() - Retorna o tamanho total de um arquivo.
// fgets() - Lê uma linha de um arquivo.

$arquivo = fopen("nomes.txt", "r");

$bytes = filesize("nomes.txt");
echo "O tamanho do arquivo é: " . $bytes . "<br>";
echo "<br>";

$nome1 = fgets($arquivo);
echo $nome1;
echo "<br>";
$nome2 = fgets($arquivo);
echo $nome2;
echo "<br>";
$nome3 = fgets($arquivo);
echo $nome3;
echo "<br>";


// Exercicio proposto pelo professor:
// Fazendo um loop com o comando while onde ele lista todos os nomes do arquivo um abaixo do outro.

// Resolvendo esse exercicio fácil demais:
while($exercicio = fgets($arquivo)) {
    echo $exercicio;
    echo "<br>";
}

fclose($arquivo);
?>