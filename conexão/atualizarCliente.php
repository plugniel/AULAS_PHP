<?php
    require_once('conexao.php');

    $conexao = conectarBanco();

    // Obtendo ID via GET
    $idCliente = $_GET['id_cliente'] ?? null;
    $cliente = null;
    $msgErro = '';

    // Função local para buscar cliente por ID
function buscarClientePorid($idCliente, $conexao) { 
    $stmt = $conexao->prepare ("
        SELECT id_cliente, nome, endereco, telefone, email
        FROM cliente
        WHERE id_cliente = :id
    ");
    $stmt->bindParam(":id", $idCliente, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}

// Se um ID for enviado, busca o cliente no banco
if ($idCliente && is_numeric($idCliente)) {
    $cliente = buscarClientePorid($idCliente, $conexao);

    if (!$cliente) {
        $msgErro = "Cliente não encontrado.";
    }    
} else {
    $msgErro = "Digite o ID do cliente para buscar os dados.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
    <link rel="stylesheet" href="style.css">
    <script> 
        function habilitarEdicao(campo){
            document.getElementById(campo).removeAttribute("readonly");
        }
    </script>
</head>
<body>
    <h2> Atualizar Cliente </h2>

    <!-- Se houver erro, exibe a mensagem e o campo de busca -->
     <?php if ($msgErro): ?>
        <p style="color:red;"><?= htmlspecialchars($msgErro)?></p>
    <form action="atualizarCliente.php" method="get">
        <label for="id"> ID do Cliente:</label>
        <input type="number" id="id" name="id" required>
        <button type="submit">Buscar Cliente</button>
    </form>    
    <?php else: ?>

     <!-- Se o cliente for encontrado, exibe o formulário preenchido --> 
    <form action="processarAtualizacao.php" method="post">
        <input type="hidden" name="id_cliente" value="<?= htmlspecialchars($cliente['id_cliente']) ?>">

        <label for="nome"> Nome: </label>
        <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" readonly onclick="habilitarEdicao('nome')">

        <label for="endereco">Endereço: </label>
        <input type="text" id="endereco" name="endereco" value="<?= htmlspecialchars($cliente['endereco']) ?>" readonly onclick="habilitarEdicao('endereco')">

        <label for="telefone">Telefone: </label>
        <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($cliente['telefone']) ?>" readonly onclick="habilitarEdicao('telefone')">

        <label for="email">E-mail: </label>
        <input type="text" id="email" name="email" value="<?= htmlspecialchars($cliente['email']) ?>" readonly onclick="habilitarEdicao('email')">
        
        <button type="submit"> Atualizar Cliente</button>
    </form>  
    <?php endif; ?>
</body>