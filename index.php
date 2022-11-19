<html>
<head>
  <link rel="stylesheet" href="screenStyle.css">
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Name: <input type="text" name="name"></h3><br>

<h3>E-mail: <input type="email" name="email"></h3><br>

<h3>  
  <label for="birthday">Birthday: </label>
  <input type="date" id="birthday" name="birthday">
</h3><br>

<h3>School: <input type="text" name="school"></h3><br>

<h3>Year: 
  <input type="radio" id="1" name="year" value="1">
  <label for="1">1</label>
  <input type="radio" id="2" name="year" value="2">
  <label for="2">2</label>
  <input type="radio" id="3" name="year" value="3">
  <label for="3">3</label>
  <input type="radio" id="4" name="year" value="4">
  <label for="4">4</label>
  <input type="radio" id="5" name="year" value="5">
  <label for="5">5</label>
</h3><br>

<h3>Subject: <input type="text" name="subject"></h3><br>

<input type="submit">
</form>

<h3><a href="https://kp-iot.azurewebsites.net/values.txt">File with saved values.</a></h3>

<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $birthday = $_POST["birthday"];
    $school = $_POST["school"];
    $year = $_POST["year"];
    $subject = $_POST["subject"];

    $file1 = fopen("values.txt","w") or die("Unable to open file!");
    $text1 = "Name: " . $name . "\nEmail: " . $email . "\nBirthday: " . $birthday . "\nSchool: " . $school . "\nYear: " . $year . "\nSubject: " . $subject;    
    fwrite($file1, $text1);
    fclose($file1);
?>

</body>
</html> 