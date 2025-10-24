<?php

include 'controller/Controller.php';

if(isset($_POST['register'])){

    $data = [

        "nomecompleto_cliente" => $conn->real_escape_string($_POST['name']),
        "cpf_cliente" => $conn->real_escape_string($_POST['CPF']),
        "telefone_cliente" => $conn->real_escape_string($_POST['phoneNumber']),
        "email_cliente" => $conn->real_escape_string($_POST['email']),
        "senha_cliente" => $conn->real_escape_string($_POST['password'])

    ];

    $functionModel = 'register';
    implodeArray($conn, $data, $functionModel);
}

if(isset($_POST['login'])){

    $data = [

        "email_cliente" => $conn->real_escape_string($_POST['email']),
        "senha_cliente" => $conn->real_escape_string($_POST['password'])

    ];

    $functionModel = 'login';
    implodeConditions($conn, $data, $functionModel);
}

if(isset($_POST['logout'])){

    if(isset($_SESSION)) {

        session_destroy();

        header("Location: index.php?route=home");
    }

}

if(isset($_SESSION["id"])) {

    $id = $_SESSION['id'];
    $user = getData($conn, $id);
}

if(isset($_POST['changeData'])){

    $data = [

        "nomecompleto_cliente" => $name = $conn->real_escape_string($_POST['name']),
        "telefone_cliente" => $conn->real_escape_string($_POST['phoneNumber']),
        "email_cliente" => $conn->real_escape_string($_POST['email']),
        "senha_cliente" => $conn->real_escape_string($_POST['password'])
    ];

    $functionModel = 'changeData';
    implodeValues($conn, $data, $functionModel);
}

if(isset($_POST['deleteAccount'])){

    $data = [

        "email" => $conn->real_escape_string($_POST['email']),
        "password" => $conn->real_escape_string($_POST['password'])

    ];

    $functionModel = 'deleteAccount';

}