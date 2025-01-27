
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <input placeholder="Lietotajvards" name="username" type="text" required/>
        <input placeholder="Parole" name="password" type="password" minlength="8" required/>
        <button>Button</button>
    </form>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ipb23";

$conn = new mysqli($servername, $username, $password);

$lietotajvards = $_POST["username"];
$parole = $_POST["password"];

?>
