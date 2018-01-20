<?php
require_once("../inc.library.php");

// Do not serve if status is stopped
$statement = $pdo->prepare("select * from ip_configs WHERE config_name=:config_name;");
$params = array(
    "config_name" => "status",
);
$statement->execute($params);

$config = $statement->fetch(PDO::FETCH_ASSOC);
if($config["config_value"] === "started")
{
    $statement = $pdo->prepare("SELECT * FROM ip_logs ORDER BY requested_on DESC LIMIT 1;");
    $params = array(
    );
    $statement->execute($params);
    
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    echo $result["ip_address"], "\r\n";
}
else
{
    echo "Stopped serving";
}
