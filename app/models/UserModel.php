<?php


namespace App\models;


class UserModel extends Model implements BaseInterface
{
    public function getAll($pg)
    {
        $sql = "SELECT * FROM users";
    }

    public function findByEmailPassword($request)
    {
        $sql = "SELECT `id`, `name_user`, `email`, `address`, `image` FROM users WHERE `email` = ? AND `pwd` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $request['email']);
        $stmt->bindParam(2, $request['pwd']);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}