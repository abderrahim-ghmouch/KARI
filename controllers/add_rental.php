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


$rental=new rental();

$rental->creat($title,$description,$adress,$city,$price,$imageName,$host_id);

