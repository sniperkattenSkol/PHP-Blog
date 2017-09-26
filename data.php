<?php



$data = array(
array(
	"author" => "Jens",
	"title" => "Lorem",
	"message" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),
array(
	"author" => "Jens",
	"title" => "Lorem ipsum",
	"message" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),
array(
	"author" => "Jens",
	"title" => "Lorem ipsum dolor",
	"message" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),

array(
	"author" => "Nils",
	"title"	 => "Salt",
	"message" => "En bild på när salt hälls",
	"img" => "https://i.imgur.com/uMYrp9V.gif")

);


 
	
	/*
	echo "<div class=divcss>";
	echo "<h2>" . $_POST['postName'] . "</h2>";
	echo "<h3>" . $_POST['postAuthor'] . "</h3>";
	echo "<p>" . $_POST['postMsg'] . "</p>";
	echo "</div>";
	*/
	


if(isset($_POST["postButtn"])) {	

	$POST = array(
  		  "title" => $_POST['postName'],
 		  "author" => $_POST['postAuthor'],
 		  "message" => $_POST['postMsg']

  );
	array_push($data, $POST);
 }