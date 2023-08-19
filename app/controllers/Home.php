<?php 

class Home extends Controller{
    public function index()
    {
        $this->view('template/home/header');
        if(isset($_POST['cari'])){
            $data = $this->model('Home_model')->getSearchNews($_POST['cari']);
            $this->view('home/index', $data);
        }else{
            $data = $this->model('Home_model')->getAllNews();
            $this->view('home/index', $data);
        }
        $this->view('template/home/footer');
    }

    public function news($id)
    {
        $data = $this->model('Home_model')->getNews($id);
        $data['user'] = $this->model('Home_model')->getUser($data['user_id']);
        $this->view('template/home/header');
        $this->view('home/news', $data);
        $this->view('template/home/footer');
    }

}