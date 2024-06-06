<style>
    .error{
        color: red;
    }
</style>

<?php
include_once 'funcoes.php';

// Se houver uma ação POST, executar as funções correspondentes
if(isset($_POST["acao"])){
    if($_POST["acao"]=="inserir"){
       inserirUsuario();
    }
    if($_POST["acao"]=="alterar"){
        alterarUsuario();
    }
    if($_POST["acao"]=="excluir"){
        excluirUsuario();
    }
}

function abrirBanco(){
    $conexao= new mysqli("localhost","root","","db_copel");
    return $conexao;
}

function inserirUsuario(){
    $cpfValido = validarCPF($_POST["cpf"]);
    if ($cpfValido !== true) {
        echo '<p class="error">' . $cpfValido . '</p>';
        return; 
    }

    // Validação do CEP
    $cepValido = validarCEP($_POST["cep"]);
    if ($cepValido !== true) {
        echo '<p class="error">' . $cepValido . '</p>';
        return; 
    }

    $total = $_POST["kwh"] * 0.57;
    $total_format = number_format($total, 2, '.', '');

    // Continua com a inserção do usuário se ambos CPF e CEP forem válidos
    $banco=abrirBanco();
    $sql="INSERT INTO usuario(us_nome, us_cpf, us_nasc, us_genero, us_cep,
                             us_endereco, us_bairro, us_uc, us_vencimento, us_kwh, us_total)" .
                             "VALUES ('{$_POST["nome"]}', '{$_POST["cpf"]}', '{$_POST["nascimento"]}',
                            '{$_POST["genero"]}', '{$_POST["cep"]}', '{$_POST["endereco"]}', '{$_POST["bairro"]}',
                            '{$_POST["uc"]}', '{$_POST["vencimento"]}', '{$_POST["kwh"]}', '{$total_format}')";
    $banco->query($sql);
    var_dump($sql);
    $banco->close();

    voltarIndex(); 
}

// Função para excluir um usuário
function excluirUsuario(){
    $banco=abrirBanco();
    $sql="delete from usuario where us_id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

// Função para selecionar um usuário por ID
function SelecionarUsuarioId($id) {
    $banco = abrirBanco();
    $sql = "select * from usuario where us_id=" . $id;
    $resultado = $banco->query($sql);
    var_dump($resultado);
    $usuario = mysqli_fetch_assoc($resultado);
   
    return $usuario;
}

// Função para alterar um usuário
function alterarUsuario(){
    $cpfValido = validarCPF($_POST["cpf"]);
    if ($cpfValido !== true) {
        echo '<p class="error">' . $cpfValido . '</p>';
        return;
    }

    $cepValido = validarCEP($_POST["cep"]);
    if ($cepValido !== true) {
        echo '<p class="error">' . $cepValido . '</p>';
        return;
    }
    $total = $_POST["kwh"] * 0.57;
    $total_format = number_format($total, 2, '.', '');

    $banco = abrirBanco();
    $sql = "UPDATE usuario SET us_nome='{$_POST["nome"]}', us_cpf = '{$_POST["cpf"]}', us_nasc='{$_POST["nascimento"]}', us_genero = '{$_POST["genero"]}',
                                        us_cep='{$_POST["cep"]}', us_endereco='{$_POST["endereco"]}', us_bairro='{$_POST["bairro"]}',
                                        us_uc='{$_POST["uc"]}', us_vencimento='{$_POST["vencimento"]}', us_kwh='{$_POST["kwh"]}',
                                        us_total='{$total_format}' WHERE us_id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

// Função para listar todos os usuários
function listarUsuarios(){
    $banco = abrirBanco();
    $sql = "select * from usuario order by us_nome";
    $resultado = $banco->query($sql);
    $grupo = array(); 
    while ($row = mysqli_fetch_array($resultado)){
        $grupo[] = $row;
    }
    return $grupo;
}

// Função para redirecionar para a página inicial
function voltarIndex(){
    header("location:index.php");
}
?>
