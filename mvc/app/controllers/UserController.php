<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController
{
    public function index()
    {
        include_once './app/views/user/index.blade.php';
    }
}
