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

    
}