<?php
    include './dbh.config.php';

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        require_once './dbh.functions.php';

        if(emptyInputLogin($username, $password) !== false){
            header('location: ../index.php?error=emptyinput');
            exit();
        }

        managerLogin($conn, $username, $password);
    }
    else{
        header('location: ../index.php');
        exit();
    }

?>