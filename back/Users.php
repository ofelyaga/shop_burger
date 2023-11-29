<?php

namespace modules;

class Users implements Module
{
    private $db;
    static private $instance = null;

    public static function getInstance(): Users{
        if(Users::$instance == null) Users::$instance = new Users();
        return Users::$instance;
    }

    public function __construct(){
       $this->db = new \db\MySQL('users');
    }

    public function getName(): string{
        return 'Users';
    }

    public function getDB(): \db\MySQL{
        return $this->db;
    }

    public function getUsers(): array{
        return Users::getInstance()->getDB()->get();
    }
}