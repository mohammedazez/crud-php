<?php
include "config.php";
// (Target tombol formnya) Jika tombol formnya di klik, Maka data akan dibuat
if (isset($_POST['submit'])) {
    // ambil variable dari form 
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Ambil SQL INSERT di phpmyadmin dan ganti value dengan varibel
    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";

    // Eksekusi SQLnya
    $result = $conn->query($sql);

    // Buat kondisi jika gagal dan berhasil
    if ($result == TRUE) {
        echo "Record berhasil dibuat";
    } else {
        echo "Error :" . $sql . "<br/>" . $conn->error;
    }
    $conn->close();
}
?>


<!-- Buat form inputnya -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
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
            Male<input type="radio" name="gender" value="male">
            Female<input type="radio" name="gender" value="female"><br><br>
            <input type="submit" value="submit" name="submit">
        </fieldset>
    </form>
</body>

</html>