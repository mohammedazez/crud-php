<?php
include "config.php";
// Tulis query untuk mendapatkan data dari table users
$sql = "SELECT * FROM users";

// Eksekusi querynya
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>
    <div class="container">
        <h2>Data users</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // Jika data yang di input lebih dari 0 maka eksekusi
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><a class="btn btn-warning" href="update.php?<?php echo $row['id'] ?>">Update</a></td>
                            <td><a class="btn btn-warning" href="delete.php?<?php echo $row['id'] ?>">Delete</a></td>
                        </tr>
                <?php }
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>