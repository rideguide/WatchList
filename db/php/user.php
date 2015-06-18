<?php
	$host = "localhost";
	$un = "root";
	$pw = "";
	$dbname = "movieDb";
	
	$db = new mysqli($host, $un, $pw, $dbname);

	$username = $_POST['username'];
	$password = hash("sha256",$_POST['password']);
	$query = "select * from user where username = '".$username."' AND password = '".$password."'";
	$res = $db->query($query);


	$a = array();
	if($res->num_rows > 0){
		echo json_encode(array("success"=>true, "id"=>1));
	}else{
		echo json_encode(array("success"=>false, "id"=>null));
	}
?>