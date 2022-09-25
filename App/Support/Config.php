<?php 
date_default_timezone_set("America/Fortaleza");

$config = array();

// DATABASE
define("CONF_DB_NAME", "mydatabase");
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");	
$config['options'] = [
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
	PDO::ATTR_CASE => PDO::CASE_NATURAL
];
global $db;
try{
	$db = new PDO(
		"mysql:dbname=".CONF_DB_NAME.";charset=utf8;host=".CONF_DB_HOST, 
		CONF_DB_USER, 
		CONF_DB_PASS,
		[
			$config['options']
		]
	);
}catch(PDOException $e){
	echo "Erro: ".$e->getMessage();
	exit;
}
// PROJECT URLS
define("BASE_URL", "http://localhost/padrao_mvc/");