<?php
header("refresh: 3;");

echo "<h1>" . "Sensor monitor: " . "</h1>" . "<br>"
$fp = fopen("sensors.txt", "r") or die("Unable to open file!");

    echo "Gyroscope X-axis acceleration: " . fgets($fp, 4096) . " m/s2" . "<br>";
    echo "Gyroscope Y-axis acceleration: " . fgets($fp, 4096) . " m/s2" . "<br>";
    echo "Estimated sonar distance: " . fgets($fp, 4096) . " cm" . "<br>";
    fclose($fp);
}


/*$myfile = fopen("sensors.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("sensors.txt"));
fclose($myfile);*/

?>
