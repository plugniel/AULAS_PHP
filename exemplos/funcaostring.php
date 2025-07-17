<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $vogais = array("a","e","i","o","u","A","E","I","O","O");
        echo"hello word of PHP <br/>";
        $cons = str_replace($vogais,"","hello word of PHP");
        echo "Consoantes: ".$cons,"<br/>";
        $test = "Hello word\n";
        print "posição da letra 'o':";
        print strpos($test,"o",5)."<hr/>";
        $message = "troca letra uma a uma ";
        echo $message."<br/>";
        $new_message = strtr($message,'abcdef','123456');
        echo "Criptografando..: ".$new_message."<br/>";
        $new_message = strtr($message,'123456','abcdef');
        echo "Descriptografando: ".$new_message."<br/>";

    ?>
</body>
</html>