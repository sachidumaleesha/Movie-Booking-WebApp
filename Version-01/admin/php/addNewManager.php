<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CineMix - Dashboard</title>
    <link rel="stylesheet" href="../css/addNewManager.css">
</head>
<body>

    <?php
        include '../php/sidebar.php';
    ?>

    <div class="content">
        <div class="title">
            <h2>Add New Manager</h2>
        </div>
        <form action="../phpHandlers/dbh.addManager.php" class="form-group" method="POST">
            <div class="input-group">
                <label>Enter Manager First Name</label>
                <input type="text" name="firstName">
            </div>
            <div class="input-group">
                <label>Enter Manager Last Name</label>
                <input type="text" name="lastName">
            </div>
            <div class="input-group">
                <label>Enter Manager Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Enter Manager Email</label>
                <input type="text" name="email">
            </div>
            <div class="input-group">
                <label>Enter Manager Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="cpassword">
            </div>
            <div class="input-group">
                <label>Enter Manager Mobile Number</label>
                <input type="text" name="mobileNumber" maxlength="10">
            </div>
            <div class="input-group">
                <label>Enter Manager Gender</label>
                <input type="text" name="gender">
            </div>
            <input type="submit" name="submit" value="Add Manager" class="btn">
        </form>
    </div>
    
</body>
</html>