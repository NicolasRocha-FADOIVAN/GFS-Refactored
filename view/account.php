<?php

include 'controller/accountController.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Conta</title>
    <link rel="stylesheet" href="view/css/account.css">
</head>
<body>
    <form action="" method="POST">
        <h1>Gerenciar Conta</h1>

        <div>
            <input type="text" name="name" placeholder="Nome Completo" value="<?php echo $user["nomecompleto_cliente"]; ?>">
        </div>

        <div>
            <input type="email" name="email" placeholder="Email" value="<?php echo $user['email_cliente']; ?>">
        </div>

        <div>
            <input type="password" name="password" placeholder="Senha" value="<?php echo $user['senha_cliente']; ?>">
        </div>

        <button type="submit" name="changeData">Atualizar Dados</button>
        <button type="submit" name="logout">Logout</button>
        <button type="submit" name="deleteAccount">Deletar Conta</button>
    </form>
</body>
</html>