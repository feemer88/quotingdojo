<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		#wrapper{
			width: 220px;
		}
		#short_name{
			/*display: block;*/
		}
		#quote_box{
			width: 150px;
			height:100px;
		}

	</style>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h1>Welcome to QuotingDojo</h1>
		</div>
		<div id="body">
			<form action="process.php" method="post">
				Your name: <input type="text" name="name" placeholder="Your Name" id="short_name">
				Your quote: <input type="text" name="quote" placeholder="Say Something" id="quote_box">
				<input type="hidden" name="action" value="register">
				<input type="submit" value="Add my quote!">
				<input type="submit" value="Skip to quotes!">

			</form>
		</div>
	</div>
	
</body>
</html>