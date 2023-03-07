<?php
    include './dbh.config.php';

    if(isset($_GET['deleteComingSoonMovieId'])){
        $id = $_GET['deleteComingSoonMovieId'];

        $query = "DELETE from `coming_soon_movies` WHERE movieId = $id";
        $queryRun  = mysqli_query($conn, $query);

        if($queryRun){
            header("Location: ../php/displayComingSoonMovies.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>