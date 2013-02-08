
var draw_qrcode = function(text, typeNumber, errorCorrectLevel) {
	document.write(create_qrcode(text, typeNumber, errorCorrectLevel) );
};

var create_qrcode = function(text, typeNumber, errorCorrectLevel, table) {

	var qr = qrcode(typeNumber || 4, errorCorrectLevel || 'M');
	qr.addData(text);
	qr.make();

//	return qr.createTableTag();
	return qr.createImgTag();
};

var update_qrcode = function() 
{
	alert("In update_qrcode");
	//var text = document.forms[0].elements['msg'].value.replace(/^[\s\u3000]+|[\s\u3000]+$/g, '');
	  var text =document.qr.msg.value.replace(/^[\s\u3000]+|[\s\u3000]+$/g, '');
	alert("Generating qr code for the id "+text);
		//var temp=create_qrcode(text);
	document.getElementById('qrcode').innerHTML = create_qrcode(text);
	//document.getElementById('qrcode').innerHTML=temp;

/*		
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
			document.getElementById('qr').innerHTML=xmlhttp.responseText;
		}
	}

	var url = "function.php?qrcode="+temp;
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
	
	
*/
myJavascriptFunction(temp);
};

function myJavascriptFunction(temp) { 
  
 // window.location.href = "function.php?qrcode=" + temp; 
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

