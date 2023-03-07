<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CineMix - Dashboard</title>
    <link rel="stylesheet" href="../css/addUser.css">
</head>
<body>

    <?php
        include '../php/sidebar.php';
    ?>

    <div class="content">
        <div class="title">
            <h2>Add New Customer</h2>
        </div>
        <form action="../phpHandlers/dbh.addUser.php" class="form-group" method="POST">
            <div class="input-group">
                <label>Enter First Name</label>
                <input type="text" name="firstName">
            </div>
            <div class="input-group">
                <label>Enter Last Name</label>
                <input type="text" name="lastName">
            </div>
            <div class="input-group">
                <label>Enter Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Enter Email</label>
                <input type="text" name="email">
            </div>
            <div class="input-group">
                <label>Enter Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="cpassword">
            </div>
            <div class="input-group">
                <label>Enter Mobile Number</label>
                <input type="text" name="mobileNumber" maxlength="10">
            </div>
            <div class="input-group">
                <label>Enter Gender</label>
                <input type="text" name="gender">
            </div>
            <input type="submit" name="submit" value="Add New Customer" class="btn">
        </form>
    </div>
    
</body>
</html>