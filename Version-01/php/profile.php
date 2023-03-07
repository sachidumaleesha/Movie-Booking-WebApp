<?php
    include '../phpHandlers/dbh.config.php';
    include '../php/header.php';
    $id = $_SESSION['userID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Page</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    
    <div class="hero-image">
        <div class="hero-text">
          <h1>Welcome to Cinemix</h1>
          <p>World best cinema experience in here</p>
        </div>
    </div>

    <div class="user-profile">
        <img src="../images/profile/avatar.png">
        <span>Welcome - <?php echo $_SESSION['firstName']." ".$_SESSION['lastName'] ?></span>
    </div>

    <div class="content">
        <table class="user-details">
            <tr>
                <th>Username</th>
                <td><?php echo $_SESSION['username'] ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $_SESSION['email'] ?></td>
            </tr>
            <tr>
                <th>Mobile Number</th>
                <td><?php echo $_SESSION['mobileNumber'] ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $_SESSION['gender'] ?></td>
            </tr>
        </table>

        <table class="ticket-details">
            <tr>
                <th>Movie Name</th>
                <th>Booked Date</th>
                <th>Show Time</th>
                <th>Ticket Count</th>
                <th>Price</th>
            </tr>

            <?php
                $sql = "SELECT n.movieName, b.bookedDate, b.showTime, b.ticketCount, b.price FROM booking b, now_showing_movies n WHERE b.movieID = n.movieID AND b.userID = $id;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo"
                            <tr>
                                <td>".$row['movieName']."</td>
                                <td>".$row['bookedDate']."</td>
                                <td>".$row['showTime']."</td>
                                <td>".$row['ticketCount']."</td>
                                <td>".$row['price']."</td>
                            </tr>
                        ";
                    }
                } 
            ?> 
        </table>
    </div>

</body>
</html>

<?php
    include '../php/footer.php';
?>