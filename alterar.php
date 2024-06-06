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
        var kwh = parseFloat(document.getElementById('kwh').value); 
        var total = kwh * 0.57; 
        document.getElementById('total').innerText = "R$" + total.toFixed(2); 
    }

    document.getElementById('kwh').addEventListener('input', calcularTotal);
</script>
</head>
<body>
    <div class="container">
        <h2 class="mt-3">Alterar Cadastro</h2>
        <form name="dadosCliente" action="conexao.php" method="post">
            <div class="form-group">
                Nome:
                <input type="text" class="form-control" id="nome" name="nome" value="<?=$usuario["us_nome"]?>">
            </div>
            <div class="form-group">
                CPF:
                <input type="text" class="form-control" id="cpf" name="cpf" value="<?=$usuario["us_cpf"]?>">
            </div>
            <div class="form-group">
                Nascimento:
                <input type="date" class="form-control" id="nascimento" name="nascimento" value="<?=$usuario["us_nasc"]?>" required>
            </div>
            <div class="form-group">
                Gênero:
                <select class="form-control" id="genero" name="genero" required>
                    <option value="Feminino" <?php if($usuario["us_genero"] == "Feminino") echo "selected"; ?>>Feminino</option>
                    <option value="Masculino" <?php if($usuario["us_genero"] == "Masculino") echo "selected"; ?>>Masculino</option>
                    <option value="Outro" <?php if($usuario["us_genero"] == "Outro") echo "selected"; ?>>Outro</option>
                </select>
            </div>
            <div class="form-group">
                CEP:
                <input type="text" class="form-control" id="cep" name="cep" value="<?=$usuario["us_cep"]?>">
            </div>
            <div class="form-group">
                Endereço:
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?=$usuario["us_endereco"]?>">
            </div>
            <div class="form-group">
                Bairro:
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?=$usuario["us_bairro"]?>">
            </div>
            <div class="form-group">
                UC:
                <input type="text" class="form-control" id="uc" name="uc" value="<?=$usuario["us_uc"]?>">
            </div>
            <div class="form-group">
                Vencimento:
                <input type="date" class="form-control" id="vencimento" name="vencimento" value="<?=$usuario["us_vencimento"]?>">
            </div>
            <div class="form-group">
                KWh:
                <input type="text" class="form-control" id="kwh" name="kwh" value="<?=$usuario["us_kwh"]?>">
            </div>
            <input type="hidden" name="total" id="total" value="<?=$usuario["us_total"]?>">
            <input type="hidden" name="acao" value="alterar"/>
            <input type="hidden" name="id" value="<?=$usuario["us_id"]?>"/>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
