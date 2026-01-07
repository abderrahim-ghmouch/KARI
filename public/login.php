<?php

$email=$_POST["email"];
$password=$_POST["password"];


$userObj = new User(null, null, null, null, null);
$loggedInUser = $userObj->login($email, $password);

if ($loggedInUser) {
    $_SESSION['user_id'] = $loggedInUser['id'];
    $_SESSION['role'] = $loggedInUser['roles'];
    header("Location: dashboard.php");
} else {
    echo "Wrong email or password";
}