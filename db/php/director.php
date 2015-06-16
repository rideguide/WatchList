<?php
	$host = "localhost";
	$un = "root";
	$pw = "";
	$dbname = "movieDb";
	
	$db = new mysqli($host, $un, $pw, $dbname);


	$query = "select * from director";
	$res = $db->query($query);
	
	$a = array();
	while ($row = $res->fetch_assoc()) 
	{	
		$a[] = $row;
	}
	echo json_encode($a);
?>