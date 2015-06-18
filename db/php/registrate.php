<?php
	$host = "localhost";
	$un = "root";
	$pw = "";
	$dbname = "movieDb";
	
	$db = new mysqli($host, $un, $pw, $dbname);

	$username = $_POST['username'];

	$query = "select * from user where username = '".$username."'";
	$res = $db->query($query);

	if($res->num_rows > 0){
		echo json_encode(array("success"=>false));
	}else{
		echo json_encode(array("success"=>true));
	}

?>