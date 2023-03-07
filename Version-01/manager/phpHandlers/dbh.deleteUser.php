<?php
    include './dbh.config.php';

    if(isset($_GET['deleteUserId'])){
        $id = $_GET['deleteUserId'];

        $query = "DELETE from `users` WHERE userId = $id";
        $queryRun  = mysqli_query($conn, $query);

        if($queryRun){
            header("Location: ../php/displayUsers.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>