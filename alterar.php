<?php
include ("conexao.php");
$usuario= SelecionarUsuarioId($_POST["id"]);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script>
    function calcularTotal() {
        let kwh = parseFloat(document.getElementById('kwh').value); 
        let total = kwh * 0.57; 
        document.getElementById('total').innerText = "R$" + total.toFixed(2); 
    }

    document.getElementById('kwh').addEventListener('input', calcularTotal);
    </script>
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
        .form-group label {
            margin-bottom: 5px; 
            font-weight: bold;
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
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-3 title">Alterar Cadastro</h2>
        <form name="dadosCliente" action="conexao.php" method="post">
        <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?=$usuario["us_nome"]?>">
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="<?=$usuario["us_cpf"]?>">
            </div>
            <div class="form-group">
                <label for="nascimento">Nascimento:</label>
                <input type="date" class="form-control" id="nascimento" name="nascimento" value="<?=$usuario["us_nasc"]?>" required>
            </div>
            <div class="form-group">
                <label for="genero">Gênero:</label>
                <select class="form-control" id="genero" name="genero" required>
                    <option value="Feminino" <?php if($usuario["us_genero"] == "Feminino") echo "selected"; ?>>Feminino</option>
                    <option value="Masculino" <?php if($usuario["us_genero"] == "Masculino") echo "selected"; ?>>Masculino</option>
                    <option value="Outro" <?php if($usuario["us_genero"] == "Outro") echo "selected"; ?>>Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" value="<?=$usuario["us_cep"]?>">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?=$usuario["us_endereco"]?>">
            </div>
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?=$usuario["us_bairro"]?>">
            </div>
            <div class="form-group">
                <label for="uc">UC:</label>
                <input type="text" class="form-control" id="uc" name="uc" value="<?=$usuario["us_uc"]?>">
            </div>
            <div class="form-group">
                <label for="vencimento">Vencimento:</label>
                <input type="date" class="form-control" id="vencimento" name="vencimento" value="<?=$usuario["us_vencimento"]?>">
            </div>
            <div class="form-group">
                <label for="kwh">KWh:</label>
                <input type="text" class="form-control" id="kwh" name="kwh" value="<?=$usuario["us_kwh"]?>">
            </div>
            <input type="hidden" name="total" id="total" value="<?=$usuario["us_total"]?>">
            <input type="hidden" name="acao" value="alterar"/>
            <input type="hidden" name="id" value="<?=$usuario["us_id"]?>"/>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="index.php" class="btn btn-secondary btn-danger">Cancelar</a>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
