<?php

$n=$_POST['name'];
$c=$_POST['class'];

$con=mysqli_connect("localhost","root","","student");

$sql="INSERT INTO student (name,class)VALUES ('$n','$c')";

$r=mysqli_query($con,$sql);

if($r)
{
    
    echo "STUDENTS DETAILS ADDED USER DETAILS ADDED SUCCESSFULLY";
}
else
{
    echo "STUDENTS DETAILS FAILED";
}

?>