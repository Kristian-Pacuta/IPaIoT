<html>
<head>
  <link rel="stylesheet" href="screenStyle.css">
</head>
<body>
<br>
<h2> Target following style</h2>
<br>
<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<h3>Choose type of movement: <br> <br>
<ul>
 <li> <input type="radio" id="1" name="movement" value="0" checked="checked">
  <label for="1"> Turning follow</label></li><br><br>
  <li><input type="radio" id="2" name="movement" value="1">
  <label for="2"> Crab walk follow</label></li></h3><br><br>
  </ul>
<input type="submit">
</form>

<?php
    $movement = $_GET["movement"];
    $file1 = fopen("movement.txt","w") or die("Unable to open file!");
    $text1 = $movement;    
    fwrite($file1, $text1);
    fclose($file1);
?>

</body>
</html> 