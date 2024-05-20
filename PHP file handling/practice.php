<?php
    //require 'sample5.php; --Use require when the file is required by the application.'
    include 'sample4.php'; //Use include when the file is not required and application should continue when file is not found.
    echo "I have $color<br>";

   // readfile("sample.txt");

    /*fopen:
    $var=fopen(file path,mode);*/

    $var=fopen("sample.txt","r"); //read only,pointer start at the beginning
        //echo $var;
       // echo fread($var,filesize('sample.txt'));
        echo fread($var,filesize("sample.txt"));
        //echo fgets($var); -The fgets() function is used to read a single line from a file.
    fclose($var);  
    echo"<br>";
    
    $rea=fopen("sample3.txt","r");
        while(!feof($rea)) //feof() function checks if the "end-of-file" (EOF) has been reached.
        {
            echo fgets($rea);
        }
    fclose($rea);
    echo"<br>";

    $myfile = fopen("sample3.txt", "r") or die("Unable to open file!");
        // Output one character until end-of-file
        while(!feof($myfile)) {
            echo fgetc($myfile);
        }
    fclose($myfile);

    $wri=fopen("sample1.txt","w");
        fwrite($wri,"Bye");
        
    fclose($wri);

    $wri2=fopen("sample2.txt","a");
        fwrite($wri2,"file");
    fclose($wri2);

    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("webdictionary.txt"));
    fclose($myfile);
    //readfile()-read the file
    //mode "r","w","a","x","r+","w+","a+","x+"
    //"r"- Open a file for read only. File pointer starts at the beginning of the file
    //"w"-	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    //"a"- Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
    //"x" -	Creates a new file for write only. Returns FALSE and an error if file already exists
    //"w+"- Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    //"r+"- Open a file for read/write. File pointer starts at the beginning of the file
    //"x+"- Creates a new file for read/write. Returns FALSE and an error if file already exists

    


?>