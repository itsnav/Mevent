<?php
	session_start();
	
	$email=$_SESSION['email'];
	$url=$_SESSION['url'];
	
	//define the receiver of the email
	$to = $email;
	//define the subject of the email
	$subject = 'Entry Pass';
	
	$uname=$_GET["name"];
	
	//define the message to be sent.
	
	$message = "Hi ". $uname." \n\nThanks for registering to our event\n\nHere is the Link to download your entry pass\n".$url."\n\nPlease bring the hard copy of the entry pass sothat we can identify you\n";
	
	//define the headers we want passed.
	$headers = "From: qrcode@testing.com\r\nReply-To: kartheek2789@gmail.com";
	
	//send the email
	$mail_sent = mail( $to, $subject, $message, $headers );
	
	//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
	echo $mail_sent ? "Entry details have been mailed to you." : "Mail sending  failed";
?>