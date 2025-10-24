<?php

include 'config.php';
include 'system/ShopSys.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach(showProduct($conn) as $list): ?>
        <li>
            <a href="index.php?route=product&idproduto=<?php echo $list; ?>">
            <?php print_r($list); ?>
        </li>
        <?php endforeach ?>
    </ul>
</body>
</html>