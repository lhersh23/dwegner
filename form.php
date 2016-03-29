<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['comments'];
    $reason = $_POST['reason'];
    $formcontent="From: $name\n Reason for Contact: $reason\n Message: $message";
    $recipient = "Lhersh23@yahoo.com";
    $subject = "Dietrich Wegner Site Form Submission";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, width=device-width" />

<title>Dietrich Wegner | Contact</title>

<link href="styles.css" rel="stylesheet" type="text/css"/>
<link href="normalize.css" rel="stylesheet" type="text/css"/>

</head>
<body>

<div id="container">

	<header>
		<nav class="navLong">
			<a href="index.html"><img src="images/headerLogo.png" alt="Dietrich Wegner Logo" id="logo" /></a>
			
			<ul class="primaryNav">
				<li><a href="index.html">Home</a></li>
				<li><a href="cv.html">CV</a></li>
				<li><a href="statement.html">Statement</a></li>
				<li><a href="work.html">Work</a></li>
				<li class="current"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</header>


	<div id="content">

		<div id="contact">

			<p>Thanks for the message.<br />We'll get back to you soon.</p>

			<form action="form.php" enctype="application/x-www-form-urlencoded" method="post" name="Contact" id="form">
				<fieldset>
					<input value="Name" name="name" type="text" /><br />
					<input value="Email" name="email" type="text" /><br />
					<input value="Reason for Contact" name="reason" type="text" /><br />
					<textarea name="comments" type="text" value="Comments"></textarea>
					<input value="Submit" name="submit" type="submit" class="button submit" />
				</fieldset>
			</form>

			<div id="contactInfo">
				<h4>Contact Information</h4>
				<p><a href="http://www.secristgallery.com/" target="_blank">Carrie Secrist Gallery</a><br />
					835 W Washington Blvd, Chicago, IL 60607<br />
					312-491-0917<br />
					<a href="mailto:info@secristgallery.com">info@secristgallery.com</a></p>
					 	 	 	 
				<p>Carrie Secrist, Owner<br />
					Stevie Greco, Director<br />
					Carmen Price, Head Preparator</p>
					 
				<p>Hours: Tuesday - Friday 10:30-6:00pm<br />
					Saturday 11:00 - 5:00pm</p>

				<p><b>Artist Contact</b><br />
					<a href="mailto:info@dietrichwegner.com">info@dietrichwegner.com</a></p>
			</div>
		</div>

	</div>


	<footer>
		<p>&copy; Dietrich Wegner</p>
	</footer>

</div>

</body>
</html>