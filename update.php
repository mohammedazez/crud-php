<?php
include "config.php";
// Jika tombol update di form di klik maka kita perlu memproses form nya

// Jika variabel id di klik dan sudah terlihat di url, maka kita perlu mengedit data berdasarkan id
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Tulis SQLnya untuk mendapatkan data user
    $sql = "SELECT * FROM `users` WHERE `id`=`$user_id`";

    // Eksekusi SQLnya
    $result = $conn->query($sql);

    // Jika result data nya lebih dari 0 maka eksekusi 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $first_name = $row['firstname'];
            $last_name = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $gender = $row['gender'];
            $id = $row['id'];
        }
?>

        <h2>User Update Form</h2>
        <form action="" method="post">
            <fieldset>
                <legend>Personal information:</legend>
                First name:<br>
                <input type="text" name="firstname" value="<?php echo $first_name; ?>">
                <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                <br>
                Last name:<br>
                <input type="text" name="lastname" value="<?php echo $lastname; ?>">
                <br>
                Email:<br>
                <input type="email" name="email" value="<?php echo $email; ?>">
                <br>
                Password:<br>
                <input type="password" name="password" value="<?php echo $password; ?>">
                <br>
                Gender:<br>
                <input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') {
                                                                    echo "checked";
                                                                } ?>>Male
                <input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') {
                                                                        echo "checked";
                                                                    } ?>>Female
                <br><br>
                <input type="submit" value="Update" name="update">
            </fieldset>
        </form>

        </body>

        </html>

<?php    } else {
        // Jika id tidak valid maka arakan halaman ke view.php
        header('Location: view.php');
    }
}
?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data</title>
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

</html> -->