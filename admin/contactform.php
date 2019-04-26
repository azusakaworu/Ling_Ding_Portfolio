<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	// $subject = "hey due!";
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

// $mailTo = "azusakaworu@gmail.com";
	$mailTo = "l_ding5@fanshaweonline.ca";
	$headers = "From: noreply@lingdingportfolio.ca";

	$txt = "You have received an e-mail from " . $name . ".\n\n" . $message . "\r\n";
	$txt .= 'Reply-To:' . $mailFrom;

	if (mail($mailTo, $subject, $txt, $headers)) {
		header("Location:/index.php?#contactSection?send=sendEmial");
		exit;

	} else {
		echo "Not send successfully!";
	}

}

?>