<?php
session_start();

include __DIR__ . "/../src/Database.php";
include __DIR__ . "/../src/reservation.php";

$rental_id = $_POST['rental_id'];
$user_id = $_SESSION['user_id'];
$start_date = $_POST['date_debut'];
$end_date = $_POST['date_fin'];
$total_price = $_POST['price'] * $_POST['nightnumber'];           

$reservation = new Reservation(
    "",
    $rental_id,
    $user_id,
    $start_date,
    $end_date,
    $total_price
);

$reservation->reserve();

header("Location: /view/reservation.view.php");


