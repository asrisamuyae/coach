<?
include("../config.php");
	// $class = $_POST[classs];
	$sql = 'select * from player ORDER BY player_name ASC';
	// $sql = 'select * from player where team_class = "'.$class.'"';
	$Objquery = mysql_query($sql,$conndb);
	//echo $Objquery;
	//$row = mysql_num_rows($Objquery); // นับจำนวนแถว
$rows = array();
	if(mysql_num_rows($Objquery) > 0){
		//$result = mysql_fetch_array($Objquery);
		
		//print json_encode($result);
		while ($result = mysql_fetch_array($Objquery)) {
			 $rows[] = $result;
               
            }
            print json_encode($rows);
		// while($result = mysql_fetch_array($Objquery)){
		// 	$name = $result['username'];
		// 	//echo $namef;
		// }
	}
	else{
		echo "not data";
		
	}

?>