<?php

// Classe para obter conexão PDO com MySQL
class Conexao {
    private $servidor = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "db_api";
    private $pdo = null;

    public function getConexao() {
        if ($this->pdo === null) {
            try {
                $this->pdo = new PDO(
                    "mysql:host={$this->servidor};dbname={$this->banco}",
                    $this->usuario,
                    $this->senha
                );
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }
        return $this->pdo;
    }
}

//Exemplo de uso:
// $conexao = new Conexao();
// $pdo = $conexao->getConexao();
