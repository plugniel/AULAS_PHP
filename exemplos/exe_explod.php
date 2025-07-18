<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach(file("livros.txt") as $livros){
            list($titulo, $autor) = explode(",",$livro);
        ?>
        <p>titulo: <?=$titulo?>,autor: <?= $autor?></p>
        <?php
        }
    ?>
</body>
</html>