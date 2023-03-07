<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - CineMix</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="loginBox">
        <img src="./images/login_page_icon.png" alt="icon" class="avatar">
        <h1>Admin Login</h1>
        <form action="./phpHandlers/dbh.login.php" method="POST" autocomplete="off">
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter username">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" name="submit" value="Login">
        </form>
        <div class="custom-message">
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p>☹️ Fill all the fields! ☹️</p>";
                    }
                    if($_GET["error"] == "loginFailed"){
                        echo "<p>Incorrect Username/Email</p>";
                    }
                    if($_GET["error"] == "wrongpassword"){
                        echo "<p>Incorrect Password</p>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>