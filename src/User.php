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

        $query=("insert into USERS (roles,name,lastname,email,passwd) VALUES (?,?,?,?,?)");
        $stmt=$conn->prepare($query);

        return $stmt->execute( [ $this->role,$this->name,$this->lastname,$this->email,$this->password_hash]);}

     public function login($email, $password) {
        $db = new Database();
        $conn = $db->getconnection();

        $query = "SELECT * FROM USERS WHERE email =:email";
        $stmt = $conn->prepare($query);
        
        $stmt->execute([":email"=>$email]);
    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $user['passwd'])) {
         
            return $user;
        } else {
        
            return false;
        }
    }

public function updatProfile( $id, $firstname, $lastname, $email) {
        try {
            $db = new Database();
            $pdo = $db->getconnection();
            $sql = "UPDATE USERS SET name = :name, lastname = :lastname, email = :email WHERE ID = :id";
            $stmt = $pdo->prepare($sql);
            
            return $stmt->execute([
                ':name'     => $firstname,
                ':lastname' => $lastname,
                ':email'    => $email,
                ':id'       => $id
            ]);
        } catch (PDOException $e) {
           
            return false;
        }
    }


}



    


