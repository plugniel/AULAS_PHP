<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_forn.css">
</head>
<body>
<FORM>
        <fieldset>
                <div>
                    <h3>FICHA DE FORNECEDOR</h3>
                </div>

                <div id="linha">
                    <hr>
                </div>
                <br>

                <div id="dados">
    <?php
    if(isset($_GET['fantasia']) && isset($_GET['cnpj'])) 
    {
        echo " Ola Fornecdor: ".$_GET['fantasia'];
        echo " <br/>Que Possui o CNPJ: ".$_GET['cnpj'];
        echo " <br/>Que se Localiza no estado: ".$_GET['estado'];
        echo "<br/>Que esta localizada na Cidade: ".$_GET['endereco'];
    }
    ?>
        </div>

</fieldset>

</FORM>

</body>
</html> 