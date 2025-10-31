<?php

#INCLUI CONFIG PARA PEGAR A VARIÁVEL DA CONEXÃO E USA-LA COMO PARAMETRO NA FUNÇÃO LIST

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
    <a href="index.php?route=adminproduct">Adicionar Produtos</a>

    <table>
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Imagem</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach(listProducts($conn) as $list): ?>
            <tr>
                <td><a href="index.php?route=adminproduct&idproduto=<?php echo $list[0]; ?>">Detalhes</a></td>
                <td><?php print_r($list[0]); ?></td>
                <td><?php print_r($list[1]); ?></td>
                <td><?php print_r($list[2]); ?></td>
                <td>R$ <?php print_r($list[3]); ?></td>
                <td><?php print_r($list[4]); ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>
</html>