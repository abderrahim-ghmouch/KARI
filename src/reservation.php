<?php

class Reservation 
{
    private $id;

    private $rental_id;

    private $user_id;

    private $start_date;

    private $end_date;

    private $total_price;

    public function getId(){

        return $this->id;


    }
    public function getRentalId(){

        return $this->rental_id;
    }

    public function getuser_id(){

        return $this->user_id;
    }

    public function getStart_date(){

        return $this->start_date;


    }
    public function getEnd_date(){

        return $this->end_date;

    }

    public function gettotal_price(){

        return $this->total_price;
    }

    public function __construct(
        $id="",
        $rental_id="",
        $user_id="",
        $start_date="",
        $end_date="",
        $total_price=""

    ) {
        $this->id=$id;
        $this->rental_id = $rental_id;
        $this->user_id = $user_id;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->total_price = $total_price;
    }

    public function reserve(){
        $db = new Database();
        $conn = $db->getconnection();

        $query = "INSERT INTO RESERVATION (rental_id, user_id, date_debut, date_fin, total_price) 
                VALUES (:rental_id, :user_id, :start_date, :end_date, :total_price)";

        $stmt = $conn->prepare($query);
        $stmt->execute([
            ":rental_id" => $this->rental_id,
            ":user_id" => $this->user_id,
            ":start_date" => $this->start_date,
            ":end_date" => $this->end_date,
            ":total_price" => $this->total_price
        ]);

        return $conn->lastInsertId();
    }

    public function getallresrvation($user_id){
        $db = new Database();
        $conn = $db->getconnection();

        $query = "SELECT * FROM RESERVATION WHERE user_id = :user_id";
        $stmt = $conn->prepare($query);
        $stmt->execute([":user_id" => $user_id]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $reservations = [];

        foreach ($data as $row) {
            $reservation = new Reservation(
                $row['reservation_id'],
                $row['rental_id'],
                $row['user_id'],
                $row['date_debut'],
                $row['date_fin'],
                $row['total_price']
            );
            $reservations[] = $reservation;
        }
        
        return $reservations;
    }

}