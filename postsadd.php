<?php

 if(isset($_POST["postButtn"])) {	
	echo "<div class=divcss>";
	echo "<h2>" . $_POST['postName'] . "</h2>";
	echo "<h3>" . $_POST['postAuthor'] . "</h3>";
	echo "<p>" . $_POST['postMsg'] . "</p>";
	echo "</div>";
	 }

	 ?>