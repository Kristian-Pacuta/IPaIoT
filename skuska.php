<html>
<head>
  <link rel="stylesheet" href="screenStyle.css">
</head>
<body>

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Number:
    <label for="0">0</label>
    <input type="radio" id="0" name="number" value="0">
    
    <label for="1">1</label>
    <input type="radio" id="1" name="number" value="1">
    
    <label for="2">2</label>
    <input type="radio" id="2" name="number" value="2">
    
    <label for="3">3</label>
    <input type="radio" id="3" name="number" value="3">
    
    <label for="4">4</label>
    <input type="radio" id="4" name="number" value="4">
    
    <label for="5">5</label>
    <input type="radio" id="5" name="number" value="5">
    
    <label for="6">6</label>
    <input type="radio" id="6" name="number" value="6">
    
    <label for="7">7</label>
    <input type="radio" id="7" name="number" value="7">
    
    <label for="8">8</label>
    <input type="radio" id="8" name="number" value="8">
    
    <label for="9">9</label>
    <input type="radio" id="9" name="number" value="9">
  
</h3><br>
<input type="submit">
</form>

<?php
    
    $number = $_GET["number"];

    $file1 = fopen("skuska.txt","w") or die("Unable to open file!");
    $text1 = "number: " . $number;    
    fwrite($file1, $text1);
    fclose($file1);
?>

</body>
</html> 
