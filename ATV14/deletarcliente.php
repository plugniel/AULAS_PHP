<!-- Feito por Isaac Souza --> <!-- Feito por Isaac Souza --> <!-- Feito por Isaac Souza -->
<?php
session_start();
require_once "conexao1.php";

$conexao = conectadb();
$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_cliente = $_POST['id_cliente'];

    $stmt = $conexao->prepare("DELETE FROM cliente WHERE id_cliente = ?");
    $stmt->bind_param("i", $id_cliente);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            $mensagem = "<div class='alert alert-success'>Cliente deletado com sucesso!</div>";
        } else {
            $mensagem = "<div class='alert alert-warning'>Cliente com ID $id_cliente não encontrado.</div>";
        }
    } else {
        $mensagem = "<div class='alert alert-danger'>Erro: " . $stmt->error . "</div>";
    }
    $stmt->close();
}
$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Deletar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Sistema PHP - Gabriel bartholdy</a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.php"> Início</a>    
                <a class="nav-link" href="adionar.php"> Novo Cliente</a>
                <a class="nav-link" href="ListarClientes.php"> Listar Clientes</a>
                <a class="nav-link" href="deletarcliente.php"> Excluir Cliente</a>
                <a class="nav-link" href="atualizarCliente.php"> Listar Cliente</a>
            </div>
        </div>
    </nav>

<div class="container mt-5">
    <h2 class="text-center">Deletar Cliente</h2>
    <p class="text-center text-muted">Digite o ID do cliente para remover do sistema.</p>

    <?= $mensagem ?>

    <form method="POST" class="mt-4">
        <div class="mb-3">
            <label for="id_cliente" class="form-label">ID do Cliente:</label>
            <input type="number" name="id_cliente" class="form-control" id="id_cliente" placeholder="Ex: 1" required>
        </div>
        <button type="submit" class="btn btn-danger">Deletar Cliente</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>