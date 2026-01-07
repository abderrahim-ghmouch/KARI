<?php
session_start();
require "../src/User.php";

$email=$_POST["email"];
$password=$_POST["password"];
$logUser = new User(null,null,null,null,null);

$loggedInUser=$logUser->login($email,$password);

    // var_dump($loggedInUser);
    // die();
if ($loggedInUser) {
    $_SESSION['user_id'] = $loggedInUser['ID'];
    $_SESSION['role'] = $loggedInUser['roles'];
    header("location: ./../view/profile.view.php");
} else {
    echo "Wrong email or password";
}