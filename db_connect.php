<?php
	$host= 'localhost';// '182.50.133.90';
	$user= 'ankit';
	$password= 'My_pass@9304026692';

	$db= 'db_coding_solutions';
	$table_coding_solutions= 'coding_solutions';

	$db_not_connect_error= 'Sorry we could not connect. Please try again.';

	if(!@mysql_connect($host, $user, $password) || !@mysql_select_db($db))
	{
		die($db_not_connect_error);
	} 
?>