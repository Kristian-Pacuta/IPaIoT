<?php
header("refresh: 1;");
$myfile = fopen("sensors.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("sensors.txt"));
fclose($myfile);
?>
