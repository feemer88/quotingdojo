<?php 
session_start();
require_once('new_connection.php');
$query = "SELECT * FROM quotes";
$result = fetch_all($query);


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>main</title>
 	<style type="text/css">
		

 	</style>
 </head>
 <body>
 	<h1>Here are the awesome quotes!</h1>
 	<?php 
 		foreach($result as $row)
 		{
 
 		?>

 	<div id="body">
		<form action="process.php" method="POST">
 			<input type="hidden" id="del" name="idquotes" value="<?=$row['idquotes'] ?>">
 			<input type="hidden" name="action" value="delete">
 			<input type="submit" value="delete"> 
 			</form>
 		<p><?= $row['quotes'] ?></p>
 		<p><?= $row['name'] . " " . $row['created_at'] ?></p>
 	</div>

 <?php 
 }
 ?>
 </body>
 </html>