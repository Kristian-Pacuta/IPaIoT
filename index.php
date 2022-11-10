<html>
<body>

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Age: <input type="text" name="age"><br>
School: <input type="text" name="school"><br>
Year: <input type="text" name="year"><br>
Subject: <input type="text" name="subject"><br>
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
    $text1 = "Name:" . $name . " Email:" . $email . "Age:" . $age . "School:" . $school . "Year:" . $year . " Subject:" . $subject;    
    fwrite($file1, $text1);
    fclose($file1);
    ?>

</body>
</html> 