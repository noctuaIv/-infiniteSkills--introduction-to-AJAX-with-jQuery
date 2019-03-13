<?php
include_once 'db.php';

$start = 0;
if(isset($_GET['start'])) {
	$start = $_GET['start'];
}

$sql = 'SELECT * FROM quote LIMIT :start, 5';

$stmt = $pdb->prepare($sql);
$stmt->bindValue(':start', (int) $start, PDO::PARAM_INT);
$stmt->execute();

$html = '';
while($row = $stmt->fetch()) {
	$html .= '<div class="quote">'
		.'<p class="text">' .$row['quotetext'] .'</p>'
		.'<p class="author">' .$row['author'] .'</p>'
		.'</div>' ."\n";
}

echo $html;