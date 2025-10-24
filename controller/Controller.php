<?php

include 'model/accountModel.php';

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