<?php

include __DIR__ . "/Database.php";
class Rental
{
    private $id;
    private $hostId;
    private $title;
    private $description;
    private $address;
    private $city;
    private $pricePerNight;
    private $image;
    public function __construct(
        $id="",
        $hostId = "",
        $title = "",
        $description = "",
        $address = "",
        $city = "",
        $pricePerNight = "",
        $image = "",

    ) {
        $this->id=$id;
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

    public function getAll()
    {
        $db = new Database();

        $conn = $db->getconnection();

        $query = "select * from Rental order by rental_id desc";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $rentals = [];

        foreach ($results as $result) {
            $rental = new Rental(
                $result['rental_id'],
                $result['host_id'],
                $result['title'],
                $result['rental_description'],
                $result['addrees'],
                $result['city'],
                $result['pricepernight'],
                $result['image_name']
            );

            $rentals[] = $rental;
        }

        return $rentals;
    }

    public function getByHostId($host_id)
    {
        $db = new Database();

        $conn = $db->getconnection();

        $query = "select * from Rental where host_id=:host_id order by rental_id desc";

        $stmt = $conn->prepare($query);

        $stmt->execute([
            "host_id" => $host_id,
        ]);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $rentals = [];

        foreach ($results as $result) {
            $rental = new Rental(
                $result['rental_id'],
                $result['host_id'],
                $result['title'],
                $result['rental_description'],
                $result['addrees'],
                $result['city'],
                $result['pricepernight'],
                $result['image_name']
            );

            $rentals[] = $rental;
        }

        return $rentals;
    }

    public function create($title, $description, $addrees, $city, $price, $image, $host_id)
    {

        $imageName = $this->uploadImage($image);

        $db = new Database();

        $conn = $db->getconnection();

        $query = "insert into Rental (title,rental_description,addrees,city,pricepernight,image_name,host_id) value (:title,:rental_description,:addrees,:city,:pricepernight,:image_name,:host_id);";

        $stmt = $conn->prepare($query);

        $stmt->execute([
            "title" => $title,
            "rental_description" => $description,
            "addrees" => $addrees,
            "city" => $city,
            "pricepernight" => $price,
            "image_name" => $imageName,
            "host_id" => $host_id
        ]);

        header("location: /view/host.dashboard.view.php");
        exit();

    }

    public function update($title, $description, $addrees, $city, $price, $image,$rental_id)
    {
        $oldImageName = $this->getOldImageName($rental_id);

        if ($image["name"]) {
            $this->deleteImage($oldImageName);
            $imageName = $this->uploadImage($image);
        } else {
            $imageName = $oldImageName;
        }

        $db = new Database();

        $conn = $db->getconnection();

        $query = "update Rental set title=:title,rental_description=:rental_description,addrees=:addrees,city=:city,pricepernight=:pricepernight,image_name=:image_name where rental_id=:rental_id";

        $stmt = $conn->prepare($query);

        $stmt->execute([
            "title" => $title,
            "rental_description" => $description,
            "addrees" => $addrees,
            "city" => $city,
            "pricepernight" => $price,
            "image_name" => $imageName,
            "rental_id"=>$rental_id,
        ]);

        header("location: /view/host.dashboard.view.php");
        exit();

    }

    public function delete($rental_id)
    {
        $oldImageName = $this->getOldImageName($rental_id);

        $this->deleteImage($oldImageName);

        $db = new Database();

        $conn = $db->getconnection();

        $query = "delete from Rental where rental_id=:rental_id";

        $stmt = $conn->prepare($query);

        $stmt->execute([
            "rental_id" => $rental_id,
        ]);

        header("location: /view/host.dashboard.view.php");
        exit();
    }

    private function getOldImageName($rental_id)
    {
        $db = new Database();

        $conn = $db->getconnection();

        $query = "select image_name from Rental where rental_id=:rental_id";

        $stmt = $conn->prepare($query);

        $stmt->execute([
            "rental_id" => $rental_id,
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['image_name'];
    }

    private function uploadImage($file)
    {
        $image = $file["name"];
        $imageName = uniqid() . "-" . $image;
        $image_destination = __DIR__ . "/../images/" . $imageName;


        move_uploaded_file($file["tmp_name"], $image_destination);

        return $imageName;
    }

    private function deleteImage($imageName)
    {
        $imagePath = __DIR__ . "/../images/" . $imageName;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

}
