<?php

include_once 'controller/Controller.php';

if(isset($_POST['manageProduct'])){

    $id = $_GET['idproduto'];

    $dataValues = [

        "nome_produto" => $conn->real_escape_string($_POST['name']),
        "desc_produto" => $conn->real_escape_string($_POST['description']),
        "preco_produto" => $conn->real_escape_string($_POST['price']),
        "img_produto" => $conn->real_escape_string($_POST['img'])

    ];

    $dataConditions = [

        "id_produto" => $id,
    
    ];


    if(isset($id)) {

        $functionModel = 'updateProduct';
        implodeConValues($conn, $dataValues, $dataConditions, $functionModel);

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