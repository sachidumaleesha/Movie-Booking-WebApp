<?php
    session_start();
    include './dbh.config.php';
    
    if(isset($_POST['submit'])){
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $mobileNumber = $_POST['phoneNumber'];
        $rating = $_POST['rating'];
        $message = $_POST['message'];

        $id = $_SESSION['userID'];

        $query = "INSERT INTO feedback (fullName, email, mobileNumber, rating, message, userID) VALUES ('$fullName','$email','$mobileNumber','$rating','$message','$id')";

        $queryRun = mysqli_query($conn, $query);

        if($queryRun){
            header('Location: ../php/feedback.php');
        }
        else{
            echo "<script>alert('😊 First You have to log into our Website 😊')</script>";
        }
    }
?>