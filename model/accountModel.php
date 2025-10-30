<?php

include 'config.php';

function register($conn, $columns, $rows) {

    #CRIA UM CÓDIGO SQL PARA INSERIR OS VALORES NA TABELA DE USUARIOS
    var_dump($columns);
    var_dump($rows);
    $sql_code = "INSERT INTO clientes ($columns) VALUES ($rows)";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #REDIRECIONA PARA A TELA DE LOGIN
    header("Location: index.php?route=home");
}

function login($conn, $conditions) {

    #CRIA UM CÓDIGO SQL PARA SELECIONAR OS VALORES DO USUÁRIO, VERIFICANDO SE OS VALORES DAS VARIAVEIS EXISTEM NO BANCO DE DADOS
    $sql_code = "SELECT * FROM clientes WHERE $conditions[0] AND $conditions[1]";
    var_dump($sql_code);
    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #VERIFICA SE ALGUM RESULTADO É RETORNADO DA VARIÁVEL RESULT
    if($result->num_rows == 1) {

        #PEGA OS DADOS DO USUÁRIO
        $user = $result->fetch_assoc();
       
        #ARMAZENA O ID E NOME DO USUÁRIO NA SUPERGLOBAL SESSION
        $_SESSION['id'] = $user['id_cliente'];
        $_SESSION['name'] = $user['nomecompleto_cliente'];

        #REDIRECIONA PARA A TELA PRINCIPAL
        header("Location: index.php?route=home");
    }
}

function getData($conn, $id) {

    $sql_code = "SELECT * FROM clientes WHERE id_cliente = '$id'";
    $result = $conn->query($sql_code);
    $user = $result->fetch_assoc();

    return $user;
}

function changeData($conn, $values, $conditions) {

    #VERIFICA SE EXISTE ALGUM ID NESSA SESSÃO
    if(isset($_SESSION['id'])) {

        #CRIA UMA VARIÁVEL PARA ARMAZENAR ESSE ID
        var_dump($conditions);
        var_dump($values);
        #CRIA UM CÓDIGO SQL PARA SUBSTITUIR OS VALORES DO USUÁRIO
        $sql_code = "UPDATE clientes SET $values WHERE $conditions[0]";

        #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
        $result = $conn->query($sql_code);

        #REDIRECIONA PARA A TELA PRINCIPAL
        header("Location: index.php?route=home");
    }
}

function deleteAccount($conn, $conditions) {
    #VERIFICA SE EXISTE ALGUM ID NESSA SESSÃO
    if(isset($_SESSION['id'])) {
        #CRIA UMA VARIAVEL QUE RECEBE O VALOR DE ID DA SESSÃO
        $id = $_SESSION['id'];

        #CRIA UM CÓDIGO SQL PARA DELETAR A LINHA DO USUÁRIO PELO ID
        $sql_code = "DELETE FROM clientes WHERE $conditions[0]";

        #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
        $result = $conn->query($sql_code);

        #VERIFICA SE ALGUM RESULTADO É RETORNADO DA VARIÁVEL RESULT
    }
}