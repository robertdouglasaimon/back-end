<?php

function meu_autoloader($classeName) {
    $diretorios = ['../classes/', './traits/'];

    foreach ($diretorios as $diretorio) {
        $diretorio = strtolower($diretorio);
        $classeName = strtolower($classeName);
        if (file_exists($diretorio . $classeName . '.class.php')) {
            include_once ($diretorio . $classeName . '.class.php');
            break;
        }
    }
}

spl_autoload_register('meu_autoloader');



$teste = new Teste();
$teste -> testar();

$usuario = new User();
$usuario -> createUser();
$usuario -> loginUser();

echo'<hr>';

$file = new File();
$file -> created();
$file -> deleted();


?>