<?php
$xdebug_disable = "xdebug_disable";
if(function_exists($xdebug_disable))
{
	$xdebug_disable();
}

if(empty($_SERVER["SERVER_NAME"])) $_SERVER["SERVER_NAME"] = "localhost";
if(!isset($pdo)) $pdo = (function(){
	try
	{
		require_once(dirname(__FILE__)."/../inc.config.php");
		$pdo = new PDO(sprintf("mysql:host=%s;dbname=%s", $configs["hostname"], $configs["database"]), $configs["username"], $configs["password"]);
	}
	catch(Exception $ex)
	{
		//echo $ex;
		die("DB Connection error.");
	}

	return $pdo;	
})();

/**
 * Function to obtain IP Addresses in use
 */
function visitor_ips()
{
	$ip_addresses = array();

	$ip_addresses[] = !empty($_SERVER["REMOTE_ADDR"])?sprintf("%s", $_SERVER["REMOTE_ADDR"]):"";
	$ip_addresses[] = !empty($_SERVER["HTTP_CLIENT_IP"])?sprintf("%s", $_SERVER["HTTP_CLIENT_IP"]):"";
	$ip_addresses[] = !empty($_SERVER["HTTP_X_FORWARDED_FOR"])?sprintf("%s", $_SERVER["HTTP_X_FORWARDED_FOR"]):"";
	$ip_addresses[] = !empty($_SERVER["HTTP_X_CLUSTER_CLIENT_IP"])?sprintf("%s", $_SERVER["HTTP_X_CLUSTER_CLIENT_IP"]):"";
	$ip_addresses[] = !empty($_SERVER["HTTP_FORWARDED_FOR"])?sprintf("%s", $_SERVER["HTTP_FORWARDED_FOR"]):"";

	$ip_addresses = array_filter($ip_addresses);
	$ip_addresses = array_unique($ip_addresses);

	return implode(";", $ip_addresses);
}
