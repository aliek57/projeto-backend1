<?php
    require_once('conexao.php');
    $grupo = listarUsuarios();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de energia - COPEL</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgba(236, 101, 0, .5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 1200px;
        }
        .title {
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
        table {
            width: 100%;
        }
        th, td {
            text-align: start;
            padding: 8px;
            border: 1px solid #ddd;
            white-space: nowrap; 
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-3 title">Formulário de Consumo de Energia</h2>
        <a href="inserir.php" class="btn btn-primary mb-3">Adicionar Cliente</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Nascimento</th>
                        <th>Gênero</th>
                        <th>CEP</th>
                        <th>Endereço</th>
                        <th>Bairro</th>
                        <th>UC</th>
                        <th>Vencimento</th>
                        <th>Kwh</th>
                        <th>Total</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <?php if(!empty($grupo)) {?>
<tbody>
    <?php foreach ($grupo as $usuario) {?>
        <tr>
            <td><?=$usuario["us_nome"]?></td>
            <td><?=formatarCPF($usuario["us_cpf"])?></td>
            <td><?=$usuario["us_nasc"]?></td>
            <td><?=$usuario["us_genero"]?></td>
            <td><?=formatarCEP($usuario["us_cep"])?></td>
            <td><?=$usuario["us_endereco"]?></td>
            <td><?=$usuario["us_bairro"]?></td>
            <td><?=$usuario["us_uc"]?></td>
            <td><?=$usuario["us_vencimento"]?></td>
            <td><?=$usuario["us_kwh"]?></td>
            <td>R$<?=number_format($usuario["us_total"], 2, ',', '.')?></td>
            <td>
                <form name="alterar" action="alterar.php" method="POST">
                    <input type="hidden" name="id" value=<?=$usuario["us_id"]?> />
                    <input type="submit" value="Editar" name="editar" class="btn btn-sm btn-primary" />
                </form>
            </td>
            <td>
                <form name="excluir" action="conexao.php" method="POST">
                    <input type="hidden" name="id" value=<?=$usuario["us_id"]?> />
                    <input type="hidden" name="acao" value="excluir" />
                    <input type="submit" value="Excluir" name="excluir" class="btn btn-sm btn-danger" />
                </form>
            </td>
        </tr>
    <?php } ?>
</tbody>
<?php
} else {
    echo "<tbody><tr><td colspan='14'>Dados indisponíveis</td></tr></tbody>";
}
?>
            </table>
        </div>
    </div>
</body>
</html>
