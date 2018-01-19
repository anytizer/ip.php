<?php
require_once("../inc.config.php");

$_SERVER["HTTP_AGENT"] = !empty($_SERVER["HTTP_AGENT"])?$_SERVER["HTTP_AGENT"]:"";

$statement = $pdo->prepare("TRUNCATE TABLE `ip_logs`;");
$params = array(
);
$success = $statement->execute($params);
echo $success?"Done":"Failed: ".print_r($pdo->errorInfo(), true);
