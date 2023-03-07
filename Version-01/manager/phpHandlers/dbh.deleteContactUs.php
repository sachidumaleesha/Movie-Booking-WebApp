<?php
    include './dbh.config.php';

    if(isset($_GET['deleteContactUsId'])){
        $id = $_GET['deleteContactUsId'];

        $query = "DELETE from `contactus` WHERE ContactusID = $id";
        $queryRun  = mysqli_query($conn, $query);

        if($queryRun){
            header("Location: ../php/displayContactus.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>