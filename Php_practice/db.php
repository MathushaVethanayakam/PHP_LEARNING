<?php

$host="localhost";
$user="root";
$pass="";
$db="pdo_users";

$str="mysql:host".$host." db:name".$db;

try{
    $con=new PDO($str,$user,$pass);
    echo "Good";
}
catch(PDOException $e)
{
    echo "connection error";
}



?>