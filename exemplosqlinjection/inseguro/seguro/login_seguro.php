<?php
$stmt = $conexao->prepare("SELECT * FROM cliente_testa WHERE nome = ?");
$stmt->bind_param("s", $nome);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Usuário encontrado
    header("Location: area_restrita.php");
    exit();
} else {
    echo "Usuário não encontrado.";
}
$stmt->close();
$conexao->close();
?>
