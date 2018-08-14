<?php
	if (isset($_REQUEST['mail']))
	{
		$email = $_REQUEST['mail'] ;
		$subject = "Schlechtewitzefront Feedback von " . $_REQUEST['firstname'] ;
		$message = $_REQUEST['msg'] ;
		mail("admin@serverlein.de", $subject,
		$message, "From:" . $email);
		header('Location: https://www.schlechtewitzefront.de?s=kontakt&success=yes');
		exit;
	}
?>