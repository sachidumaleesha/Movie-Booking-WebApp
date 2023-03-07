<?php
    session_start();
    include './dbh.config.php';
    
    if(isset($_POST['submit'])){
        //Booking Details
        $bookedDate =  date('Y-m-d', strtotime($_POST['bookingDate']));
        $showTime = $_POST['time'];
        $ticketCount = $_POST['ticketCount'];
        $price = $_POST['price'];
        $movieID = $_GET['movieID'];
        $userID = $_SESSION['userID'];

        //Payment Details
        $nameOnTheCard = $_POST['nameOnTheCard'];
        $cardNumber = $_POST['cardNumber'];

        $bookingQuery = "INSERT INTO booking(bookedDate, showTime, ticketCount, price, movieID, userID) VALUES ('$bookedDate', '$showTime',$ticketCount, '$price', '$movieID', '$userID')";

        $paymentQuery = "INSERT INTO payment(nameOnTheCard, cardNumber, amount, userID) VALUES ('$nameOnTheCard', '$cardNumber', '$price', '$userID')";

        $bookingQueryRun = mysqli_query($conn, $bookingQuery);
        $paymentQueryRun = mysqli_query($conn, $paymentQuery);

        if($bookingQueryRun && $paymentQueryRun){
            header('Location: http://localhost/movie-booking-system/php/profile.php');
        }
        else{
            echo "<script>alert('😊 In order to book tickets first you have to log into our website 😊')</script>";
        }
    }
?>