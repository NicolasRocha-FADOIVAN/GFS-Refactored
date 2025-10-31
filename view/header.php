<?php
session_start();

include_once 'controller/productController.php';
include_once 'controller/accountController.php';
include_once 'components/headerComponents.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/header.css" />
    <title>Electronic Desire Gaming</title>
</head>
<body>
    <header>
        <div class="menu-icon">☰</div>
        <div class="header-logo">
            <a href="index.php?route=home"><img src="view/assets/EDG.png" alt="Logo Electronic Desire Gaming" /></a>
        </div>
        <form action="" method="POST" class="search-bar">
            <input type="text" name="searchBar" placeholder="Busque seus produtos aqui!" />
            <button type="submit" name="searchProduct">➤➤</button>
        </form>
        <div class="user-options">
            <span class="icons">
                <span> <?php profile() ?> </span>
                <span title="Acessibilidade"><img class="acessibilidade" src="view/assets/header/acessibilidade.png" alt="Ícone de acessibilidade" /></span>
                <span title="Ajuda"><img class="ajuda" src="view/assets/header/suporte.png" alt="Ícone de ajuda/suporte" /></span>
                <span title="Favoritos"><img class="favorito" src="view/assets/header/favoritos.png" alt="Ícone de favoritos" /></span>
                <span title="Carrinho"><img class="carrinho" src="view/assets/header/carrinho.png" alt="Ícone do carrinho de compras" /></span>
            </span>
        </div>
    </header>
</body> 
</html>