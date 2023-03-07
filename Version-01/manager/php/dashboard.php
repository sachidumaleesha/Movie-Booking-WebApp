<?php
    include '../phpHandlers/dbh.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CineMix - Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/sidebar.css">
</head>
<body>

    <div class="sidebar">

        <div class="logo">
            <img src="../images/logo.png">
            <span>Dashboard</span>
        </div>

        <a href="http://localhost/movie-booking-system/manager/php/dashboard.php" class="active">Home</a>
        <a href="http://localhost/movie-booking-system/manager/php/displayusers.php">Users</a>
        <a href="http://localhost/movie-booking-system/manager/php/displayfeedback.php">Feedbacks</a>
        <a href="http://localhost/movie-booking-system/manager/php/displaycontactus.php">ContactUs</a>
        <a href="http://localhost/movie-booking-system/manager/phpHandlers/dbh.logout.php" class="lower-left">Logout</a>
    </div>

    <div class="profile">
        <img src="../images/avatar.png">
    </div>

    <!-- <?php
        include './php/sidebar.php';
    ?> -->

    <?php
        $sql1 = "SELECT * FROM users;";
        $result1 = mysqli_query($conn, $sql1);
        $resultCheck1 = mysqli_num_rows($result1);

        $sql2 = "SELECT * FROM feedback;";
        $result2 = mysqli_query($conn, $sql2);
        $resultCheck2 = mysqli_num_rows($result2);

        $sql3 = "SELECT * FROM contactus;";
        $result3 = mysqli_query($conn, $sql3);
        $resultCheck3 = mysqli_num_rows($result3);

        $sql4 = "SELECT * FROM booking";
        $result4 = mysqli_query($conn, $sql4);
        $resultCheck4 = mysqli_num_rows($result4);

        if($resultCheck4 > 0){
            $sum = 0;
            while($row = mysqli_fetch_assoc($result4)){
                $count = $row['ticketCount'];
                $sum = $sum + $count;
            }
        }
        
        $revenue = $sum * 350;

        echo "
            <div class='content'>
                <div class='title'>
                    <h2>Overview</h2>
                </div>
                <div class='card'>
                    <div class='card-01'>
                        <h3>Number of Users</h3>
                        <p>".$resultCheck1."</p>
                    </div>
                    <div class='card-02'>
                        <h3>Number of feedbacks</h3>
                        <p>".$resultCheck2."</p>
                    </div>
                    <div class='card-03'>
                        <h3>Number of ContactUs</h3>
                        <p>".$resultCheck3."</p>
                    </div>
                </div><br>
                <div class='card'>
                    <div class='card-01'>
                        <h3>Number of Tickets Sold</h3>
                        <p>".$sum."</p>
                    </div>
                    <div class='card-02'>
                        <h3>Total Revenue</h3>
                        <p>Rs: ".$revenue."</p>
                    </div>
                    <div class='card-03'>
                        <h3>Number of Issues</h3>
                        <p>0</p>
                    </div>
                </div>
            </div>
        ";
    ?>

</body>
</html>