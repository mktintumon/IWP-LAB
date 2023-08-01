<?php
// echo readfile('./read.txt')

$file = fopen("facts.txt", "r") or die("Unable to open file!");

// echo fread($file,filesize("facts.txt"));
while(!feof($file)) {
    echo fgets($file) . "<br>";
}

fclose($file);


?>