<?php 

class App{

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        //Cek apakah ada file url[0] di folder controller
        if(isset($url[0])){
            if(file_exists('../app/controllers/' . $url[0] . '.php')){
                if(isset($_COOKIE['username']) && !empty($_COOKIE['username'])){
                    if((strtolower($url[0]) == 'login' || strtolower($url[0]) == 'register')){
                        $url[0] = 'home';
                        header('Location: ' . BASE_URL . '/home');
                    }
                }else{
                    if((strtolower($url[0]) == 'content')){
                        $url[0] = 'login';
                        header('Location: ' . BASE_URL . '/login');
                    }
                }
                $this->controller = $url[0];
                //Hapus value parameter dari array url
                unset($url[0]);
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //Cek apakah ada method url[1]
        if(isset($url[1])){
            //cek apakah ada method url[1] dalam $this->controller
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //Ambil parameter
        if(!empty($url)){
            $this->params = array_values($url);
        }

        //Jalankan controller & method + kirim params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseURL()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');//Menghapus Slash diakhir
            $url = filter_var($url, FILTER_SANITIZE_URL);//Membersihkan url dari char" aneh
            $url = explode('/', $url);
            return $url;
        }
    }

}