<?php
require 'conexao.php';

$id = $_POST['id'];

$sql = "UPDATE veiculos SET status = 'disponivel' WHERE id = :id AND status = 'alugado'";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

if ($stmt->rowCount()) {
    echo "Veículo devolvido com sucesso!";
} else {
    echo "Erro ao devolver. Verifique o ID.";
}
?>
