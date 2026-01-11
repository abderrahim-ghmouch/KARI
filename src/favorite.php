<?php

class Favorite{
    private $id;
    private $user_id;
    private $rental_id;
    private $created_at;

    public function __construct(
        $id="",
        $user_id="",
        $rental_id="",
        $created_at=""
    ){
        $this->id=$id;
        $this->user_id=$user_id;
        $this->rental_id=$rental_id;
        $this->created_at=$created_at;
    }

    public function getId(){
        return $this->id;
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function getRentalId(){
        return $this->rental_id;
    }

    public function getCreatedAt(){
        return $this->created_at;
    }

    public function getAllFavoritesByUser($user_id){
        $db = new Database();
        $conn = $db->getconnection();

        $query = "SELECT * FROM favorites WHERE user_id = :user_id";
        $stmt = $conn->prepare($query);
        $stmt->execute([":user_id" => $user_id]);

        $favorites = [];
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $favorite = new Favorite(
                $row['id'],
                $row['user_id'],
                $row['rental_id'],
                $row['created_at']
            );
            $favorites[] = $favorite;
        }
        return $favorites;
    }

    public function addToFavorites(){
        $db = new Database();
        $conn = $db->getconnection();

        $query = "INSERT INTO favorites (user_id, rental_id, created_at) VALUES (:user_id, :rental_id, NOW())";
        $stmt = $conn->prepare($query);
        return $stmt->execute([
            ":user_id" => $this->user_id,
            ":rental_id" => $this->rental_id
        ]);
    }

    public function removeFromFavorites(){
        $db = new Database();
        $conn = $db->getconnection();

        $query = "DELETE FROM favorites WHERE user_id = :user_id AND rental_id = :rental_id";
        $stmt = $conn->prepare($query);
        return $stmt->execute([
            ":user_id" => $this->user_id,
            ":rental_id" => $this->rental_id
        ]);
    }

    public function isFavorite($user_id, $rental_id){
        $db = new Database();
        $conn = $db->getconnection();

        $query = "SELECT * FROM favorites WHERE user_id = :user_id AND rental_id = :rental_id";
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ":user_id" => $user_id,
            ":rental_id" => $rental_id
        ]);

        return $stmt->rowCount() > 0;
    }
}