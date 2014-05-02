<html> 
<head>
<title>Questionaire!</title>
</head>
<body>
<header>
<h1>Questionaire!</h1>
</header>
<section>
<article>
<form method="post"
enctype="application/x-www-form-urlencoded"
action="choice.php">
<fieldset>
<legend>Pick a person from the following list that you can identify with politically: </legend>
<p><label> <input type=radio name=size value=1>Barack Obama </label></p>
<p><label> <input type=radio name=size value=2>Hilary Clinton </label></p>
<p><label> <input type=radio name=size value=3>Nancy Pelosi </label></p>
<p><label> <input type=radio name=size value=4>Ron Paul </label></p>
<p><label> <input type=radio name=size value=5>Herman Cain </label></p>
<p><label> <input type=radio name=size value=6>Bobby Jindal </label></p>
<p><label> <input type=radio name=size value=7>Mitt Romney </label></p>
<p><label> <input type=radio name=size value=8>Sonny Perdue </label></p>
<p><label> <input type=radio name=size value=9>Bill Maher </label></p>
<p><label> <input type=radio name=size value=10>Jon Stewart </label></p>
<p><label> <input type=radio name=size value=11>Al Franken </label></p>
<p><label> <input type=radio name=size value=12>Howard Dean </label></p>
<p><label> <input type=radio name=size value=13>Rachel Maddow </label></p>
<p><label> <input type=radio name=size value=14>Dennis Kucinich </label></p>
<p><label> <input type=radio name=size value=15>Ralph Nader </label></p>
<p><label> <input type=radio name=size value=16>Michele Bachmann </label></p>
<p><label> <input type=radio name=size value=17>Rush Limbaugh </label></p>
<p><label> <input type=radio name=size value=18>Neal Bortz </label></p>
</fieldset>

<fieldset>
<legend> Select your age group </legend>
<p><label> <input type=radio name=size2 value='21 and under'> 21 and under </label></p>
<p><label> <input type=radio name=size2 value='22 to 34'> 22 to 34 </label></p>
<p><label> <input type=radio name=size2 value='35 to 44'> 35 to 44  </label></p>
<p><label> <input type=radio name=size2 value='45 to 54'> 45 to 54 </label></p>
<p><label> <input type=radio name=size2 value='55 to 64'> 55 to 64 </label></p>
<p><label> <input type=radio name=size2 value='65 and above'> 65 and above </label></p>
<p><label> <input type=radio name=size2 value='Decline'> Decline  </label></p>
</fieldset>

<fieldset>
<legend> Select your Nationality </legend>
<p><label> <input type=radio name=size3 value='US Citizen from Georgia'> US Citizen from Georgia </label></p>
<p><label> <input type=radio name=size3 value='US citizen from outside Georgia'> US citizen from outside Georgia </label></p>
<p><label> <input type=radio name=size3 value='Citizen of an Asian Country'> Citizen of an Asian Country </label></p>
<p><label> <input type=radio name=size3 value='Citizen of a Central American Country'> Citizen of a Central American Country </label></p>
<p><label> <input type=radio name=size3 value='Citizen of a South American Country'> Citizen of a South American Country </label></p>
<p><label> <input type=radio name=size3 value='Citizen of a North American non US Country'> Citizen of a North American non US Country </label></p>
<p><label> <input type=radio name=size3 value='Citizen of an European Country'> Citizen of an European Country </label></p>
<p><label> <input type=radio name=size3 value='Citizen of an African Country'> Citizen of an African Country </label></p>
<p><label> <input type=radio name=size3 value='Citizen of a Pacific Islands country or Australia'> Citizen of a Pacific Islands country or Australia </label></p>
<p><label> <input type=radio name=size3 value='Decline'> Decline </label></p>
</fieldset>
<?
$lname=$_POST["lname"];
$fname=$_POST["fname"];
$phone=$_POST["phone"];
echo ("$fname ,<br />,$lname, <br/>");
$email = $_POST["mail"]; 
$regexp = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
echo $email , "<br/>";
echo $phone , "<br/>";
if (preg_match($regexp, $email)) {
	echo "Email address is valid.";
} else {
	echo "Email address is <u>not</u> valid.";
} 
$password = $_POST["pass"];
/*if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password)) {
  echo "Your passwords is strong.";
  } else {
  echo "Your password is weak.";
  }*/ 

$st=$_POST["st"]; 

<input type=password name=pass value=$password>
<input type=hidden name=phone value=$phone>
<input type=hidden name=email value=$email>
<input type=hidden name=fname value=$fname>
<input type=hidden name=lname value=$lname>
<input type=hidden name=st value=$st>

?>
<p><button>Thats it!</button><p>
</form>
</article>
<footer>
<p>All Lefts reserved 2011 </p>
</footer>
</body>
</html>
