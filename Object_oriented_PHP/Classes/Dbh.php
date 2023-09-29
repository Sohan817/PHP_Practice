<?php
class Dbh
{
    private $dsn = "mysql:hose=localhost; dbname=my_first_database;";
    private $dbusername = "root";
    private $dbpassword = "";

    protected function connect()
    {
        try {
            $pdo = new PDO($this->dsn, $this->dbusername, $this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Connection Failed" . $e->getMessage());
        }
    }
}
