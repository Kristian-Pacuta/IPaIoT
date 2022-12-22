<?php
header("refresh: 3;");

$fp = fopen("sensors.txt", "r");
echo "XD";
if ($fp) {
    while (($buffer = fgets($fp, 4096)) !== false) {
        echo $buffer;
        echo "\n";
    }
    if (!feof($fp)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($fp);
}


/*$myfile = fopen("sensors.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("sensors.txt"));
fclose($myfile);*/

?>
