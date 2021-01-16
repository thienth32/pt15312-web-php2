<?php
require_once './User.php';
$data = $_POST;
$file = $_FILES['file'];
$avatar = '';
if ($file['size'] > 0) {
    $avatar = 'uploads/' . uniqid() . '-' . $file['name'];
    move_uploaded_file($file['tmp_name'], "./" . $avatar);
    $data['avatar'] = $avatar;
}
$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

$model = new User();
$model->insert($data);
header('location: index.php');
