<?php
namespace App\models;

class Database
{
    protected string $dsn;
    protected string $username;
    protected string $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=manager_product';
        $this->username = 'root';
        $this->password = '1234';
    }

    public function connect(): \PDO
    {
        try {
            return new \PDO($this->dsn, $this->username, $this->password);
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
            die();
        }
    }
}