<?php

require_once '../User.php';

// hiển thị danh sách user trong db
$users = User::all();
var_dump($users);
