# IP.php

Find out your IP Address


## Continuously recording

 * See [cron.job](cron.job) - One database record every 5 minutes.


## Command Line Utilities

	curl ip.example.com
	curl ip.example.com/record/
	curl ip.example.com/latest/
	curl ip.example.com/last/
	curl ip.example.com/clear/


## Permanent Installation

### Recommeneded method

Assuming you own the domain: __example.com__,

 * Create your subdomain: ip.example.com.
 * Upload [public_html/index.php](public_html/index.php) there.
 * If you want php7, upload [index7.php](public_html/index7.php) as __index.php__.
 * Visit http://ip.example.com/

### Alternative Installation

 * Check out this repo on your server
 * Point subdomain to src/public_html path.
 * Rename src/public_html/inc.config-sample.php to inc.config.php
 * Create your [database](database.sql)
 * Edit src/public_html/inc.config.php
 * Visit ip.example.com to test
