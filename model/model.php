<?php
class DB
{
    public $severname = 'localhost';
    public $username = 'root';
    public $password = '1';
    public $database = 'VINSOFTS';
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->severname, $this->username, $this->password, $this->database);
        mysqli_set_charset($this->conn, 'utf8');
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

    }
    public function executeQuery($string_query){
        $rows = [];
        if($string_query){
            $result = $this->conn->query($string_query);
        }
        if($result && $result->num_rows > 0){
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        return $rows;
    }

    public function deleteQuery($string_query) {
        $result = $this->conn->query($string_query);
        return $result;
    }

    public function updateQuery($string_query) {
        $result = $this->conn->query($string_query);
        return $result;
    }

    public function insertNew($string_query) {
        $result = $this->conn->query($string_query);
        return $result;
    }
}
?>

