<?php
    session_start();
    include './dbh.config.php';
    
    if(isset($_POST['submit'])){
        $fullName = $_POST['name'];
        $email = $_POST['email'];
        $mobileNumber = $_POST['mobile'];
        $message = $_POST['message'];

        $id = $_SESSION['userID'];

        $query = "INSERT INTO contactus (fullName, email, mobileNumber, message, userID) VALUES ('$fullName','$email','$mobileNumber', '$message','$id')";

        $queryRun = mysqli_query($conn, $query);

        if($queryRun){
            header('Location: ../php/contactus.php');
        }
        else{
            echo "<script>alert('😊 First You have to log into our Website 😊')</script>";
        }
    }
?>