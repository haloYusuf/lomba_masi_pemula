<?php 

class Home extends Controller{
    public function index()
    {
        $data = $this->model('Home_model')->getAllNews();
        $this->view('template/header');
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}