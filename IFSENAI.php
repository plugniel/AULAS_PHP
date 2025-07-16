<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
    <?php
        $nota = 2;
        
        if ($nota >= 7) {
            echo "Aluno Aprovado";
        }
        if ($nota > 3 and $nota < 7) {
            echo "Aluno em Recuperação";
        }
        if ($nota < 3) {
            echo "Aluno Reprovado";
        ?>
</body>
</html>