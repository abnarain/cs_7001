<html>
<head>
<title>Coffee!</title>
</head>
<body>
<header>
<h1>Coffee!</h1>
</header>
<section>
<article>
<?
$dec= $_POST["size"];

if($dec==1 || $dec==0){
$id=-1;
$con = mysql_connect("localhost", "abhinav", "abhinav") or die(mysql_error());
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
        echo ("Sorry :( We'll be back soon! <br/> ");
  }

mysql_select_db("abhinav",$con) or die(mysql_error());

$result = mysql_query("SELECT * FROM _users_ ") or die(mysql_error());  
while($row = mysql_fetch_array($result)){
if($row['email_']== $email && $row['password_'] == $pass){
	$id=$row[id] ;
}
}


//$row = mysql_fetch_array( $result );

mysql_close($con);
if($id=-1){

echo("Kindly register!\n");
}
else {
echo ("
<h2><p>You got surprise! </p></h2> 
<form method=\"post\" enctype=\"application/x-www-form-urlencoded\" action=\"coupon.php\" >
<fieldset>
  <legend> Choose coffee time ?</legend>
  <p><label> <input type=radio name=size value=1> Let's have coffee now!  </label> </p>
  <p><label><input type=radio name=size value=2>  Coffee in 10 minutes   </label></p>
  <p><label> <input type=radio name=size value=3> Coffee in 20 minutes   </label></p>
  <p><label> <input type=radio name=size value=4> Coffee in 30 minutes   </label></p>
	 <input type=hidden name=random value=$id>
  <p><button>Submit order</button></p>
</fieldset>
</form>");
}
}else if ($dec==2){ 
echo(" Bye ! <br/>Catch you soon!"); 
}
?>
</article>
<footer>
<p>All Lefts reserved 2011 </p>
</footer>
</body>
</html>
