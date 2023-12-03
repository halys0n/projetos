<?php

namespace App\Db;
use \PDO;
class Database{
    const HOST = 'localhost';
    const NAME = 'projetos';
    const USER = 'root';
    const PASS = '';

    private $table;

    private $connection;

    public function __constructor($table = null){
        $this->table->$table;
        $this->setConnection();
    }

    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR:' .$e->getMessage());
        }
    }

    public function insert($values){
        $campos = array_keys($values);
        $bind = array_pad([],const($campos),'?');
        $query = 'INSERT INTO '. $this->table.'('.implode(',',$campos).') VALUES('.implode(',',$bind).')';
    }
}