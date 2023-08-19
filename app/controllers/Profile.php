<?php 

class Profile extends Controller{
    public function index($id = '')
    {
        if($id == base64_decode($_COOKIE['data']) || empty($id)){
            $user = $this->model('Profile_model')->getUserID($_COOKIE['data']);
            $data = $this->model('Profile_model')->getUserNews($user['user_id']);
            $this->view('template/profile/header', $user);
            $this->view('profile/index', $data);
        }else{
            echo 'CANT PROCCESS URL.';
        }
    }

    public function logout($id = '')
    {
        setcookie('data', '', -1, '/');
        header('Location: ' . BASE_URL . '/login');
        exit;
    }

    public function request($id = '')
    {
        $user = $this->model('Profile_model')->getUserID($_COOKIE['data']);
        if(($id == base64_decode($_COOKIE['data']) || empty($id)) && $user['user_access'] == 1){
            $data = $this->model('Profile_model')->getRequestNews();
            $this->view('template/profile/header', $user);
            $this->view('profile/request', $data);
        }else{
            echo 'CANT PROCCESS URL.';
        }
    }

    public function acc($id, $news)
    {
        $user = $this->model('Profile_model')->getUserID($_COOKIE['data']);
        if($id == base64_decode($_COOKIE['data']) && $user['user_access'] == 1){
            if($this->model('Profile_model')->accNews($news) > 0){
                header('Location: ' . BASE_URL . '/home');
                exit;
            }else{
                echo 'CANT EXECUTE URL.';
            }
        }else{
            echo 'CANT PROCCESS URL.';
        }
    }

    public function del($id, $news)
    {
        $user = $this->model('Profile_model')->getUserID($_COOKIE['data']);
        if($id == base64_decode($_COOKIE['data']) && $user['user_access'] == 1){
            $data = $this->model('Profile_model')->getNews($news);
            if($this->model('Profile_model')->delNews($news) > 0){
                unlink(BASE_IMG_PATH . base64_decode($data['news_img']));
                echo BASE_IMG_PATH . base64_decode($data['news_img']);
                header('Location: ' . BASE_URL . '/home');
                exit;
            }else{
                echo 'CANT EXECUTE URL.';
            }
        }else{
            echo 'CANT PROCCESS URL.';
        }
    }

}