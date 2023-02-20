<?php


class Conection{
    private $host = "localhost";
    private $username = "root";
    private $pass = "";
    private $datebase = "usuarios";
    public $conn;


    public function getConnection(){
        $this->conn = null;
         
        try {
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->datebase,$this->username,$this->pass,); 
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo "Falha ao se connectar com o servidor de bancos de dados: " . $ex->getMessage();
            exit;
        }

        return $this->conn;
    }
}