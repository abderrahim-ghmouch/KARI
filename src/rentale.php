<?php

class rentale
{

    private $id;
    private $host_id;

    private $title;

    private $description;

    private $date;

    private $address;

    private $city;

    private $price_per_night;
    
    private $capacity;

    private $imageurl;
    
    private $startdate;

    private $endDate;


    public function getId(){
        return $this->id;
    }

    public function gethost_id(){
        return $this->host_id;
    }

    public function getTitle(){

        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;

    }

    public function getDate(){
        $this->date;
    }

    public function getCapacity(): void
    {



    }


    public function getAdress(){
        return $this->address;
    }

    public function getCity(){

        $this->city;
    }
    public function getPrice(){

        $this->price_per_night;
    }

    public function setId($id){

        $this->id=$id;

    }
    
public function sethost_id($host_id){


    $this->host_id=$host_id;

}

public function setTitle($title){
   $this->$title=$title;
}

public function setDescription($description)
{
$this->description=$description;
}

public function setDate($date){
$this->date=$date;
}

public function setAdress($address){
    $this->address=$address;
}
public function setCity($city){
    $this->city=$city;
}

public function  setPrice($price){
$this->price_per_night=$price; }

public function addRentale(){

$query="Insert into ";




}
public function updateRentale(){

}

public function deletRental(){

}
}

