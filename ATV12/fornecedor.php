<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Produto</title>
    <script src="form.js"></script>
    <link rel="stylesheet" href="style_forn.css"> </script>
</head>
<body>
    <form action="backendform.php" id="formulario" method="GET">
    
        <fieldset>
            <div>
                <center><h1>Adicionar Fornecedor</h1></center>
            </div>
            <div id="linha">
                <hr>
            </div>
            <br>     
            <center><table border="0" cellspacing="5">
                    <tr>
                        <td align="right">
                            <label for="nome">Nome do Fornecedor: </label>
                        </td>
                        <td align="right">
                            <input type="text"  maxlength="20" size="15">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="descricao">Nome Fantasia: </label>
                        </td>
                        <td align="right">
                            <input class="tamanho" type="text" name="Fantasia" size="15"required>
                        </td>
                    </tr>
                <tr>
                    <td align="right">
                        <label for="categoria">CNPJ: </label>
                    </td>
                    <td align="right">
                        <input type="text"   maxlength="20" size="15" name = cnpj>
                    </td>
                </tr> 
                <tr>
                    <td align="right">
                        <label for="quantidade">Estado(UF): </label>
                    </td>
                    <td align="right">
                        <input type="text"  maxlength="13" size="15">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="preco">Cidade: </label>
                    </td>
                    <td align="right">
                        <input type="text"   maxlength="13" size="15">
                    </td>
                </tr>
            <br>
            <br>

            <tr>
                <td class="botao">
                    <input class="btn1" type="submit"  value="Enviar">

                </td>
            </tr>
            </table></center>
            
        </fieldset>
    </form>
</body>
</html>