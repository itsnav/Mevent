<!-- Stores the data that are edit to the event-->
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
$true=1;

// end of getting values from form

if($connection) //when connection established
	{
		echo "<center>Connection established</center>"."<br>";
		$db_found = mysql_select_db($database,$connection);
	
		if($db_found)   //when database found
		{
			echo "<center>Database found and connected </center>"."<br>";
			$query="update events set name='$name', bannertxt='$bannertext', abttxt='$abttxt', email='$email', address='$address', seats='$seats', closingdate='$closing_date' where flag='$true'";
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
