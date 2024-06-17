<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgba(236, 101, 0, .5);
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .title{
            text-align: center;
            color: rgba(236, 101, 0, 0.9);
            font-weight: bold;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #ec6500;
            border-color: #ec6500;
        }
        .btn-primary:hover {
            background-color: #ec6500;
            border-color: #ec6500;
        }
        .btn-primary:focus {
            background-color: #ec6500;
            border-color: #ec6500;
            box-shadow: none;
        }
        .form-group label {
            margin-bottom: 5px; 
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-3 title">Formulário de Cadastro</h2>
        <form name="dadosCliente" action="conexao.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <div class="form-group">
                <label for="nascimento">Nascimento:</label>
                <input type="date" class="form-control" id="nascimento" name="nascimento" required>
            </div>
            <div class="form-group">
                <label for="genero">Gênero:</label>
                <select class="form-control" id="genero" name="genero" required>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" required>
            </div>
            <div class="form-group">
                <label for="uc">UC:</label>
                <input type="text" class="form-control" id="uc" name="uc" required>
            </div>
            <div class="form-group">
                <label for="vencimento">Vencimento:</label>
                <input type="date" class="form-control" id="vencimento" name="vencimento" required>
            </div>
            <div class="form-group">
                <label for="kwh">KWh:</label>
                <input type="text" class="form-control" id="kwh" name="kwh" required>
            </div>
            <input type="hidden" name="acao" value="inserir">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="index.php" class="btn btn-secondary btn-danger">Cancelar</a>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
