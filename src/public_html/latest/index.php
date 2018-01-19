<?php
require_once("../inc.config.php");

$statement = $pdo->prepare("SELECT * FROM ip_logs ORDER BY requested_on DESC LIMIT 1;");
$params = array(
);
$statement->execute($params);

$result = $statement->fetch(PDO::FETCH_ASSOC);
echo $result["ip_address"];
