<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['Fantasia']) && isset($_GET['cnpj']))
    {
        echo " Ola Fornecdor: ".$_GET['Fantasia'];
        echo " <br/>Que Possui o CNPJ: ".$_GET['cnpj'];
    }
    ?>
</body>
</html>