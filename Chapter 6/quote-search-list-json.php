<?php
include_once 'db.php';

$term = 0;
if(isset($_GET['term'])) {
	$term = $_GET['term'];
}
$term = '%' .$term .'%';

$sql = "SELECT * FROM quote WHERE quotetext LIKE :term OR tags LIKE :term";

$stmt = $pdb->prepare($sql);
$stmt->bindValue(':term', $term, PDO::PARAM_STR);
$stmt->execute();

$data = array();
while($row = $stmt->fetch()) {
	$data[] = array(
		'quotetext' => $row['quotetext'], 
		'author' => $row['author'],
		'tags' => explode(",", $row['tags'])
		);
}

echo json_encode(array('quotes' => $data));
