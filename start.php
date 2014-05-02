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

echo("<form method=\"post\"enctype=\"application/x-www-form-urlencoded\" action=\"signup.php\" >
 <input type=\"hidden\" name=\"entity\" type=\"hidden\" value=\"1\">
 <p><button>Sign up</button></p>
</form>");
echo("<form method=\"post\" enctype=\"application/x-www-form-urlencoded\" action=\"coffee.php\" >
 <p><label>Username: <input name=mail required></label></p>
 <p><label>Password: <input name=pass type=password required></label></p>  
 <input type=\"hidden\" name=\"st\" type=\"hidden\" value=\"2411520\">
 <input type=\"hidden\" name=\"user_kind\" type=\"hidden\" value=\"old\">
 <input type=\"hidden\" name=\"size\" type=\"hidden\" value=\"0\">
 <p><button>Sign In</button></p>
</form>");

?>
</article>
<footer>
<p> All Lefts reserved 2011 </p>
</footer>
</body>
</html>

