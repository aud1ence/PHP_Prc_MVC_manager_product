<?php

namespace App\controllers;

use App\Product;
use App\services\ProductService;

class ProductController
{
    protected $productService;

    public function __construct()
    {
        $this->productService = new ProductService();
    }

    public function index($pg)
    {

        $products = $this->productService->getAll($pg);
        require_once "app/views/list.php";
    }

    public function add()
    {

        $this->productService->create();
        require_once "app/views/add.php";
    }

    public function delete()
    {
        $this->productService->delete();
    }

    public function edit()
    {
        $products = $this->productService->getDetail();
        $this->productService->edit();
        include_once "app/views/edit.php";
    }

    public function search($value)
    {
        $products = $this->productService->search($value);
        include_once "app/views/search.php";
    }

    public function detail()
    {
        $products = $this->productService->getDetail();
        include_once "app/views/detail.php";
    }

}