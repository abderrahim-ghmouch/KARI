<?php

include __DIR__ . "/Database.php";
class Rental
{
    private $id ;
    private $hostId;
    private $title;
    private $description;
    private $address;
    private $city;
    private $pricePerNight;
    private $image;
    public function __construct(
        $hostId = "",
        $title = "",
        $description = "",
        $address = "",
        $city = "",
        $pricePerNight = "",
        $image = "",
        
    ) {
        $this->hostId = $hostId;
        $this->title = $title;
        $this->description = $description;
        $this->address = $address;
        $this->city = $city;
        $this->pricePerNight = $pricePerNight;
        $this->image = $image;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getHostId()
    {
        return $this->hostId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getPrice()
    {
        return $this->pricePerNight;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setHostId($hostId)
    {
        $this->hostId = $hostId;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

   

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setPrice($price)
    {
        $this->pricePerNight = $price;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
    
    public function createRentale(){
    
            $db=new Database();
            $conn=$db->getconnection();

        $query="insert into Rental (title,address,city,pricepernight,capacity,image_name)";
        $stmt=$conn->prepare($query);
        $stmt->execute([$this->gettitle(),$this->getDescription(),$this->getAddress(),$this->getCity(),$this->getPrice(),$this->getImage()]);
    }
    public function upsateRentale(){


        $db=new Database();
        $conn=$db->getconnection();

    }

    public function creat($title,$description,$addrees,$city,$price,$imageName,$host_id){


$db = new Database();

$conn = $db->getconnection();

$query="insert into Rental (title,rental_description,addrees,city,pricepernight,image_name,host_id) value (:title,:rental_description,:addrees,:city,:pricepernight,:image_name,:host_id);";

$stmt=$conn->prepare($query);

$stmt->execute([
    "title"=> $title,"rental_description"=>$description,"addrees"=>$addrees,"city"=>$city,"pricepernight"=>$price,"image_name"=>$imageName,"host_id"=>$host_id
]);

header("location: /view/host.dashboard.view.php");
exit();
    
    }
    
}
