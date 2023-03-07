<?php
    include '../phpHandlers/dbh.config.php';
    include '../php/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/singleMovie.css">
</body>

    <?php
        $id = $_GET['movieID'];
        $query = "select * from `now_showing_movies` where movieID = $id;";
        $queryRun = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($queryRun);
        $movieName = $row['movieName'];
        $movieCategory = $row['movieCategory'];
        $movieDirector = $row['movieDirector'];
        $movieWriters = $row['movieWriters'];
        $movieCast = $row['movieCast'];
        $movieDuration = $row['movieDuration'];
        $moviePlot = $row['moviePlot'];
        $ShowEndDate = $row['endDate'];
        $url = $row['trailerUrl'];
        $movieImage = "../admin/phpHandlers/".$row['movieImage'];
        $bannerImage = "../admin/phpHandlers/".$row['bannerImage'];
    ?>

    <div class='hero-image' style='background-image: url(<?php echo $bannerImage ?>)'>
    </div>
        <div class='container'>
            <div class='title'>
                <span><?php echo $movieName; ?><span> 
                <span class='date'>Show End Date: <?php echo $ShowEndDate; ?></span>
            </div>
            <div class='category'>
                <span><?php echo $movieCategory; ?></span>
            </div>

            <div class='details'>
                <div class='left'>
                    <div class='box-a'>
                        <?php echo "<img src='$movieImage' class='image'>"?>
                    </div>
                    <div class='box-b'>
                        <div class='director'>
                            <b><span>Director</span></b><br>
                            <span><?php echo $movieDirector; ?></span>
                        </div><br>
                        <div class='writers'>
                            <b><span>Writers</span></b><br>
                            <span><?php echo $movieWriters; ?></span>
                        </div><br>
                        <div class='cast'>
                            <b><span>Cast</span></b><br>
                            <span><?php echo $movieCast; ?></span>
                        </div><br>
                        <div class='duration'>
                            <b><span>Duration</span></b><br>
                            <span><?php echo $movieDuration; ?></span>
                        </div><br>
                        <div class='plot'>
                            <b><span>Plot</span></b><br>
                            <span><?php echo $moviePlot; ?></span>
                        </div>
                    </div>
                </div>
                <div class='right'>
                    <div class='btn'>
                        <?php
                            if(isset($_SESSION['userID'])){
                                echo "<a href='./booking.php?movieID=".$id."'><button>Book Ticket</button></a>";
                            }
                            else{
                                echo "<a href='http://localhost/movie-booking-system/php/login.php'><button>Please login to book tickets</button></a>";
                            }
                        ?>
                    </div>
                    <div class='youtubevid'>
                        <?php echo "<iframe width='500' height='305' src='$url'></iframe>"?> 
                    </div>
                </div>
            </div>
    </div>
</body>
</html>

<?php
    include '../php/footer.php';
?>