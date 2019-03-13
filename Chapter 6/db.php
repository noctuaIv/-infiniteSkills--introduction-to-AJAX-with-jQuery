<?php
session_start();

$hostname = 'localhost';
$database = 'ajax';
$username = 'root';
$password = '';

try {
	$pdb = new PDO('mysql:host=' .$hostname .';dbname=' .$database, $username, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
}