<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //função usada para definir fuso horario padrão
    date_default_timezone_set('America/Los_angeles');
    //manipulando HTML e PHP
    $data_hoje = date("d/m/Y",time());
    ?> 
    <p align = "center">hoje é dia <?php echo $data_hoje; ?> </p>
</body>
</html>