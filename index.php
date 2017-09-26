<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="simplecss.css">

</head>
<body>
<div class="divcss">
<form action="index.php" method="POST" > 
	<h2>Post title</h2> <input type="text" name="postName">
	<h2>Author</h2> <input type="text" name="postAuthor">
	<h2>Text</h2> <input type="text" name="postMsg" style="width:600px; height:175px;" "> <br> <br>
	<input type="submit" name="postButtn" value="pressed"><br><br><br>
</form>

</div>
<?php 

	include_once("data.php");
	foreach ($data as $key => $value) {
		# code...
	
	echo "<div class=divcss>";
	echo "<h2>" . $value["title"] . "</h2>";
	echo "<h3>" . $value["author"] . "</h3>";
	echo "<p>" . $value["message"] . "</p>";
	
	if (empty($value["img"])) {
	} else {
	echo "<img src=" . $value["img"] . "img>";
	}
	
	echo "</div>";
	}

 ?>

 



</body>
</html>