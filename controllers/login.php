<?php
session_start();
require "../src/User.php";

$email=$_POST["email"];
$password=$_POST["password"];
$logUser = new User(null,null,null,null,null);

$loggedInUser=$logUser->login($email,$password);


if ($loggedInUser) {
    $_SESSION['user_id'] = $loggedInUser['ID'];
    $_SESSION['role'] = $loggedInUser['roles']; 
    if($loggedInUser['roles']=='traveler'){
        header("location: ./../view/profile.view.php");
    }if($loggedInUser['roles']=='host'){

    header("location: ./../view/host.dashboard.view.php");
  }

} else{
    header("location: ./../view/login.view.php"); 
}