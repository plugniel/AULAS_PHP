<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $linhas = file("texto.txt",FILE_IGNORE_NEW_LINES);
    var_dump($linhas);
    foreach($linhas as $linhas_num => $linha){
        echo "Linhas #{$linha} : ".$linha."<br>";
        
    }
    ?>
</body>
</html>