<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('BD', 'biologia');

	$connect = mysqli_connect(HOST, USER, PASSWORD, BD) or die ("Falha na conexão");

?>