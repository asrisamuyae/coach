<?
include("../config.php");
	// $class = $_POST[classs];
// echo $_POST["name"].$_POST["birthday"].$_POST["position"].$_POST["school"].$_POST["height"].$_POST["weight"].$_POST["foot"].$_POST["address"].$_POST["phone"].time().$_POST["sign_date"].$_POST["release_date"];
	$sql = "INSERT INTO player (player_name, birthday, position, school, height, weight, foot, address, phone, post_date, sign_date, release_date, team_class) VALUES ('".$_POST["name"]."', '".$_POST["birthday"]."', '".$_POST["position"]."', '".$_POST["school"]."', '".$_POST["height"]."', '".$_POST["weight"]."', '".$_POST["foot"]."', '".$_POST["address"]."', '".$_POST["phone"]."', '".time()."', '".$_POST["sign_date"]."', '".$_POST["release_date"]."', '".$_POST["team"]."' )";
	// $sql = 'select * from player where team_class = "'.$class.'"';
	$Objquery = mysql_query($sql,$conndb);
    //echo $Objquery;
    //$row = mysql_num_rows($Objquery); // นับจำนวนแถว
$rows = array();
    if($Objquery){
        //$last_id = mysql_insert_id();
       //echo $last_id;
       echo '1';
      
    }
    else{
        echo "0";;
        
    }

?>