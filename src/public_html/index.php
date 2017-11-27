<?php
$ip_addresses = array();

$ip_addresses[] = !empty($_SERVER["REMOTE_ADDR"])?sprintf("%s", $_SERVER["REMOTE_ADDR"]):"";
$ip_addresses[] = !empty($_SERVER["HTTP_CLIENT_IP"])?sprintf("%s", $_SERVER["HTTP_CLIENT_IP"]):"";
$ip_addresses[] = !empty($_SERVER["HTTP_X_FORWARDED_FOR"])?sprintf("%s", $_SERVER["HTTP_X_FORWARDED_FOR"]):"";
$ip_addresses[] = !empty($_SERVER["HTTP_X_CLUSTER_CLIENT_IP"])?sprintf("%s", $_SERVER["HTTP_X_CLUSTER_CLIENT_IP"]):"";
$ip_addresses[] = !empty($_SERVER["HTTP_FORWARDED_FOR"])?sprintf("%s", $_SERVER["HTTP_FORWARDED_FOR"]):"";

$ip_addresses = array_filter($ip_addresses);
$ip_addresses = array_unique($ip_addresses);

echo implode(";", $ip_addresses);
