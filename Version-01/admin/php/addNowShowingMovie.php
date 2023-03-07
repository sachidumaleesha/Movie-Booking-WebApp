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
    ?>

    <div class="content">
        <div class="title">
            <h2>Add Now Showing Movie</h2>
        </div>
        <form action="../phpHandlers/dbh.addNowShowingMovie.php" class="form-group" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <label>Enter movie name</label>
                <input type="text" name="movieName" required>
            </div>
            <div class="input-group">
                <label>Enter movie category</label>
                <input type="text" name="category" required>
            </div>
            <div class="input-group">
                <label>Enter movie director</label>
                <input type="text" name="director" required>
            </div>
            <div class="input-group">
                <label>Enter movie writers</label>
                <input type="text" name="writers" required>
            </div>
            <div class="input-group">
                <label>Enter movie cast</label>
                <input type="text" name="cast" required>
            </div>
            <div class="input-group">
                <label>Enter movie duration</label>
                <input type="text" name="duration" placeholder="128 Min" required>
            </div>
            <div class="input-group">
                <label>Enter movie plot</label>
                <textarea name="plot" id="" cols="116" rows="10" required></textarea>
            </div>
            <div class="input-group">
                <label>Enter show end date</label>
                <input type="date" name="endDate" placeholder="YYYY-MM-DD" required>
            </div>
            <div class="input-group">
                <label>Enter trailer Url</label>
                <input type="text" name="trailerUrl" placeholder="Use embed url" required>
            </div>
            <div class="input-group">
                <label>Enter movie Movie Image</label>
                <input type="file" name="movieImage">
            </div>
            <div class="input-group">
                <label>Enter movie Banner</label>
                <input type="file" name="bannerImage">
            </div>
            <input type="submit" name="submit" value="Add Movie" class="btn">
        </form>
        
    </div>
    
</body>
</html>