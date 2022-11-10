<html>
<body>

<?php
    $name = test_input($_GET["name"]);
    $email = test_input($_GET["email"]);
    $age = test_input($_GET["website"]);
    $school = test_input($_GET["comment"]);
    $year = test_input($_GET["gender"]);
    $subject = test_input($_GET["gender"]);

    $file1 = fopen("values.txt","w") or die("Unable to open file!");
    $text1 = "a=" . $name . " b=" . $email . "a=" . $age . " b=" . $school . "a=" . $year . " b=" . $subject;    
    fwrite($file1, $text1);
    fclose($file1);
    ?>

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Age: <input type="text" name="age"><br>
School: <input type="text" name="school"><br>
Year: <input type="text" name="year"><br>
Subject: <input type="text" name="subject"><br>
<input type="submit">
</form>

</body>
</html> 