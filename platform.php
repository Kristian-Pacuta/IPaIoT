<?php
echo '<h1>Parameters passing page</h1>';

$sensorValue1 = $_GET["a"];
$sensorValue2 = $_GET["b"];
$sensorValue3 = $_GET["c"];

$sensorValuesFile = fopen("sensors.txt","w") or die("Unable to open file!");
$fileText = $sensorValue1 . "\n" . $sensorValue2 . "\n" . $sensorValue3 ;
fwrite($sensorValuesFile, $fileText);
fclose($sensorValuesFile);

echo $fileText;
echo "<br>";

?>
