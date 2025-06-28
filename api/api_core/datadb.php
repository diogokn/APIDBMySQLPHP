<?php

require_once(__DIR__ . '/db/conexao.php');

$con = new Conexao();
$link = $con->getConexao();

// Buscar e exibir todos os dados da tabela cliente
$stmt = $link->prepare("SELECT * FROM cliente");
$stmt->execute();

return $stmt->fetchAll(PDO::FETCH_ASSOC);
