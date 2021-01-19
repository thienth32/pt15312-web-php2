<?php
require_once 'Invoice.php';
$data = $_POST;
$file = $_FILES['file'];
$invoice_image = '';
if ($file['size'] > 0) {
    $invoice_image = 'uploads/' . $file['name'];
    move_uploaded_file($file['tmp_name'], "../" . $invoice_image);
    $data['invoice_image'] = $invoice_image;
}

$model = new Invoice();
$model->insert($data);
header('location: index.php');
