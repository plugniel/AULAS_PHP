<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $texto = file_get_contents("texto.txt");
    echo nl2br($texto)."<hr/>";
    $texto = $texto." Extra";
    echo nl2br($texto)."<hr/>";
    file_put_contents("texto.txt",$texto);
    ?>
</body>
</html>