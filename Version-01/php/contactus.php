<?php
    include '../php/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/contactus.css">
    <script src="https://kit.fontawesome.com/fd20cad007.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="contact-box">
            <div class="contact-left">
                <h1>Connect With Us</h1>
                <p>If you wish to contact us via email please fill the following form and we get in touch with you at the earliest.</p>
                <form action="../phpHandlers/dbh.contactus.php" method="POST">
                    <div class="input-row">
                        <label>Full Name</label>
                        <input type="text" name="name" placeholder="Ema Amenda" required>
                    </div>
                    <div class="input-row">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="emaamenda@gmail.com" required>
                    </div>
                    <div class="input-row">
                        <label>Mobile Number</label>
                        <input type="text" name="mobile" placeholder="0765781204" required>
                    </div>
                    <div class="input-row">
                        <label>Message</label>
                        <textarea name="message" cols="30" rows="10" placeholder="Typing..."></textarea required>
                    </div>
                    <div class="input-row">
                        <?php
                            if(isset($_SESSION['userID'])){
                                echo "<input type='submit' name='submit' value='Send'>";
                            }
                            else{
                                echo "<button class='btn'>You are not login</button>";
                            }
                        ?>
                    </div>
                </form>
            </div>
            <div class="contact-right">
                <div class="details">
                    <h3>MARKETING & ADVERTISING</h3>
                    <div class="para">
                        <i class="fa-solid fa-phone"></i> 0711200220 - Address Name <br>
                        <i class="fa-solid fa-envelope"></i> cinemix@gmail.com
                    </div>   
                </div> <hr>
                <div class="details">
                    <h3>THEATER CONTACT DETAILS</h3>
                    <div class="para">
                        CCC Cinema: &nbsp;&nbsp; <i class="fa-solid fa-phone"></i> 0112083064 <br>
                        Liberty by Scope Cinema: &nbsp;&nbsp; <i class="fa-solid fa-phone"></i> 0112325266
                    </div>
                </div> <hr>
                <div class="details">
                    <h3>HELP DESK</h3>
                    <div class="para">
                        <i class="fa-solid fa-phone"></i> ( 09.00 am - 06.00 pm Monday - Friday ) <br> &nbsp;&nbsp;&nbsp;&nbsp; 0112083063 / 0703387602 <br>
                        <i class="fa-solid fa-envelope"></i> helpdesk@cinemix.com
                    </div>   
                </div>
                <div class="map">
                    <img src="../images/Contact_us/map.png" width="400px" height="250px">
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

<?php
    include '../php/footer.php';
?>