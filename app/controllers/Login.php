<?php 

class Login extends Controller{
    public function index()
    {
        $this->view('login/index');
    }

    public function proccessLogin()
    {
        if($this->model('Login_model')->getUser($_POST) > 0){
            setcookie('data', base64_encode($_POST['username']), time() + (60 * 60 * 24 * 7), '/');
            header('Location: ' . BASE_URL . '/home');
        }else{
            Flasher::setFlasher('gagal', 'login', 'danger');
            header('Location: ' . BASE_URL . '/login');
        }
        exit;
    }
}