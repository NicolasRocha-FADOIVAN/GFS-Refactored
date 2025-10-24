<?php

include 'config.php';
include 'model/productModel.php';
include 'view/components/homeComponents.php';

session_start();

if(isset($_POST['searchProduct'])){
    $search = $conn->real_escape_string($_POST['searchBar']);
    header("Location: index.php?route=search&search=" . $search);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/home.css" />
    <title>Electronic Desire Gaming</title>
</head>

<body>
    
    <div class="container">
        <header>
            <div class="menu-icon">☰</div>
            <div class="logo">
                <img src="view/tela-principal/assets/EDG.png" alt="Logo Electronic Desire Gaming" />
            </div>
            <form action="" method="POST" class="search-bar">
                <input type="text" name="searchBar" placeholder="Busque seus produtos aqui!" />
                <button type="submit" name="searchProduct">➤➤</button>
            </form>
            <div class="user-options">
                <span class="icons">
                    <span> <?php profile() ?> </span>
                    <span title="Acessibilidade"><img class="acessibilidade" src="view/tela-principal/assets/assecibilidade.png" alt="Ícone de acessibilidade" /></span>
                    <span title="Ajuda"><img class="ajuda" src="view/tela-principal/assets/supotimage.png" alt="Ícone de ajuda/suporte" /></span>
                    <span title="Favoritos"><img class="favorito" src="view/tela-principal/assets/favorite copy.png" alt="Ícone de favoritos" /></span>
                    <span title="Carrinho"><img class="carrinho" src="view/tela-principal/assets/carrinho.png" alt="Ícone do carrinho de compras" /></span>
                </span>
            </div>
        </header>
    
        <div id="banner">
            <img src="view/tela-principal/assets/Banner.jpg" alt="Banner promocional Friday Black - Compre aqui!" />
        </div>
    
        <div class="titulo-produtos-container">
            <div class="titulo-produtos">
                <p><b>ESQUENTA BLACK🖤</b></p>
            </div>
        </div>
        <div class="produtos-card-container">

            <?php foreach(catalogProduct($conn) as $list):  ?>
            <?php products($list[1], $list[2], $list[3], $list[4]) ?>
            <?php endforeach ?>
            
        </div>

        <div class="titulo-cards-container">
            <div class="titulo-marcas">
                <p><b>MARCAS RECOMENDADAS</b></p>
            </div>
        </div>
    
        <div class="marcas-cards-wrapper">
           <div class="marcas-cards-container">
                <button class="seta esquerda" onclick="mover(1)"> &#8249;</button>
                <div class="marcas-contant" id="carrossel">
                    <div class="card banner-1"><img src="view/tela-principal/assets/91731510485.jpg" class="marcas-image" alt="Banner Marca 1" /></div>
                    <div class="card banner-2"><img src="view/tela-principal/assets/01731940231.jpg" class="marcas-image" alt="Banner Marca 2" /></div>
                    <div class="card banner-3"><img src="view/tela-principal/assets/61731940009.jpg" class="marcas-image" alt="Banner Marca 3" /></div>
                    <div class="card banner-4"><img src="view/tela-principal/assets/81731940195.jpg" class="marcas-image" alt="Banner Marca 4" /></div>
                    <div class="card banner-5"><img src="view/tela-principal/assets/71731351617.jpg" class="marcas-image" alt="Banner Marca 5" /></div>
                    <div class="card banner-6"><img src="view/tela-principal/assets/21731940069.jpg" class="marcas-image" alt="Banner Marca 6" /></div>
                    <div class="card banner-7"><img src="view/tela-principal/assets/91731510485 copy.jpg" class="marcas-image" alt="Banner Marca 7" /></div>
                </div>
                <button class="seta direita" onclick="mover(-1)">&#8250;</button>
           </div>
        </div>

        <script>
          let posicao = 0;
          const carrossel = document.getElementById("carrossel");
          const card = carrossel.querySelector(".card");
          const itemLargura = card.offsetWidth + 20; 
          let visibleWidth = document.querySelector(".marcas-cards-container").offsetWidth;

          function mover(direcao) {
            posicao += direcao * itemLargura;
            range = (carrossel.children.length * itemLargura - visibleWidth);
            const maxPosicao = range;
            const minPosicao = -range;
            if (posicao > maxPosicao) posicao = maxPosicao;
            if (posicao < minPosicao) posicao = minPosicao;
            carrossel.style.transform = `translateX(${posicao}px)`;
          }

          window.addEventListener("resize", () => {
            visibleWidth = document.querySelector(".marcas-cards-container").offsetWidth;
          });
        </script>

        <div class="titulo-produtos-container">
            <div class="titulo-produtos">
                <p><b>MAIS PROCURADOS</b></p>
            </div>
        </div>
        <div class="produtos-card-container">
            <div class="produtos">
                <img src="view/tela-principal/assets/ps4.jpg" class="image-produtos" alt="Console PlayStation 4 Slim 1TB Preto com Controle Dualshock 4" />
                <p class="paragrafo"><b>Console Sony Playstation 4 Slim, 1TB, Standard Jet Black Com controle Dualshock 4, Preto...</b></p>                
                <p class="preço"><b>R$ 2.999,00</b></p>
                <button class="botao">Comprar</button>
            </div>
    
            <div class="produtos">
                <img src="view/tela-principal/assets/xbox.jpg" class="image-produtos" alt="Console Xbox Series X 1TB Preto" />
                <p class="paragrafo"><b>Console Xbox Series X, 1TB, Microsoft, Preto</b></p>
                <p class="preço"><b>R$ 5.978,16</b></p>
                <button class="botao">Comprar</button>
            </div>
    
            <div class="produtos">
                <img src="view/tela-principal/assets/dualsense.jpg" class="image-produtos" alt="Controle DualSense Edge PS5 Sem Fio Branco e Preto" />
                <p class="paragrafo"><b>Controle Sony Dualsense Edge PS5, Sem Fio, Preto e Branco</b></p> 
                <p class="preço"><b>R$ 1.115,07</b></p>
                <button class="botao">Comprar</button>
            </div>
    
            <div class="produtos">
                <img src="view/tela-principal/assets/placa de video.jpg" class="image-produtos" alt="Placa de Vídeo Gigabyte RTX 5090 AORUS MASTER 32GB GDDR7 com RGB" />
                <p class="paragrafo"><b>Placa de Vídeo Gigabyte RTX 5090 AORUS MASTER 32G NVIDIA GeForce, 32GB, GDDR7, RGB, G-Sync, Ray Tracing...</b></p>
                <p class="preço"><b>R$ 20.499,99</b></p>
                <button class="botao">Comprar</button>
            </div>
    
            <div class="produtos">
                <img src="view/tela-principal/assets/headset.jpg" class="image-produtos" alt="Headset Gamer Sem Fio Astro A50 Gen 5 Branco com Base Station" />
                <p class="paragrafo"><b>Headset Gamer Sem Fio Astro Gaming A50 LIGHTSPEED + Base Station (Gen 5) Com Tecnologia PLAYSYNC AUDIO, Bluetooth, Branco</b></p>
                <p class="preço"><b>R$ 1.899,99</b></p>
                <button class="botao">Comprar</button>
            </div>
        </div>

        <div class="titulo-produtos-container">
            <div class="titulo-produtos">
                <p><b>LINKS RELACIONADOS</b></p>
            </div>
        </div>
        <div class="produtos-links-container">
            <a href="#">rtx 5090</a>
            <a href="#">galaxy s25</a>
            <a href="#">rtx 5070</a>
            <a href="#">rtx 5080</a>
            <a href="#">iphone 15</a>
            <a href="#">iphone 16</a>
            <a href="#">iphone 17</a>
            <a href="#">notebooks</a>
            <a href="#">xbox</a>
            <a href="#">playstation 5</a>
            <a href="#">nintendo switch 2</a>
            <a href="#">apple watch</a>
            <a href="#">pc gamer</a>
            <a href="#">monitor</a>
            <a href="#">samsung s24</a>
            <a href="#">notebook gamer</a>
            <a href="#">rtx 4060 ti</a>
        </div>

        <footer>
            <img style="object-fit: contain; width: 250px; cursor: pointer;" id="logo" src="view/tela-principal/assets/logodosite2.png" alt="Logo Electronic Desire Gaming rodapé" />
            <span>Todos os direitos reservados ©</span>
        </footer>    

    </div>

</body>
</html>
