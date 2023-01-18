<?php

class Db 
{
    private $dsn = "mysql:host=localhost;dbname=php_tp9";
    private $user = "root";
    private $pass = "";
    private $connection = null;

    protected function connectDb()
    {
        try {
            $this->connection = new PDO($this->dsn, $this->user, $this->pass);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    protected function selectQuery($q)
    {
        $rs = $this->connection->query($q);
        return $rs;
    }

    protected function updateQuery($q){
        $rs = $this->connection->exec($q);
        return $rs;
    }
}


