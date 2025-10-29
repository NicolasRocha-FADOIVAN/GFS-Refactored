<?php

include 'config.php';

function addProduct($conn, $columns, $rows) {

    #CRIA UM CÓDIGO SQL PARA ADICIONAR OS VALORES A TABELA NO BANCO DE DADOS
    $sql_code = "INSERT INTO produtos ($columns) VALUES ($rows)";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #REDIRECIONA PARA A LISTA DE PRODUTOS
    header("Location: index.php?route=adminpanel");
}

function listProducts($conn) {
    #CRIA UM CÓDIGO SQL PARA SELECIONAR TODAS AS LINHAS DA TABELA
    $sql_code = "SELECT * FROM produtos";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #VERIFICA SE ALGUM RESULTADO É RETORNADO DA VARIÁVEL RESULT
    if($result->num_rows > 0) {

        #CRIA UM ARRAY PARA SER A LISTA DE PRODUTOS
        $list = $result->fetch_all(MYSQLI_NUM);

        #RETORNA O ARRAY PARA SER UTILIZADO NA ITERAÇÃO DA LISTA DE PRODUTOS
        return $list;
    }
}

function updateProduct($conn, $values) {
    #RECEBE OS VALORES DIGITADOS NO FORMULÁRIO DE PRODUTO E COLOCA ELES EM VARIÁVEIS
    $id = $_GET['idproduto'];
    #CRIA UM CÓDIGO SQL PARA ATUALIZAR A TABELA COM OS VALORES DOS PARAMETROS ONDE O ID FOR IGUAL AO PARAMETRO ID
    $sql_code = "UPDATE produtos SET $values WHERE id_produto = '$id'";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #REDIRECIONA PARA A LISTA DE PRODUTOS
    header("Location: index.php?route=adminpanel");  
}

function deleteProduct($conn, $conditions) {
    #BUSCA O ID DO PRODUTO CUJO O BOTÃO EDITAR FOI CLICADO E ARMAZENA ESSE ID EM UMA VARIÁVEL

    #CRIA UM CÓDIGO SQL PARA DELETAR A LINHA DO PRODUTO PELO ID
    $sql_code = "DELETE FROM produtos WHERE $conditions[0]";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #REDIRECIONA PARA A LISTA DE PRODUTOS
    header("Location: index.php?route=adminpanel");  
}