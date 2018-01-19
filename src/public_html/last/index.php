<?php
require_once("../inc.config.php");

$statement = $pdo->prepare("SELECT * FROM ip_logs ORDER BY requested_on DESC LIMIT 10;");
$params = array(
);
$statement->execute($params);

$results = $statement->fetchAll(PDO::FETCH_ASSOC);
print_r($results);
