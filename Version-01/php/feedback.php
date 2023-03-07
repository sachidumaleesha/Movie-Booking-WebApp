<?php
	include "../php/header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="../css/feedback.css">
</head>
<body>
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>FeedBack</h2>
				<p>Please help us to serve you better by taking a couple of minutes.</p><br>
				<form action="../phpHandlers/dbh.feedback.php" method="POST">
					<input type="text" class="field" placeholder="Your Name" name="fullName" required>
					<input type="text" class="field" placeholder="Your Email" name="email" required>
					<input type="text" class="field" placeholder="Phone" name="phoneNumber" required>
					<p>How satisfied were you with our Service?</p><br>
					<input type="radio" name="rating" value="excellent"><label>Excellent</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="rating" value="good"><label>Good</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="rating" value="neutral"><label>Neutral</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="rating" value="poor"><label>Poor</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<textarea placeholder="Message" class="field" name="message"></textarea>
					<?php
						if(isset($_SESSION['userID'])){
							echo "<button class='btn' name='submit'>Submit FeedBack</button>";
						}
						else{
							echo "<button class='btn'>You are not login</button>";
						}
					?>
					
					
				</form>
			</div>
		</div>
	</div>
</body>
</html>


<?php
	include "../php/footer.php";
?>