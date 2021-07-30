<?php
define('HOST','localhost');
define('DBNAME','payroll');
define('USER','root');
define('PASSWORD','');

function db_config()
{
	$dsn = 'mysql:host='.HOST.';dbname='.DBNAME;
	$pdo = new PDO($dsn, USER, PASSWORD);
	$pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
	return $pdo;
}
?>