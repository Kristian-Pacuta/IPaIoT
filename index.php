<html>
<head>
  <link rel="stylesheet" href="screenStyle.css">
</head>
<body>

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Name: <input type="text" name="name"></h3><br>
<h3>E-mail: <input type="text" name="email"></h3><br>
<h3>Age: <input type="text" name="age"></h3><br>
<h3>School: <input type="text" name="school"></h3><br>
<h3>Year: </h3>
<h3>
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

<?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];
    $school = $_GET["school"];
    $year = $_GET["year"];
    $subject = $_GET["subject"];

    $file1 = fopen("values.txt","w") or die("Unable to open file!");
    $text1 = "Name: " . $name . "\nEmail: " . $email . "\nAge: " . $age . "\nSchool: " . $school . "\nYear: " . $year . "\nSubject: " . $subject;    
    fwrite($file1, $text1);
    fclose($file1);
    ?>

</body>
</html> 