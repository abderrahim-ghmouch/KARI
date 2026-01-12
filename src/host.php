<?php

require_once __DIR__ . "/User.php";

class Host extends User
{

    public function __construct($name = "", $lastname = "", $email = "", $password_hash = "")
    {
        parent::__construct($name, $lastname, $email, $password_hash, 'host');
    }

    public function getById($id)
    {
        $db = new Database();
        $conn = $db->getconnection();

        $query = "SELECT * FROM USERS WHERE ID = :id AND roles = 'host'";
        $stmt = $conn->prepare($query);
        $stmt->execute([":id" => $id]);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            return new Host(
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