<?php 

class Home extends Controller{
    public function index()
    {
        $data = $this->model('Home_model')->getAllNews();
        $this->view('template/header');
        $this->view('home/index', $data);
        $this->view('template/footer');
    }

    public function news($id)
    {
        $data = $this->model('Home_model')->getNews($id);
        $data['user'] = $this->model('Home_model')->getUser($data['user_id']);
        $this->view('template/header');
        $this->view('home/news', $data);
        $this->view('template/footer');
    }

}