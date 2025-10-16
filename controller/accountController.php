<?php

include 'model/accountModel.php';

if(isset($_POST['register'])){

    $data = [

        "nomecompleto_cliente" => $conn->real_escape_string($_POST['name']),
        "datanascimento_cliente" => $conn->real_escape_string($_POST['birthDate']),
        "cpf_cliente" => $conn->real_escape_string($_POST['CPF']),
        "genero_cliente" => $conn->real_escape_string($_POST['gender']),
        "telefone_cliente" => $conn->real_escape_string($_POST['phoneNumber']),
        "endereco_cliente" => $conn->real_escape_string($_POST['address']),
        "email_cliente" => $conn->real_escape_string($_POST['email']),
        "senha_cliente" => $conn->real_escape_string($_POST['password'])

    ];

    $dataKeys = array_keys($data);
    $dataValues = array_values($data);

    $columns = implode(", ", $dataKeys);
    $rows = "'" . implode("', '", $dataValues) . "'";

    register($conn, $columns, $rows);
}

if(isset($_POST['login'])){

    $data = [

        "email" => $conn->real_escape_string($_POST['email']),
        "password" => $conn->real_escape_string($_POST['password'])

    ];

    login($conn, $data);
}

if(isset($_POST['logout'])){

    if(isset($_SESSION)) {

        session_destroy();

        header("Location: index.php?route=home");
    }

}

if(isset($_POST['changeData'])){

    $data = [

        "email" => $conn->real_escape_string($_POST['email']),
        "password" => $conn->real_escape_string($_POST['password'])

    ];

    login($conn, $data);
}

if(isset($_POST['deleteAccount'])){

    $data = [

        "email" => $conn->real_escape_string($_POST['email']),
        "password" => $conn->real_escape_string($_POST['password'])

    ];

    login($conn, $data);
}