<?php
require 'conexao.php';

$id = $_POST['id'];

$sql = "UPDATE veiculos SET status = 'alugado' WHERE id = :id AND status = 'disponivel'";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

if ($stmt->rowCount()) {
    echo "Veículo alugado com sucesso!";
} else {
    echo "Veículo indisponível ou ID inválido.";
}
?>
