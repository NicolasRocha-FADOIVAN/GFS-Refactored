<?php 

function profileHolder() {

    if(!isset($_SESSION['id'])) {
        $element='

        <a href="index.php?route=login"><b>Entre ou Cadastre-se</b></a>
        
        ';
    } else {
        $element='

        <a href="index.php?route=account"><img class="profile" src="view/tela-principal/assets/user-person-icon-689f9b.png" alt="Logo Electronic Desire Gaming" /></a>
        
        ';
    }

    echo $element;
}

function recommendedProducts($product_name, $product_description, $product_price, $product_image) {

    $element="

    <div class='produtos'>
        <img src=$product_image
            class='image-produtos' alt='imagem do produto' />
        <p class='paragrafo'><b>$product_name</b></p>                
        <p class='preço'><b>R$ $product_price</b></p>
        <button class='botao'>Comprar</button>
    </div>
    
    ";

    echo $element;
}

function recommendedBrands() {

}

