<?php

include_once 'controller/Controller.php';

function catalog($conn) {

    return getProducts($conn);
}