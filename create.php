<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <legend>Informasi personal</legend>
    <form action="" method="POST">
        <fieldset>
            <label>First name:</label><br>
            <input type="text" name="firstname"><br>
            <label>Last name:</label><br>
            <input type="text" name="lastname"><br><br>
            <label>Email:</label><br>
            <input type="text" name="email"><br><br>
            <label>Password:</label><br>
            <input type="text" name="password"><br><br>
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="male">
            <input type="radio" name="gender" value="female"><br><br>
            <input type="submit" value="submit" name="submit">
        </fieldset>
    </form>
</body>

</html>