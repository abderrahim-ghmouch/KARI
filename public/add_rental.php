<?php

include __DIR__ . "/../src/rentale.php";
$title=$_POST["title"];

$description=$_POST["description"];

$city=$_POST["city"];

$adress=$_POST["adress"];

$pricePerNight=$_POST["price"];

$image =$_FILES["image"]["name"];


$image_destination = __DIR__ . "/../images/$image";
move_uploaded_file($_FILES['image']['tmp_name'], $image_destination);

$rental = new Rental();

$rental->setTitle($title);

$rental->setCity("$city");

$rental->setAddress($adress);

$rental->setPrice("$price");

$rental->setImage("$image");

$rental->createRentale();






