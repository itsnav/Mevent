<!-- Displays all events in database. user can activate any event -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Activate Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
     body {
        padding-top: 20px;
        padding-bottom: 40px;
      }
	.container-narrow {
        margin: 0 auto;
        max-width: 700px;
		
      }
	  .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>

<!-- top banner -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
			<ul class="nav">
              <li class="active"><a href="#">Register</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            
             </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<!-- list display -->
    <div class="container-narrow">
	<br>
	<br>
	<div class="span-3 offset2">
	<h2 class="form-signin-heading">Activate Event</h2>
    </div>

    <br>
    <div class="row-fluid offset1">
	<br>
	<br>
	<br>
	
	<form name="acivate" method="post" action="activate_events_db.php">
	<div class="span12">
      	<?php


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
			$query= "select * from events";
			$result=mysql_query($query,$connection);
	

	
				while ($cursor=mysql_fetch_assoc($result)) 
				{
				$id=$cursor['id'] ;
				$name=$cursor['name'];
	?>
	<input type="checkbox" name="events" value="<?php echo htmlspecialchars($id);?>"> <?php echo $name;?> </input><br>
	<?php }
	
	
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
	<input type="submit" class="btn btn-large btn-primary" value="submit"></input>
   </div>
  </form>
      
    </div> <!-- /container -->

   

  </body>
</html>
