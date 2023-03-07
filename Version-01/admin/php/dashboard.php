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

        <a href="http://localhost/movie-booking-system/admin/php/dashboard.php">Home</a>
        <a href="http://localhost/movie-booking-system/admin/php/displayNowShowingMovies.php">Now Showing Movie List</a>
        <a href="http://localhost/movie-booking-system/admin/php/displayComingSoonMovies.php">Coming Soon Movie List</a>
        <a href="http://localhost/movie-booking-system/admin/php/displaymanagers.php">View Manager List</a>
        <a href="http://localhost/movie-booking-system/admin/phpHandlers/dbh.logout.php" class="lower-left">Logout</a>
    </div>

    <div class="profile">
        <img src="../images/avatar.png">
    </div>

    <?php
        $sql1 = "SELECT * FROM now_showing_movies;";
        $result1 = mysqli_query($conn, $sql1);
        $resultCheck1 = mysqli_num_rows($result1);

        $sql2 = "SELECT * FROM coming_soon_movies;";
        $result2 = mysqli_query($conn, $sql2);
        $resultCheck2 = mysqli_num_rows($result2);

        $sql3 = "SELECT * FROM manager;";
        $result3 = mysqli_query($conn, $sql3);
        $resultCheck3 = mysqli_num_rows($result3);

        $sql4 = "SELECT * FROM users;";
        $result4 = mysqli_query($conn, $sql4);
        $resultCheck4 = mysqli_num_rows($result4);

        $sql5 = "SELECT * FROM payment;";
        $result5 = mysqli_query($conn, $sql5);
        $resultCheck5 = mysqli_num_rows($result5);

        echo "
            <div class='content'>
                <div class='title'>
                    <h2>Overview</h2>
                </div>
                <div class='card'>
                    <div class='card-01'>
                        <h3>Now Showing Movies</h3>
                        <p>".$resultCheck1."</p>
                    </div>
                    <div class='card-02'>
                        <h3>Coming Soon Movies</h3>
                        <p>".$resultCheck2."</p>
                    </div>
                    <div class='card-03'>
                        <h3>Number of Managers</h3>
                        <p>".$resultCheck3."</p>
                    </div>
                </div><br>
                <div class='card'>
                    <div class='card-01'>
                        <h3>Number of Users</h3>
                        <p>".$resultCheck4."</p>
                    </div>
                    <div class='card-02'>
                        <h3>Total Transactions</h3>
                        <p>".$resultCheck5."</p>
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