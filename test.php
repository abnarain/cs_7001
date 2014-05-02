<html><head>this is abhinav <br/></head>

<body>
<p>this is abhinav home page </p>

<?
echo "This is the starting point! " ;
mysql_connect("localhost", "abhinav", "abhinav") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("abhinav") or die(mysql_error());
echo "Connected to Database";
$result = mysql_query("SELECT * FROM example")
or die(mysql_error());  
$row = mysql_fetch_array( $result );
echo "Name: ".$row['name'];
echo " Age: ".$row['age'];

?>

</body>

</html>
