<?php
if($_POST["message"]) {
    mail("bridgetkacprzyk174@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Member Form</title>
	<link rel="stylesheet" type="text/css" href="girls.css">
</head>
<body>
	<form method="post" action="contact.php">
		<textarea name="message"></textarea>
		<input type="submit">
	</form>
</body>
</html>