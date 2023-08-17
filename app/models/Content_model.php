<?php 

class Content_model{
    private $table = 'tb_news';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function uploadData($data)
    {

        $dataUser = $this->getId();
        $newsId = base64_encode($_COOKIE['data']) . '_' . $data['Judul'] . '_' . date('Y-m-d_H-i-s');

        $query = "INSERT INTO " . $this->table . " VALUES "
                    . "(:news_id, :user_id, :news_title, :news_img, :news_content, now(), 1)";
        $this->db->runQuery($query);

        $this->db->bindQuery('news_id', base64_encode($newsId));
        $this->db->bindQuery('user_id', $dataUser['user_id']);
        $this->db->bindQuery('news_title', base64_encode($data['Judul']));
        $this->db->bindQuery('news_img', base64_encode($data['gambar']));
        $this->db->bindQuery('news_content', base64_encode($data['isi']));

        $this->db->executeQuery();
        return $this->db->getRowCount();
    }

    private function getId()
    {
        $this->db->runQuery('SELECT * FROM tb_user WHERE user_name=:user_name');
        $this->db->bindQuery('user_name', base64_decode($_COOKIE['data']));
        return $this->db->result();
    }
}