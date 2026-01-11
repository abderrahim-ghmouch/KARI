<?php
session_start();

include __DIR__ . "/../src/Database.php";

include __DIR__ ."/../src/rentale.php";

$rental= new Rental();

$rental_id = $_POST["rental_id"];

$rental->delete($rental_id);