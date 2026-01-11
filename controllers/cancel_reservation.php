<?php
session_start();

include __DIR__ . "/../src/Database.php";
include __DIR__ . "/../src/reservation.php";

$reservation_id = $_POST['id'];         

$reservation = new Reservation();

$reservation->cancelreservation($reservation_id);

header("Location: /view/reservation.view.php");


