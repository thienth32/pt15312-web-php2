<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\User;
use Faker;

class HomeController extends BaseController{

    public function index(){
        $keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
        if($keyword != ""){
            $cates = Category::where("cate_name", "like", "%$keyword%")
                            ->get();
        }else{
            $cates = Category::all();
        }
        
        $cates->load('products');
        $this->render('cate-list', compact('cates'));
    }

    public function loginForm(){
        $this->render('auth.login');
    }

    public function postLogin(){
        $email = isset($_POST['email']) == true ? trim($_POST['email']) : "";
        $password = isset($_POST['password']) == true ? trim($_POST['password']) : "";

        if(empty($email) || empty($password)){
            header('location: ' . BASE_URL . 'login?msg=Tài khoản/mật khẩu không hợp lệ');
            die;
        }

        $user = User::where('email', $email)->first();

        if(
            empty($user) || 
            !password_verify($password, $user->password)
        ){
            header('location: ' . BASE_URL . 'login?msg=Tài khoản/mật khẩu không đúng');
            die;
        }

        $_SESSION[AUTH] = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role
        ];
        header('location: ' . BASE_URL);

    }

    public function logout(){
        unset($_SESSION[AUTH]);
        header('location: ' . BASE_URL);
    }

    public function fakeUser(){
        $faker = Faker\Factory::create();
        for($i = 0; $i < 100; $i++){
            $model = new User();
            $model->name = $faker->name;
            $model->avatar = 'https://picsum.photos/640/480';
            $model->email = $faker->email;
            $model->role = 1;
            $model->password = password_hash('123456', PASSWORD_DEFAULT);
            $model->save();
        }
        return "Success!";
    }
}


?>