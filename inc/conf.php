<?php
$host = "localhost";
$db_name = "winchester_promo";
$admin = "winchester";
$pass = "clickgames2022";

try{

	$pdo = new PDO("mysql:host=$host;db_name=$db_name", $admin, $pass);

}catch(PDOException $e){
	die(print_r("Erreur bdd:".$e->getMessage()));

}	