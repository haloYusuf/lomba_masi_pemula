<?php 

class Home_model{
    private $tableNews = 'tb_news';
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
}