<?php
    include './dbh.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CineMix - Dashboard</title>
    <link rel="stylesheet" href="../css/addComingSoonMovie.css">
</head>
<body>

    <?php
        include '../php/sidebar.php';

        $id = $_GET['updateComingSoonMovieId'];
        $query = "select * from `coming_soon_movies` where movieID = '$id';";
        $queryRun = mysqli_query($conn, $query);

        if($queryRun){
            $row = mysqli_fetch_assoc($queryRun);
            $mName = $row['movieName'];
            $mCategory = $row['movieCategory'];
            $mDirector = $row['movieDirector'];
            $mWriters = $row['movieWriters'];
            $mCast = $row['movieCast'];
            $mDuration = $row['movieDuration'];
            $mPlot = $row['moviePlot'];
            $date = $row['releaseDate'];
        }

        echo "
            <div class='content'>
                <div class='title'>
                    <h2>Update Coming Soon Movie &nbsp-&nbsp ".$mName."</h2>
                </div>
                <form action='' class='form-group' method='POST' enctype='multipart/form-data'>
                    <div class='input-group'>
                        <label>Enter movie name</label>
                        <input type='text' name='movieName' placeholder=".$mName." required>
                    </div>
                    <div class='input-group'>
                        <label>Enter movie category</label>
                        <input type='text' name='category' placeholder=".$mCategory." required>
                    </div>
                    <div class='input-group'>
                        <label>Enter movie director</label>
                        <input type='text' name='director' placeholder=".$mDirector." required>
                    </div>
                    <div class='input-group'>
                        <label>Enter movie writers</label>
                        <input type='text' name='writers' placeholder=".$mWriters." required>
                    </div>
                    <div class='input-group'>
                        <label>Enter movie cast</label>
                        <input type='text' name='cast' placeholder=".$mCast." required>
                    </div>
                    <div class='input-group'>
                        <label>Enter movie duration</label>
                        <input type='text' name='duration' placeholder=".$mDuration." required>
                    </div>
                    <div class='input-group'>
                        <label>Enter movie plot</label>
                        <textarea name='plot' cols='116' rows='10' placeholder=".$mPlot." required></textarea>
                    </div>
                    <div class='input-group'>
                        <label>Enter movie releasing date</label>
                        <input type='date' name='releaseDate' placeholder=".$date." required>
                    </div>
                    <div class='input-group'>
                        <label>Enter trailer Url</label>
                        <input type='text' name='trailerUrl' placeholder='Use embed url' required>
                    </div>
                    <div class='input-group'>
                        <label>Enter movie Movie Image</label>
                        <input type='file' name='movieImage'>
                    </div>
                    <div class='input-group'>
                        <label>Enter movie Banner</label>
                        <input type='file' name='bannerImage'>
                    </div>
                    <input type='submit' name='submit' value='Add Movie' class='btn'>
                </form>
            </div>
        ";

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
    
                $query = "UPDATE `coming_soon_movies` SET movieName = '$movieName', movieCategory = '$movieCategory', movieDirector = '$movieDirector', movieWriters = '$movieWriters', movieCast = '$movieCast', movieDuration = '$movieDuration', moviePlot = '$moviePlot', releaseDate = '$movieReleaseDate', trailerUrl = '$movieUrl', movieImage = '$destination1', bannerImage = '$destination2' WHERE movieID = $id";

                $queryRun = mysqli_query($conn, $query);
    
                if($queryRun){
                    echo "<script>alert('Successfully movie updated')</script>";
                }
                else{
                    die(mysqli_error($conn));
                }
            }
        }
    ?>

    
    
</body>
</html>