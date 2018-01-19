<?php
require_once("../inc.config.php");

$_SERVER["HTTP_AGENT"] = !empty($_SERVER["HTTP_AGENT"])?$_SERVER["HTTP_AGENT"]:"";

$statement = $pdo->prepare("INSERT INTO ip_logs (requested_on, http_client, ip_address) VALUES(NOW(), :http_client, :ip_address);");
$params = array(
	"http_client" => $_SERVER["HTTP_AGENT"],
	"ip_address" => visitor_ips(),
);
$success = $statement->execute($params);
echo $success?"Done":"Failed: ".print_r($pdo->errorInfo(), true);
