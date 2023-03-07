<?php
    include '../phpHandlers/dbh.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CineMix - Manager Dashboard</title>
    <link rel="stylesheet" href="../css/displayUsers.css">
</head>
<body>
    <?php
        include './sidebar.php';
    ?>

    <div class="content">
        <div class="title">
            <h2>Users</h2>
        </div>
        <div class="add-btn">
            <button><a href="./addUser.php">Add New Customer</a></button>
        </div>
        <div class="table-data">
            <table border="1">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Manage</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM users;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['userID'];
                            echo "
                                <tr>
                                    <td>".$row['firstName']."</td>
                                    <td>".$row['lastName']."</td>
                                    <td>".$row['username']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['mobileNumber']."</td>
                                    <td>".$row['gender']."</td>
                                    <td>
                                        <button class='del-btn'><a href='http://localhost/movie-booking-system/manager/phphandlers/dbh.updateUser.php?updateUserId=".$id."'>Update</a></button>
                                        <button class='del-btn'><a href='http://localhost/movie-booking-system/manager/phphandlers/dbh.deleteUser.php?deleteUserId=".$id."'>Delete</a></button>
                                    </td>
                                </tr>
                            ";
                        }
                    }
                ?>

            </table>
        </div>
    </div>
</body>
</html>