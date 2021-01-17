<?php
require_once '../User.php';
$id = $_GET['id'];
User::destroy($id);
header("location: index.php");
