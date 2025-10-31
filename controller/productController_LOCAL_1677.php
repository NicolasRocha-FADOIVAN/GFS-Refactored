<?php

include_once 'controller/Controller.php';

if(isset($_POST['search'])){
    $data = [

        "email_cliente" => $conn->real_escape_string($_POST['email']),
        "senha_cliente" => $conn->real_escape_string($_POST['password'])

    ];

    $functionModel = 'login';
    implodeConditions($conn, $data, $functionModel);
}