<?php

class Review 
{
    private $id;

    private $rental_id;

    private $user_id;

    private $rating;

    private $comment;

    private $created_at;

    public function __construct(
        $id="",
        $rental_id="",
        $user_id="",
        $rating="",
        $comment="",
        $created_at=""
    ) {
        $this->id=$id;
        $this->rental_id = $rental_id;
        $this->user_id = $user_id;
        $this->rating = $rating;
        $this->comment = $comment;
        $this->created_at = $created_at;
    }

    public function getId(){

        return $this->id;
    }

    public function getRentalId(){

        return $this->rental_id;
    }

    public function getUserId(){

        return $this->user_id;
    }

    public function getRating(){

        return $this->rating;
    }

    public function getComment(){

        return $this->comment;
    }

    public function getCreatedAt(){

        return $this->created_at;
    }

    public function getReviewsByRentalId($rental_id){
        $db = new Database();
        $conn = $db->getconnection();

        $query = "SELECT * FROM reviews WHERE rental_id = :rental_id";
        $stmt = $conn->prepare($query);
        $stmt->execute([":rental_id" => $rental_id]);

        $reviews = [];
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $review = new Review(
                $row['id'],
                $row['rental_id'],
                $row['user_id'],
                $row['rating'],
                $row['comment'],
                $row['created_at']
            );
            $reviews[] = $review;
        }
        return $reviews;
    }

    public function addReview(){
        $db = new Database();
        $conn = $db->getconnection();

        $query = "INSERT INTO reviews (rental_id, user_id, rating, comment) 
                VALUES (:rental_id, :user_id, :rating, :comment)";

        $stmt = $conn->prepare($query);
        return $stmt->execute([
            ":rental_id" => $this->rental_id,
            ":user_id" => $this->user_id,
            ":rating" => $this->rating,
            ":comment" => $this->comment
        ]);
    }
}