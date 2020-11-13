<html>
<head>
<?php include "head.php" ?>
</head>
<body>
<?php include "navBar.php" ?>
<?php header("X-XSS-Protection: 0"); ?>
<br>
<img src='santa.jpg' id='santa'>
<br>
<form action="search.php" method="get">
<input type="text" name="search">
<input type="submit" value="Submit">
</form>
	<?php 
		if($_GET["search"]){ //unsanitized paste
			echo "No results for " . $_GET["search"];
		} 

	?> 
</p>
</body>
</html>
