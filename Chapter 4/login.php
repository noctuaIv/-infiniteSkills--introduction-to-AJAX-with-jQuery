<?php
include_once 'db.php';

$username = 'u';
$password = 'p';

if(isset($_POST['u'])) {
	$username = $_POST['u'];
}
if(isset($_POST['p'])) {
	$password = $_POST['p'];
}
$stmt = $pdb->prepare("SELECT * FROM users WHERE username = :uname AND password = :pass");
$stmt->execute(array(':uname' => $username, ':pass' => $password));
$users = $stmt->fetch();

$response = "fail";

if($users !== false) {
	$_SESSION['id'] = $users['id'];
	$response = "success";
} else {
	$_SESSION['id'] = "-1";
}

echo $response;
