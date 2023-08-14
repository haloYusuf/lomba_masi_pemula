<?php 

class Login_model{
    private $table = 'tb_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($data)
    {
        $this->db->runQuery('SELECT * FROM ' . $this->table . ' WHERE user_name=:user_name AND user_pass=:user_pass');

        $this->db->bindQuery('user_name', $data['username']);
        $this->db->bindQuery('user_pass', base64_encode($data['pass']));

        return $this->db->result();
    }

    public function addUser($data)
    {
        $query = "INSERT INTO " . $this->table . " VALUES " 
                    . "('', :user_name, :user_pass, 1)";
        $this->db->runQuery($query);

        $this->db->bindQuery('user_name', $data['username']);
        $this->db->bindQuery('user_pass', base64_encode($data['pass']));

        $this->db->executeQuery();
        return $this->db->getRowCount();
    }
}