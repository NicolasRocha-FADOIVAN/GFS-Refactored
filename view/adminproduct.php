<?php

#INCLUI CONFIG PARA PEGAR A VARIÁVEL DA CONEXÃO E USA-LA COMO PARAMETRO NA FUNÇÃO REGISTER

include 'controller/adminController.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">

    <div>
        <input type="text" name="name" placeholder="Nome do produto">
    </div>

    <div>
        <input type="text" name="description" placeholder="Descrição">
    </div>

    <div>
        <input type="number" step="any" name="price" placeholder="Preço">
    </div>

    <div>
        <input type="text" name="img" placeholder="Imagem produto">
    </div>

    <button type="submit" name="manageProduct">Adicionar produto</button>
    <button type="submit" name="deleteProduct">Deletar produto</button>

    </form>
</body>
</html>