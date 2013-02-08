<!-- QR Code Concept inspired by Lazar Laszlo from webqr.com -->
<!DOCTYPE html>
<?php

if(isset($_GET['eventid']))
{
    $eventid = $_GET['eventid'];
}
else
{
    echo "event not selected";
    die;
}
    
?>
<html>
<head>
    <title>QR Code based registration checker</title>

<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="QR Code scanner">
<meta name="keywords" content="qrcode,qr code,scanner,barcode,javascript">
<meta name="language" content="English">
<meta name="copyright" content="Lazar Laszlo (c) 2011">
<meta name="Revisit-After" content="1 Days">
<meta name="robots" content="index, follow"> -->


<style type="text/css">
body{
    width:100%;
    text-align:center;
}
img{
    border:0;
}
#main{
    margin: 15px auto;
    background:white;
    overflow: auto;
    width: 750px;
}
#header{
    background:white;
}
#mainbody{
    background: white;
    width:100%;
    display:none;
}
#footer{
    background:white;
}
#qrfile{
    width:320px;
    height:240px;
}
#v{
    width:320px;
    height:240px;
}
#qr-canvas{
    display:none;
}
#iembedflash{
    margin:0;
    padding:0;
}
#mp1{
    text-align:center;
    font-size:12px;
}
#mp2{
    text-align:center;
    font-size:25px;
    color:red;
}
.selector{
/*	border: solid;
	border-width: 3px 3px 1px 3px;
    */    margin:0;
    padding:0;
    cursor:pointer;
    margin-bottom:-5px;
}
#outdiv
{
    width:320px;
    height:240px;
    display: block;
    margin: 0 auto;
/*    border: solid;
border-width: 3px 3px 3px 3px;*/
}
#result{
/*    border: solid;
border-width: 1px 1px 1px 1px;*/
padding:20px 0;
width:320px;
background-color: orange;
display: block;
margin: 0 auto;
}

#result2{
/*    border: solid;
border-width: 1px 1px 1px 1px;*/
padding:20px 0;
width:320px;
background-color: yellow;
display: block;
margin: 0 auto;
}


#imghelp{
    position:relative;
    left:0px;
    top:-160px;
    z-index:100;
    font:18px arial,sans-serif;
    background:#f0f0f0;
    margin-left:35px;
    margin-right:35px;
    padding-top:10px;
    padding-bottom:10px;
    border-radius:20px;
}
p.helptext{
    margin-top:54px;
    font:18px arial,sans-serif;
}
p.helptext2{
    margin-top:100px;
    font:18px arial,sans-serif;
}
ul{
    margin-bottom:0;
    margin-right:40px;
}
li{
    display:inline;
    padding-right: 0.5em;
    padding-left: 0.5em;
    font-weight: bold;
    border-right: 1px solid #333333;
}
li a{
    text-decoration: none;
    color: black;
}

#footer a{
	color: black;
}
.tsel{
    padding:0;
}

}

</style>

<script type="text/javascript" src="./Web QR_files/llqrcode.js"></script>
<!-- <script type="text/javascript" src="./Web QR_files/plusone.js" gapi_processed="true"></script> -->
<script type="text/javascript" src="./Web QR_files/webqr.js"></script>
</head>
<style type="text/css"></style>

<?php echo "<body onload=\"load(" . $eventid . ")\">" ?>
    <div id="main">

        <div id="mainbody" style="display: inline;">
            <p id="mp1">
                QR code scanner supported
            </p>
        </div>

        <div id="outdiv">
            <p class="helptext2">Close other pages using the Webcam</p>            
        </div>

        <div id="result"></div>
        <div id="result2">- waiting on scan -</div>


    </div>
    <canvas id="qr-canvas" width="800" height="600" style="width: 800px; height: 600px;"></canvas>


</body>
</html>