<!-- Retrive all the values from the database and place it order to convert to pdf-->
<!DOCTYPE html>   
<html>  
    <head>  
        <style>  
	        body {font-family:Helvetica, Arial, sans-serif; font-size:10pt;}  
	        table {width:100%; border-collapse:collapse; border:1px solid #CCC;}  
	        td {padding:5px; border:1px solid #CCC; border-width:1px 0;}  
        </style>  
    </head>  
    <body>  
	<?php	
		$user_name = "root";
		$password = "password";
		$database = "qr";
		$server = "localhost";
		$connection=mysql_connect($server, $user_name, $password);
 
		if($connection) //when connection established
		{
			//echo "<center>Connection established</center>"."<br>";
			$db_found = mysql_select_db($database,$connection);
	
			if($db_found)   //when database found
			{
			//echo "<center>Database found and connected </center>"."<br>";
			$query="select * from registration";
			$result=mysql_query($query,$connection);
			while ($cursor=mysql_fetch_assoc($result)) 
			{
				$name=$cursor['name'] ;
				$email=$cursor['email'];
				$userid=$cursor['userid'];
				$mobile=$cursor['mobile'];
	?>
<!-- CREATE TABLE LAYOUT FOR EACH PERSON ENTRY -->
	<table>  
        	<tr>  
                <td>Name:</td>  
                <td> <?php echo $name;?></td>  
                <td>Email:</td>  
                <td><?php echo $email;?></td>  
            </tr>  
            <tr>  
                <td>User ID</td>  
                <td colspan="3"><?php echo $userid;?></td>  
            </tr>  
            <tr>  
                <td>Mobile No</td>  
                <td colspan="3"><?php echo $mobile;?></td>  
            </tr>
			
	</table>  
        <br><br><br><br><br><br><br>
	<?php
		 	}
			mysql_close($connection);
	
		}
		else //when databaes not found
		{
			echo "No database found with the given name";
			mysql_close($connection);
		}
		}
		else //when connection is not established
		 echo "Connection Not established";
	 ?>
	    
    </body>  
    </html>  
