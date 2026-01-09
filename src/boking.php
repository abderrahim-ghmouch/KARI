<?php

class booking 
{
    private $id;

    private $rental_id;

    private $user_id;

    private $start_date;

    private $end_date;

    private $total_price;
//getters
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


//setters


    public function setId($id){

        $this->id=$id;

    }

    public function setrentalid($rental_id){
        
        $this->rental_id=$rental_id;

    }
    
    public function userId($user_id){

        $this->user_id=$user_id;

    }
    
    public function setstart_date($start_date){

        $this->start_date=$start_date;

    }   
public function setend_date($end_date){

        $this->end_date=$end_date;
}
    

        public function settotal_price($total_price){

            $this->total_price=$total_price;
        }







}