<?php


namespace App\models;


use PDO;

class ProductModel extends Model implements BaseInterface
{

    public function getAll($pg)
    {
//        $page = $_REQUEST['pg'];

        $page = $pg;
        $sql = "SELECT * FROM `products` LIMIT ?,?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1,  5 * ($page - 1), PDO::PARAM_INT);
        $stmt->bindValue(2, 5, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function create(object $product)
    {
        $sql = "INSERT INTO products(name_product, cost, image, vendor) values (?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $product->name);
        $stmt->bindParam(2, $product->cost);
        $stmt->bindParam(3, $product->image);
        $stmt->bindParam(4, $product->vendor);
        return $stmt->execute();
//            $stmt->closeCursor();

    }

    public function detroy()
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM `products` WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public function edit(object $product)
    {
        $id = $_GET['id'];
        $sql = "CALL editDB(?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $product->name);
        $stmt->bindParam(3, $product->cost);
        $stmt->bindParam(4, $product->image);
        $stmt->bindParam(5, $product->vendor);
        return $stmt->execute();
    }

    public function getDetail()
    {
        $id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function search($name)
    {
        $name = $_POST['search'];
        $sql = "SELECT * FROM products WHERE name_product LIKE '%".$name."%'";
        $stmt = $this->conn->query($sql);
//        $stmt->bindParam(1, $name);
//        $stmt->execute();
        return $stmt->fetchAll();
    }
}