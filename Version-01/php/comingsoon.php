<?php
    include '../phpHandlers/dbh.config.php';
    include '../php/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coming Soon Movies</title>
    <link rel="stylesheet" href="../css/comingSoon.css">
    <style type="text/css">
        .movieImg{
            width:24%;
            margin-right: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>
<body>
    <div class="section">
        <h2 class="t1">COMING SOON</h2>
        <div class='row' style='padding-bottom: 20px;'>
        <div class='column'>
            <?php
                $query = "SELECT * FROM `coming_soon_movies`";
                $queryRun = mysqli_query($conn, $query);

                if(mysqli_num_rows($queryRun)>0){
                    while($row = mysqli_fetch_assoc($queryRun)){
                        $bannerImage = "../admin/phpHandlers/".$row['bannerImage']; 
                        $id = $row['movieID'];
                        echo "<a href='./comingSoonMovie.php?movieID=$id'><img src='$bannerImage' class='movieImg'></a>";    
                    }
                }
            ?>
        </div>
        </div> 
    </div>

</body>
</html>

<?php
    include '../php/footer.php';
?>