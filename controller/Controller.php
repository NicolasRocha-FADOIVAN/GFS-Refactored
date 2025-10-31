<?php

include 'model/accountModel.php';
include 'model/adminModel.php';
include 'model/productModel.php';

#USADO PARA FUNÇÕES CREATE
function implodeArray($conn, $data, $functionModel) {

    $dataKeys = array_keys($data);
    $dataValues = array_values($data);

    $columns = implode(", ", $dataKeys);
    $rows = "'" . implode("', '", $dataValues) . "'";

    return $functionModel($conn, $columns, $rows);

}

#USADO PARA CLAUSURAS WHERE
function implodeConditions($conn, $data, $functionModel) {

    $conditions = [];

    foreach ($data as $column => $row):
        $conditions[] = $column . " = " . "'$row'";
    endforeach;

    return $functionModel($conn, $conditions);
    
}

#USADO PARA FUNÇÕES UPDATE
function implodeValues($conn, $data, $functionModel) {
    
    $valuesArray = [];

    foreach ($data as $column => $row):
        $valuesArray[] = $column . " = " . "'$row'";
    endforeach;

    $values = implode(", ", $valuesArray);
    return $functionModel($conn, $values);

}

function implodeConValues($conn, $dataValues, $dataConditions, $functionModel) {

    $conditions = [];
    $valuesArray = [];

    foreach ($dataValues as $column => $row):
        $valuesArray[] = $column . " = " . "'$row'";
    endforeach;

    foreach ($dataConditions as $column => $row):
        $conditions[] = $column . " = " . "'$row'";
    endforeach;

    $values = implode(", ", $valuesArray);
    return $functionModel($conn, $values, $conditions);

}

function getProducts($conn, $functionModel) {

    return $functionModel($conn);

}