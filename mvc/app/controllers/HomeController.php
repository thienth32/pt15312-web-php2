<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\User;

class HomeController extends BaseController
{

    public function index()
    {
        $keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
        if ($keyword != "") {
            $cates = Category::where("cate_name", "like", "%$keyword%")->get();
        } else {
            $cates = Category::all();
        }
        $cates->load('products');
        $this->render('cate-list', compact('cates'));
    }
    public function loginForm()
    {
        $this->render('auth.login');
        // return "trang login ở đây";
    }
    public function postLogin()
    {
        $email = isset($_POST['email']) == true ? trim($_POST['email']) : "";
        $password = isset($_POST['password']) == true ? trim($_POST['password']) : "";

        if (empty($email) || empty($password)) {
            header('location: ' . BASE_URL . 'login?msg=tài khoản / mật khẩu ko hợp lệ');
        }
        $user = User::where('email', $email)->first();

        if (empty($user) || !password_verify($password, $user->password)) {
            header('location: ' . BASE_URL . 'login?msg=tài khoản / mật khẩu ko hợp lệ');
            die;
        }

        $_SESSION[AUTH] = [
            'id' => $user->id,
            'id' => $user->name,
            'id' => $user->email,
            'id' => $user->role,

        ];
        header('location: ' . BASE_URL);
        // return "trang login ở đây";
    }
    public function logout()
    {
        unset($_SESSION[AUTH]);
        header('location: ' . BASE_URL . 'login');
        // return "trang login ở đây";
    }

    public function about()
    {
        return "About page here!";
    }
}


?>
<!-- class HomeController
{
    public function index()
    {
        $cates = Category::all();
        include_once './app/views/cate-list.php';
    }
    public function about()
    {
        # code...
        return " about here";
    }
} -->