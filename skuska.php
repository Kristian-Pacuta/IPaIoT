<html>
<head>
  <link rel="stylesheet" href="screenStyle.css">
</head>
<body>

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Number 1:
    <label for="0">0</label>
    <input type="radio" id="0" name="number1" value="0">
    
    <label for="1">1</label>
    <input type="radio" id="1" name="number1" value="1">
    
    <label for="2">2</label>
    <input type="radio" id="2" name="number1" value="2">
    
    <label for="3">3</label>
    <input type="radio" id="3" name="number1" value="3">
    
    <label for="4">4</label>
    <input type="radio" id="4" name="number1" value="4">
    
    <label for="5">5</label>
    <input type="radio" id="5" name="number1" value="5">
    
    <label for="6">6</label>
    <input type="radio" id="6" name="number1" value="6">
    
    <label for="7">7</label>
    <input type="radio" id="7" name="number1" value="7">
    
    <label for="8">8</label>
    <input type="radio" id="8" name="number1" value="8">
    
    <label for="9">9</label>
    <input type="radio" id="9" name="number1" value="9">
</h3><br>

<h3>Number 2:
    <label for="0">0</label>
    <input type="radio" id="0" name="number2" value="0">
    
    <label for="1">1</label>
    <input type="radio" id="1" name="number2" value="1">
    
    <label for="2">2</label>
    <input type="radio" id="2" name="number2" value="2">
    
    <label for="3">3</label>
    <input type="radio" id="3" name="number2" value="3">
    
    <label for="4">4</label>
    <input type="radio" id="4" name="number2" value="4">
    
    <label for="5">5</label>
    <input type="radio" id="5" name="number2" value="5">
    
    <label for="6">6</label>
    <input type="radio" id="6" name="number2" value="6">
    
    <label for="7">7</label>
    <input type="radio" id="7" name="number2" value="7">
    
    <label for="8">8</label>
    <input type="radio" id="8" name="number2" value="8">
    
    <label for="9">9</label>
    <input type="radio" id="9" name="number2" value="9">
</h3><br>

<h3>Operation:
    <label for="+">0</label>
    <input type="radio" id="0" name="operation" value="0">
    
    <label for="-">1</label>
    <input type="radio" id="1" name="operation" value="1">
    
    <label for="x">2</label>
    <input type="radio" id="2" name="operation" value="2">
    
    <label for=":">3</label>
    <input type="radio" id="3" name="operation" value="3">
</h3><br>

<input type="submit">
</form>

<?php
    
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $operation = $_GET["operation"];

    $file1 = fopen("skuska.txt","w") or die("Unable to open file!");
    $text1 = "number1: " . $number1 . "\nnumber2: " . $number2 . "\noperation: " . $operation;    
    fwrite($file1, $text1);
    fclose($file1);
?>

</body>
</html> 
