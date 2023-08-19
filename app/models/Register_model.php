<?php 

class Register_model{
    private $table = 'tb_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addUser($data)
    {
        $query = "INSERT INTO " . $this->table . " VALUES " 
                    . "(:user_id, :user_name, :user_pass, 0)";
        $this->db->runQuery($query);

        $this->db->bindQuery('user_id', base64_encode($data['username']) . '_' . base64_encode(date('Y-m-d_H-i-s')));
        $this->db->bindQuery('user_name', $data['username']);
        $this->db->bindQuery('user_pass', base64_encode($data['pass']));

        $this->db->executeQuery();
        return $this->db->getRowCount();
    }
}