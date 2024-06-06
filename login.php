<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, rgba(236, 101, 0, 0.8), rgba(255, 255, 255, 0.2));
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9);
            width: 350px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-title {
            text-align: center;
            color: rgba(236, 101, 0, 0.9);
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .btn-primary {
            width: 100%;
            background-color: rgba(236, 101, 0, 0.9);
            border-color: rgba(236, 101, 0, 0.9);
        }
        .btn-primary:hover {
            background-color: rgba(236, 101, 0, 1);
            border-color: rgba(236, 101, 0, 1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-title">Login de Acesso</h5>
                    <form action="conexao.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="login" name="login" placeholder="Usuário">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                        </div>
                        <button type="submit" class="btn btn-primary" name="btn-entrar">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
