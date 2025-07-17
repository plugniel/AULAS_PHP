<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<br/>";
        $Amazonproducts = array(
            array("Codigo" => "Livro","Descrição"=>"Livros","preço"=>50),
            array("Codigo" => "DVDs","Descrição"=>"Filmes","preço"=>15),
            array("Codigo" => "CDs","Descrição"=>"Musica","preço"=>20));
        for($linha = 0;$linha<3;$linha++){ ?>
        <p> | <?=$Amazonproducts[$linha]["Codigo"]?>
            | <?=$Amazonproducts[$linha]["Descrição"]?>
            | <?=$Amazonproducts[$linha]["preço"]?>
        </p>

    <?php
        }
        
    ?>
</body>
</html>