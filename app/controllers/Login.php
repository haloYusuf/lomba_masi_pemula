<?php 

class Login extends Controller{
    public function index()
    {
        $this->view('login/index');
    }

    public function register()
    {
        $this->view('login/register');
    }

    public function proccessLogin()
    {
        if($this->model('Login_model')->getUser($_POST) > 0){
            setcookie('username', $_POST['username'], time() + (60 * 60 * 24 * 7), '/');
            header('Location: ' . BASE_URL . '/home');
        }else{
            Flasher::setFlasher('gagal', 'login', 'danger');
            header('Location: ' . BASE_URL . '/login');
        }
        exit;
    }

    public function proccessRegist()
    {
        if($this->model('Login_model')->addUser($_POST) > 0){
            setcookie('username', $_POST['username'], time() + (60 * 60 * 24 * 7), '/');
            header('Location: ' . BASE_URL . '/home');
        }else{
            Flasher::setFlasher('gagal', 'register', 'danger');
            header('Location: ' . BASE_URL . '/login/register');
        }
        exit;
    }
}