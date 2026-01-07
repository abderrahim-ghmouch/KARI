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



public function updateProfile( $name,$lastnmae,$email,$id){
    
    $db = new Database();
   $conn = $db->getconnection();
    $query="update Users SET name = :name ,lastname :lastname , email= :email where ID =:id";
$stmt = $conn->prepare($query);
    $stmt->execute([
        ':name'     => $name,
        ':email'    => $email,
        ':id'       => $id
    ]);
}

}



    


