<?php
session_start();

include __DIR__ . "/../src/Database.php";
include __DIR__ ."/../src/rentale.php";

$title = $_POST["title"];

$description = $_POST["description"];
$city = $_POST["city"];
$addrees = $_POST["address"]; 
$price = $_POST["price"];
$rental_id=$_POST["rental_id"];
$image = $_FILES["image"];


$rental= new Rental();

$rental->update($title,$description,$addrees, $city,$price,$image,$rental_id);