<?php
include_once 'Invoice.php';

$id = $_GET['id'];
Invoice::destroy($id);
header("location: index.php");
