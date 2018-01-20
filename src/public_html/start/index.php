<?php
require_once("../inc.library.php");

$statement = $pdo->prepare("UPDATE ip_configs SET config_value=:config_value WHERE config_name=:config_name;");
$params = array(
    "config_name" => "status",
    "config_value" => "started",
);

$success = $statement->execute($params);
echo $success?"Done":"Failed: ".print_r($pdo->errorInfo(), true), "\r\n";
