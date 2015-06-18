<?php
	$host = "localhost";
	$un = "root";
	$pw = "";
	$dbname = "movieDb";
	
	$db = new mysqli($host, $un, $pw, $dbname);

	$userID = $_POST['user'];
	$filmId = $_POST['filmId'];
	$rating = $_POST['rating'];

	$query = "Insert into watchlist (user_fk, film_fk, rating) values (".$userID.", ".$filmId.", ".$rating.")";
	$res = $db->query($query);
	
	echo $query;

	if($res->num_rows > 0){
		echo json_encode(array("success"=>true));
	}else{
		echo json_encode(array("success"=>false));
	}
?>