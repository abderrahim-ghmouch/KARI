<?php

class Traveler extends User
{

    public function __construct($name = "", $lastname = "", $email = "", $password_hash = "")
    {
        parent::__construct($name, $lastname, $email, $password_hash, 'traveler');
    }

    public function getById($id)
    {
        $db = new Database();
        $conn = $db->getconnection();

        $query = "SELECT * FROM USERS WHERE ID = :id AND roles = 'traveler'";
        $stmt = $conn->prepare($query);
        $stmt->execute([":id" => $id]);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            return new Traveler(
                $data['name'],
                $data['lastname'],
                $data['email'],
                $data['passwd']
            );
        } else {
            return null;
        }
    }

}