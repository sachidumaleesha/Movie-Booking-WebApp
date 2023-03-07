<?php
    include './dbh.config.php';

    if(isset($_GET['deleteFeedbackId'])){
        $id = $_GET['deleteFeedbackId'];

        $query = "DELETE from `feedback` WHERE feedbackID = $id";
        $queryRun  = mysqli_query($conn, $query);

        if($queryRun){
            header("Location: ../php/displayFeedback.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>