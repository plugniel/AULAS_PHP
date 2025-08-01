<?php
require_once('Conexao.php');

$conexao = conectarBanco();

// Pegue o ID do cliente da URL
$idCliente = $_GET['id_cliente'] ?? null;
$cliente = null;
$msgErro = '';

function buscarClientePorId($idCliente, $conexao) { 
    $stmt = $conexao->prepare("
        SELECT id_cliente, nome, endereco, telefone, email 
        FROM cliente 
        WHERE id_cliente = :id");
    $stmt->bindParam(":id", $idCliente, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Busca o cliente se o ID for válido
if ($idCliente && is_numeric($idCliente)) {
    $cliente = buscarClientePorId($idCliente, $conexao);
    if (!$cliente) {
        $msgErro = "Cliente não encontrado.";
    }
} else if (isset($_GET['id_cliente'])) {
    $msgErro = "ID inválido. Digite um número.";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function habilitarEdicao(campo) {
            document.getElementById(campo).removeAttribute("readonly");
        }
    </script>
</head>
<body>
    <h2>Atualizar Cliente</h2>

    <!-- Formulário de busca (envia para esta mesma página) -->
    <form method="get">
        <label for="id_cliente">ID do Cliente:</label>
        <input type="number" id="id_cliente" name="id_cliente" value="<?= htmlspecialchars($_GET['id_cliente'] ?? '') ?>" required>
        <button type="submit">Buscar Cliente</button>
    </form>

    <?php if ($msgErro): ?>
        <p style="color: red;"><?= htmlspecialchars($msgErro) ?></p>
    <?php endif; ?>

    <?php if ($cliente): ?>
        <hr>
        <form action="processarAtualizacao.php" method="post">
            <input type="hidden" name="id_cliente" value="<?= htmlspecialchars($cliente['id_cliente']) ?>">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" readonly onclick="habilitarEdicao('nome')">

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" value="<?= htmlspecialchars($cliente['endereco']) ?>" readonly onclick="habilitarEdicao('endereco')">

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($cliente['telefone']) ?>" readonly onclick="habilitarEdicao('telefone')">

            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" value="<?= htmlspecialchars($cliente['email']) ?>" readonly onclick="habilitarEdicao('email')">

            <button type="submit">Atualizar Cliente</button>
        </form>
    <?php endif; ?>
</body>
</html>