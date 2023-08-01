<?php

// create the file

// $file = fopen("write.txt" , "w"); --> creates new file and write
$file = fopen("write.txt" , "a"); //--> append into previous file


// writing into file
$txt1 = "Mohit kumar\n";
fwrite($file, $txt1);
$txt2 = "Sanket kumar\n";
fwrite($file, $txt2);


fclose($file);

?>