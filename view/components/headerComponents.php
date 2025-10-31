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
}