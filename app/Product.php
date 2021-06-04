<?php

namespace App;

class Product
{
    public $id;
    public $name;
    public $cost;
    public $image;
    public $vendor;

    public function __construct($data)
    {
        $this->name = $data['name_product'];
        $this->cost = $data['cost'];
        $this->image = $data['image'];
        $this->vendor = $data['vendor'];
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $image
     */
//    public function setImage($_FILES): void
//    {
//        $this->image = $_FILES["fileToUpload"]["name"];
//    }
}