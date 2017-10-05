<?

	$host = "localhost";
	$user = "root";
	$pass = "root";
	$dbname = "coach_gadgets";

	$conndb = mysql_connect($host,$user,$pass) or die ("Error");
	mysql_select_db($dbname,$conndb);

	mysql_query("SET NAME UTF8");


	

?>