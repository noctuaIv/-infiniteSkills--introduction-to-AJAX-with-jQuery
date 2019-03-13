<?php
include_once 'db.php';

$start = 0;
if(isset($_GET['start'])) {
	$start = $_GET['start'];
}

$sql = "SELECT * FROM quote LIMIT :start ,5";

$stmt = $pdb->prepare($sql);
$stmt->bindValue(':start', (int) $start, PDO::PARAM_INT);
$stmt->execute();

$data = array();
while($row = $stmt->fetch()) {
	$data[] = array(
		'quotetext' => $row['quotetext'], 
		'author' => $row['author'],
		'tags' => explode(",", $row['tags'])
		);
	$start++;
}

echo json_encode(array('nextAmt' => $start, 'quotes' => $data));
