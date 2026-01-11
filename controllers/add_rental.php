<?php

session_start();

include __DIR__ . "/../src/rentale.php";


$title = $_POST["title"];
$description = $_POST["description"];
$city = $_POST["city"];
$addrees = $_POST["address"]; 
$price = $_POST["price"];
$host_id = $_SESSION['user_id'];
$image = $_FILES["image"]["name"];
$imageName = uniqid() . "-" . $image;
$image_destination = __DIR__ . "/../images/" . $imageName;

move_uploaded_file($_FILES["image"]["tmp_name"], $image_destination);

$db = new Database();

$conn = $db->getconnection();

$query="insert into Rental (title,rental_description,addrees,city,pricepernight,image_name,host_id) value (:title,:rental_description,:addrees,:city,:pricepernight,:image_name,:host_id);";

$stmt=$conn->prepare($query);

$stmt->execute([
    "title"=> $title,"rental_description"=>$description,"addrees"=>$addrees,"city"=>$city,"pricepernight"=>$price,"image_name"=>$imageName,"host_id"=>$host_id
]);

header("location: /view/host.dashboard.view.php");
exit();