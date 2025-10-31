<?php

include_once 'controller/Controller.php';

function catalog($conn) {
    $functionModel = 'catalogProduct';
    return getProducts($conn, $functionModel);
}

if(isset($_POST['searchProduct'])) {
    $functionModel = 'searchProduct';
    $search = $conn->real_escape_string($_POST['searchBar']);

    header("Location: index.php?route=search&search=" . $search);
    return getProducts($conn, $functionModel); 
}
