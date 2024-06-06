<?php
function formatarCPF($cpf) {
    //XXX.XXX.XXX-XX
    return substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);
}

function formatarCEP($cep) {
    //CEP: XXXXX-XXX
    return substr($cep, 0, 5) . '-' . substr($cep, 5);
}

function validarCPF($cpf) {
    //remove caracteres que não são números
    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    if (strlen($cpf) != 11) {
        return "CPF inválido";
    }

    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return "CPF inválido";
    }

    return true;
}

function validarCEP($cep) {
    $cep = preg_replace('/[^0-9]/', '', $cep);

    if (strlen($cep) != 8) {
        return "CEP inválido";
    }

    return true;
}
?>
