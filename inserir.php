<?php
    include 'conexao.php';

    if(isset($_POST["acao"]) && $_POST["acao"] == "inserir"){
       inserirUsuario();
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-3">Formulário de Cadastro</h2>
        <form name="dadosCliente" action="conexao.php" method="post">
            <div class="form-group">
                Nome:
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                CPF:
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <div class="form-group">
                Nascimento:
                <input type="date" class="form-control" id="nascimento" name="nascimento" required>
            </div>
            <div class="form-group">
                Gênero:
                <select class="form-control" id="genero" name="genero" required>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>
            <div class="form-group">
                CEP:
                <input type="text" class="form-control" id="cep" name="cep" required>
            </div>
            <div class="form-group">
                Endereço:
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>
            <div class="form-group">
                Bairro:
                <input type="text" class="form-control" id="bairro" name="bairro" required>
            </div>
            <div class="form-group">
                UC:
                <input type="text" class="form-control" id="uc" name="uc" required>
            </div>
            <div class="form-group">
                Vencimento:
                <input type="date" class="form-control" id="vencimento" name="vencimento" required>
            </div>
            <div class="form-group">
                KWh:
                <input type="text" class="form-control" id="kwh" name="kwh" required>
            </div>
            <input type="hidden" name="acao" value="inserir">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
