
<?php 
	session_start(); 		
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

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
		 <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="../assets/ico/favicon.png">
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

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="../assets/js/jquery.js"></script>
		<script src="../assets/js/bootstrap-transition.js"></script>
		<script src="../assets/js/bootstrap-alert.js"></script>
		<script src="../assets/js/bootstrap-modal.js"></script>
		<script src="../assets/js/bootstrap-dropdown.js"></script>
		<script src="../assets/js/bootstrap-scrollspy.js"></script>
		<script src="../assets/js/bootstrap-tab.js"></script>
		<script src="../assets/js/bootstrap-tooltip.js"></script>
		<script src="../assets/js/bootstrap-popover.js"></script>
		<script src="../assets/js/bootstrap-button.js"></script>
		<script src="../assets/js/bootstrap-collapse.js"></script>
		<script src="../assets/js/bootstrap-carousel.js"></script>
		<script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
