<?php
$xdebug_disable = "xdebug_disable";
if(function_exists($xdebug_disable))
{
	$xdebug_disable();
}

switch(strtolower($_SERVER["SERVER_NAME"]))
{
	case "ip.example.com":
		$configs = array(
			"hostname" => "localhost",
			"username" => "ip_watch",
			"password" => "532AEDF8-CBA3-9055-B6D7-3AA3B4247B82",
			"database" => "ip_watch",
		);
		break;
	default:
		die("Invalid db configs");
}

$pdo = null;
try
{
	$pdo = new PDO(sprintf("mysql:host=%s;dbname=%s", $configs["hostname"], $configs["database"]), $configs["username"], $configs["password"]);
}
catch(Exception $ex)
{
	echo $ex;
	die("PDO Connection error.");
}

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