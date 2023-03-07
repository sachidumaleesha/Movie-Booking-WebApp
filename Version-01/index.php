<?php
    include './phpHandlers/dbh.config.php';
    include './php/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <style type="text/css">
        .movieImg{
            width:24.32%;
            margin-right: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>
<body>

    <div class="slider">
        <img src="../images/Slider/1.png" id="banner_image">
    </div>

    <div class="section1">
        <a href="php/nowshowing.php" class="t1-url"><h2 class="t1">NOW SHOWING</h2></a>
        <div class="row">
            <div class="column">
                <?php
                    $query = "SELECT * FROM `now_showing_movies` LIMIT 4";
                    $queryRun = mysqli_query($conn, $query);

                    if(mysqli_num_rows($queryRun)>0){
                        
                        while($row = mysqli_fetch_assoc($queryRun)){
                            $bannerImage = "./admin/phpHandlers/".$row['bannerImage'];
                            $id = $row['movieID'];
                            
                            echo "<a href='./php/nowShowingMovie.php?movieID=$id'><img src='$bannerImage' class='movieImg'></a>";
                        }
                    }
                    else{
                        echo "Sorry! No Showing Movies";
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="section2">
        <a href="php/comingsoon.php" class="t1-url"><h2 class="t1">COMING SOON</h2></a>
        <div class="row">
            <div class="column">
                <?php
                    $query = "SELECT * FROM `coming_soon_movies` LIMIT 8";
                    $queryRun = mysqli_query($conn, $query);

                    if(mysqli_num_rows($queryRun)>0){
                        
                        while($row = mysqli_fetch_assoc($queryRun)){
                            $bannerImage = "./admin/phpHandlers/".$row['bannerImage'];
                            $id = $row['movieID'];
                            
                            echo "<a href='./php/comingSoonMovie.php?movieID=$id'><img src='$bannerImage' class='movieImg'></a>";
                        }
                    }
                    else{
                        echo "Sorry! No Coming Soon Movies";
                    }
                ?>
            </div>
        </div>
    </div>

    <script>
        function first(){
            document.getElementById('banner_image').src = "./images/Slider/1.jpg";
        }
        function second(){
            document.getElementById('banner_image').src = "./images/Slider/2.jpg";
        }
        function third(){
            document.getElementById('banner_image').src = "./images/Slider/3.jpg";
        }
        function fourth(){
            document.getElementById('banner_image').src = "./images/Slider/4.jpg";
        }
        function fifth(){
            document.getElementById('banner_image').src = "./images/Slider/5.jpg";
        }

        setInterval(first, 1800);
        setInterval(second, 5400);
        setInterval(third, 9000);
        setInterval(fourth, 12600);
        setInterval(fifth, 16200);

    </script>

</body>
</html>

<?php
    include './php/footer.php';
?>
