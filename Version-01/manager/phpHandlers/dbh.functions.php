<?php

    //Manager login validations
    function emptyInputLogin($username, $password){
        $result;
        if(empty($username) || empty($password)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function managerUsernameExists($conn, $username){
        $sql = "SELECT * FROM `manager` WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../php/signup.php?error =stmtfailed');
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function managerLogin($conn, $username, $password){
        $loginDataExists = managerUsernameExists($conn, $username);

        if($loginDataExists === false){
            header('location: ../index.php?error=loginFailed');
            exit();
        }

        $pwdHashed = $loginDataExists["password"];
        $checkPassword = password_verify($password, $pwdHashed);

        if($checkPassword === false){
            header('location: ../index.php?error=wrongpassword');
            exit();
        }
        else if($checkPassword === true){
            session_start();
            $_SESSION['managerID'] = $loginDataExists['managerID'];
            $_SESSION['username'] = $loginDataExists['username'];
            header('location: ../php/dashboard.php');
            exit();
        }
    }

    // New user input data Validations
    function emptyInputSignup($firstName, $lastName,$username, $email, $password, $cpassword, $mobileNumber){
        $result;
        if(empty($firstName) || empty($lastName) || empty($username) || empty($email) || empty($password) || empty($cpassword) || empty($mobileNumber)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function invalidUsername($username){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function passwordMatch($password, $cpassword){
        $result;
        if($password != $cpassword){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function usernameExists($conn, $username){
        $sql = "SELECT * FROM users WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../php/signup.php?error =stmtfailed');
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function emailExists($conn, $email){
        $sql = "SELECT * FROM users WHERE email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../php/signup.php?error=stmtfailed');
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function mobileNumberExists($conn, $mobileNumber){
        $sql = "SELECT * FROM users WHERE mobileNumber = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../php/signup.php?error=stmtfailed');
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $mobileNumber);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    // Inserting Data
    function createUser($conn, $firstName, $lastName, $username, $email, $password, $mobileNumber, $gender){

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users(firstName,lastName,username,email,password,mobileNumber,gender) VALUES('$firstName','$lastName','$username','$email','$hashedPwd','$mobileNumber','$gender')";

        $queryRun = mysqli_query($conn, $query);
        header('location: ../php/displayUsers.php');
        exit();
    }

    // Update User Information
    function updateUser($conn, $firstName, $lastName, $username, $email, $password, $mobileNumber, $gender, $id){

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        $query = "UPDATE `users` SET firstName = '$firstName', lastName = '$lastName', username = '$username', email = '$email', password='$hashedPwd', mobileNumber = '$mobileNumber', gender= '$gender' WHERE userID = $id";
        $queryRun = mysqli_query($conn, $query);

        header('location: ../php/displayUsers.php');
        exit();
    }


?>