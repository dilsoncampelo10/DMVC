<?php
namespace core;

use core\Config;

use PDO;
use PDOException;

class Model{
    protected $con;
    public function __construct()
    {
        try{
            $this->con = new PDO(Config::DB_DRIVER.':dbname='.Config::DB_NAME.';'.Config::DB_HOST,Config::DB_USER,Config::DB_PASS); 
        } catch(PDOException $e){
            echo 'Problemas com conexão: '.$e->getMessage();
        }
         
    }
}