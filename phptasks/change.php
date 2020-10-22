<?php
$myName = 'Karolis Dobrovolskis';
$myfile = fopen("data.html", "r");
     $fileText = fread($myfile, filesize('data.html'));
     echo str_replace("diena", $myName, $fileText);
     //echo $fileText;

file_put_contents ( string data.html, mixed $ [,str_replace("diena", $myName, $fileText);]] ) : int;

     fclose($myfile);