<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['Nome']) && isset($_GET['idade']))
    {
        echo " recebido o cliente ".$_GET['Nome'];
        echo " Que tem ".$_GET['idade']."anos";
    }
    ?>
</body>
</html>