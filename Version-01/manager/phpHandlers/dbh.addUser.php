<?php
    include './dbh.config.php';

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
            header('location: ../php/adduser.php?error=emptyinput');
            exit();
        }

        if(invalidUsername($username) !== false){
            header('location: ../php/adduser.php?error=invalidusername');
            exit();
        }

        if(invalidEmail($email) !== false){
            header('location: ../php/adduser.php?error=invalidemail');
            exit();
        }

        if(passwordMatch($password, $cpassword) !== false){
            header('location: ../php/adduser.php?error=passwordnotmatch');
            exit();
        }

        if(usernameExists($conn, $username) !== false){
            header('location: ../php/adduser.php?error=usernametaken');
            exit();
        }

        if(emailExists($conn, $email) !== false){
            header('location: ../php/adduser.php?error=emailtaken');
            exit();
        }

        if(mobileNumberExists($conn, $mobileNumber) !== false){
            header('location: ../php/adduser.php?error=mobilenumbertaken');
            exit();
        }

        createUser($conn, $firstName, $lastName, $username, $email, $password, $mobileNumber, $gender);

    }
    else{
        header('location: ../php/adduser.php');
        exit();
    }
?>