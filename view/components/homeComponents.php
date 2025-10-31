<<<<<<< HEAD
<?php 

function products($product_name, $product_price, $product_image) {

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
=======
<?php 

function products($product_name, $product_price, $product_image) {

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
>>>>>>> 9ef9d2c7d71c0f45d9d1c9a5568d83cbc03aeb91
}