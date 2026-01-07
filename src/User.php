<?php
require_once __DIR__ . "/Database.php"; 
class  User{
    private $Id;

    private $name;
    
    private $lastname;

    Private $email;

    Private $password_hash;

    private $role;

    public function __construct($name,$lastname,$email,$password_hash,$role){ 
        
        $this->name=$name;
        $this->lastname=$lastname;
        $this->email=$email;
        $this->password_hash=$password_hash;
        $this->role=$role;
    
    }
    public function register()
    {
        $db= new Database;
        $conn=$db->getconnection();

        $query=("insert into USERS (roles,NAME,lastname,email,passwd) VALUES (?,?,?,?,?)");
        $stmt=$conn->prepare($query);

        return $stmt->execute( [ $this->role,$this->name,$this->lastname,$this->email,$this->password_hash]);}

}

    


