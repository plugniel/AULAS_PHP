<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excluir cliente</title>
</head>
<body>
    <h2>Excluir cliente</h2>
    <form action="processarDelacao.php" method="POST">
        <label for="id">ID do Cliente</label>
        <input type="number" id="id" name = "id" required>
        <button type = "submit">Excluir</button>
    </form>
    
</body>
</html>