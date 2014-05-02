<html> 
<head>
<title>How about Coffee ? </title>
</head>
<body>
<header>
<h1>How about Coffee </h1>
</header>
<section>
<article>
<?
$email=$_POST["email"] ;
$password=$_POST["pass"];
$pol_star=$_POST["size"];
$age_group=$_POST["size2"];
$citizen=$_POST["size3"];
$lname=$_POST["lname"];
$fname=$_POST["fname"];
$phone_no= $_POST["phone"];
$st=$_POST["st"];
$con = mysql_connect("localhost", "abhinav", "abhinav");
   if (!$con){
   die('Could not connect: ' . mysql_error().'<br />');
   }

mysql_select_db("abhinav",$con) or die('Error: ' .mysql_error(). '<br />');
/*Commit to all the tables*/
$sql1="INSERT INTO _users_ VALUES($fname,$lname,$email,$password,$phone) ";
$sql2="INSERT INTO _ratings_VALUES($pol_star)";
$sql3="INSERT INTO _data_VALUES(age_group,nationality,sex)";

$result1 = mysql_query($sql1) or die(mysql_error());
$result1 = mysql_query($sql2) or die(mysql_error());



?>
<form method="post"
      enctype="application/x-www-form-urlencoded"  action="coffee.php">
<fieldset>
  <legend> Choose coffee time ?</legend>
<p><label> <input type=radio name=size value=1>Now? </label></p>
<p><label> <input type=radio name=size value=2>Exit.. May be later!  </label></p>
</fieldset>
<input type=hidden name=start value=$id> 
<p><button>Chose!</button></p>

</form>
</article>
<footer>
<p>All Lefts reservered 2011</p>
</footer>
</body>
</html>
