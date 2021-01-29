<?php

const BASE_URL = "http://localhost/pt15312-web-php2/mvc/";
const PUBLIC_URL = BASE_URL . 'public/';
const THEME_ASSET_URL = PUBLIC_URL . 'theme/';
const MEMBER_ROLE = 1;
const ADMIN_ROLE = 200;
const AUTH = 'session_auth';

function checkAuth($role = MEMBER_ROLE){
    if(
        !isset($_SESSION[AUTH]) 
        || empty($_SESSION[AUTH])
        || $_SESSION[AUTH]['role'] < $role
    ){
        header('location: ' . BASE_URL . 'login');die;
    }
}


?>