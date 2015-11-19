<?php
	try {
		$handler = new PDO('mysql:host=localhost;dbname=gru_h13_ppu', 'root', '');
		$handler-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOExeption $e) {
		echo $e->getMessage;
		die();
	}
?>