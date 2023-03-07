<?php
    include './dbh.config.php';

    if(isset($_GET['deleteManagerId'])){
        $id = $_GET['deleteManagerId'];

        $query = "DELETE from `manager` WHERE managerId = $id";
        $queryRun  = mysqli_query($conn, $query);

        if($queryRun){
            header("Location: ../php/displayManagers.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>