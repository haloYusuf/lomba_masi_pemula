<?php 

class Profile_model{
    private $tableNews = 'tb_news';
    private $tableUser = 'tb_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserNews($id)
    {
        $this->db->runQuery('SELECT * FROM ' . $this->tableNews . ' WHERE user_id=:user_id');
        $this->db->bindQuery('user_id', $id);
        return $this->db->resultAll();
    }

    public function getNews($id)
    {
        $this->db->runQuery('SELECT * FROM ' . $this->tableNews . ' WHERE news_id=:news_id');
        $this->db->bindQuery('news_id', $id);
        return $this->db->result();
    }

    public function getUserID($id)
    {
        $this->db->runQuery('SELECT * FROM ' . $this->tableUser . ' WHERE user_name=:user_name');
        $this->db->bindQuery('user_name', base64_decode($id));
        return $this->db->result();
    }

    public function getRequestNews()
    {
        $this->db->runQuery('SELECT * FROM ' . $this->tableNews . ' WHERE news_status=0');
        return $this->db->resultAll();
    }

    public function accNews($id)
    {
        $this->db->runQuery('UPDATE ' . $this->tableNews . ' SET news_status=1 WHERE news_id=:news_id');
        $this->db->bindQuery('news_id', $id);
        $this->db->executeQuery();
        return $this->db->getRowCount();
    }

    public function delNews($id)
    {
        $this->db->runQuery('DELETE FROM ' . $this->tableNews . ' WHERE news_id=:news_id');
        $this->db->bindQuery('news_id', $id);
        $this->db->executeQuery();
        return $this->db->getRowCount();
    }
}