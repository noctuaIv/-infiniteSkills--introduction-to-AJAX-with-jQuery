<?php
include_once 'db.php';

$continue = true;

if(!isset($_SESSION['id']) || (int)$_SESSION['id'] < 0) {
	// $_SESSION['id'] = 1;
	echo 'fail-You are not logged in';
	$continue = false;
}

if($_POST['quotetext'] == "") {
	echo 'fail-Quote cannot be left blank';
	$continue = false;
} else if($_POST['author'] == "") {
	echo 'fail-Author cannot be left blank';
	$continue = false;
}

if($continue) {
	$sql = "INSERT INTO quote (quotetext, author, user_id, tags) VALUES (:quote, :author, :uid, :tags)";

	$stmt = $pdb->prepare($sql);
	$data = array(
		':quote' => $_POST['quotetext'],
		':author' => $_POST['author'],
		':uid' => $_SESSION['id'],
		':tags' => $_POST['tags']
		);

	if($stmt->execute($data) ) {
		echo 'success';
	} else {
		echo 'fail-Invalid info for insert';
	}
}