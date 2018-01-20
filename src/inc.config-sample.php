<?php
// purposefully put outside of public_html/

$configs = array();
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
