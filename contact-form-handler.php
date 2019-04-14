<?php>
	$name = $_POST{'name'};
	$vistor_email = $_POST{'email'};
	$message = $_POST{'message'};


	$email_from = 'TheITTech@outlook.com';

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n".
					"User Email: $vistor_email.\n"
					"User Message: $message.\n"


	$to = "VelezCM93@gmail.com";

	$headers ="From: Semail_from \r\n";

	$headers .+ "Reply-To: $vistor_email \R\n;"

	mail($to,$email_subject,$email_body,$headers);

	header("location: index.html");


	?>