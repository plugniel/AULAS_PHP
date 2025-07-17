<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Produto</title>
    <script src="formulario.js"></script>
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
                            <input name="fornecedor" type="text" required onkeypress="mascara(this, nome)" size="20">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="fantasia">Nome Fantasia: </label>
                        </td>
                        <td align="right">
                        <input name="fantasia" type="text" required onkeypress="mascara(this, nome)" size="20">
                        </td>
                    </tr>
                <tr>
                    <td align="right">
                        <label for="cnpj">CNPJ: </label>
                    </td>
                    <td align="right">
                        <input type="text"  required onkeypress="mascara(this, cnpjEmpre)" maxlength="20" size="15" name = cnpj>
                    </td>
                </tr> 
                <tr>
                    <td align="right">
                        <label for="cidade">Cidade: </label>
                    </td>
                    <td align="right">
                        <input type="text" maxlength="13" size="15">
                    </td>
                </tr>
                <tr>
                        <td align="right">
                            <label for="nome">CEP: </label>
                        </td>
                        <td align="right">
                            <input type="text" onkeypress="mascara(this, cep)" maxlength="10">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="nome">Endereço: </label>
                        </td>
                        <td align="right">
                            <input type="text"  maxlength="40" size="15" name="endereco">
                        </td>
                    </tr>
                    <tr>
                     <td align="right">UF:
                        <select id="estado" name="estado" class="estados">
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="SP">Sao Paulo</option>
                            <option value="PR">Parana</option>
                            <option value="PB">Paraiba</option>
                        </select>
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