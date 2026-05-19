<?php

use Phalcon\Mvc\Model;

class Users extends Model {
    public $id;
    public $name;
    public $email;
    public $number;
    public $city;
    public $state;
    public $country;
    public $pincode;
    public $created_at;

    public function initialize()
    {
        $this->setSource('users');
    }
}