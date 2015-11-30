<?php
	try {
		$pdo = new PDO('mysql:host=tsuts.tskoli.is;dbname=1612982129_gru', '1612982129', 'mypassword');
		$pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOExeption $e) {
		echo $e->getMessage;
		die();
	}
?>