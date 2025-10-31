<?php

include_once 'controller/accountController.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cadastro - EDG</title>
  <link rel="stylesheet" href="view/css/registerform.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="register-container">
        <div class="form-box">
            <img src="view/assets/EDG.png" alt="Logo EDG+" class="logo">
 
            <form method="POST" action="">
                <input class="form-input" type="text" placeholder="Nome" required>
                <input class="form-input" type="text" placeholder="Sobrenome" required>
                <input class="form-input" type="email" placeholder="Email" required>
                <input class="form-input" type="text" placeholder="CPF" required>
                <input class="form-input" type="password" placeholder="Senha" required>
                <input class="form-input" type="password" placeholder="Confirmar Senha" required>

                <div class="checkbox">
                    <input type="checkbox" id="termos" required>
                    <label for="termos">Eu li e aceito os <a href="#">Termos de uso e Privacidade</a></label>
                </div>

                <button type="submit" name="register" class="btn-cadastrar">Cadastrar</button>
                <button type="button" class="btn-cancelar">Cancelar</button>
            </form>
        </div>
    </div>
    <a class="" href="index.php?route=login">Login</a>
</body>
</html>
