<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valores = array("gabriel","18","transgenero","1000");
        list($usuario,$idade,$genero,$qi) = $valores;
        echo "Usuario:".$usuario."<br/>";
        echo "idade:".$idade."<br/>";
        echo "genero:".$genero."<br/>";
        echo "QI:".$qi."<br/>";
    ?>
</body>
</html>