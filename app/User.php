<?php
namespace App;

class User
{
    public $id;
    public $name;
    public $pwd;
    public $phone;
    public $email;
    public $image;
    public $address;

    public function __construct($data)
    {
        $this->name = $data['name_user'];
        $this->pwd = $data['pwd'];
        $this->phone = $data['phone'];
        $this->email = $data['email'];
        $this->image = $data['image'];
        $this->address = $data['address'];
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
}