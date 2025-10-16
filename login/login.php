<?php

include 'config.php';
include 'controller/accountController.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - EDG</title>
  <link rel="stylesheet" href="view/login/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="login-container">
    <img class="logo" src="view/login/assets/EDG.png"></img>
    <form class="login-form" action="" method="POST">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="email" name="email" placeholder="Email">
      </div>

      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Senha">
      </div>

      <button class="login-btn" type="submit" name="login">Entrar</button>

      <button class="google-btn">
        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google Logo">
        Entrar com o Google
      </button>
    </form>
    <a class="" href="index.php?route=register">Criar uma conta</a>
  </div>
</body>
</html>
