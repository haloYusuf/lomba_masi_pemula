<?php 

class Content extends Controller{
    public function index()
    {
        $this->view('template/header');
        $this->view('content/index');
        $this->view('template/footer');
    }

    public function submitContent()
    {
        $fileName = $_COOKIE['username'] . '_' . date('Y-m-d_H-i-s') . '.png';
        $_POST['gambar'] = $fileName;
        $fileAllow = array('jpg', 'png', 'jpeg', 'img');
        $ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);

        if($_FILES['gambar']['size'] > 2*1048576){
            Flasher::setFlasher('gagal', 'Submit. File > 2MB', 'danger');
            header('Location: ' . BASE_URL . '/content');
        }else if (!in_array($ext, $fileAllow)) {
            Flasher::setFlasher('gagal', 'Submit. File bukan gambar', 'danger');
            header('Location: ' . BASE_URL . '/content');
        }else {
            if($this->model('Content_model')->uploadData($_POST) > 0){
                move_uploaded_file($_FILES['gambar']['tmp_name'], BASE_IMG_PATH . $fileName);
                header('Location: ' . BASE_URL . '/home');
            }else{
                echo 'GAGAL';
            }
        }
        exit;
    }

}