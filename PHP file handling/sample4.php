<?php


    $color="red";

    //date and time
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
    echo "<br>";

    echo "year :".date("Y");
    echo "<br>";


    #Time
    /*H - 24-hour format of an hour (00 to 23)
    h - 12-hour format of an hour with leading zeros (01 to 12)
    i - Minutes with leading zeros (00 to 59)
    s - Seconds with leading zeros (00 to 59)
    a - Lowercase Ante meridiem and Post meridiem (am or pm)*/

    echo date("h:i:sa")."<br>";

    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa")."<br>";
    
    $d=strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";

    $d=strtotime("next Sunday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
?>