<!-- Stores the data that are enter to craete a new event-->
<html>
	<head>
	<title>Store the new event</title>
	</head>
<body>
<?php
	$user_name = "root";
	$password = "password";
	$database = "qr";
	$server = "localhost";
	$connection=mysql_connect($server, $user_name, $password);

	//getting values from the form 

	$name=$_POST["name"];
	$bannertext=$_POST["bannertxt"];
	$abttxt=$_POST["abttxt"];
	$email=$_POST["email"];
	$address=$_POST["address"];
	$seats=$_POST["noofseats"];
	$closing_date=$_POST["closing_dates"];
	$flag=0;

	// end of getting values from form

	if($connection) //when connection established
		{
			echo "<center>Connection established</center>"."<br>";
			$db_found = mysql_select_db($database,$connection);
	
			if($db_found)   //when database found
			{
				echo "<center>Database found and connected </center>"."<br>";
				$query="insert into events values('$_DEFAULT','$name','$bannertext','$abttxt','$email','$address','$seats','$closing_date','$flag');";
				$result=mysql_query($query,$connection);
				if($result)
				{
					echo "<h2><center>Event Created Successfully</center></h2>";
				}
				else
				echo "<h2><center>Registration Failed</center></h2>";
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
			echo "Connection Not established";
		}

	?>
</body>
</html>
