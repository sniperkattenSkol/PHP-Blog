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
<!-- Form -->
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
//if delete is pressed delete from post(all of it)
if(isset($_POST['Delete'])){
$sql = "DELETE FROM post";
$stmt = $dbh->prepare($sql);
$stmt->execute();
}

//if delete is pressed delete from post where the button is attached to (does not work)
if(isset($_POST['postDelete'])){
$sql = "DELETE FROM post WHERE id={$_POST['deleteID']}";
$stmt = $dbh->prepare($sql);
$stmt->execute();
}

//edit post button
if(isset($_POST['editPost'])){
$sql = "DELETE FROM post";
$stmt = $dbh->prepare($sql);
$stmt->execute();
}

//Post button, inserts data into the database(post).
if(isset($_POST['postButtn'])){
$sql = "INSERT INTO post (author, title, message)VALUES(' "  htmlspecialchars($_POST['postAuthor'], ENT_QUOTES); . "','" . htmlspecialchars($_POST['postName'], ENT_QUOTES)."','".htmlspecialchars($_POST['postMsg'], ENT_QUOTES) ."')";
$stmt = $dbh->prepare($sql);
$stmt->execute();
}
//!!!!
//FICK INTE htmlspecialchars att fungera, (T_STRING) , måste ta bort några "" och '' från koden min
//!!!

//prepares the database for posting
$sql="select * from post";
$stmt = $dbh->prepare($sql);
$stmt->execute();


//Posts every post in the database(post)
foreach ($stmt as $key => $value) {
	//if the post title is empty, deleted
	if (empty($value["title"])) {
		$sql = "DELETE FROM post WHERE post.id = $value[id]";
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
	}else {
		echo "<div class=divcss>";
		echo "<h2>" . $value["title"] . "</h2>";
		echo "<h3>" . $value["Author"] . "</h3>";
		echo "<p>" . $value["message"] . "</p>";
		
		//prints the image if the picture string is not empty
		if (empty($value["picture"])) {
		//nothing
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