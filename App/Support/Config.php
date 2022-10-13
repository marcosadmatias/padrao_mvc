<?php 
date_default_timezone_set("America/Fortaleza");

// DATABASE
define("CONF_DB_NAME", "mydatabase");
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");	

global $db;
try{
	$db = new PDO(
		"mysql:dbname=".CONF_DB_NAME.";charset=utf8;host=".CONF_DB_HOST, 
		CONF_DB_USER, 
		CONF_DB_PASS
	);
}catch(PDOException $e){
	echo "Erro: ".$e->getMessage();
	exit;
}
// PROJECT URLS
define("BASE_URL", "http://localhost/padrao_mvc/");