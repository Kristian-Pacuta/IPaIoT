<?php
header("refresh: 3;");

echo "<h3>" . "Sensor monitor: " . "</h3>" . "<br>";
$fp = fopen("sensors.txt", "r") or die("Unable to open file!");
$x=fgets($fp);
$y=fgets($fp);
$distance=fgets($fp);

    echo "Gyroscope X-axis acceleration: " . $x . " m/s2" . "<br>" . "<br>";
    echo "Gyroscope Y-axis acceleration: " . $y . " m/s2" . "<br>" . "<br>";
    echo "Estimated sonar distance: " . $distance . " cm" . "<br>" . "<br>";
    fclose($fp);


echo "<a href=https://kp-iot.azurewebsites.net/commands.php target="_blank">" . "Movement control" . "</a>";



/*$myfile = fopen("sensors.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("sensors.txt"));
fclose($myfile);*/

?>