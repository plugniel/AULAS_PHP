<?php
require 'conexao.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $conexao = conectarBanco();

    $id=filter_var($_POST["id_cliente"],FILTER_SANITIZE_NUMBER_INT);
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $endereco = htmlspecialchars(trim($_POST["endereco"]));
    $telefone = htmlspecialchars(trim($_POST["telefone"]));
    $email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
    if(!$id || !$email){
        die("erro: id invalido ou email incorreto");
    }

    $sql = "UPDATE cliente SET nome = :nome,enderco = :endereco, telefone = :telefone, email = :email WHERE id_cliente = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->blindParam(":id",$id,PDO::PARAM_INT);
    $stmt->blindParam(":nome",$nome);
    $stmt->blindParam(":endereco",$endereco);
    $stmt->blindParam(":telefone",$telefone);
    $stmt->blindParam(":email",$email);
    try {
        $stmt->execute();
        echo "Cliente atualixa com sucesso!";
    } catch (PDOExeption $e) {
        error_log("Erro ao atualizar cliente".$e->getMessage());
        echo"Erro ao atualizar registro";
    }     
}
?>