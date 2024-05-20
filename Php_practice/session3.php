<?php

session_start();

$_session['name']="myname";
echo $_session['name'];

$_SESSION['age']=27;
echo $_SESSION['age'];
unset($_SESSION['age']);
echo $_SESSION['age'];



?>