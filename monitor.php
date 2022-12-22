<?php
header("refresh: 3;");









$myfile = fopen("sensors.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("sensors.txt"));
fclose($myfile);


//$myfile = fopen("sensors.txt", "r") or die("Unable to open file!");
//if ($myfile) {
//    while (($line = fgets($myfile)) !== false) {
 //       // process the line read.
 //       $word_arr = explode(" ", $line); //return word array
 //       foreach($word_arr as $word){
 //           echo $word; // required output
 //       }
 //   }
 //   fclose($myfile);

?>
