<?php
    include '../phpHandlers/dbh.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CineMix - Manager Dashboard</title>
    <link rel="stylesheet" href="../css/displayFeedbacks.css">
</head>
<body>
    <?php
        include './sidebar.php';
    ?>

    <div class="content">
        <div class="title">
                <h2>Feedbacks</h2>
        </div>
        <div class="table-data">
            <table border="1">
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Rating</th>
                    <th>Message</th>
                    <th>Manage</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM feedback;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['feedbackID'];
                            echo "
                                <tr>
                                    <td>".$row['fullName']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['mobileNumber']."</td>
                                    <td>".$row['rating']."</td>
                                    <td>".$row['message']."</td>
                                    <td><button class='del-btn'><a href='http://localhost/movie-booking-system/manager/phphandlers/dbh.deletefeedback.php?deleteFeedbackId=".$id."'>Delete</a></button></td>
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