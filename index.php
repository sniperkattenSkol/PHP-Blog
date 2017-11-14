<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="simplecss.css">

</head>
<body>
<!-- nav -->
<div class="navbar">
	<a href="#">Home</a>
	<form action="index.php" method="POST">
	<br>
		<input class="buttonStyle" type="submit" name="Delete" value="Delete all posts">
	</form>
</div>
<br><br>
<div class="divcss">
<form action="index.php" method="POST" > 
	<h2>[REQ] Post title</h2> <input type="text" name="postName">
	<h2>Author</h2> <input type="text" name="postAuthor">
	<h2>Image</h2> <input type="text" name="picture">
	<h2>Text</h2> <input type="text" name="postMsg" style="width:600px; height:175px;" "> <br> <br>
	
	<input class="buttonStyle" type="submit" name="postButtn" value="Post"><br><br><br>
</form>
</div>

<?php 
$dbh = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root", "");

if(isset($_POST['Delete'])){
$sql = "DELETE FROM post";
$stmt = $dbh->prepare($sql);
$stmt->execute();
}

if(isset($_POST['postDelete'])){
$sql = "DELETE FROM post WHERE id={$_POST['deleteID']}";
$stmt = $dbh->prepare($sql);
$stmt->execute();
}

if(isset($_POST['editPost'])){
$sql = "DELETE FROM post";
$stmt = $dbh->prepare($sql);
$stmt->execute();
}


if(isset($_POST['postButtn'])){
$sql = "INSERT INTO post (author, title, message)VALUES(' " . $_POST['postAuthor'] . "','" . $_POST['postName']."','".$_POST['postMsg']."')";
$stmt = $dbh->prepare($sql);
$stmt->execute();
}


$sql="select * from post";
$stmt = $dbh->prepare($sql);
$stmt->execute();



	foreach ($stmt as $key => $value) {
		# code...
	if (empty($value["title"])) {
		$sql = "DELETE FROM post WHERE post.id = $value[id]";
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
	}else {
	echo "<div class=divcss>";
	echo "<h2>" . $value["title"] . "</h2>";
	echo "<h3>" . $value["Author"] . "</h3>";
	echo "<p>" . $value["message"] . "</p>";
	
	if (empty($value["picture"])) {
	} else {
	echo "<img src=" . $value["picture"] . "img>";
	}

	echo '<form action="index.php" method="POST">';
	echo '<input class="buttonStyle" type="submit" name="postDelete" value="Delete Post">';
	echo '<input class="buttonStyle" type="submit" name="editPost" value="Edit Post">'; 
	echo '<input type="hidden" name="deleteID" value="id">';		
	echo '</form>';
	
	echo '</div>';
	}
}

 ?>

 



</body>
</html>