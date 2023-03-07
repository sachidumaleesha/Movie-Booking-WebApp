<?php
    include '../phpHandlers/dbh.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CineMix - Manager Dashboard</title>
    <link rel="stylesheet" href="../css/displayContactus.css">
</head>
<body>
    <?php
        include './sidebar.php';
    ?>

    <div class="content">
        <div class="title">
                <h2>Contact-Us</h2>
        </div>
        <div class="table-data">
            <table border="1">
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Message</th>
                    <th>Manage</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM contactus;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['contactusID'];
                            echo "
                                <tr>
                                    <td>".$row['fullName']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['mobileNumber']."</td>
                                    <td>".$row['message']."</td>
                                    <td><button class='del-btn'><a href='http://localhost/movie-booking-system/manager/phphandlers/dbh.deleteContactUs.php?deleteContactUsId=".$id."'>Delete</a></button></td>
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