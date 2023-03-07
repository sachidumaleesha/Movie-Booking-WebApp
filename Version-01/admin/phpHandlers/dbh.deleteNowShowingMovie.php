<?php
    include './dbh.config.php';

    if(isset($_GET['deleteNowShowingMovieId'])){
        $id = $_GET['deleteNowShowingMovieId'];

        $query = "DELETE from `now_showing_movies` WHERE movieId = $id";
        $queryRun  = mysqli_query($conn, $query);

        if($queryRun){
            header("Location: ../php/displayNowShowingMovies.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>