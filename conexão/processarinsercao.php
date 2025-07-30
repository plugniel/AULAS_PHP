<?php
    require_once 'conexao.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $conexao = conectarBanco();
    $sql = "INSERT INTO cliente (nome,endereco,telefone,email)
        VALUES(:nome,:endereco,:telefone,:email)";
    $stmt = $conexao->prepare($sql);
    $stmt->blindParam(":nome",$_POST["nome"]);
    $stmt->blindParam(":endereco",$_POST["endereco"]);
    $stmt->blindParam(":telefone",$_POST["telefone"]);
    $stmt->blindParam(":email",$_POST["email"]);
    try{
        $stmt->execute();
        echo "Cliente cadastrado com sucesso!";
    }catch(PDOException $e){
        error_log("Erro ao inserir Cliente: ".$e->getMessage());
        echo "Erro ao cadastrar cliente.";
    }
    }
?>