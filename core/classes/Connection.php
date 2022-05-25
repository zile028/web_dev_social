<?php

class Connection
{
    public function __construct($db)
    {
        try {
            $this->db = new PDO("mysql:host={$db["host"]};dbname={$db["dbname"]}", $db["username"], $db["password"]);
        } catch (PDOException $err) {
            echo $err->getMessage();
            die();
        }
    }
}

$Connection = new Connection($db);
?>
