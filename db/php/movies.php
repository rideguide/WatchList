<?php
	$host = "localhost";
	$un = "root";
	$pw = "";
	$dbname = "movieDb";
	
	$db = new mysqli($host, $un, $pw, $dbname);


	$query = "select m.id_pk as 'Id', m.name, d.name as 'director', m.description, g.name as 'genere', m.img, m.type from movies m left join director d on m.directorId_fk = d.id_pk left join genere g on m.genere_fk = g.id_pk";
	$res = $db->query($query);
	
	$a = array();
	while ($row = $res->fetch_assoc()) 
	{	
		$a[] = $row;
	}
	echo json_encode($a);
?>