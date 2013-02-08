<html>
	<head>
		<title>Registration</title>
	</head>
	<body>
		<?php
			
			/* Setting User name, Password ,Server name, Database name */
			$user_name = "root";
			$password = "password";
			$database = "qr";
			$server = "localhost";
			/* End of setting User name, Password ,Server name, Database name */
			
			/*  Connecting to Dattabase */
			$connection=mysql_connect($server, $user_name, $password);

			/*START getting values from the FORM  */

			$name=$_POST["name"];
			$company=$_POST["company"];
			$mobile=$_POST["mobileno"];
			$email=$_POST["emailid"];
			$city=$_POST["city"];
			$country=$_POST["country"];
			$pre_edition=$_POST["pre_edition"];
			$profession=$_POST["prof"];
			$designation=$_POST["des"];
			$event=$_POST["event"];
			$about=$_POST["about"];

			/* End of getting values from FORM */

			/* Starting of generating unique id */
			
			$temp=substr($email,0,2);  // taking first 2 letters of email id
			$userid=uniqid($temp);     // Appending 2 letters to generated unique id

			/* End of generating unique id */

			
			/* Starting of fixing event id manually */

			$eventid=1;

			/* End of fixing event id */
 
 

			
			if($connection) //when connection established
			{
				
				$db_found = mysql_select_db($database,$connection);
			
				if($db_found)   //when database found
				{
					/* Inserting the Details into Database  */
					$query="insert into registration values('$userid','$eventid','$name','$company','$mobile','$email','$city','$country','$pre_edition','$profession','$designation','$event','$about');";
					
					$result=mysql_query($query,$connection);
					
						if($result)
						{	
							/* Displaying Success Message */
							echo "<h2><center>Registered Successfully</center></h2>";
							/* Redirecting to display Qr image */
							header("Location:displayQrcode.php?userid=$userid&name=$name&mail=$email");
  							exit;  
						}
						else
							/* Displaying Failed Message  */
							echo "<h2><center>Registration Failed</center></h2>";
							
					/* Closing Connection to Database  */		
					mysql_close($connection);
				
				}
				else //when databaes not found
				{
					echo "No database found with the given name";
					mysql_close($connection);
				}
			}
			else //when connection is not established
			{
				/* Displaying Connection Failed Message */
				echo "Connection Not established";
			}

		?>
	</body>
</html>
