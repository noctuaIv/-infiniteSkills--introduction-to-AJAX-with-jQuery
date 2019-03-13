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

$xml = '<quotes>';
while($row = $stmt->fetch()) {
	$xml .= '<quote>'
		.'<quotetext>' .$row['quotetext'] .'</quotetext>'
		.'<author>' .$row['author'] .'</author>'
		.'<tags>' .$row['tags'] .'</tags>'
		.'</quote>' ."\n";
}

$xml .= '</quotes>';
echo $xml;