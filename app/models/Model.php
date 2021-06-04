<?php


namespace App\models;


class Model
{
    protected \PDO $conn;

    public function __construct()
    {
        $dbh = new Database();
        $this->conn = $dbh->connect();
    }
}