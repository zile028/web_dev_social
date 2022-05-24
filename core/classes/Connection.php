<?php

class Connection
{
    public function __construct($host, $dbname, $username, $password)
    {
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        } catch (PDOException $err) {
            echo $err->getMessage();
            die();
        }
    }
}

$Connection = new Connection($cfg["db"]["host"], $cfg["db"]["dbname"], $cfg["db"]["username"], $cfg["db"]["password"]);


