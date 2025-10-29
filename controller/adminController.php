<?php

include 'controller/Controller.php';

if(isset($_POST['manageProduct'])){

    $data = [

        "nome_produto" => $conn->real_escape_string($_POST['name']),
        "desc_produto" => $conn->real_escape_string($_POST['description']),
        "preco_produto" => $conn->real_escape_string($_POST['price']),
        "img_produto" => $conn->real_escape_string($_POST['img'])

    ];


    if(isset($_GET['idproduto'])) {

        $functionModel = 'updateProduct';
        implodeValues($conn, $data, $functionModel);

    } else {

        $functionModel = 'addProduct';
        implodeArray($conn, $data, $functionModel);
    
    }
}

if(isset($_POST['deleteProduct'])){

    $id = $_GET['idproduto'];

    if(isset($id)){
        $data = [

            "id_produto" => $id,

        ];

        $functionModel = 'deleteProduct';
        implodeConditions($conn, $data, $functionModel);
        session_destroy();
        header("Location: index.php?route=adminpanel");
    }
}