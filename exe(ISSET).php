<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "xenia";
    $name = null;
    if (isset($name)) {
        echo "";
    } else {
        echo "essa linha não será executada\n";
    }
    ?>
</body>
</html>