
////////////////////////////Page 1 Form validaton/////////////////////////////////

////////////Information used from below website, however the code has been altered////////////
//////http://webcheatsheet.com/javascript/form_validation.php///////////

function validateFormOnSubmit(theForm) {
var reason = "";

  reason += validateFirst(theForm.first);
  reason += validateSecond(theForm.second);
  reason += validatePostCode(theForm.post);
  reason += validatePassword(theForm.pwd);
  reason += validateEmail(theForm.email);
  reason += validatePhone(theForm.phone);
  reason += validateEmpty(theForm.from);
  
      
  if (reason != "") {
    alert("Some fields need correction:\n" + reason);
    
   return false;
   
  }
else{

reason += 'Thank you ';     /////////////// Displays all information once successfully submitted
  reason += theForm.first.value;
  reason += " "
  reason += theForm.second.value;
  reason += "\n" 
  reason += "Your PostCode is " 
  reason += theForm.post.value;
  reason += "\n"
  reason += "Your Password is " 
  reason += theForm.pwd.value;
  reason += "\n"
  reason += "Your Email is " 
  reason += theForm.email.value;
  reason += "\n"
  reason += "Your Phone Number is " 
  reason += theForm.phone.value;
  reason += "\n"
  reason += "Your Favourite Car is " 
  reason += theForm.from.value;
  

alert(reason);
return false;
}

  
  
  
}


function validateEmpty(fld) {
    var error = "";
 
    if (fld.value.length == 0) {  
        fld.style.background = 'Gold'; 
        error = "The required field has not been filled in.\n"
    } else {
        fld.style.background = 'White';
    }
    return error;  
}

///////////////////// FirstName Details /////////////////////////// 
 
function validateFirst(fld) {
    var error = "";
    var illegalChars = /\W/; // allow letters, numbers, and underscores
 
    if (fld.value == "") {
        fld.style.background = 'Red'; 
        error = "You didn't enter a First Name.\n";
    } else if ((fld.value.length < 5) || (fld.value.length > 15)) { ///////////// Between 5 and 14 letters
        fld.style.background = 'Red'; 
        error = "The First Name is the wrong length.\n";
    } else if (illegalChars.test(fld.value)) {
        fld.style.background = 'Red'; 
        error = "The First Name contains illegal characters.\n";
    } else {
        fld.style.background = 'Gold';
    }
    return error;
}

///////////////////// SecondName Details /////////////////////////// 
 
function validateSecond(fld) {
    var error = "";
    var illegalChars = /\W/; // allow letters, numbers, and underscores
 
    if (fld.value == "") {
        fld.style.background = 'Red'; 
        error = "You didn't enter a Second Name.\n";
    } else if ((fld.value.length < 5) || (fld.value.length > 15)) { ///////////// Between 5 and 15 letters
        fld.style.background = 'Red'; 
        error = "The Second Name is the wrong length.\n";
    } else if (illegalChars.test(fld.value)) {
        fld.style.background = 'Red'; 
        error = "The Second Name contains illegal characters.\n";
    } else {
        fld.style.background = 'Gold';
    }
    return error;
}

///////////////////// PostCode Details /////////////////////////// 
 
function validatePostCode(fld) {
    var error = "";
    var illegalChars = /\W/; // allow letters, numbers, and underscores
 
    if (fld.value == "") {
        fld.style.background = 'Red'; 
        error = "You didn't enter a PostCode Name.\n";
    } else if ((fld.value.length < 7) || (fld.value.length > 8)) { ///////////// Between 6 and 8 letters
        fld.style.background = 'Red'; 
        error = "The PostCode is the wrong length.\n";
    } else if (illegalChars.test(fld.value)) {
        fld.style.background = 'Red'; 
        error = "The PostCode contains illegal characters.\n";
    } else {
        fld.style.background = 'Gold';
    }
    return error;
}
///////////////////// Password Details /////////////////////////// 

function validatePassword(fld) {
    var error = "";
    var illegalChars = /[\W_]/; // allow only letters and numbers 
 
    if (fld.value == "") {
        fld.style.background = 'Red';
        error = "You didn't enter a password.\n";
    } else if ((fld.value.length < 7) || (fld.value.length > 15)) { ///////////// Between 7 and 15 letters
        error = "The password is the wrong length. \n";
        fld.style.background = 'Red';
    } else if (illegalChars.test(fld.value)) {
        error = "The password contains illegal characters.\n";
        fld.style.background = 'Red';
    } else if (!((fld.value.search(/(a-z)+/)) && (fld.value.search(/(0-9)+/)))) {
        error = "The password must contain at least one numeral.\n";
        fld.style.background = 'Red';
    } else {
        fld.style.background = 'Gold';
    }
   return error;
}  
function trim(s)
{
  return s.replace(/^\s+|\s+$/, '');
}

///////////////////// Email Details /////////////////////////// 

function validateEmail(fld) {
    var error="";
    var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
   
    if (fld.value == "") {
        fld.style.background = 'Red';
        error = "You didn't enter an email address.\n";
    } else if (!emailFilter.test(tfld)) {              //test email for illegal characters
        fld.style.background = 'Red';
        error = "Please enter a valid email address.\n";
    } else if (fld.value.match(illegalChars)) {
        fld.style.background = 'Red';
        error = "The email address contains illegal characters.\n";
    } else {
        fld.style.background = 'Gold';
    }
    return error;
}

///////////////////// Phone Details ///////////////////////////

function validatePhone(fld) {
    var error = "";
    var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');    

   if (fld.value == "") {
        error = "You didn't enter a phone number.\n";
        fld.style.background = 'Red';
    } else if (isNaN(parseInt(stripped))) {
        error = "The phone number contains illegal characters.\n";
        fld.style.background = 'Red';
    } else if (!(stripped.length == 11)) {
        error = "The phone number is the wrong length. Make sure you included an area code.\n";
        fld.style.background = 'Gold';
    }
	else {
        fld.style.background = 'Gold';
    }
    return error;
}


//////////////////////////////////Page 2/////////////////////////////////////////////////////////

////////////Information used from below website, however the code has been altered////////////
//////http://www.w3schools.com/xsl/xsl_client.asp//////////////////////////////////


function loadXMLDoc(filename)
{
if (window.ActiveXObject)
  {
  xhttp = new ActiveXObject("Msxml2.XMLHTTP");
  }
else
  {
  xhttp = new XMLHttpRequest();
  }
xhttp.open("GET", filename, false);
try {xhttp.responseType = "msxml-document"} catch(err) {} // Helping IE11
xhttp.send("");
return xhttp.responseXML;
}

function displayResult()
{
xml = loadXMLDoc("xml.xml");
xsl = loadXMLDoc("xslt.xsl");
// code for IE
if (window.ActiveXObject || xhttp.responseType == "msxml-document")
  {
  ex = xml.transformNode(xsl);
  document.getElementById("example").innerHTML = ex;
  }
// code for Chrome, Firefox, Opera, etc.
else if (document.implementation && document.implementation.createDocument)
  {
  xsltProcessor = new XSLTProcessor();
  xsltProcessor.importStylesheet(xsl);
  resultDocument = xsltProcessor.transformToFragment(xml, document);
  document.getElementById("show").appendChild(resultDocument);
  }

}

/////////////////////////////////Page 3//////////////////////////////////////////
function basicInfo() {
			if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.open("GET", "xml.xml", false);
			xmlhttp.send();
			xmlDoc = xmlhttp.responseXML;
			document.write("<table border='2'>");
			var x = xmlDoc.getElementsByTagName("car");  
			for ( i = 0; i < x.length; i++) {
				document.write("<tr><td>");
				document.write(x[i].getElementsByTagName("make")[0].childNodes[0].nodeValue);
				document.write("</td><td>");
				document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
				document.write("</td><td>");
				document.write(x[i].getElementsByTagName("top_speed")[0].childNodes[0].nodeValue);
				document.write("</td><td>");
				document.write(x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue);
				document.write("</td><td>");
				document.write(x[i].getElementsByTagName("rating")[0].childNodes[0].nodeValue);
				document.write("</td></tr>");
			}
			document.write("</table>");
			}
/////////////////////////////Page 4////////////////////////////////////////////////
function displayInfo() {
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","xml.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 
x=xmlDoc.getElementsByTagName("car");
i=0;
}
function displayCar()
{
artist=(x[i].getElementsByTagName("make")[0].childNodes[0].nodeValue);
title=(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
year=(x[i].getElementsByTagName("top_speed")[0].childNodes[0].nodeValue);
txt="Make: " + artist + "<br>Model: " + title + "<br>Top Speed: "+ year;
document.getElementById("showCar").innerHTML=txt;
}
function nextOne()
{
if (i<x.length-1)
  {
  i++;
  displayCar();
  }
}
function previousOne()
{
if (i>0)
  {
  i--;
  displayCar();
  }
}

		