 <?php
 //definição das credenciais de conexão
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "armazenaimagem";
    //crianado a conexão msqli
    $conexao = new mysqli($servername, $username, $password, $dbname);
    //verificando a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }
    
 ?>