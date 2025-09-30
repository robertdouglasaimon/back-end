<?php

trait Logger {
    public function log($message) {
        echo '<br> [LOG]: '. $message . '<br>';
    }
}

class User {
    use Logger;

    public function createUser() { 
        echo "Usuário criado com sucesso. <br>";
    }

    public function loginUser() {
        echo "Usuário logado.";
        $this -> log('Usuário logado.');
    }
}

class File {
    use Logger;

    public function created() {
        echo 'Arquivo criado';
        $this -> log('Arquivo criado');
    }

    public function deleted() {
        echo 'Arquivo deletado';
        $this -> log('Arquivo deletado');
    }
}


$usuario = new User();
$usuario -> createUser();
$usuario -> loginUser();

echo '<hr>';

$file = new File();
$file -> created();
$file -> deleted();

?>