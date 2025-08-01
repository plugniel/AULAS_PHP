<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Customizado (opcional) -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            color: #0d6efd;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Sistema PHP - Gabriel bartholdy</a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.php"> Início</a>    
                <a class="nav-link" href="adionar.php"> Novo Cliente</a>
                <a class="nav-link" href="ListarClientes.php"> Listar Clientes</a>
                <a class="nav-link" href="deletarcliente.php"> Excluir Cliente</a>
                <a class="nav-link" href="atualizarcliente.php"> Excluir Cliente</a>
            </div>
        </div>
    </nav>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card p-4">
                <h2 class="text-center mb-4">Cadastro de Cliente</h2>
                <form action="ProcessarInsercao.php" method="POST">
                    
                    <!-- Nome -->
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome completo" required>
                    </div>

                    <!-- Endereço -->
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" required>
                    </div>

                    <!-- Telefone -->
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>
                    </div>

                    <!-- E-mail -->
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@dominio.com" required>
                    </div>

                    <!-- Botão -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Cadastrar Cliente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (opcional, mas necessário se usar componentes interativos) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>