<?php
session_start();

include __DIR__ . "/../src/Database.php";
include __DIR__ . "/../src/favorite.php";

$rental_id = $_POST['rental_id'];
$user_id = $_SESSION['user_id'];

$favorite = new Favorite(
    "",
    $user_id,
    $rental_id
);

$favorite->removeFromFavorites();

header("Location: /view/home.view.php");