<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>
<body>  
    <h1>Gerenciador de Tarefas</h1>
    <form>
    <fieldset>
    <legend>Nova tarefa</legend>
    <label>
        Tarefa:
        <input type="text" name=nome/>
    </label>
    <input type="submit" value="cadastrar">
    </fieldset>
    </form>
    <?php
        if(isset($_GET['nome'])){
            echo "nome Informado: ".$_GET['nome'];
        }
    ?>  
</body>
</html> 