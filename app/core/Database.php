<?php 

class Database{

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;

    private $dbh;//Database Helper
    private $stmt;//Statement Query

    public function __construct()
    {
        //Data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->name;

        $option = [
            PDO::ATTR_PERSISTENT => true, //Agar koneksi db selalu terjaga
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //Tampilan jika error  
        ];

        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        }catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function runQuery($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    //Memberikan parameter dalam query
    public function bindQuery($param, $value, $type = null)
    {
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    //Mengeksekusi Query
    public function executeQuery()
    {
        $this->stmt->execute();
    }

    //Menampilkan banyak hasil
    public function resultAll()
    {
        $this->executeQuery();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Menampilakn satu hasil
    public function result()
    {
        $this->executeQuery();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Mengecek Berapa row yang ada / berhasil di modifikasi
    public function getRowCount()
    {
        return $this->stmt->rowCount();
    }

}