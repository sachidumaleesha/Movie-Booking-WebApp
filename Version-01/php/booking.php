<?php
    include '../phpHandlers/dbh.config.php';
    include './header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link rel="stylesheet" href="../css/booking.css">
    <script src="../js/calculatePayment.js" type="text/javascript"></script>
</head>
<body>

    <?php
        $id = $_GET['movieID'];
        $query = "select * from `now_showing_movies` where movieID = $id;";
        $queryRun = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($queryRun);
        $movieName = $row['movieName'];
        $ShowEndDate = $row['endDate'];
        $movieImage = "../admin/phpHandlers/".$row['movieImage'];
        $bannerImage = "../admin/phpHandlers/".$row['bannerImage'];
    ?>

    <img src='<?php echo $movieImage; ?>'>
    <form action='../phpHandlers/dbh.bookingPayment.php?movieID=<?php echo $id ?>' method='POST'>
        <div class="content">
            <div class="box-a">
                <div class='input-group'>
                    <label>Movie Name</label>
                    <input type='text' placeholder='<?php echo $movieName; ?>' readonly>
                </div>
                <div class='input-group'>
                    <label>Show End Date</label>
                    <input type='text' placeholder='<?php echo $ShowEndDate; ?>' readonly>
                </div>
                <div class='input-group'>
                    <label>Booking Date</label>
                    <input type='date' name="bookingDate" required>
                </div>
                <div class='input-group'>
                    <label>Show Times</label>
                    <select name='time' required>
                        <option value='09:00 AM'>09:00 AM</option>
                        <option value='12:00 AM'>12:00 AM</option>
                        <option value='03:00 AM'>03:00 PM</option>
                        <option value='06:00 AM'>06:00 PM</option>
                        <option value='09:00 AM'>09:00 PM</option>
                    </select>
                </div>
                <div class='input-group'>
                    <label>Number of Tickets</label>
                    <input type="text" name='ticketCount' onchange='calculateAmount(this.value)'>
                </div>
                <div class='input-group'>
                    <label>Price</label>
                    <input type='text' name='price' id='totalPrice' required readonly>
                </div>
            </div>
            <div class='box-b'>
                <div class='input-group'>
                    <label>Name on the card</label>
                    <input type='text' name='nameOnTheCard' required>
                </div>
                <div class='input-group'>
                    <label>Enter card number</label>
                    <input type='text' name='cardNumber' maxlength='16' required>
                </div>
                <div class='input-group'>
                    <label>Expiration Date</label>
                    <input type='date' name='expDate' required>
                </div>
                <div class='input-group'>
                    <label>Enter CVV</label>
                    <input type='text' name='cvvNumber' maxlength='3' required>
                </div>
            </div>
        </div>
        <input type='submit' name='submit' value='Pay Now' class='btn'>
    </form>
</body>
</html>

<?php
    include './footer.php';
?>