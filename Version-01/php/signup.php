<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
    <div class="form-group">
        <h2>Registration</h2>
        <form action="../phpHandlers/dbh.signup.php" method="POST">
            <div class="row">
                <div class="input-group">
                    <label>First Name</label>
                    <input type="text" name="firstName">
                </div>
                <div class="input-group">
                    <label>Last Name</label>
                    <input type="text" name="lastName">
                </div>
            </div>
            <div class="row">
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username">
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
            </div>
            <div class="row">
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" id="pass">
                </div>
                <div class="input-group">
                    <label>Confirm Password</label>
                    <input type="password" name="cpassword" id="cpass">
                </div>
            </div>
            <div class="row">
                <div class="input-group">
                    <label>Phone Number</label>
                    <input type="text" name="number">
                </div>
                <div class="input-group">
                    <label>Gender</label><br>
                    <input type="radio" name="gender" value="Male">&nbsp; Male &nbsp;
                    <input type="radio" name="gender" value="Female">&nbsp; Female
                </div>
            </div>
            <input type="submit" class="btn" name="submit">
        </form>
        <a href="./login.php" class='a-link'>I have an account</a>
        <div class="custom-message">
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p>☹️ Fill all the fields! ☹️</p>";
                    }
                    if($_GET["error"] == "invalidusername"){
                        echo "<p>☹️ Invalid Username! ☹️</p>";
                    }
                    if($_GET["error"] == "invalidemail"){
                        echo "<p>☹️ Invalid Email! ☹️</p>";
                    }
                    if($_GET["error"] == "passwordnotmatch"){
                        echo "<p>☹️ Passwords are not match! ☹️</p>";
                    }
                    if($_GET["error"] == "usernametaken"){
                        echo "<p>☹️ Username is taken! ☹️</p>";
                    }
                    if($_GET["error"] == "emailtaken"){
                        echo "<p>☹️ Email is taken! ☹️</p>";
                    }
                    if($_GET["error"] == "mobilenumbertaken"){
                        echo "<p>☹️ Mobile Number is taken! ☹️</p>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>

