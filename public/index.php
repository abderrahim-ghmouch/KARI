<?php
require __DIR__ . "/../src/Database.php";

$conn = new Database;

if($conn->getconnection()){
    echo "successed connection";
}
