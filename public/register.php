<?php
require __DIR__ . "/../src/Database.php";
require __DIR__ . "/../src/User.php";

$role = $_POST["role"];
$name = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_hashed = password_hash($password, PASSWORD_DEFAULT);

$user = new User($name, $lastname, $email, $password_hashed, $role);

header("Location: ../view/login.view.php");

if ($user->register()) {
    
   
} else {
    echo "Error: Registration failed.";
}
?>