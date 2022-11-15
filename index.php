<html>
<head>
  <link rel="stylesheet" href="screenStyle.css">
</head>
<body>

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> Name: <input type="text" name="name"><br>
<h3>Name: <input type="text" name="name"></h3><br>
<h3>E-mail: <input type="text" name="email"></h3><br>
<h3>Age: <input type="text" name="age"></h3><br>
<h3>School: <input type="text" name="school"></h3><br>
<h3>Year: <input type="text" name="year"></h3><br>
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