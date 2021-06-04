<?php

namespace App\services;

use App\models\ProductModel;
use App\Product;

class ProductService
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function getAll($pg)
    {
//        $page = 1;

        $data = $this->productModel->getAll($pg);
        $products = [];

        foreach ($data as $item) {
            $product = new Product($item);
            $product->setId($item['id']);
            array_push($products, $product);
        }
        return $products;
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            $name = $_POST['name'];
            $cost = $_POST['cost'];
            $vendor = $_POST['vendor'];
            $data = [
                'name_product' => $name,
                'cost' => $cost,
                'image' => $target_file,
                'vendor' => $vendor
            ];
            $product = new Product($data);
            $this->productModel->create($product);
            header("Location: index.php?page=products&action=list&pg=1");
        }
    }

    public function delete()
    {
        $data = $this->getDetail();
        unlink($data[0]->image);
        $this->productModel->detroy();
        header("Location: index.php?page=products&action=list&pg=1");
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $target_dir = "uploads/";
            $base = basename($_FILES["fileToUploadEdit"]["name"]);
//            var_dump($base);
//            die();
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

            $move = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
//            var_dump($move);
//            die();
            $name = $_POST['name'];
            $cost = $_POST['cost'];
            $image = $target_file;
            $vendor = $_POST['vendor'];
            $data = [
                'name_product' => $name,
                'cost' => $cost,
                'image' => $image,
                'vendor' => $vendor
            ];
            $product = new Product($data);
//            $product->setImage($_FILES);

            $this->productModel->edit($product);
            header("Location: index.php?page=products&action=list&pg=1");
        }
    }

    public function getDetail()
    {
        $data = $this->productModel->getDetail();
        $products = [];

        foreach ($data as $item) {
            $product = new Product($item);
            $product->setId($item['id']);
            array_push($products, $product);
        }
        return $products;
    }

    public function search($value)
    {
//        if ($_REQUEST['REQUEST_METHOD'] == 'POST') {
//            $name = $_POST['search'];
            $data = $this->productModel->search($value);
            $products = [];

            foreach ($data as $item) {
                $product = new Product($item);
                $product->setId($item['id']);
                array_push($products, $product);
            }
            return $products;
//        }
    }


}