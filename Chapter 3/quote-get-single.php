<?php
include_once 'db.php';

$id = -1;

if(isset($_GET['id'])) {
	$id = $_GET['id'];
}

$sql = "SELECT quotetext, author FROM quote ORDER BY RAND() LIMIT 1";

if($id >=0 ) {
	$sql = "SELECT quotetext, author FROM quote WHERE id=" .$id;
}

$stmt = $pdb->query($sql);
if($row = $stmt->fetch()) {
	echo '<p class="font">' .$row['quotetext'] .'</p>';
	echo '<p class="author">' .$row['author'] .'</p>';
	echo '<p class="clear">&nbsp;</p>';
}