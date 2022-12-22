<?php
header("refresh: 3;");

echo "<h1>" . "Sensor monitor: " . "</h1>" . "<br>"
$fp = fopen("sensors.txt", "r") or die("Unable to open file!");
$x=fgets($fp);
$y=fgets($fp);
$distance=fgets($fp);

    echo "Gyroscope X-axis acceleration: " . $x . " m/s2" . "<br>";
    echo "Gyroscope Y-axis acceleration: " . $y . " m/s2" . "<br>";
    echo "Estimated sonar distance: " . $distance . " cm" . "<br>";
    fclose($fp);
}


/*$myfile = fopen("sensors.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("sensors.txt"));
fclose($myfile);*/

?>