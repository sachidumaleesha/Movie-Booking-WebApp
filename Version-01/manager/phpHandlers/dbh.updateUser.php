<?php
    include './dbh.config.php';
?>

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

        $id = $_GET['updateUserId'];
        $query = "SELECT * from users WHERE userID = '$id';";
        $queryRun = mysqli_query($conn, $query);

        if($queryRun){
            $row = mysqli_fetch_assoc($queryRun);
            $fname = $row['firstName'];
            $lname = $row['lastName'];
            $username = $row['username'];
            $email = $row['email'];
            $password = $row['password'];
            $mobileNumber = $row['mobileNumber'];
            $gender = $row['gender'];
        }
        

        echo"
            <div class='content'>
                <div class='title'>
                    <h2>Update User Information &nbsp-&nbsp ".$fname." ".$lname."</h2>
                </div>
                <form action='' class='form-group' method='POST'>
                    <div class='input-group'>
                        <label>Enter First Name</label>
                        <input type='text' name='firstName' placeholder=".$fname.">
                    </div>
                    <div class='input-group'>
                        <label>Enter Last Name</label>
                        <input type='text' name='lastName' placeholder=".$lname.">
                    </div>
                    <div class='input-group'>
                        <label>Enter Username</label>
                        <input type='text' name='username' placeholder=".$username.">
                    </div>
                    <div class='input-group'>
                        <label>Enter Email</label>
                        <input type='text' name='email' placeholder=".$email.">
                    </div>
                    <div class='input-group'>
                        <label>Enter Password</label>
                        <input type='password' name='password' placeholder='Enter new password'>
                    </div>
                    <div class='input-group'>
                        <label>Confirm Password</label>
                        <input type='password' name='cpassword' placeholder='Confirm password'>
                    </div>
                    <div class='input-group'>
                        <label>Enter Mobile Number</label>
                        <input type='text' name='mobileNumber' placeholder=".$mobileNumber." maxlength='10'>
                    </div>
                    <div class='input-group'>
                        <label>Enter Gender</label>
                        <input type='text' name='gender' placeholder=".$gender.">
                    </div>
                    <input type='submit' name='submit' value='Update User' class='btn'>
                </form>
            </div>
        ";
        if(isset($_POST['submit'])){
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            $mobileNumber = $_POST['mobileNumber'];
            $gender = $_POST['gender'];
    
            require_once './dbh.functions.php';
    
            if(emptyInputSignup($firstName, $lastName,$username, $email, $password, $cpassword, $mobileNumber) !== false){
                header('location: ./dbh.updateUser.php?updateUserId='.$id.'');
                exit();
            }
    
            if(invalidUsername($username) !== false){
                header('location: ./dbh.updateUser.php?updateUserId='.$id.'');
                exit();
            }
    
            if(invalidEmail($email) !== false){
                header('location: ./dbh.updateUser.php?updateUserId='.$id.'');
                exit();
            }
    
            if(passwordMatch($password, $cpassword) !== false){
                header('location: ./dbh.updateUser.php?updateUserId='.$id.'');
                exit();
            }
    
            if(usernameExists($conn, $username) !== false){
                header('location: ./dbh.updateUser.php?updateUserId='.$id.'');
                exit();
            }
    
            if(emailExists($conn, $email) !== false){
                header('location: ./dbh.updateUser.php?updateUserId='.$id.'');
                exit();
            }
    
            if(mobileNumberExists($conn, $mobileNumber) !== false){
                header('location: ./dbh.updateUser.php?updateUserId='.$id.'');
                exit();
            }
    
            updateUser($conn, $firstName, $lastName, $username, $email, $password, $mobileNumber, $gender, $id);
    
        }
    ?>

</body>
</html>