<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CineMix - World Best Cinema Experience</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <script src="https://kit.fontawesome.com/fd20cad007.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <a href="http://localhost/movie-booking-system/"><div class="icon"><h1>Cine<span>M</span>ix</h1></div></a>
            </div> -->
            <ol>
                <?php
                    if(isset($_SESSION['username'])){
                        echo "<li><a href='http://localhost/movie-booking-system/php/profile.php' class='link'>Profile Page</a></li>";
                        echo "<li><a href='http://localhost/movie-booking-system/phpHandlers/dbh.logout.php' class='link'>Logout</a></li>";
                    }
                    else{
                        echo "<li><a href='http://localhost/movie-booking-system/php/signup.php' class='link'>Signup</a></li>";
                        echo "<li><a href='http://localhost/movie-booking-system/php/login.php' class='link'>Login</a></li>";
                    }
                ?>
                
            </ol>
        </nav>
    </header>
</body>
</html>