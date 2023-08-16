<?php 

class Home_model{
    private $tableNews = 'tb_news';
    private $tableUser = 'tb_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllNews()
    {
        $this->db->runQuery('SELECT * FROM ' . $this->tableNews);
        return $this->db->resultAll();
    }

    public function getNews($id)
    {
        $this->db->runQuery('SELECT * FROM ' . $this->tableNews . ' WHERE news_id=:news_id');
        $this->db->bindQuery('news_id', base64_decode($id));
        return $this->db->result();
    }

    public function getUser($id)
    {
        $this->db->runQuery('SELECT * FROM ' . $this->tableUser . ' WHERE user_id=:user_id');
        $this->db->bindQuery('user_id', $id);
        return $this->db->result();
    }

}