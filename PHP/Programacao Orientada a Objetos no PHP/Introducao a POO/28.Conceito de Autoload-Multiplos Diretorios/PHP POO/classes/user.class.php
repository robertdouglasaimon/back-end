<?php

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

?>