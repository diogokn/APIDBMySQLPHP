<?php

require_once("conexao.php");

$con = new Conexao();
$link = $con->getConexao();

// Buscar e exibir todos os dados da tabela cliente
$stmt = $link->prepare("SELECT * FROM cliente");
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($data);
echo '</pre>';
