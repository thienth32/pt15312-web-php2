<?php
require_once './Product.php';
$products = Product::all();



?>

<ul>
    <?php foreach($products as $pro): ?>
    <li><?= $pro->name ?> - <?= $pro->cate_id ?> - <?= $pro->getCateName() ?></li>
    <?php endforeach ?>
</ul>