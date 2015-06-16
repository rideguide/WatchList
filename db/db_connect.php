<?php
	$host = "localhost";
	$un = "root";
	$pw = "";
	$dbname = "movieDb";
	
	$db = new mysqli($host, $un, $pw, $dbname);


	$query = "select * from movies";
	// $query_e = "select * from episodes";
	$res = $db->query($query);
	//$ergebnis_e = mysqli_query($db, $query_e);
	
	$a = array();
	while ($row = $res->fetch_assoc()) 
	{	
		$a[] = $row;
		// $type = $row -> type;
		// $count++;
		// if($count > 1)
		// {
		// 	echo ',';
		// 	// if(!$type)
		// 	// {
		// 	// 	$epstring = $row -> episodeI;
		// 	// 	$ep = "{";
		// 	// 	$count_e = 0;
		// 	// 	while ($row_e = mysql_fetch_object($ergebnis_e)) 
		// 	// 	{
		// 	// 		$count_e++;
		// 	// 		if($count_e > 1)
		// 	// 		{
		// 	// 			$ep = $ep.',';
		// 	// 		}
		// 	// 		$ep = $ep.json_encode($row_e);
		// 	// 	}
		// 	// 	$ep = $ep."}";

		// 	// 	str_replace("episodes\" : \" \"", replace, subject)
		// 	// }
			
		// }
		// echo json_encode($row);
	}
	echo json_encode($a);
?>