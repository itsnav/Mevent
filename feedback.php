
<?php

	/* These are the variables that tell the subject of the email and where the email will be sent.*/

	$emailSubject = 'Feedback of event';
	$mailto = 'kartheek2789@gmail.com';

	/* These will gather what the user has typed into the fieled. */

	$name = $_POST['name'];
	$mobile = $_POST['mobileno'];
	$email = $_POST['emailid'];
	$message .="Hi\n\nI am ".$name."\n\nThis is My mobile number \n\n".$mobile;
	$message .= "\n \n ".$_POST['message'];

	/* This takes the information and lines it up the way you want it to be sent in the email. */



	$headers = "From:".$email."\r\n"; 						    // This takes the email and displays it as who this email is from.
	$headers .= "Content-type: text/html\r\n"; 				   // This tells the server to turn the coding into the text.
	$success = mail($mailto, $emailSubject, $message,$email); // This tells the server what to send.
	
	if($success)
		echo "Mail sent successfully";                       //Success Message
	else
		echo "Mail sending failed";							//Failure Message
?>

