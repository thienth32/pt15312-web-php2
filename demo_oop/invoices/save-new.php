<?php
require_once 'Invoice.php';
$data = $_POST;
$file = $_FILES['file'];
$image = '';
if ($file['size'] > 0) {
    $image = 'uploads/' . $file['name'];
    move_uploaded_file($file['tmp_name'], "../" . $image);
    $data['image'] = $image;
}

$model = new Invoice();
$model->insert($data);
header('location: index.php');
