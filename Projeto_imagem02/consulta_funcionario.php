<?php
    //Configuraçao do banco de dados
    $host = 'localhost';
    $dbname = 'armazena_imagem';
    $username = 'root';
    $password = '';

try {
    //Conexao com o banco usando pdo
    $pdo = new pdo("mysql:host=$host;dbname:$dbname",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Recupera todos os funcionarios do banco de dados
    $sql = "SELECT id,nome FROM funcionarios";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);//busca todos os resultados como uma matriz associativa

    //verifica se foi solicitado a exclusão de um funcionario
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['excluir_id'])) {
        $excluir_id = $_POST['excluir_id'];
        //prepara a query de exclusão
        $sql_excluir = "DELETE FROM funcionarios WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $excluir_id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            echo "Funcionario excluido com sucesso!";
            header("Location: consulta_funcionario.php");
            exit;
        } else {
            echo "Erro ao excluir funcionario.";
        }

    }

}



?>
