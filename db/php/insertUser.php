<?php
	$host = "localhost";
	$un = "root";
	$pw = "";
	$dbname = "movieDb";
	
	$db = new mysqli($host, $un, $pw, $dbname);

	$username = $_POST['username'];
	$password = hash("sha256",$_POST['password']);

	$query = "insert into user (username, password, status) values ('".$username."', '".$password."', true)";
	$res = $db->query($query);
	echo $query;

	if($res->num_rows > 0){
		echo json_encode(array("success"=>true));
	}else{
		echo json_encode(array("success"=>false));
	}
?>