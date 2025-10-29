<?php

include 'controller/accountController.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cadastro - EDG</title>
  <link rel="stylesheet" href="view/css/register.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="login-container">
        <h1 class="logo">Cadastro</h1>
        <form class="login-form" action="" method="POST">

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Nome">
            </div>

            <div class="input-group">
                <i class="fas fa-id-card"></i>
                <input type="number" name="CPF" placeholder="CPF">
            </div>

            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="tel" name="phoneNumber" placeholder="Telefone">
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Senha">
            </div>

            <button class="login-btn" type="submit" name="register">Criar Conta</button>

        </form>
        <a class="" href="index.php?route=login">Login</a>
    </div>
</body>
</html>
