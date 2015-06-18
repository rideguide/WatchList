<?php
	$host = "localhost";
	$un = "root";
	$pw = "";
	$dbname = "movieDb";
	
	$db = new mysqli($host, $un, $pw, $dbname);


	$query = "select film_fk from watchlist where user_fk = 1";
	$res = $db->query($query);
	
	$a = array();
	while ($row = $res->fetch_assoc()) 
	{	
		$a[] = $row;
	}
	echo json_encode($a);
?>