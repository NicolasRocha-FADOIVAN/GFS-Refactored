<<<<<<< HEAD
<?php

include_once 'controller/Controller.php';

if(isset($_POST['search'])){
    $data = [

        "email_cliente" => $conn->real_escape_string($_POST['email']),
        "senha_cliente" => $conn->real_escape_string($_POST['password'])

    ];

    $functionModel = 'login';
    implodeConditions($conn, $data, $functionModel);
=======
<?php

include_once 'controller/Controller.php';

function catalog($conn) {

    return getProducts($conn);
>>>>>>> 9ef9d2c7d71c0f45d9d1c9a5568d83cbc03aeb91
}