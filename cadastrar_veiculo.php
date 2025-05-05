<?php
require 'conexao.php';

$modelo = $_POST['modelo'];
$placa = $_POST['placa'];

$sql = "INSERT INTO veiculos (modelo, placa) VALUES (:modelo, :placa)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['modelo' => $modelo, 'placa' => $placa]);

echo "Veículo cadastrado com sucesso!";
?>
