<?php
require 'environment.php';
$config = array();
ini_set("display_errors",1);
error_reporting(E_ALL);
ini_set("display_startup_errors",1);

if(ENVIRONMENT == 'development'){

		define('BASE_URL','http://localhost/estacionamento/');
		$config['dbname'] = 'estacionamento';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = ''; 


	}else{
	    
 

	define('BASE_URL','http://luxuryveiculos.ga/');

	$dsn = " ";
    $dbuser = " ";
     $dbpass = ' ';

$dataBase =  new PDO($dsn, $dbuser, $dbpass);
	}

  global $db;

try{
  $db = $dataBase;
  
	
// 	$db = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['host'],$config['dbuser'],$config['dbpass']);



}catch(PDOException $e){

	echo 'FALHOU'.$e->getMessage();
	exit;

}