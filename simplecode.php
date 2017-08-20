<?php 



function runQuery($query){
	$dbh = new PDO("mysql:host=localhost; dbname=Hng_database", "root", "");
	$resp = $dbh->query($query, PDO::FETCH_ASSOC);
	
	foreach ($resp as $res){
		echo $res['t_name'];
		echo "<span> -> <span>";
		echo $res['h_name'];
		echo "<br>";
	}

}


$query1 = "select t.name as t_name,h.name as h_name from teams t join Hng_interns h on h.team_id=t.id where t.id=1;";
$query2 = "select t.name as t_name,h.name as h_name from teams t join Hng_interns h on h.team_id=t.id where t.id=2;";
$query3 = "select t.name as t_name,h.name as h_name from teams t join Hng_interns h on h.team_id=t.id where t.id=3;";

runQuery($query1);
runQuery($query2);
runQuery($query3);





 ?>
