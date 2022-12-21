<?php
echo '<h1>getParameters page</h1>';

$sensorValue1 = $_GET["a"];
$sensorValue2 = $_GET["b"];

$sensorValuesFile = fopen("sensors.txt","w") or die("Unable to open file!");
$fileText = $sensorValue1 . "\n" $sensorValue2;
fwrite($sensorValuesFile, $fileText);
fclose($sensorValuesFile);

echo $fileText;
echo "<br>";

?>
