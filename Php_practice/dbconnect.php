<?php

$con=new mysqli('localhost','root','123','test');

if($con->connect_error)
{
    die('connection error'.mysqli_connect_error());
}
echo "success";

?>