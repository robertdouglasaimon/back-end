<?php
class Conexao {

    private string $conexao;


    public function __construct() {
        // Conectar-se ao banco de dados
        $conexao = 'Conectando ao banco de dados...';

        $this->conexao = 'Conectado ao banco de dados.';
        echo 'Conexão com o banco de dados criada com sucesso! <br>';
    }

    // Substituindo o consulta() por destruct:
    public function __destruct() {
        $this->conexao = '';
        echo 'Conexão com o banco de dados encerrada com sucesso! <br>';
    }

    public function consulta() {
        echo 'Realizada consulta no banco de dados.<br>';
    }

//     public function encerrarConexao() {
//         $this->conexao = '';
//         echo 'Conexão com o banco de dados encerrada com sucesso! <br>';
//     }
}

$conexao = new Conexao();
$conexao -> consulta();

// $conexao -> encerrarConexao(); <- Ao usar o destruct, essa linha pode ser comentada pois ela nao precisa ser executada.



// Encerrando conexão com o banco de dados com o destruct ou com o comando abaixo:
unset($conexao);
echo 'Encerrando conexão com o banco de dados... <br>';


?>