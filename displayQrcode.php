	<?php 
		session_start(); 
		
		/*  Function to get the Current page url */
		function curPageURL() 
		{
			$pageURL = 'http';
				if ($_SERVER["HTTPS"] == "on") /* Checking whether the server is HTTPS or HTTP  */
				{
					$pageURL .= "s"; /* If HTTPS appending S to page url*/
				}
				$pageURL .= "://";   /* Appending :// to Url  */
				
				if ($_SERVER["SERVER_PORT"] != "80") /* Checking the port number*/
				{
					$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
					/* Appending Server name ,Server port number ,request uri to Url  */
				} 
				else 
				{
					$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; /* Appending  Server name,Request uri to Url */
				}
			return $pageURL;  /* Returning Current page Url to calling function  */
		 
		} /* End of function curPageUrl()*/
		
			/* Creating new Url which will be sent to User's Mail Address*/
			
			$tempUrl=curPageURL();
			$lastIndex1=strrpos($tempUrl,"/");
			$subString1=substr($tempUrl,0,$lastIndex1);
			$url=$subString1;
			$url .="/openLink.php"."?userid=".$_GET["userid"]."&name=".$_GET["name"];
						
			/* End of creating new Url  */	
		
			$email=$_GET['mail'];    /*   Receiving Email id from url        */
			$to = $email;            /*   Setting client email to parameter  */  
			$subject = 'Entry Pass'; /*   Subject of the email               */
			
			
			$uname=$_GET["name"];    /*   Getting user name from url   		 */
			
			/* Body of the Email  */
			$message = "Hi ". $uname." \n\nThanks for registering to our event\n\nHere is the Link to download your entry pass\n".$url."\n\nPlease bring the hard copy of the entry pass sothat we can identify you\n";
			/* End of Body of email  */
	
			$headers = "From: qrcode@testing.com\r\nReply-To: kartheek2789@gmail.com";
			
			$mail_sent = mail( $to, $subject, $message, $headers );  /* send the email  */
			

		
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
		<meta http-equiv="Content-Type" content="text/html; charset=Utf-8">
		
		<!--js files for generating QR code-->
		
		<script type="text/javascript" src="qrcode.js"></script>
		
		<!-- End of js files for Qr code generation-->
		
		<script type="text/javascript" language="javascript">
		
			var draw_qrcode = function(text, typeNumber, errorCorrectLevel) 
			{
				document.write(create_qrcode(text, typeNumber, errorCorrectLevel) );
			};

			var create_qrcode = function(text, typeNumber, errorCorrectLevel, table) 
			{
			var qr = qrcode(typeNumber || 4, errorCorrectLevel || 'M');
			qr.addData(text);
			qr.make();
			return qr.createImgTag();
			};

			var update_qrcode = function() 
			{
			var text = document.forms[0].elements['msg'].value.replace(/^[\s\u3000]+|[\s\u3000]+$/g, '');
			document.getElementById('qrcode').innerHTML = create_qrcode(text);
			myJavascriptFunction(temp);
			};

			function myJavascriptFunction(temp) 
			{ 
				if (window.XMLHttpRequest)
				{// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				}
				else
				{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function()
				{	
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById('t').innerHTML=xmlhttp.responseText;
					}
				}

				var url = "function.php?qrcode="+temp;
				xmlhttp.open("GET",url,true);
				xmlhttp.send();
			}
		</script>	
		<title>Display QR code</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<style type="text/css">
		  body 
		  {
			padding-top: 20px;
			padding-bottom: 40px;
		  }

		  /* Custom container */
		  .container-narrow 
		  {
			margin: 0 auto;
			max-width: 700px;
		  }
		  .container-narrow > hr 
		  {
			margin: 30px 0;
			background-color: yellow;
		  }
		  .text-align
		  {
		   text-align: justify;
		  }
		  
		  /* Supporting marketing content */
		  
		  .marketing 
		  {
			margin: 60px 0;
		  }
		  .marketing p + h4 
		  {
			margin-top: 28px;
		  }
		</style>
		
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		
		
  </head>

  <body onload="update_qrcode()">

		<div class="container-narrow">

			<div><h1>LOGO</h1></div>
				<hr>
                    <div class="row-fluid marketing">
						<div class="span6 text-align">
							<h4>About Us</h4>
							<p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

							<h4>Event Highlights</h4>
							<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
          
						</div>
						<div class="span6">
							<div class="offset2"><h3>LOGOs</h3></div>
								<form> 
									<input type="hidden" name="msg" value="<?php  echo $_GET["userid"];?>">
								</form>
							<div class="offset2"><h3><i>Visitor Pass<i></h3>
								<h4><?php echo $_GET["name"];?></h4>
							</div>
							<div class="offset2" id="qrcode"><h3>QR CODE</h3></div>
						</div>
				
						<div class="span12 text-align">
							<h4>Travel Information</h4>
							<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. 
							Cras mattis consectetur purus sit amet fermentum.Donec id elit non mi porta gravida at eget metus.
							Maecenas faucibus mollis interdum.Donec id elit non mi porta gravida at eget metus. 
							Maecenas faucibus mollis interdum.Morbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at eros</p>
						</div>

        
					</div>

				<hr>
			</div>
		</div> <!-- /container --> 


  </body>
</html>
