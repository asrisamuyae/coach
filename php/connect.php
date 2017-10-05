<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "coach";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{


	$sql = "SELECT * FROM coach";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$data = $result->fetch_assoc();
	    echo json_encode($data);
	    
	} else {
	    echo "0 results";
	}
	//echo $_POST["username"].$_POST["password"];

} 

?>