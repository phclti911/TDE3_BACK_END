<?php
require 'conexao.php';

$sql = "SELECT * FROM veiculos WHERE status = 'disponivel'";
$stmt = $pdo->query($sql);
$veiculos = $stmt->fetchAll();

foreach ($veiculos as $v) {
    echo "ID: {$v['id']} - Modelo: {$v['modelo']} - Placa: {$v['placa']}<br>";
}
?>
