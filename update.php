<?php
include "config.php";
// Function untuk update 
// Target tombol update di formnya
if (isset($_POST['update'])) {
    // Buat variable data name di form
    $firstname = $_POST['firstname'];
    $user_id = $_POST['user_id'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Ambil SQL Update di phpmyadmin, ganti valuenya dengan variabel, dan dengan id
    $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`gender`='$gender' WHERE `id`='$user_id'";

    // Eksekusi SQLnya
    $result = $conn->query($sql);

    // Buat Kondisi ekseskusi gagal atau berhasil
    if ($result == TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}


// Function untuk ambil idnya
// Jika variabel id di klik dan sudah terlihat di url, maka kita perlu mengedit data berdasarkan id.
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Ambil SQL Select* di phpmyadmin dengan id
    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

    // Eksekusi SQLnya
    $result = $conn->query($sql);

    // Jika result datanya lebih dari 0 maka eksekusi dan tampilkan datanya 
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


        <!-- Buat Table formnya (Ambil varibel idnya untuk value tiap form) -->
        <h2>update data kamu</h2>
        <form action="" method="post">
            <fieldset>
                <legend>Update Informasi personal</legend>
                <label>First name:</label><br>
                <input type="text" name="firstname" value="<?php echo $first_name; ?>"><br>
                <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                <label>Last name:</label><br>
                <input type="text" name="lastname" value="<?php echo $last_name; ?>"><br><br>
                <label>Email:</label><br>
                <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
                <label>Password:</label><br>
                <input type="text" name="password" value="<?php echo $password; ?>"><br><br>
                <label>Gender:</label><br>
                Male<input type="radio" name="gender" value="male" <?php if ($gender == 'Male') {
                                                                        echo "Checked";
                                                                    } ?>>
                Female<input type="radio" name="gender" value="female" <?php if ($gender == 'Female') {
                                                                            echo "Checked";
                                                                        } ?>><br><br>
                <input type="submit" value="Update" name="update">
            </fieldset>
        </form>
        </body>

        </html>

<?php
        // Jika id tidak valid maka arakan halaman ke view.php
    } else {
        header('Location: view.php');
    }
}
?>