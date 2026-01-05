<?php

class Database
{

    private $host;

    private $dbname;

    private $username;

    private $password;

    private $pdo;
    


    public function __construct(){

    $config =require __DIR__ . '/../config/database.php';

        $this->host=$config['host'];
        $this->dbname=$config['dbname'];
        $this->username=$config['username'];
        $this->password=$config['password'];
        $this->connect();
    }

private function connect(){
try{

    $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
    $this->pdo = new PDO($dsn,$this->username,$this->password);

}catch(PDOException $e){
    echo  $e->getMessage();
}

}

public function getconnection(){
    return $this->pdo;
}
}
