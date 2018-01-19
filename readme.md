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


## Installation

### Recommeneded method

Assuming you own the domain: __example.com__,

 * Create your subdomain: ip.example.com.
 * Upload [public_html/index.php](public_html/index.php) there.
 * If you want php7, upload [index7.php](public_html/index7.php) as __index.php__.
 * Optionally, upload whole of public_html/ for full features.
   - Create your database using [database.sql](database.sql)
   - Rename src/public_html/inc.config-sample.php to inc.config.php
   - Edit src/public_html/inc.config.php
 * Visit http://ip.example.com/ to test.

### Alternative method

 * Check out this repo on your server
 * Point subdomain __ip.example.com__ to src/public_html path.
 * Configure.
