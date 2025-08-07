<?php
    function redmensionar ($imagem,$largura,$altura){
        //Obtém as dimensões originais da imagem 
        //Getimagesize() Retorna a largura e altura de uma imagem

        list($largura,$alturaOriginal,$larguraOriginal) = getimagesize($imagem);

        //Cria uma nova imagem de acordo com as novas dimensões
        //imagecreatetruecolor = cria uma nova imagem em branco com alta qualidade


        $nova_imagem = imagecreatetruecolor($largura, $largura);

        //Carrega a imagem origina (jpeg) a partir do arquivp 
        //imagecreatefromjpeg() cria a imagem php

        $imagemOriginal = imagecreatefromjpeg($imagem);

        //copia e redmensiona a imagem original para a nova 
        //imagecopyresampled()-- copia o redimensionamento e suavização

        imagecopyresampled($nova_imagem,$imagemOriginal,0,0,0,0,$largura,$altura,$larguraOriginal,$alturaOriginal);

        //Inicia um buffer para guardar a imagem com texto binário
        //ob-start()-- iniciar o "output buffering" guardando a saida

        ob_start();

        //imagejep()Envia a imagem para o output(que vai pro buffer)

        imagejpeg($nova_imagem);

        //Ob_get_clean() -- Pegar o conteudo do buffer e limpa
        $dadosImagem =ob_clean();

        //Libera a memória usada pelas imagens
        //imagedestroy() -- limpa a memoria da imagem criada
        imagedestroy($nova_imagem);
        imagedestroy($imagemOriginal);

        //Retorna a imagem redmensionada em formato binario
        return $dadosImagem;

    }

    //Configuraçao do banco de dados
    $host = 'localhost';
    $dbname = 'armazena_imagem';
    $username = 'root';
    $password = '';

    try {
        //Conexao com o banco usando pdo
        $pdo = new pdo("mysql:host=$host;dbname:$dbname",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['foto'])) {
            if($_FILES['foto']['error'] ==0)
                $nome = $_POST['nome'];
                $telefone = $_POST['telefone'];
                $nomefoto = $_FILES['foto']['name'];//pega o nome original do arquivo
                $tipofoto = $_FILES['foto']['type'];//pega o tipo mime da Imagem

                //redimensiona a imagem
                //cdg abaixo cjua a variavel é tmp_name é o caminho temporario do arquivo

                $foto = redmensionar($_FILES['foto']['tmp_name'], 300, 400);
                //insere a imagem no banco de dados usando o sql prepared
                $sql = "INSERT INTO funcionarios (nome, telefone, foto, tipo_foto) VALUES (:nome, :telefone, :foto, :tipo_foto)";
       }


?>