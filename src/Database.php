<?php

class Database
{

    private $host;

    private $dbname;

    private $username;

    private $password;
    

    protected function connection(){

        $this->host="localhost";
        $this->dbname="KARI";
        $this->username="abdo";
        $this->password="abdoabdo";

        try{
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;

            $connection=new PDO($dsn,$this->username,$this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connect";
            return $connection;
        

        }catch(PDOException $e)
        {
        echo $e->getMessage(); 
        }

    }

}
