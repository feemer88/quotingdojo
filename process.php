<?php 
session_start();//session start

require_once('new_connection.php');//require new connection.php

if(isset($_POST['action']) && $_POST['action'] == "register")//if post action(form) is set to action and the value is register(hidden) then run this code 
{
insert_new_user($_POST['name'], $_POST['quote']);//insert new data(name and quote)
}
if(isset($_POST['action']) && $_POST['action'] == "delete")
{
	deleteABC($_POST['idquotes']);

}
function insert_new_user($name, $quotes)
{
	$query = "INSERT INTO quotes (quotes, name, created_at) VALUES ('. $quotes .', '. $name .', NOW())";
	run_mysql_query($query);
}

function deleteABC ($idquotes)
{
	$query = "DELETE FROM quotes WHERE idquotes = ". $idquotes ."";
		return run_mysql_query($query);
		
}

header('Location: main.php');

 ?>



 