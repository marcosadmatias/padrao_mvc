<?php 
session_start();

spl_autoload_register(function($class){
	if(file_exists('App/Controllers/'.$class.'.php')){
		require 'App/Controllers/'.$class.'.php';
	} else if(file_exists('App/Models/'.$class.'.php')){
		require 'App/Models/'.$class.'.php';
	} else if(file_exists('App/Core/'.$class.'.php')){
		require 'App/Core/'.$class.'.php';
	} else if(file_exists('Support/'.$class.'.php')){
		require 'App/Support/'.$class.'.php';
	}
});

require 'vendor/autoload.php';
require 'App/Support/Config.php';
require 'App/Support/Helpers.php';
require 'App/Support/Message.php';

$core = new Core();
$core->run();