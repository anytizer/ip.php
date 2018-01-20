CREATE DATABASE `ip_watch` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE ip_watch;

CREATE TABLE `ip_logs` (
  `log_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `requested_on` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `http_client` VARCHAR(255) NOT NULL,
  `ip_address` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`log_id`)
);

CREATE TABLE `ip_configs` (
  `config_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `config_name` VARCHAR(255) NOT NULL,
  `config_value` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`config_id`)
);
INSERT INTO ip_configs VALUES (NULL, "STATUS", "stopped");
INSERT INTO ip_configs VALUES (NULL, "X_HTTP_HEADER_LAST", "xlast");
INSERT INTO ip_configs VALUES (NULL, "X_HTTP_HEADER-LATEST", "xlatest");

UPDATE ip_configs SET config_value = "stopped" WHERE config_name="status";
UPDATE ip_configs SET config_value = "stopped" WHERE config_name="X_HTTP_HEADER_LAST";
UPDATE ip_configs SET config_value = "stopped" WHERE config_name="X_HTTP_HEADER-LATEST";
