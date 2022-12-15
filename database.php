<?php 

try {
	$db = new PDO('mysql:host=localhost;dbname=katiakora', 'root', '');
} catch (PDOException $e) {
	echo "Error!: " . $e->getMessage();
	die();
}

?>