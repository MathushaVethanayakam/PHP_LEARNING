<?php
session_start();


?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP session</title>
</head>
<body>
<?php

    $_SESSION["cha_name"]="Progaramming";
    $_SESSION["userd"]="Karthi";

    $a=4;
    $b=3;
    function display()
    {
        //$c=$GLOBALS['a']+$GLOBALS['b'];
        $GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];
        echo $GLOBALS['c'];
    }

    display();
   // echo $c;
   echo "<pre>";
    print_r($GLOBALS);
?>
</body>
</html>