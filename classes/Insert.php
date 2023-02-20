<?php

require_once "Conection.php";

class Insert
{
    public function Insert ($name,$email){
        $db = new Conection();
        $conn = $db->getConnection();
        $stmt = $conn->prepare("INSERT INTO users (name, email ) VALUES (:name, :email) ");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);

        try {
            $stmt->execute();
            header("Location:index.php?sucess=hya");
            return;
        } catch (PDOException $ex) {
            echo "Falha ao insirir os daados: " . $ex->getMessage();
            return;
        }
    }
}
