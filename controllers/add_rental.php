<?php

session_start();

include __DIR__ . "/../src/rentale.php";


$title = $_POST["title"];
$description = $_POST["description"];
$city = $_POST["city"];
$addrees = $_POST["address"]; 
$price = $_POST["price"];
$host_id = $_SESSION['user_id'];
$image = $_FILES["image"];

$rental=new Rental();

$rental->create($title, $description, $addrees, $city, $price, $image, $host_id);

