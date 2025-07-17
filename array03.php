<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $musica = array(
        array("Kid abelha","amanhã",1993),
        array("Ultrage a rigor","pelados",1985),
        array("Paralamas do sucesso","alagados",1987));
        for ($linha=0;$linha<3;$linha++)
        {
            for($coluna=0;$coluna<3;$coluna++)
            {
                echo $musica[$linha][$coluna]." | ";
            }
            echo "<br/>";
        }
        
    
    ?>
</body>
</html>