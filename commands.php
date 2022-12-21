<html>
<head>
  <link rel="stylesheet" href="screenStyle.css">
</head>
<body>

<h2> Target following style</h2>

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<h3>Type of movement: 
  <input type="radio" id="1" name="movement" value="0">
  <label for="1"> Turning follow</label>
  <input type="radio" id="2" name="movement" value="1">
  <label for="2"> Crab walk follow</label>
</h3><br>

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