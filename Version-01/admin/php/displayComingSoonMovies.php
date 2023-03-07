<?php
    include '../phpHandlers/dbh.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CineMix - Dashboard</title>
    <link rel="stylesheet" href="../css/displayComingSoonMovies.css">
</head>
<body>
    <?php
        include './sidebar.php';
    ?>

    <div class="content">
        <div class="title">
            <h2>Coming Soon Movie List</h2>
        </div>
        <div class="add-btn">
            <button><a href="./addComingSoonMovie.php">Add Coming Soon Movie</a></button>
        </div>
        <div class="table-data">
            <table border="1">
                <tr>
                    <th>Movie Full Name</th>
                    <th>Movie Director</th>
                    <th>Release Date</th>
                    <th>Movie Duration</th>
                    <th>Manage</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM coming_soon_movies;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['movieID'];
                            echo "
                                <tr>
                                    <td>".$row['movieName']."</td>
                                    <td>".$row['movieDirector']."</td>
                                    <td>".$row['releaseDate']."</td>
                                    <td>".$row['movieDuration']."</td>
                                    <td>
                                        <button class='del-btn'><a href='http://localhost/movie-booking-system/admin/phphandlers/dbh.updateComingSoonMovie.php?updateComingSoonMovieId=".$id."'>Update</a></button>
                                        <button class='del-btn'><a href='http://localhost/movie-booking-system/admin/phphandlers/dbh.deleteComingSoonMovie.php?deleteComingSoonMovieId=".$id."'>Delete</a></button>
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