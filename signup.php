<html> 
<head>
<title>Authentication Page</title>
</head>
<body>
<header>
<h1>Login</h1>
</header>
<section>
<article>
<h2><p>Sign In !</p></h2>
<?
$a=0;
if(isset($_POST["entity"])){
$a=1; 
//echo ("this entry has value");
}
else{
echo("Sorry ! Please Login Correctly");
}
if ($a==1) {
echo ("
<form method=\"post\"enctype=\"application/x-www-form-urlencoded\" action=\"question.php\" >
 <p><label>First Name: <input name=fname required></label></p>
 <p><label>Last Name: <input name=lname required></label></p>
 <p><label>Gatech mail: <input name=mail required></label></p>
 <p><label>Password: <input name=phone  required></label></p>
 <p><label>Password: <input name=pass type=password required></label></p>
 <input type=\"hidden\" name=\"st\" type=\"hidden\" value=\"2411520\"> 
 <input type=\"hidden\" name=\"user_kind\" type=\"hidden\" value=\"new\">
 <p><button>Go !</button></p>
</form>");
}else {
echo("an error occurred ! ");
}
?>
</article>
<footer>
<p> All Lefts reserved 2011 </p>
</footer>
</body>
</html>

