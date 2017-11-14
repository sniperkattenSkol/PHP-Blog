<?php

INSERT INTO post (Author, title, message, postdate)
VALUES ($_POST['postAuthor'],$_POST['postName'],$_POST['postMsg'],date_timestamp_get());

$dbh = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root", "");


$sql = "select * from post";

$stmt = $dbh->prepare($sql);
$stmt->execute();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	echo "<pre>" . print_r($row,1) . "</pre>";
	
}
