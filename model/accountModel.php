<?php

include 'config.php';

session_start();

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

function login($conn, $data) {

    #CRIA UM CÓDIGO SQL PARA SELECIONAR OS VALORES DO USUÁRIO, VERIFICANDO SE OS VALORES DAS VARIAVEIS EXISTEM NO BANCO DE DADOS
    $sql_code = "SELECT * FROM clientes WHERE email_cliente = '$data[email]' AND senha_cliente = '$data[password]'";

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

function changeData($conn) {
    #RECEBE OS VALORES DIGITADOS NO FORMULÁRIO DE EDIÇÃO DE DADOS E COLOCA ELES EM VARIÁVEIS
    $name = $conn->real_escape_string($_POST['name']);
    $password = $conn->real_escape_string($_POST['password']);
    $address = $conn->real_escape_string($_POST['address']);

    #VERIFICA SE EXISTE ALGUM ID NESSA SESSÃO
    if(isset($_SESSION['id'])) {

        #CRIA UMA VARIÁVEL PARA ARMAZENAR ESSE ID
        $id = $_SESSION['id'];

        #CRIA UM CÓDIGO SQL PARA SUBSTITUIR OS VALORES DO USUÁRIO
        $sql_code = "UPDATE clientes SET nomecompleto_cliente = '$name', senha_cliente = '$password', endereco_cliente = '$address' WHERE id_cliente = '$id'";

        #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
        $result = $conn->query($sql_code);

        #REDIRECIONA PARA A TELA PRINCIPAL
        header("Location: index.php?route=home");
    }
}

function deleteAccount($conn) {
    #VERIFICA SE EXISTE ALGUM ID NESSA SESSÃO
    if(isset($_SESSION['id'])) {
        #CRIA UMA VARIAVEL QUE RECEBE O VALOR DE ID DA SESSÃO
        $id = $_SESSION['id'];

        #CRIA UM CÓDIGO SQL PARA DELETAR A LINHA DO USUÁRIO PELO ID
        $sql_code = "DELETE FROM clientes WHERE id_cliente = $id";

        #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
        $result = $conn->query($sql_code);

        #VERIFICA SE ALGUM RESULTADO É RETORNADO DA VARIÁVEL RESULT
        if(isset($result)) {
            #CHAMA A FUNÇÃO LOGOUT

        }
    }
}