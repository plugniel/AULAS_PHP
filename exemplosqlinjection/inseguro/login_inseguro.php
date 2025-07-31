<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomeBanco = "empresatxt";

$conexao = new mysqli($servidor, $usuario, $senha, $nomeBanco);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

$nome = $_POST['nome'];

$sql = "SELECT * FROM clientes WHERE nome = '$nome'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    // Usuário encontrado
    header("Location: area_restrita.php");
    exit();

} else {
    echo "não encontrado";
}
$conexao->close();
?>