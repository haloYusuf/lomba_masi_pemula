<?php 

class Register extends Controller{
    public function index()
    {
        $this->view('register/index');
    }

    public function proccessRegist()
    {
        if($this->model('Register_model')->addUser($_POST) > 0){
            setcookie('username', $_POST['username'], time() + (60 * 60 * 24 * 7), '/');
            header('Location: ' . BASE_URL . '/home');
        }else{
            Flasher::setFlasher('gagal', 'register', 'danger');
            header('Location: ' . BASE_URL . '/register');
        }
        exit;
    }
}