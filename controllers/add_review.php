<?php
session_start();

include __DIR__ . "/../src/Database.php";
include __DIR__ . "/../src/review.php";

$rental_id = $_POST['rental_id'];
$user_id = $_SESSION['user_id'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];

$review = new Review(
    "",
    $rental_id,
    $user_id,
    $rating,
    $comment
);

$review->addReview();

header("Location: /view/details.view.php?rental_id=" . $rental_id);
exit();