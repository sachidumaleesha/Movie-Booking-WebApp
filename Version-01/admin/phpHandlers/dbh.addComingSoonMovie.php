<?php
    include './dbh.config.php';
    if(isset($_POST['submit'])){
        $movieName = $_POST['movieName'];
        $movieCategory = $_POST['category'];
        $movieDirector = $_POST['director'];
        $movieWriters = $_POST['writers'];
        $movieCast = $_POST['cast'];
        $movieDuration = $_POST['duration'];
        $moviePlot = $_POST['plot'];
        $movieReleaseDate = date('Y-m-d', strtotime($_POST['releaseDate']));
        $movieUrl = $_POST['trailerUrl'];

        //for movie Image
        $file1 = $_FILES['movieImage'];
        $fileTempName1 = $_FILES['movieImage']['tmp_name'];
        $fileName1 = $_FILES['movieImage']['name'];
        $fileError1 = $_FILES['movieImage']['error'];
        $fileName_separate1 = explode('.', $fileName1);
        $fileName_extension1 = strtolower(end($fileName_separate1));

        // For banner image
        $file2 = $_FILES['bannerImage'];
        $fileTempName2 = $_FILES['bannerImage']['tmp_name'];
        $fileName2 = $_FILES['bannerImage']['name'];
        $fileError2 = $_FILES['bannerImage']['error'];
        $fileName_separate2 = explode('.', $fileName2);
        $fileName_extension2 = strtolower(end($fileName_separate2));

        $extension = array('jpg','jpeg','png');

        if(in_array($fileName_extension1, $extension) && in_array($fileName_extension2, $extension)){
            $destination1 = 'images/comingSoonMovies/movieImages/'.$fileName1;
            $destination2 = 'images/comingSoonMovies/bannerImages/'.$fileName2;
            move_uploaded_file($fileTempName1, $destination1);
            move_uploaded_file($fileTempName2, $destination2);

            $query = "INSERT INTO `coming_soon_movies`(`movieName`, `movieCategory`, `movieDirector`, `movieWriters`, `movieCast`, `movieDuration`, `moviePlot`, `releaseDate`, `trailerUrl`, `movieImage`, `bannerImage`) VALUES('$movieName','$movieCategory','$movieDirector','$movieWriters','$movieCast','$movieDuration','$moviePlot','$movieReleaseDate','$movieUrl','$destination1','$destination2')";
            $queryRun = mysqli_query($conn, $query);

            if($queryRun){
                header("Location: ../php/displayComingSoonMovies.php");
            }
            else{
                die(mysqli_error($conn));
            }
        
    	}
    }
?>