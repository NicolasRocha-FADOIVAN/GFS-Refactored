<?php

<<<<<<< HEAD
include 'view/components/homeComponents.php';

if(isset($_POST['searchProduct'])){
    $search = $conn->real_escape_string($_POST['searchBar']);
    header("Location: index.php?route=search&search=" . $search);
}
=======
include_once 'controller/productController.php';
include_once 'view/components/homeComponents.php';
>>>>>>> 9ef9d2c7d71c0f45d9d1c9a5568d83cbc03aeb91

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
<<<<<<< HEAD

=======
>>>>>>> 9ef9d2c7d71c0f45d9d1c9a5568d83cbc03aeb91
    
        <div id="banner">
            <img src="view/assets/Banner.jpg" alt="Banner promocional Friday Black - Compre aqui!" />
        </div>
    
        <div class="titulo-produtos-container">
            <div class="titulo-produtos">
                <p><b>ESQUENTA BLACK🖤</b></p>
            </div>
        </div>
        <div class="produtos-card-container">

            <?php foreach(catalog($conn) as $list):  ?>
            <?php products($list[1], $list[3], $list[4]) ?>
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
                    <div class="card banner-1"><img src="view/assets/marcas-recomendadas/corsair-logo.jpg" class="marcas-image" alt="Banner Marca 1" /></div>
                    <div class="card banner-2"><img src="view/assets/marcas-recomendadas/dell-logo.jpg" class="marcas-image" alt="Banner Marca 2" /></div>
                    <div class="card banner-3"><img src="view/assets/marcas-recomendadas/hyperx-logo.jpg" class="marcas-image" alt="Banner Marca 3" /></div>
                    <div class="card banner-4"><img src="view/assets/marcas-recomendadas/intel-logo.jpg" class="marcas-image" alt="Banner Marca 4" /></div>
                    <div class="card banner-5"><img src="view/assets/marcas-recomendadas/kingston-logo.jpg" class="marcas-image" alt="Banner Marca 5" /></div>
                    <div class="card banner-6"><img src="view/assets/marcas-recomendadas/logitech-logo.jpg" class="marcas-image" alt="Banner Marca 6" /></div>
                    <div class="card banner-7"><img src="view/assets/marcas-recomendadas/corsair-logo.jpg" class="marcas-image" alt="Banner Marca 7" /></div>
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
                <img src="view/assets/produtos/ps4.jpg" class="image-produtos" alt="Console PlayStation 4 Slim 1TB Preto com Controle Dualshock 4" />
                <p class="paragrafo"><b>Console Sony Playstation 4 Slim, 1TB, Standard Jet Black Com controle Dualshock 4, Preto...</b></p>                
                <p class="preço"><b>R$ 2.999,00</b></p>
                <button class="botao">Comprar</button>
            </div>
    
            <div class="produtos">
                <img src="view/assets/produtos/xbox.jpg" class="image-produtos" alt="Console Xbox Series X 1TB Preto" />
                <p class="paragrafo"><b>Console Xbox Series X, 1TB, Microsoft, Preto</b></p>
                <p class="preço"><b>R$ 5.978,16</b></p>
                <button class="botao">Comprar</button>
            </div>
    
            <div class="produtos">
                <img src="view/assets/produtos/dualsense.jpg" class="image-produtos" alt="Controle DualSense Edge PS5 Sem Fio Branco e Preto" />
                <p class="paragrafo"><b>Controle Sony Dualsense Edge PS5, Sem Fio, Preto e Branco</b></p> 
                <p class="preço"><b>R$ 1.115,07</b></p>
                <button class="botao">Comprar</button>
            </div>
    
            <div class="produtos">
                <img src="view/assets/produtos/placa de video.jpg" class="image-produtos" alt="Placa de Vídeo Gigabyte RTX 5090 AORUS MASTER 32GB GDDR7 com RGB" />
                <p class="paragrafo"><b>Placa de Vídeo Gigabyte RTX 5090 AORUS MASTER 32G NVIDIA GeForce, 32GB, GDDR7, RGB, G-Sync, Ray Tracing...</b></p>
                <p class="preço"><b>R$ 20.499,99</b></p>
                <button class="botao">Comprar</button>
            </div>
    
            <div class="produtos">
                <img src="view/assets/produtos/headset.jpg" class="image-produtos" alt="Headset Gamer Sem Fio Astro A50 Gen 5 Branco com Base Station" />
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
            <img style="object-fit: contain; width: 250px; cursor: pointer;" id="logo" src="view/assets/EDG.png" alt="Logo Electronic Desire Gaming rodapé" />
            <span>Todos os direitos reservados ©</span>
        </footer>    

    </div>

</body>
</html>
