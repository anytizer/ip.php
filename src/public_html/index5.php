<?php
// not required
$pdo = false;

require_once("inc.library.php");

$ip_addresses = visitor_ips();

echo $ip_addresses;
