<?php

include_once 'controller/productController.php';

$list = showProduct($conn)[0];

if(isset($_POST['comprar'])){
    addCart($conn, $_GET['idproduto']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./produtos.css">
    <title>Produtos</title>
</head>
<body>
    <body>
    <div class="container">
        <header>
            <div class="menu-icon">☰</div>
            <div class="logo">
                <img src="./assets/EDG.png" alt="Logo Electronic Desire Gaming" />
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Busque seus produtos aqui!" />
                <button type="submit">➤➤</button>
            </div>
            <div class="user-options">
                <a href="#"><b>Entre ou Cadastre-se</b></a>
                <span class="icons">
                    <span title="Acessibilidade"><img class="acessibilidade" src="./assets/assecibilidade.png"
                            alt="Ícone de acessibilidade" /></span>
                    <span title="Ajuda"><img class="ajuda" src="./assets/supotimage.png"
                            alt="Ícone de ajuda/suporte" /></span>
                    <span title="Favoritos"><img class="favorito" src="./assets/favorite copy.png"
                            alt="Ícone de favoritos" /></span>
                    <span title="Carrinho"><img class="carrinho" src="./assets/carrinho.png"
                            alt="Ícone do carrinho de compras" /></span>
                </span>
            </div>
        </header>

        <div class="produto-container">
            <div class="left">
                <img src="./assets/PS5.jpg" alt="PlayStation 5" class="produto-imagem">
            </div>

            <div class="right">
                <div class="produto-detalhes">
                    <h2>Console Sony PlayStation 5, Edição Digital, SSD 825GB, Controle Sem Fio DualSense + 2 Jogos
                        Digitais
                    </h2>

                    <p class="avaliacoes">★★★★★ (1)</p>

                    <button class="botao-sobre">SOBRE O PRODUTO</button>

                    <ul class="descricao">
                        <li><strong>Experiência de Jogo:</strong> Aventura especial e simulação de corrida com visuais
                            de
                            última geração.</li>
                        <li><strong>Recursos Técnicos:</strong> Console com SSD de 825GB e controle DualSense de última
                            geração.</li>
                        <li><strong>Modos de Jogo:</strong> Single player e recursos online.</li>
                        <li><strong>Conteúdo Adicional:</strong> Jogos completos Gran Turismo 7 e Astro Bot inclusos.
                        </li>
                    </ul>

                    <p class="preco">R$ 3.626,07</p>
                    <p class="parcelamento">ou em até 10x de R$ 389,90</p>

                    <button class="botao-prime">ASSINE PRIME NINJA E PAGUE R$ 3.217,29</button>
                    <button class="botao-comprar">COMPRAR AGORA</button>
                    <button class="botao-carrinho">ADICIONAR AO CARRINHO</button>

                    <div class="cep-container">
                        <input type="text" placeholder="Inserir CEP">
                        <button>OK</button>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <img style="object-fit: contain; width: 250px; cursor: pointer;" id="logo" src="./assets/EDG.png"
                alt="Logo Electronic Desire Gaming rodapé" />
            <span>Todos os direitos reservados ©</span>
        </footer>
</body>

</html>
</body>
</html>