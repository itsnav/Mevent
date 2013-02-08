<!-- activates the event which is selected in activate event page -->
<?php

	$id=$_POST["events"];
	$true=1;
	$false=0;
	$user_name = "root";
	$password = "password";
	$database = "qr";
	$server = "localhost";
	$connection=mysql_connect($server, $user_name, $password);
	if($connection) //when connection established
	{
		echo "<center>Connection established</center>"."<br>";
		$db_found = mysql_select_db($database,$connection);
	
		if($db_found)   //when database found
		{
			echo "<center>Database found and connected </center>"."<br>";
			$query="update events set flag='$false'";
			$result=mysql_query($query,$connection);
			if($result)
			{
				echo "<h2><center>Set flag false</center></h2>";
			}
			else
			{	echo "<h2><center>Flag false Failed</center></h2>";}

			$query1="update events set flag='$true' where id='$id'";
			$result1=mysql_query($query1,$connection);
			if($result1)
			{
				echo "<h2><center>Set flag true</center></h2>";
			}
			else
			{echo "<h2><center>Flag true Failed</center></h2>";}

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

