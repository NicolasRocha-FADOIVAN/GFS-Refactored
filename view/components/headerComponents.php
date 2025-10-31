<<<<<<< HEAD
<?php 

function profile() {

    if(!isset($_SESSION['id'])) {
        $element='

        <a href="index.php?route=login"><b>Entre ou Cadastre-se</b></a>
        
        ';
    } else {
        $element='

        <a href="index.php?route=account"><img class="profile" src="view/assets/profile.png" alt="Logo Electronic Desire Gaming" /></a>
        
        ';
    }

    echo $element;
=======
<?php 

function profile() {

    if(!isset($_SESSION['id'])) {
        $element='

        <a href="index.php?route=login"><b>Entre ou Cadastre-se</b></a>
        
        ';
    } else {
        $element='

        <a href="index.php?route=account"><img class="profile" src="view/assets/profile.png" alt="Logo Electronic Desire Gaming" /></a>
        
        ';
    }

    echo $element;
>>>>>>> 9ef9d2c7d71c0f45d9d1c9a5568d83cbc03aeb91
}